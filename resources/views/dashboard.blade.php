<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <x-action-button class="p-2 m-2" x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'ob-form-modal')" data-modal-toggle="ob-form-modal">
                {{ __('Incident reporting') }}</x-action-button>
                <a href="{{ route('compensations.index') }}" target="_blank"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-2 rounded">
                View Assessed Incidents
            </a>
            {{-- <a href="{{ route('properties.index') }}" target="_blank"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
            Property Damage Claims
        </a>
        <a href="{{ route('mortality.index') }}" target="_blank"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
         Mortality Claims
    </a> --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="mx-auto table-responsive">
                        <table class="table table-bordered table-striped data-table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Incident Number</th>
                                    <th>Reported by</th>
                                    <th>Incident Type</th>
                                    <th>ID Number</th>
                                    <th>Name Of Affected</th>
                                    <th>Narrative</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('components.ob-form-modal')

        </div>
    </div>
</x-app-layout>
<script type="text/javascript">
    $(function() {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: "{{ route('dashboard') }}",
            columns: [{
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'ob_number',
                    name: 'ob_number'
                },
                {
                    data: 'reporting_name',
                    name: 'reporting_name'
                },
                {
                    data: 'incident_type_name',
                    name: 'incident_type_name'
                },
                {
                    data: 'id_number',
                    name: 'id_number'
                },
                {
                    data: 'name_of_affected',
                    name: 'name_of_affected'
                },
                {
                    data: 'narrative',
                    name: 'narrative'
                },
                {
                    data: 'action',
                    name: 'Report Incident',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        // Add a click event to the button to redirect to incidents.create with the 'ob_number' as a query parameter
                        return '<a href="{{ route('incidents.create') }}?ob=' + row.ob_number + '" class="edit btn btn-primary btn-sm">Record Incident</a>';
                    }
                },
            ]
        });

    });
</script>
