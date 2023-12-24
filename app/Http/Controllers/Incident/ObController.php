<?php

namespace App\Http\Controllers\Incident;

use App\Http\Controllers\Controller;
use App\Http\Requests\ObRequest;
use Auth;
use Illuminate\Http\Request;

use App\Models\Ob;

/**
 * ObController
 * -----------------------
 * Controller to handle the Obs resource.
 * -----------------------
 *
 * @since   1.0.0
 * @version 1.0.0
 */
class ObController extends Controller
{
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
    public function index() : \Illuminate\View\View
    {
        $obs = Ob::all();
        return view('obs.index', compact('obs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : \Illuminate\View\View
    {
        return view('obs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ObRequest $request) : \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validated();
        // dd($request->all());
        $ob_number = $request->input('ob_number');
        $reporting_name = $request->input('reporting_name');
        $id_number = $request->input('id_number');
        $incident_type = $request->input('incident_type');
        $name_of_affected = $request->input('name_of_affected');
        $narrative = $request->input('narrative');
        $date_of_incident = $request->input('date_of_incident');
        $user_id = Auth::user()->id;
        $ob = Ob::create(
            [
            'ob_number' => $ob_number,
            'reporting_name' => $reporting_name,
            'id_number' => $id_number,
            'incident_type' => $incident_type,
            'name_of_affected' => $name_of_affected,
            'narrative' => $narrative,
            'user_id' => $user_id,
            'date_of_incident' => $date_of_incident,
            ]
        );

        // dd($ob);

        $ob->save();

        return redirect()->route('dashboard')
            ->with('success', 'Incident created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ob $ob
     * @return \Illuminate\Http\Response
     */
    public function show(Ob $ob) : \Illuminate\View\View
    {
        return view('obs.show', compact('ob'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ob $ob
     * @return \Illuminate\Http\Response
     */
    public function edit(Ob $ob) : \Illuminate\View\View
    {
        return view('obs.edit', compact('ob'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Ob           $ob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ob $ob) : \Illuminate\Http\RedirectResponse
    {
        $request->validate(
            [
            'ob_number' => 'required|string|max:25',
            'reporting_name' => 'nullable|string|max:25',
            'id_number' => 'nullable|string|max:25',
            'incident_type' => 'required|exists:incident_types,id',
            'name_of_affected' => 'required|string|max:25',
            'narrative' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
            ]
        );

        $ob->update($request->all());

        return redirect()->route('obs.index')
            ->with('success', 'Observation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ob $ob
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ob $ob) : \Illuminate\Http\RedirectResponse
    {
        $ob->delete();

        return redirect()->route('obs.index')
            ->with('success', 'Observation deleted successfully.');
    }
}
