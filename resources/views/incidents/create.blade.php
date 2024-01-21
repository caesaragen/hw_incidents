{{-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> --}}
<link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Incident Report for') }} {{ $ob->name_of_affected ?? '' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
          

                <div id="success-message" class="hidden bg-green-200 p-2 mt-2 text-green-700">
                    Incident recorded successfully.
                </div>
                <section class=" py-1 bg-blueGray-50">
                    <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                            <div class="rounded-t bg-white mb-0 px-6 py-6">
                                <div class="text-center flex justify-between">
                                    <h6 class="text-blueGray-700 text-xl font-bold">
                                        Record an Incident
                                    </h6>
                                    <div class="flex px-2">
                                        <button
                                        class="bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                        type="button"onClick="goBack()">
                                        <i class="fas fa-arrow-alt-circle-left"></i>
                                        Back
                                    </button>
                                    <button
                                    class="bg-green-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                    type="button"
                                    onclick="goToCreateIncident()">
                                    View Incidents
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-white">
                                <form method="post" action="{{ route('incidents.store') }}" class="p-6"id="incident-form">
                                    @csrf
                                    <input type="hidden" name="ob_number" value="{{ $obNumber }}">
                                    <hr class="mt-6 border-b-1 border-blueGray-300">

                                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        Incident Information
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-12/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Name of Affected
                                            </label>
                                            <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            name="name_of_affected" value="{{ $ob->name_of_affected ?? '' }}" disabled>
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Incident Number
                                            </label>
                                            <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            name="ob_number" value="{{ $obNumber ?? '' }}" disabled>
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Date of Incident
                                            </label>
                                            <input type="date"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                               name="date_of_incident" >
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlfor="grid-password">
                                                   Animal Responsible
                                                </label>
                                                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="incident_type" name="compensation_animal_id">
                                                    <option value="">{{ __('Select Animal') }}</option>
                                                    @foreach ($compensation_animals as $compensation_animals)
                                                        <option value="{{ $compensation_animals->id }}">{{ $compensation_animals->name }}</option> @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                     <button type="submit"id="ad"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        <i class="fas fa-plus"></i>
                                        Add Incident
                                    </button> 
{{-- <div id="incident-forms"></div> 

<hr class="mt-6 border-b-1 border-blueGray-300">

</form>
</div>
</div>

</div>
</section>
{{-- </div> --}}
</div>
</div>
</x-app-layout>
<script>
    $(document).ready(function() {
        $('#incident-form').submit(function(event) {
            event.preventDefault();
            var form = $(this);
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function(response) {
                    $('#success-message').removeClass('hidden');
                    form.trigger("reset");
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
    });

    function goBack() {
        window.history.back(); // This will navigate back to the previous page in the browser's history
    }

    function goToCreateIncident() {
        window.location.href = "{{ route('incidents.index') }}";
    }
</script>
