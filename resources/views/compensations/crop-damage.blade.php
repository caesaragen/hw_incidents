
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('View Claim') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-2">
                <x-action-button class="p-2 m-2" x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'crop-form-modal')" data-modal-toggle="crop-form-modal">
                {{ __('Add Attachments') }}</x-action-button>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                    @include('components.crop-report')
                   @include('components.crop-damage-modal')
                    <div class="mt-10 flex justify-center">
    
                            <a href="{{ route('claims.crop-damage', ['claim_id' => $cropDestruction->id, 'download' => true]) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Download
                                Report</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
