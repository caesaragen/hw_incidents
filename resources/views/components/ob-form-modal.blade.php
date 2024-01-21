<x-modal name="ob-form-modal" :show="$errors->isNotEmpty()" focusable>
    <form method="post" action="{{ route('obs.store') }}" class="p-6">
        @csrf
        <div class="flex flex-col">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white">
                {{ __('Fill the fields below to record an Incident') }}
            </h2>
            <div class="flex flex-wrap -mx-3 mb-6 gap-2 justify-between">
            <div class="mb-6 mx-2">
                <x-input-label for="ob_number" class="mb-2">{{ __('Incident Number') }}</x-input-label>
                <x-text-input id="ob_number" name="ob_number" type="text" placeholder="Incident Number" />
                <x-input-error :messages="$errors->get('ob_number')" class="mt-2" />
            </div>
    
            <div class="mb-6">
                <x-input-label for="reporting_name" class="mb-2">{{ __('Reporting Name') }}</x-input-label>
                <x-text-input id="reporting_name" name="reporting_name" type="text" placeholder="Reporting Name" />
                <x-input-error :messages="$errors->get('reporting_name')" class="mt-2" />
            </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6 gap-2 justify-between">
            <div class="mb-6 mx-2">
                <x-input-label for="id_number" class="mb-2">{{ __('ID Number') }}</x-input-label>
                <x-text-input id="id_number" name="id_number" type="text" placeholder="ID Number" />
                <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
            </div>

            <div class="mb-6">
                <x-input-label for="date_of_incident" class="mb-2">{{ __('Date of Reporting') }}</x-input-label>
                <x-text-input id="date_of_incident" name="date_of_incident" type="date" placeholder="Date of Incident" />
                <x-input-error :messages="$errors->get('date_of_incident')" class="mt-2" />
            </div>
            <div class="mb-6">
                <x-input-label for="name_of_affected" class="mb-2">{{ __('Name of Affected') }}</x-input-label>
                <x-text-input id="name_of_affected" name="name_of_affected" type="text" placeholder="Name of Affected" />
                <x-input-error :messages="$errors->get('name_of_affected')" class="mt-2" />
            </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6 gap-2 justify-between">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <x-input-label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="incident_type">
                        {{ __('Incident Type') }}
                    </x-input-label>
                    <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="incident_type" name="incident_type">
                        <option value="">{{__('Select an incident type')}}</option>
                        @foreach ($incident_types as $incidentType)
                            <option value="{{ $incidentType->id }}">{{ $incidentType->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('incident_type')" class="mt-2" />
                </div>
            </div>
            <div class="mb-6 w-full">
                <x-input-label for="narrative" class="mb-2">{{ __('Narrative') }}</x-input-label>
                <textarea class="w-full" id="narrative" name="narrative" type="text" placeholder="Narrative" ></textarea>
                <x-input-error :messages="$errors->get('narrative')" class="mt-2" />
            </div>
            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>
    
                <x-primary-button class="ml-3">
                    {{ __('Submit') }}
                </x-primary-button>
            </div>
        </div>
     
    </form>
</x-modal>
