<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Recorded Incidents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
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
                                    <th>Animal Responsible</th>
                                    <th>Name Of Affected</th>
                                    <th>Date of Incident</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
<script type="text/javascript">
    $(function() {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: "{{ route('incidents.index') }}",
            columns: [{
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'ob_number',
                    name: 'ob_number'
                },
                {
                    data: 'reported_by',
                    name: 'reported_by'
                },
                {
                    data: 'incident_type_name',
                    name: 'incident_type_name'
                },
                {
                    data: 'compensation_animal_name',
                    name: 'compensation_animal_name'
                },
                {
                    data: 'name_of_affected',
                    name: 'name_of_affected'
                },
                {
                    data: 'date_of_incident',
                    name: 'date_of_incident'
                },
                {
                    data: 'action',
                    name: 'Report Incident',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        // Add a click event to the button to redirect to incidents.create with the 'ob_number' as a query parameter
                        return '<a href="{{ route('incidents.report') }}?incident_id=' + row.id + '" class="edit btn btn-primary btn-sm">Assess Incident</a>';
                    }
                },
            ]
        });

    });
</script>
