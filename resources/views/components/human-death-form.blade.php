<form method="post" id="human_death" action="{{ route('human.deaths.store') }}" class="container mx-auto mt-4 p-6 border border-gray-300 rounded-md">
    @csrf
    <h3 class="text-center text-lg font-bold mb-4">PART II: PARTICULARS OF DEATH / INJURY (KWS VERIFYING OFFICER TO FILL)</h3>
    <input type="hidden" name="assessment_id" value="{{ $incident_assessment_id }}">
    <div class="mb-4">
        <label for="place_of_death" class="block text-gray-700 text-sm font-bold mb-2">PLACE OF DEATH/INJURY:</label>
        <input name="place_of_death" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="placeOfDeath" placeholder="Enter place of death or injury">
    </div>

    <div class="mb-4">
        <label for="animalResponsible" class="block text-gray-700 text-sm font-bold mb-2">ANIMAL RESPONSIBLE:</label>
        <input name="animal_responsible" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="animalResponsible" placeholder="Enter the animal responsible">
    </div>

    <div class="mb-4">
        <label for="insideOutsidePA" class="block text-gray-700 text-sm font-bold mb-2">INDICATE IF INSIDE OR OUTSIDE PA:</label>
        <input name="inside_outside_pa" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="insideOutsidePA" placeholder="Enter location relative to PA">
    </div>

    <div class="mb-4">
        <label for="gpsCoordinates" class="block text-gray-700 text-sm font-bold mb-2">(GPS coordinates):</label>
        <input name="gps_coordinates" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="gpsCoordinates" placeholder="Enter GPS coordinates">
    </div>

    <div class="mb-4 grid grid-cols-2 gap-4">
        <div>
            <label for="dateOfIncident" class="block text-gray-700 text-sm font-bold mb-2">DATE:</label>
            <input name="date_of_incident" type="date" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="dateOfIncident">
        </div>
        <div>
            <label for="timeOfIncident" class="block text-gray-700 text-sm font-bold mb-2">TIME (24HRS):</label>
            <input name="time_of_incident" type="time" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="timeOfIncident">
        </div>
    </div>

    <div class="mb-4">
        <label for="circumstances" class="block text-gray-700 text-sm font-bold mb-2">CIRCUMSTANCES OF DEATH/INJURY</label>
        <textarea name="circumstances" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="circumstances" rows="4"></textarea>
    </div>

    <div class="mb-4 grid grid-cols-2 gap-4">
        <div>
        <label for="verifyingOfficer" class="block text-gray-700 text-sm font-bold mb-2">Verified by:</label>
        <input name="verifying_officer" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="verifyingOfficer">
        
    </div>
            <div>
                <label for="estNo" class="block text-gray-700 text-sm font-bold mb-2">EST. No:</label>
                <input name="est_no" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="estNo">
            </div>
        
    </div>

    <div class="mb-4">
        <label for="wardenDetails" class="block text-gray-700 text-sm font-bold mb-2">BRIEF DETAILS OF THE INCIDENT BY KWS COUNTY WARDEN</label>
        <textarea name="warden_details" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="wardenDetails" rows="4"></textarea>
    </div>

    {{-- <div class="mb-4">
        <p class="text-gray-700">I <input type="text" class="shadow appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline inline" style="width:auto;" placeholder="Insert Name"> on this day <input type="date" class="shadow appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline inline" style="width:auto;"> certify that the details recorded above are true.</p>
    </div> --}}

    {{-- <div class="mb-4">
        <label for="finalDesignation" class="block text-gray-700 text-sm font-bold mb-2">DESIGNATION:</label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="finalDesignation">
    </div> --}}
    <div class="mb-4">
        <div class="grid grid-cols-2 gap-4 mt-4">
            <div>
                <label for="finalDesignation" class="block text-gray-700 text-sm font-bold mb-2">DESIGNATION:</label>
                <input name="designation" type="text" id="finalDesignation" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            {{-- <div>
                <label for="signatureFinal" class="block text-gray-700 text-sm font-bold mb-2">SIGNATURE & STAMP:</label>
                <input type="text" id="signatureFinal" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Electronic signature and stamp">
            </div> --}}
        </div>
    </div>
    {{-- <div class="mb-4">
        <label for="signatureStamp" class="block text-gray-700 text-sm font-bold mb-2">SIGNATURE & STAMP:</label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="signatureStamp">
    </div> --}}
    <button type="submit" id="nextBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        SAVE
    </button>
</form>
