<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Recorded Incident Assessments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
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
                                    <th>Date Created</th>
                                    <th>OB Number</th>
                                    <th>Incident Type</th>
                                    <th>Warden Dispatched</th>
                                    <th>Narrative</th>
                                    <th>Discussion with Community</th>
                                    <th>Monitoring and Survey</th>
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
            ajax: "{{ route('compensations.index') }}",
            columns: [
                { data: 'created_at', name: 'created_at' },
                { data: 'ob_number', name: 'ob_number' },
                { data: 'incident_type', name: 'incident_type' },
                { data: 'warden_dispatched', name: 'warden_dispatched' },
                { data: 'narrative', name: 'narrative' },
                { data: 'discussion_with_community', name: 'discussion_with_community' },
                { data: 'monitoring_and_survey', name: 'monitoring_and_survey' },
                {
                    data: 'action',
                    name: 'Action',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return '<a href="{{ route('warden.index', ['incident_assessment_id' => 'PLACEHOLDER']) }}" target="_blank" class="edit btn btn-success btn-sm">View Incident</a>'.replace('PLACEHOLDER', row.id);
                    }
                }
            ]
        });
    });
</script>
