<x-modal name="mortality-form-modal" :show="$errors->isNotEmpty()" focusable>
    <form method="post" action="{{ route('mortality.attachments.store') }}" class="p-6"enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white">
                {{ __('Add Attachments') }}
            </h2>
            <input type="hidden" name="human_death_id" value="{{ $human_death_id }}">
            <div class="flex flex-wrap -mx-3 mb-6 gap-2 justify-between">
            <div class="mb-6 mx-2">
                <x-input-label for="oic" class="mb-2">{{ __('Officer In Charge of a police station or post') }}</x-input-label>
                <x-text-input id="oic" name="agricultural_officer" type="file" placeholder="" />
                <x-input-error :messages="$errors->get('oic')" class="mt-2" />
            </div>
    
            <div class="mb-6">
                <x-input-label for="medical" class="mb-2">{{ __('Medical officer report') }}</x-input-label>
                <x-text-input id="medical" name="medical" type="file" placeholder="" />
                <x-input-error :messages="$errors->get('medical')" class="mt-2" />
            </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6 gap-2 justify-between">
            <div class="mb-6 mx-2">
                <x-input-label for="mwc_recommendations" class="mb-2">{{ __('Ministerial wildlife compensation committee recommendation') }}</x-input-label>
                <x-text-input id="mwc_recommendations" name="mwc_recommendations" type="file" placeholder="" />
                <x-input-error :messages="$errors->get('mwc_recommendations')" class="mt-2" />
            </div>
            <div class="mb-6 mx-2">
                <x-input-label for="cwc_recommendations" class="mb-2">{{ __('County wildlife compensation committee recommendations') }}</x-input-label>
                <x-text-input id="cwc_recommendations" name="cwc_recommendations" type="file" placeholder="" />
                <x-input-error :messages="$errors->get('cwc_recommendations')" class="mt-2" />
            </div>
            <div class="mb-6 mx-2">
                <x-input-label for="kin_relationship" class="mb-2">{{ __('Relationship of next of kin to the victim') }}</x-input-label>
                <x-text-input id="kin_relationship" name="kin_relationship" type="file" placeholder="" />
                <x-input-error :messages="$errors->get('kin_relationship')" class="mt-2" />
            </div>
            <div class="mb-6 mx-2">
                <x-input-label for="birth_notification" class="mb-2">{{ __('Birth notification') }}</x-input-label>
                <x-text-input id="birth_notification" name="birth_notification" type="file" placeholder="" />
                <x-input-error :messages="$errors->get('birth_notification')" class="mt-2" />
            </div>
            <div class="mb-6 mx-2">
                <x-input-label for="birth_certificate" class="mb-2">{{ __('Birth certificate') }}</x-input-label>
                <x-text-input id="birth_certificate" name="birth_certificate" type="file" placeholder="" />
                <x-input-error :messages="$errors->get('birth_certificate')" class="mt-2" />
            </div>
            <div class="mb-6 mx-2">
                <x-input-label for="marriage_certificate" class="mb-2">{{ __('Marriage certificate') }}</x-input-label>
                <x-text-input id="marriage_certificate" name="marriage_certificate" type="file" placeholder="" />
                <x-input-error :messages="$errors->get('marriage_certificate')" class="mt-2" />
            </div>
            <div class="mb-6 mx-2">
                <x-input-label for="sworn_affidavit" class="mb-2">{{ __('Sworn affidavit') }}</x-input-label>
                <x-text-input id="sworn_affidavit" name="sworn_affidavit" type="file" placeholder="" />
                <x-input-error :messages="$errors->get('sworn_affidavit')" class="mt-2" />
            </div>
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
