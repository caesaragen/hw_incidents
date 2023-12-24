<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Crop Destruction Claims') }}
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
                                    <th>Claimant Name</th>
                                    <th>Crop Name</th>
                                    <th>Estimated Value</th>
                                    <th>Place</th>
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
            ajax: "{{ route('claims.index') }}", // Adjust the route if necessary
            columns: [
                { data: 'created_at', name: 'created_at' },
                { data: 'claimant_name', name: 'claimant_name' },
                { data: 'crop_name', name: 'crop_name' },
                { data: 'value', name: 'value' },
                { data: 'place', name: 'place' },
                { data: 'date', name: 'date' },
                {
                    data: 'action',
                    name: 'Action',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return '<a href="{{ route("claims.crop-damage", ["claim_id" => "PLACEHOLDER"]) }}" target="_blank" class="edit btn btn-primary btn-sm">View Claim</a>'.replace('PLACEHOLDER', row.id);
                    }
                }
            ]
        });
    });
</script>
