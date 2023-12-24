<form method="post" action="{{ route('claimants.store') }}" class="container mx-auto mt-4 p-6 border border-gray-300 rounded-md"id="claimants" onsubmit="handleFormSubmit(event, 'claimants')">
    @csrf
    <input type="hidden" name="assessment_id" value="{{ $incident_assessment_id }}">
    <div class="flex flex-wrap">
        <!-- Full Name -->
        <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
                @if ($incident_type == 'CROP DAMAGE')
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Name of Affected 
                </label>
                @elseif ($incident_type == 'HUMAN DEATH')
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Name of Victim 
                </label>
              @endif
 
                <input type="text" name="name" placeholder="Name" required
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
            </div>
        </div>
        <!-- ID/Passport No -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    ID/Passport No
                </label>
                <input type="number" name="id_passport_no" placeholder="ID/Passport No"
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
            </div>
        </div>

        <!-- Address Post Code -->
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Address 
                </label>
                <input type="text" name="address" placeholder="Address"
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    Post Code
                </label>
                <input type="text" name="post_code" placeholder="Post Code"
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    County
                </label>
                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="county" name="county">
                    <option value="" >{{__('Select County')}}</option>
                    @foreach ($counties as $county)
                        <option value="{{ $county->id }}">{{ $county->name }}</option>
                    @endforeach
                </select>
                {{-- <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                    County
                </label>
                <input type="text" name="county" placeholder="County"
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2"> --}}
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                   Sub County
                </label>
                <input type="text" name="sub_county" placeholder="Sub County"
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                   Location
                </label>
                <input type="text" name="location" placeholder="Location"
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                  Sub Location
                </label>
                <input type="text" name="sub_location" placeholder="Sub Location"
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                  Constituency
                </label>
                <input type="text" name="constituency" placeholder="Constituency"
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                  Phone
                </label>
                <input type="tel" name="tel_no" placeholder="phone"
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                  E-mail
                </label>
                <input type="email" name="email" placeholder="email"
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                  Age
                </label>
                <input type="number" name="age" placeholder="Age"
                       class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mb-2">
            </div>
        </div>

        <div class="w-full lg:w-3/12 px-4">
            <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="">
                Sex
            </label>
            <div class="grid grid-cols-2 gap-4">
       
                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                    <input type="radio" id="male" name="sex" value="male">
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="male">
                        Male
                    </label>
                </div>
                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                    <input type="radio" id="female" name="sex" value="female">
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="female">
                       Female
                    </label>
                </div>

            </div>
        </div>
    </div>
    <button type="submit" id="nextBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Next
    </button>
</form>