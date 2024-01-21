<?php

namespace App\Http\Controllers\Incident;

use App\Http\Controllers\Controller;

use App\Models\Incident;
use App\Models\IncidentAssessment;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Barryvdh\DomPDF\Facade\Pdf;
// use Spatie\LaravelPdf\Facades\Pdf;

class IncidentAssessmentController extends Controller
{
    /**
     * Summary of create
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    public function create(Request $request) 
    {
        // Validate the form data
        // $validatedData = $request->validate(
        //     [
        //     'incident_id' => 'required|exists:incidents,id',
        //     'warden_dispatched' => 'required|string',
        //     'narrative' => 'required|string',
        //     'discussion_with_community' => 'required|string',
        //     'monitoring_and_survey' => 'required|string',
        //     'evidence_file' => 'nullable|file',
        //     'ob_number' => 'required|string',
        //     'target_longitude' => 'required|regex:/^[-]?((1[0-7][0-9]|[0-9]{1,2})[.]\d+|180[.][0]+)$/',
        //     'target_latitude' => 'required|regex:/^[-]?([0-8]?[0-9]|[0-9]{1,2})[.]\d+|90[.][0]+$/',

        //     'time_of_incident' => 'required|date_format:H:i',
        //     ]
        // );
        $incident_id = $request->input('incident_id'); 
        $actions_taken = $request->input('actions_taken');
        $ob_number = $request->input('ob_number');
        $time_of_incident = $request->input('time_of_incident');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $evidenceFile = $request->file('evidence_file');
        $ranger_in_charge = $request->input('ranger_in_charge');
        $mode_of_transport = $request->input('mode_of_transport');
        $no_vehicle_used = $request->input('no_vehicle_used');
        $fuel = $request->input('fuel');
        $no_rangers = $request->input('no_rangers');
        $batteries = $request->input('batteries');
        $combo_rations = $request->input('combo_rations');
        $fresh_rations = $request->input('fresh_rations');
        $ammunition = $request->input('ammunition');
        $rounds = $request->input('rounds');

        
        $evidencePath = null;

        if ($request->hasFile('evidence_file')) {
            $evidenceFile = $request->file('evidence_file');
    
            // Specify the desired extension for PDF files
            $extension = $evidenceFile->getClientOriginalExtension();
            $customFilename = 'evidence.' . $extension;
    
            // Use storeAs to set a custom filename
            $evidencePath = $evidenceFile->storeAs('attachments', $customFilename, 'public');
        }
    
        $incident = Incident::where('id', $incident_id)->first(); 
        $assessment = IncidentAssessment::create(
            [
            'incident_id' => $incident_id,
            'warden_dispatched' => $request->warden_dispatched,
            'narrative' => $request->narrative,
            'discussion_with_community' => $request->discussion_with_community,
            'monitoring_and_survey' => $request->monitoring_and_survey,
            'actions_taken' => $actions_taken , // This is a JSON column, so we can pass an array to it
            'evidence_file' => $evidencePath,
            'ob_number' => $ob_number,
            'time_of_incident' => $time_of_incident,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'ranger_in_charge' => $ranger_in_charge,
            'mode_of_transport' => $mode_of_transport,
            'no_vehicle_used' => $no_vehicle_used,
            'fuel' => $fuel,
            'no_rangers' => $no_rangers,
            'batteries' => $batteries,
            'combo_rations' => $combo_rations,
            'fresh_rations' => $fresh_rations,
            'ammunition' => $ammunition,
            'rounds' => $rounds,
            ]
        );
        // dd($assessment);
        $assessment->save();
        return view('compensations.index')->with('success', 'Incident assessment recorded successfully.');

    }
    public function warden(Request $request, $incident_assessment_id) 
    {
        $incidentAssessment = IncidentAssessment::where('id', $incident_assessment_id)->first();
        $incident = $incidentAssessment->incident;
        // dd($incidentAssessment);
        if ($request->has('download')) {
            $pdf = Pdf::loadView('components.warden-report', compact('incident', 'incidentAssessment'));
            
            $filename = 'incident_report_' . $incident_assessment_id . '.pdf';

            // Download the PDF file
            return $pdf->download($filename);
        }
        return view('warden.incident-report', compact('incident', 'incidentAssessment'));

    }

    public function downloadIncidentReport($incident_assessment_id)
    {
        $incidentAssessment = IncidentAssessment::where('id', $incident_assessment_id)->first();
        $incident = $incidentAssessment->incident;

        $pdf = PDF::loadView('components.warden-report', compact('incident', 'incidentAssessment'));
    
        // You can customize the filename if needed
        $filename = 'incident_report_' . $incident_assessment_id . '.pdf';

        // Download the PDF file
        return $pdf->download($filename);
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = IncidentAssessment::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn(
                    'created_at', function ($row) {
                        return Carbon::parse($row->created_at)->format('Y-m-d');
                    }
                )
                ->editColumn(
                    'warden_dispatched', function ($row) {
                        return $row->warden_dispatched;
                    }
                )
                ->editColumn(
                    'narrative', function ($row) {
                        return $row->narrative;
                    }
                )
                ->addColumn(
                    'incident_type', function ($row) {
                        return $row->incident->ob->incidentType->name;
                    }
                )
                ->addColumn(
                    'action', function ($row) {
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Record Assessment</a>';
                        return $btn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        $incident_assessments = IncidentAssessment::all();
        return view('compensations.index', compact('incident_assessments'));
    }
    

    
}
