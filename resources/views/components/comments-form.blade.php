
<form method="post" action="{{ route('comments.store') }}" class="container mx-auto mt-4 p-6 border border-gray-300 rounded-md" id="comments" onsubmit="handleFormSubmit(event, 'comments')">
    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
        B. COMMENTS BY CHIEF
    </h6>
    @csrf
<div class="flex flex-wrap">
    <input type="hidden" name="assessment_id" value="{{ $incident_assessment_id }}">
    <div class="w-full lg:w-12/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                htmlfor="grid-password">
                Comments
            </label>
            <textarea type="text"
                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                rows="4" name="chief_comments"> </textarea>
        </div>
    </div>
    <div class="w-full lg:w-12/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                Name of Chief 
            </label>
            <input type="text" name="chief_name" placeholder="Name" required
                   class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
        </div>
    </div>
    <!-- ID/Passport No -->
    <div class="w-full lg:w-6/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                Phone
            </label>
            <input type="text" name="chief_phone" placeholder="Phone No"
                   class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
        </div>
    </div>
</div>
<button type="submit" id="nextBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Next
</button>
</form>