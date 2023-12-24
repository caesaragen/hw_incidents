<?php

namespace App\Http\Controllers\Incident;

use App\Http\Controllers\Controller;
use App\Models\CompensationAnimal;
use App\Models\IncidentType;
use App\Models\Incident;
use App\Models\Ob;
use Illuminate\Http\Request;
use Auth;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;


class IncidentsController extends Controller
{
    /**
     * Summary of dashboard
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function dashboard(Request $request) 
    {
        $incident_types = IncidentType::all();
        $user_id = Auth::user()->id;
        $obs = Ob::where('user_id', $user_id)->get();
        if ($request->ajax()) {
            $data = Ob::select('*')->where('user_id', $user_id);
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn(
                    'created_at', function ($row) {
                        return Carbon::parse($row->created_at)->format('Y-m-d');
                    }
                )
                ->addColumn(
                    'incident_type_name', function ($row) {
                        return $row->incidentType->name; // Assuming 'incidentType' is the relationship name and 'name' is the column for the incident type name
                    }
                )
                ->addColumn(
                    'action', function ($row) {
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Record Incident</a>';
                        return $btn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dashboard', compact('incident_types'));
    }

    /**
     * Summary of index
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function show(Request $request) 
    {
        $incident_types = IncidentType::all();
        $incidents = Incident::all();
        if ($request->ajax()) {
            $data = Incident::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn(
                    'created_at', function ($row) {
                        return Carbon::parse($row->created_at)->format('Y-m-d');
                    }
                )
                ->editColumn(
                    'date_of_incident', function ($row) {
                        return Carbon::parse($row->date_of_incident)->format('Y-m-d');
                    }
                )
                ->addColumn(
                    'ob_number', function ($row) {
                        return $row->ob->ob_number;
                    }
                )
                ->addColumn(
                    'incident_type_name', function ($row) {
                        return $row->ob->incidentType->name;
                    }
                )
                ->addColumn(
                    'compensation_animal_name', function ($row) {
                        return $row->compensationAnimal->name;
                    }
                )
                ->addColumn( 
                    'reported_by', function ($row) {
                        return $row->ob->reporting_name;
                    }
                )
                ->addColumn(
                    'action', function ($row) {
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Record Incident</a>';
                        return $btn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('incidents.index', compact('incidents'));
    }

    /**
     * Summary of create
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Request $request) : \Illuminate\Contracts\View\View
    {
        $incident_types = IncidentType::all();
        $compensation_animals = CompensationAnimal::all();
        $obNumber = $request->query('ob'); // Retrieve the 'ob' query parameter
        $ob = Ob::where('ob_number', $obNumber)->first(); // Assuming 'ob_number' is the field in your OB model
        
        return view('incidents.create', compact('incident_types', 'obNumber', 'ob', 'compensation_animals'));
    }

    /**
     * Summary of store
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) : \Illuminate\Http\RedirectResponse
    {
        $request->validate(
            [
                'compensation_animal_id' => 'required',
                'date_of_incident' => 'required',
            ]
        );
        $obNumber = $request->input('ob_number');
        $ob = Ob::where('ob_number', $obNumber)->first();
        $incident = Incident::create(
            [
                'name_of_affected' => $ob->name_of_affected,
                'compensation_animal_id' => $request->input('compensation_animal_id'),
                'date_of_incident' => $request->input('date_of_incident'),
                'compensationable' => 'yes', // Assuming this is the default value
                'ob_id' => $ob->id,
            ]
        );
        $incident->save();
        return redirect()->back()->with('success', 'Incident recorded successfully.');
    }

    /**
     * Summary of incidentAssessment
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function incidentAssessment(Request $request) : \Illuminate\Contracts\View\View
    {
        $incident_types = IncidentType::all();
        $compensation_animals = CompensationAnimal::all();
        $incident_id = $request->query('incident_id'); // Retrieve the 'ob' query parameter
        $incident = Incident::where('id', $incident_id)->first(); // Assuming 'ob_number' is the field in your OB model
        // dd($incident);
        return view('incidents.incident-report', compact('incident_types', 'incident_id', 'incident', 'compensation_animals'));
    }
    
    
}
