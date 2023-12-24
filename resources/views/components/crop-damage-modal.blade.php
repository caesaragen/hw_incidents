<x-modal name="crop-form-modal" :show="$errors->isNotEmpty()" focusable>
    <form method="post" action="{{ route('crop.attachments.store') }}" class="p-6"enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white">
                {{ __('Add Attachments') }}
            </h2>
            <input hidden value="{{$cropDestruction_id}}" name="crop_destruction_id"/>
            <div class="flex flex-wrap -mx-3 mb-6 gap-2 justify-between">
            <div class="mb-6 mx-2">
                <x-input-label for="agricultural_officer" class="mb-2">{{ __('Agricultural officer report') }}</x-input-label>
                <x-text-input id="agricultural_officer" name="agricultural_officer" type="file" placeholder="OB Number" />
                <x-input-error :messages="$errors->get('agricultural_officer')" class="mt-2" />
            </div>
    
            <div class="mb-6">
                <x-input-label for="cwc_recommendations" class="mb-2">{{ __('County wildlife compensation committee recommendations') }}</x-input-label>
                <x-text-input id="cwc_recommendations" name="cwc_recommendations" type="file" placeholder="" />
                <x-input-error :messages="$errors->get('cwc_recommendations')" class="mt-2" />
            </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6 gap-2 justify-between">
            <div class="mb-6 mx-2">
                <x-input-label for="mwc_recommendations" class="mb-2">{{ __('Ministerial wildlife compensation committee recommendation') }}</x-input-label>
                <x-text-input id="mwc_recommendations" name="mwc_recommendations" type="file" placeholder="" />
                <x-input-error :messages="$errors->get('mwc_recommendations')" class="mt-2" />
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
