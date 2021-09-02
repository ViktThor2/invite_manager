@extends('frontend.layout.app')
@section('content')

<div class="card">
    <div class="card-header">
      Ingatlanok
    </div>

    <div class="card-body">

        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable" id="house_table">

                <thead>
                    <tr>
                        <th width="50">Id</th>
                        <th>Státusz</th>
                        <th>Ár</th>
                        <th>Telefonszám</th>
                        <th>Város</th>
                        <th>Kerület</th>
                        <th>Utca</th>
                        <th>Terület</th>
                        <th>Szobák</th>
                        <th>Félszobák</th>

                        <th width="100"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($houses as $house)

                        <td>{{ $house->id ?? '' }}</td>
                        <td>{{ $house->status->title ?? '' }} m</td>
                        <td>{{ $house->price ?? '' }} m</td>
                        <td>{{ $house->tel ?? '' }} </td>
                        <td>{{ $house->city->city ?? '' }}</td>
                        <td>{{ $house->city_district->district_n ?? '' }}</td>
                        <td>{{ $house->street ?? '' }} </td>
                        <td>{{ $house->area_size ?? '' }} nm &sup2;</td>
                        <td>{{ $house->room_count ?? '' }} darab</td>
                        <td>{{ $house->half_room_count ?? '' }} darab</td>

                        <td>
                            <form action="{{ route('house.destroy',$house->id) }}" method="POST">
                              <a class="btn btn-sm btn-primary" href="{{ route('house.show',$house->id) }}">Megtekintés</a>
                            </form>
                        </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</div>

@endsection


@section('script')
@parent
<script>
    $(function () {

        $('#house_table').DataTable({
        });


        $.extend(true, $.fn.dataTable.defaults, {
            order: [[ 1, 'asc' ]],
            pageLength: 100,
        });

        $('#house_table:not(.ajaxTable)').DataTable({ buttons: dtButtons })


    });
</script>
@endsection


