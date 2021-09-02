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
                        <th width="50">Id</th>
                        <th>Státusz</th>
                        <th>Ár</th>
                        <th width="100"></th>
                    </tr>
                    </thead>

                    <tbody>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function () {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('house.list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'status', name: 'status'},
                    {data: 'price', name: 'price'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });
    </script>

@endsection


