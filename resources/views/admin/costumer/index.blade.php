@extends('admin.layout.app')
@section('content')


    <div class="card">

    <div class="card-header">
        Ingatlanok
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover yajra-datatable">
                <thead>
                <tr>
                    <th width="10">ID</th>
                    <th>Név</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>


@endsection


        @section('script')
            <script type="text/javascript">
                $(function () {

                    var dataTable = $('.yajra-datatable').DataTable({
                        processing: true,
                        serverSide: true,
                        autoWidth: false,
                        pageLength: 5,
                        // scrollX: true,
                        "order": [[ 0, "desc" ]],
                        ajax: '{{ route('get-users') }}',
                        columns: [
                            {data: 'id', name: 'id'},
                            {data: 'name', name: 'name'},
                            {data: 'email', name: 'email'},
                            {data: 'Actions', name: 'Actions',orderable:false,serachable:false,sClass:'text-center'},
                        ]
                    });

                });
            </script>
