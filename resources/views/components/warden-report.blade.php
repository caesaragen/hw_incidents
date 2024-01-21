<style>
    .section {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .main-div {
        /* padding-left: 1rem;
        padding-right: 1rem; */
        margin-top: 1.5rem;
        width: 100%;



        @media (min-width: 1024px) {
            width: 66.666667%;
        }
    }

    .inner-div {
        display: flex;
        position: relative;
        margin-bottom: 1.5rem;
        flex-direction: column;
        border-radius: 0.5rem;
        border-width: 0;
        /* width: 100%; */
        min-width: 0;
        overflow-wrap: break-word;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .inner-div2 {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        margin-bottom: 0;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        background-color: #ffffff;
    }

    .header-div {
        display: flex;
        justify-content: space-between;
        text-align: center;

    }

    .heading {
        font-size: 1.25rem;
        line-height: 1.75rem;
        font-weight: 700;
    }

    .div-wrapper {
        padding-left: 1rem;
        padding-right: 1rem;
        /* width: 100%; */

        @media (min-width: 1024px) {
            width: 50%;
        }
    }

    .div-wrapper-inner {
        position: relative;
        margin-bottom: 0.75rem;
        /* width: 50%; */
    }

    .label {
        display: block;
        margin-bottom: 0.5rem;
        font-size: 0.75rem;
        line-height: 1rem;
        font-weight: 700;
        text-transform: uppercase;
    }

    .input {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        border: 1px solid #E2E8F0;
        border-radius: 0.375rem;
        /* width: 100%; */
        padding: 0.5rem 1rem;
        color: #4A5568;
        line-height: 1.5;
        outline: none;
        /* padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        border-radius: 0.25rem;
        border-width: 0;
        width: 50%;
        font-size: 0.875rem;
        line-height: 1.25rem;
        background-color: #ffffff;
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 300ms;
        transition-duration: 150ms;
        transition-timing-function: linear;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06); */
    }

    .h6 {
        margin-top: 0.75rem;
        margin-bottom: 1.5rem;
        font-size: 0.875rem;
        line-height: 1.25rem;
        font-weight: 700;
        text-transform: uppercase;
    }

    .h6-div {
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
        padding-top: 0;
        flex: 1 1 auto;
        background-color: #ffffff;



        @media (min-width: 1024px) {
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }
    }

    .flex-wrapper {
        display: flex;
        flex-wrap: wrap;
    }

    .hr {
        margin-top: 1.5rem;
    }

    .div-outer {
        padding-left: 1rem;
        padding-right: 1rem;
        width: 100%;



        @media (min-width: 1024px) {}
    }

    .actions {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1rem;
    }

    .float-left {
        float: left;
    }

    .float-right {
        float: right;
    }
</style>
<div class="section">
    <div class="main-div">
        <div
            class="inner-div">
            <div class="inner-div2">
                <div class="header-div">
                    <h6 class="heading">
                        Incident Report
                    </h6>
                </div>
            </div>
            <div class="h6-div">
                    <h6 class="h6">
                        Warden Information
                    </h6>
                    <div class="flex-wrapper ">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Warden Dispatched
                                </label>
                                <input type="text"
                                    disabled
                                    class="input"
                                    value="{{ $incidentAssessment->warden_dispatched }}">
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Name of Affected
                                </label>
                                <input type="text"
                                class="input"
                                value="{{ $incident->name_of_affected }}"
                                name="name_of_affected"
                                disabled>
                         
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Animal Responsible
                                </label>
                                <input type="text"
                                    class="input"
                                    value={{ $incident->compensationAnimal->name }} disabled>
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Date of Incident
                                </label>
                                <input type="text"
                                    class="input"
                                    value={{ $incident->date_of_incident }} disabled>
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Time of Incident
                                </label>
                                <input type="text"
                                    disabled
                                    name="time_of_incident"
                                    class="input"
                                    value="{{ $incidentAssessment->time_of_incident }}"
                                    >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Ranger in Charge
                                </label>
                                <input type="text"
                                    disabled
                                    name="time_of_incident"
                                    class="input"
                                    value="{{ $incidentAssessment->ranger_in_charge }}"
                                    >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Mode of Transport
                                </label>
                                <input type="text"
                                    disabled
                                    name="time_of_incident"
                                    class="input"
                                    value="{{ $incidentAssessment->mode_of_transport }}"
                                    >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Number of Vehicles Used
                                </label>
                                <input type="text"
                                    disabled
                                    name="time_of_incident"
                                    class="input"
                                    value="{{ $incidentAssessment->no_vehicle_used }}"
                                    >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                   Fuel
                                </label>
                                <input type="text"
                                    disabled
                                    name="time_of_incident"
                                    class="input"
                                    value="{{ $incidentAssessment->fuel }}"
                                    >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                   Number of Rangers
                                </label>
                                <input type="text"
                                    disabled
                                    name="time_of_incident"
                                    class="input"
                                    value="{{ $incidentAssessment->no_rangers }}"
                                    >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                   Batteries
                                </label>
                                <input type="text"
                                    disabled
                                    name="time_of_incident"
                                    class="input"
                                    value="{{ $incidentAssessment->batteries }}"
                                    >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                   Combo Rations
                                </label>
                                <input type="text"
                                    disabled
                                    name="time_of_incident"
                                    class="input"
                                    value="{{ $incidentAssessment->combo_rations }}"
                                    >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                   Fresh Rations
                                </label>
                                <input type="text"
                                    disabled
                                    name="time_of_incident"
                                    class="input"
                                    value="{{ $incidentAssessment->fresh_rations }}"
                                    >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                   Ammunition
                                </label>
                                <input type="text"
                                    disabled
                                    name="time_of_incident"
                                    class="input"
                                    value="{{ $incidentAssessment->ammunition }}"
                                    >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                   Rounds of Ammunition Used
                                </label>
                                <input type="text"
                                    disabled
                                    name="time_of_incident"
                                    class="input"
                                    value="{{ $incidentAssessment->rounds }}"
                                    >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                   GPS Coordinates (Latitude)
                                </label>
                                <input type="text"
                                    disabled
                                    name="latitude"
                                    class="input"
                                    value={{ $incidentAssessment->latitude }}  >
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-wrapper ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    GPS Coordinates (Longitude)
                                </label>
                                <input type="text"
                                    disabled
                                    name="longitude"
                                    class="input"
                                    value={{ $incidentAssessment->longitude }}  >
                            </div>
                        </div>
                    </div>

                    <hr class="hr">

                    <h6 class="h6">
                        Warden's Report
                    </h6>
                    <div class="flex-wrapper ">
                        <div class="div-outer ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Narrative
                                </label>
                                <textarea type="text"
                                    disabled
                                    class="input"
                                    rows="4">{{ $incidentAssessment->narrative }}  </textarea>
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="div-outer ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Discussion with Community
                                </label>
                                <textarea type="text"
                                    disabled
                                    class="input"
                                    rows="4" value={{ $incidentAssessment->discussion_with_community }} >{{ $incidentAssessment->discussion_with_community }} </textarea>
                            </div>
                        </div>


                    </div>
                    <h6 class="h6">
                        Actions Taken
                    </h6>
                    <div class="actions">
                        <!-- Checkbox 1 -->

                        @if($incidentAssessment->actions_taken)
                        <ul>
                            @foreach($incidentAssessment->actions_taken as $action)
                                <li>{{ $action }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No actions taken recorded.</p>
                    @endif
                    
       
                    </div>
                    <hr class="hr">

                    <h6 class="h6">
                        Monitoring and survey of the area
                    </h6>
                    <div class="flex-wrapper ">
                        <div class="div-outer ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Monitoring and survey
                                </label>
                                <textarea type="text"
                                    disabled
                                    class="input"
                                    rows="4" value={{ $incidentAssessment->monitoring_and_survey }} >{{ $incidentAssessment->monitoring_and_survey }} </textarea>
                            </div>
                        </div>
                    </div>
                    <hr class="hr">

                    <h6 class="h6">
                        Evidence
                    </h6>
                    <div class="flex-wrapper ">
                        <div class="div-outer ">
                            <div class="div-wrapper-inner ">
                                <label class="label"
                                    htmlfor="grid-password">
                                    Evidence
                                </label>
                                {{-- @foreach ($incidentAssessment as $attachment) --}}
                                <li style="margin-bottom: 0.5rem;">
                                    <a href="{{ asset('storage/' . $incidentAssessment->evidence_file) }}" target="_blank"
                                        style="color: inherit; text-decoration: none;">
                                        {{ $incidentAssessment->evidence_file }}
                                    </a>
                                </li>
                            {{-- @endforeach --}}
                            </div>
                        </div>
                    </div>
                    <div class="div-wrapper ">
                        <div class="div-wrapper-inner ">
                            <label class="label"
                                htmlfor="grid-password">
                                OB Number 
                            </label>
                            <input type="text"
                                disabled
                                name="ob_number"
                                class="input"
                                value={{ $incidentAssessment->ob_number }} >
                        </div>
                    </div>
                 
            </div>
        </div>
    </div>
</div>