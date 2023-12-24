<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('COMPENSATION CLAIM FORM ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                 
                    <div class="form-step" id="step1">

                        {{-- Claimant Form  --}}
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Part I: Claimants Details
                        </h6>
                        @include('components.claimant-form')
                            {{-- Next of Kin Form  --}}

                            {{-- <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                A.DETAILS FOR NEXT OF KIN
                            </h6> --}}
                          @include('components.kin-form')
                            {{-- Chief Form  --}}
                            {{-- <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                B. COMMENTS BY CHIEF
                            </h6> --}}
                           @include('components.comments-form')

                            @if ($incident_type == 'CROP DAMAGE')
                              @include('components.crop-damage-form')
                              @elseif ($incident_type == 'HUMAN DEATH' || $incident_type == 'HUMAN THREAT')
                              @include('components.human-death-form')
                              @elseif ($incident_type == 'PROPERTY DAMAGE' || $incident_type == 'PREDATION')
                              @include('components.property-destruction-form')
                            @endif
                           
                    </div>
                    {{-- @if ($incident_type == 'HUMAN DEATH')
                      @include('components.human-death-form')
                    @endif
                    @if ($incident_type == 'PROPERTY DAMAGE')
                    @include('components.property-destruction-form')
                  @endif --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
let currentForm = 0;
const forms = ['claimants', 'kin', 'comments'];
let cropDamageForm = document.getElementById('crop_damage');
let humanDeathForm = document.getElementById('human_death');
let propertyDestructionForm = document.getElementById('property_destruction');
if (cropDamageForm){
  cropDamageForm.style.display = 'none';
}
if (humanDeathForm){
  humanDeathForm.style.display = 'none';
}
if (propertyDestructionForm){
  propertyDestructionForm.style.display = 'none';
}


// Initialize forms: hide all except the first one
forms.forEach((formId, index) => {
  if (index !== 0) {
    document.getElementById(formId).style.display = 'none';
  }
});

// Event-driven Function to handle form submission
function handleFormSubmit(event, formId) {
  event.preventDefault();

  // Gather form data
  const formData = new FormData(document.getElementById(formId));

  // Optional: Add any additional data programmatically here
  // formData.append('extraData', 'extraValue');

  // Fetch API for AJAX
  fetch(`/${formId}/store`, {  // Replace with your server-side route
    method: 'POST',
    headers: {
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
    body: formData
  })
  .then(response => response.json())  // Assuming server responds with json
  .then(data => {
    // Handle server response here
    // For instance, you can check if 'data.success' exists and is true
    console.log('Server Response:', data);  
    // Hide current form and show next form
    document.getElementById(forms[currentForm]).style.display = 'none';
    currentForm++;
    if (currentForm < forms.length) {
      document.getElementById(forms[currentForm]).style.display = 'block';
    }
    if (data.success && currentForm == 3 && cropDamageForm) {
      cropDamageForm.style.display = 'block';
        // location.reload(); // Or navigate to another URL
    } 
    if (data.success && currentForm == 3 && humanDeathForm) {
      humanDeathForm.style.display = 'block';
        // location.reload(); // Or navigate to another URL
    }
    if (data.success && currentForm == 3 && propertyDestructionForm) {
      propertyDestructionForm.style.display = 'block';
        // location.reload(); // Or navigate to another URL
    }
  })
  .catch((error) => {
    console.error('Error:', error);
  });
}


</script>
