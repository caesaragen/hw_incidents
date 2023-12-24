<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Human Death Claims') }}
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
                        <!-- ... the rest of your view ... -->

                        <table class="table table-bordered table-striped data-table table-hover">
                            <thead>
                                <tr>
                                    <th>Date Created</th>
                                    <th>Claimant Name</th>
                                    <th>Circumstances</th>
                                    <th>Animal Responsible</th>
                                    <th>Place of Death</th>
                                    <th>Date of Incident</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                        <!-- ... the rest of your view ... -->

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
        ajax: "{{ route('mortality.index') }}",
        columns: [
            { data: 'created_at', name: 'created_at' },
            { data: 'claimant_name', name: 'claimant_name' },
            { data: 'circumstances', name: 'circumstances' },
            { data: 'animal_responsible', name: 'animal_responsible' },
            { data: 'place_of_death', name: 'place_of_death' },
            { data: 'date_of_incident', name: 'date_of_incident' },
            {
                data: 'action',
                name: 'Action',
                orderable: false,
                searchable: false,
                render: function(data, type, row) {
                    // You may want to replace this link with the actual link to view the claim details
                    return '<a href="{{ route("claims.mortality", ["claim_id" => "PLACEHOLDER"]) }}" target="_blank" class="edit btn btn-primary btn-sm">View Claim</a>'.replace('PLACEHOLDER', row.id);
                }
            }
        ]
    });
});

</script>
