{{-- <style>
    .section {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .main-div {
        /* padding-left: 1rem;
        padding-right: 1rem; */
        margin-top: 1.5rem;
        width: 100%;



        @media (min-width: 1024px) {
            width: 66.666667%;
        }
    }

    .inner-div {
        display: flex;
        position: relative;
        margin-bottom: 1.5rem;
        flex-direction: column;
        border-radius: 0.5rem;
        border-width: 0;
        /* width: 100%; */
        min-width: 0;
        overflow-wrap: break-word;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .inner-div2 {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        margin-bottom: 0;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        background-color: #ffffff;
    }

    .header-div {
        display: flex;
        justify-content: space-between;
        text-align: center;

    }

    .heading {
        font-size: 1.25rem;
        line-height: 1.75rem;
        font-weight: 700;
    }

    .div-wrapper {
        padding-left: 1rem;
        padding-right: 1rem;
        /* width: 100%; */

        @media (min-width: 1024px) {
            width: 50%;
        }
    }

    .div-wrapper-inner {
        position: relative;
        margin-bottom: 0.75rem;
        /* width: 50%; */
    }

    .label {
        display: block;
        margin-bottom: 0.5rem;
        font-size: 0.75rem;
        line-height: 1rem;
        font-weight: 700;
        text-transform: uppercase;
    }

    .input {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        border: 1px solid #E2E8F0;
        border-radius: 0.375rem;
        /* width: 100%; */
        padding: 0.5rem 1rem;
        color: #4A5568;
        line-height: 1.5;
        outline: none;
        /* padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        border-radius: 0.25rem;
        border-width: 0;
        width: 50%;
        font-size: 0.875rem;
        line-height: 1.25rem;
        background-color: #ffffff;
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 300ms;
        transition-duration: 150ms;
        transition-timing-function: linear;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06); */
    }

    .h6 {
        margin-top: 0.75rem;
        margin-bottom: 1.5rem;
        font-size: 0.875rem;
        line-height: 1.25rem;
        font-weight: 700;
        text-transform: uppercase;
    }

    .h6-div {
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
        padding-top: 0;
        flex: 1 1 auto;
        background-color: #ffffff;



        @media (min-width: 1024px) {
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }
    }

    .flex-wrapper {
        display: flex;
        flex-wrap: wrap;
    }

    .hr {
        margin-top: 1.5rem;
    }

    .div-outer {
        padding-left: 1rem;
        padding-right: 1rem;
        width: 100%;



        @media (min-width: 1024px) {}
    }

    .actions {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1rem;
    }

    .float-left {
        float: left;
    }

    .float-right {
        float: right;
    }
</style> --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Incident Assessement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- component -->
        @include('components.warden-report')

        <div class="mt-10 flex justify-center">
            <a href="{{ route('download.incident.report', ['incident_assessment_id' => $incidentAssessment->id]) }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Download Incident Report</a>
                {{-- <div class="mt-10 flex justify-center">
    
                    <a href="{{ route('claims.crop-damage', ['incident_assessment_id' => $incidentAssessment->id, 'download' => true]) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Download
                        Report</a>
            </div> --}}
        </div>
    </div>
</x-app-layout>
