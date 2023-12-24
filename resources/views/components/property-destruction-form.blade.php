<form method="POST" id="property_destruction" action="{{ route('properties.store') }}"  class="container mx-auto mt-4 p-6 border border-gray-300 rounded-md">
    @csrf
    <h3 class="text-center text-lg font-bold mb-4">PART II: PROPERTY AFFECTED (KWS VERIFYING OFFICER TO FILL)</h3>
    <input type="hidden" name="assessment_id" value="{{ $incident_assessment_id }}">
    <!-- 1. CIRCUMSTANCES OF INCIDENT -->
    <div class="mb-4">
        <label for="circumstances" class="block text-gray-700 text-sm font-bold mb-2">CIRCUMSTANCES OF INCIDENT:</label>
        <textarea name="circumstances" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" rows="4"></textarea>
    </div>

    <!-- 2. NO. OF PROPERTY AFFECTED -->
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">NO. OF PROPERTY AFFECTED:</label>
        
        <!-- Sub-options for properties -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="no_of_adult" class="block text-gray-700 text-sm">a) NO OF ADULT:</label>
                <input type="number" name="no_of_adult" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div>
                <label for="estimated_value" class="block text-gray-700 text-sm">ESTIMATED VALUE:</label>
                <input type="number" name="estimated_value" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <!-- ... Continue with b, c, d, e in a similar manner ... -->
        </div>
    </div>

    <!-- 3. ANIMAL RESPONSIBLE -->
    <div class="mb-4">
        <label for="animal_responsible" class="block text-gray-700 text-sm font-bold mb-2">ANIMAL RESPONSIBLE:</label>
        <input type="text" name="animal_responsible" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- 4. TOTAL ESTIMATED VALUE -->
    <div class="mb-4">
        <label for="total_estimated_value" class="block text-gray-700 text-sm font-bold mb-2">TOTAL ESTIMATED VALUE:</label>
        <input type="number" name="total_estimated_value" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- 5. MEASURES IN PLACE TO PROTECT CROPS AGAINST DESTRUCTION BY WILDLIFE -->
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">MEASURES IN PLACE TO PROTECT CROPS AGAINST DESTRUCTION BY WILDLIFE:</label>
        <p class="mb-1 text-gray-700 text-sm">(Officer to observe and ask the claimant)</p>
        <!-- a to e inputs go here in a similar manner as above -->
    </div>

    <!-- 6. PLACE OF INCIDENT -->
    <div class="mb-4">
        <label for="place_of_incident" class="block text-gray-700 text-sm font-bold mb-2">PLACE OF INCIDENT:</label>
        <input type="text" name="place_of_incident" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- ... Continue with the rest of the form ... -->

    <!-- Ministry of Tourism and Wildlife Image -->
    {{-- <div class="my-6 text-center">
        <img src="/path/to/kenya-logo.png" alt="Ministry of Tourism and Wildlife Logo" class="mx-auto">
    </div> --}}

    <!-- 8. DATE & TIME -->
    <div class="mb-4 grid grid-cols-2 gap-4">
        <div>
            <label for="date_of_incident" class="block text-gray-700 text-sm font-bold mb-2">DATE:</label>
            <input type="date" name="date_of_incident" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div>
            <label for="time_of_incident" class="block text-gray-700 text-sm font-bold mb-2">TIME (24HRS):</label>
            <input type="time" name="time_of_incident" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
        </div>
    </div>

    <!-- Officer's Verification -->
    {{-- <div class="mb-4">
        <label for="verified_by_name" class="block text-gray-700 text-sm font-bold mb-2">Verified by: NAME:</label>
        <input type="text" name="verified_by_name" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
    </div> --}}

    <!-- 7. INDICATE IF INSIDE OR OUTSIDE PA -->
<div class="mb-4">
    <label for="insideOrOutsidePA" class="block text-gray-700 text-sm font-bold mb-2">INDICATE IF INSIDE OR OUTSIDE PA:</label>
    <input type="text" name="insideOrOutsidePA" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
</div>

<!-- Officer's Verification -->
<div class="mb-4 grid grid-cols-2 gap-4">
    <div>
        <label for="verified_by_name" class="block text-gray-700 text-sm font-bold mb-2">Verified by: NAME:</label>
        <input type="text" name="verified_by_name" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <div>
        <label for="est_no" class="block text-gray-700 text-sm font-bold mb-2">EST. NO:</label>
        <input type="text" name="est_no" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
    </div>
</div>



<!-- Brief Details of the Incident by KWS County Warden -->
<div class="mb-4">
    <label for="details_of_incident" class="block text-gray-700 text-sm font-bold mb-2">BRIEF DETAILS OF THE INCIDENT BY KWS COUNTY WARDEN:</label>
    <textarea name="details_of_incident" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" rows="4"></textarea>
</div>

<!-- Final Assertion and Details -->
<div class="mb-4">
    {{-- <p class="text-gray-700 mb-2">I <input type="text" id="insertName" class="border-b border-gray-500 focus:outline-none" placeholder="Insert Name"> acknowledge on this day <input type="date" name="date_verified" class="border-b border-gray-500 focus:outline-none"> certify that the details recorded above are true.</p> --}}
    <div class="grid grid-cols-2 gap-4 mt-4">
        <div>
            <label for="designation" class="block text-gray-700 text-sm font-bold mb-2">DESIGNATION:</label>
            <input type="text" name="designation" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        {{-- <div>
            <label for="signatureFinal" class="block text-gray-700 text-sm font-bold mb-2">SIGNATURE & STAMP:</label>
            <input type="text" id="signatureFinal" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Electronic signature and stamp">
        </div> --}}
    </div>
</div>

<button type="submit" id="nextBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    SAVE
</button>

</form>
