@extends('frontend.layout.app')
@section('content')

<div class="card">
    <div class="card-header">
      Ingatlan : {{ $house->id }}
    </div>

    <div class="card-body">

        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">

                <tr>
                    <td>Státusz</td>
                    <td>{{ $house->status->title ??'' }}</td>
                </tr>

                <tr>
                    <th>Ár</th>
                    <td>{{ $house->price ?? '' }} Millió</td>
                </tr>

                <tr>
                    <th>Cím</th>
                    <td>{{ $house->city->city ?? '' }} ,
                        {{ $house->city_district->district_n ?? '' }},
                        {{ $house->street ?? '' }}
                    </td>
                </tr>

                <tr>
                    <th>Telefonszám</th>
                    <td>{{ $house->tel ?? '' }}</td>
                </tr>

                <tr>
                    <th>Szobák száma</th>
                    <td>{{ $house->room_count ?? '' }} szoba,
                        {{ $house->half_room_count ?? '' }} félszoba</td>
                </tr>

                <tr>
                    <th>Terület</th>
                    <td>{{ $house->area_size ?? '' }} nm</td>
                </tr>

                <tr>
                    <th>Leírás</th>
                    <td>{{ $house->long_description ?? '' }}</td>
                </tr>

            </table>
        </div>

    </div>
</div>



@endsection
