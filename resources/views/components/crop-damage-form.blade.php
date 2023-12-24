
<form method="post" action="{{ route('crops.store') }}"  class="container mx-auto mt-4 p-6 border border-gray-300 rounded-md" id="crop_damage" >
    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
        CROP DESTRUCTION (KWS VERYING OFFICER TO FILL)
    </h6>
    @csrf
    <div class="flex flex-wrap">
        <input type="hidden" name="assessment_id" value="{{ $incident_assessment_id }}">
        <!-- Circumstances of Incident -->
        <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="circumstances">
                    CIRCUMSTANCES OF INCIDENT
                </label>
                <textarea id="circumstances" name="circumstances" rows="4"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></textarea>
            </div>
        </div>

        <!-- Crop Name and Animal Responsible -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="crop_name">
                    CROP NAME
                </label>
                <input type="text" id="crop_name" name="crop_name"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="animal_responsible">
                    ANIMAL RESPONSIBLE
                </label>
                <input type="text" id="animal_responsible" name="animal_responsible"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
        </div>

        <!-- Land Ownership Status -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="landOwnershipStatus">
                    LAND OWNERSHIP STATUS
                </label>
                <select id="landOwnershipStatus" name="land_ownership_status"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="private">Private</option>
                    <option value="community">Community</option>
                    <option value="leased">Leased</option>
                </select>
            </div>
        </div>

        <!-- Remaining Fields: Acreage, Growth, Value, Incident Place, and more -->
        <div class="w-full lg:w-6/12 px-4">
            <!-- Note: Similar structure can be followed for all fields. -->

            <!-- For Acreage -->
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="acreage">
                    APPROXIMATE ACREAGE DESTROYED
                </label>
                <input type="text" id="acreage" name="acreage"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>


            <!-- Repeat the above block for the remaining fields like Growth, Value, etc. You can copy the format and replace the label and input name/ID as needed. -->
        </div>
        <!-- Stage of Growth -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="stage">
                    STAGE OF GROWTH
                </label>
                <input type="text" id="stage" name="stage"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
        </div>

        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="value">
                    ESTIMATED VALUE
                </label>
                <input type="number" id="value" name="value" step="0.01"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
        </div>

        <!-- Measures in Place to Protect Crops -->
        <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    MEASURES IN PLACE TO PROTECT CROPS AGAINST DESTRUCTION BY WILDLIFE
                </label>
                <textarea name="measures" rows="5"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></textarea>
            </div>
        </div>

        <!-- Place of Incident -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="place">
                    PLACE OF INCIDENT
                </label>
                <input type="text" id="place" name="place"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
        </div>

        <!-- Indicate if Inside or Outside PA -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="location_status">
                    INDICATE IF INSIDE OR OUTSIDE PA
                </label>
                <select id="location_status" name="location_status"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="inside">Inside</option>
                    <option value="outside">Outside</option>
                </select>
            </div>
        </div>

        <!-- Date and Time -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="date">
                    DATE
                </label>
                <input type="date" id="date" name="date"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="time">
                    TIME (24HRS)
                </label>
                <input type="time" id="time" name="time"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
        </div>
        <!-- Verified By -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="verified_by">
                    VERIFIED BY
                </label>
                <input type="text" id="verified_by" name="verified_by"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
        </div>

        <!-- Est. No. -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="est_no">
                    EST. No.
                </label>
                <input type="text" id="est_no" name="est_no"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
        </div>

        <!-- Designation -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="designation">
                    DESIGNATION
                </label>
                <input type="text" id="designation" name="designation"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            </div>
        </div>

        <!-- Signature (As a text input for now, can be changed to file input for image upload or other methods) -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="signature">
                    SIGNATURE
                </label>
                <input type="text" id="signature" name="signature"
                    placeholder="Full Name for Signature"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                <!-- For image upload: <input type="file" id="signature" name="signature"> -->
            </div>
        </div>

    </div>
<button type="submit" id="nextBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Next
</button>
</form>