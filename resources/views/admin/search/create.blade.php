@extends('admin.layout.app')
@section('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">

            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->
                <div class="row d-flex justify-content-center">
                    <div class="col-8 p-5">
                        <h1 class="h4 text-gray-900 mb-4">Keresési feltételek</h1>

                        <form class="user" method="post" action="{{  route('search.store') }}">
                            @csrf

                            {{-- Ár --}}
                            <div class="input-group mb-3">
                                <span class="input-group-text">Ár ( Ft ) :</span>
                                <input type="number" class="form-control"
                                       name="price_min" id="price_min"
                                       placeholder="Minimum" />

                                <span class="input-group-text"> - </span>
                                <input type="number" class="form-control"
                                       name="price_max" id="price_max"
                                       placeholder="Maximum" />
                            </div>

                            {{-- Státusz --}}
                            <div class="input-group mb-3">
                                <span class="input-group-text">Státusz :</span>
                                <select class="form-control select2 w-75" name="satuses []" id="statuses"
                                        aria-label=".form-select-lg" multiple = "multiple">
                                    @foreach($statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Hely --}}
                            <div class="input-group mb-3">
                                <span class="input-group-text"> Város : </span>
                                <select class="form-control select2" name="cities []" id="cities"
                                        aria-label=".form-select-lg" multiple = "multiple">
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->city }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">Kerület :</span>
                                <select class="form-control" name="cityDistricts []" id="cityDistricts"
                                        aria-label=".form-select-lg" multiple = "multiple>
                                    @foreach($cityDistricts as $cityDistrict)
                                        <option value="{{$cityDistrict->id }}">{{ $cityDistrict->district_n }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Terület --}}
                            <div class="input-group mb-3">
                                <span class="input-group-text">Terület ( nm &sup2;	) : </span>
                                <input type="number" class="form-control"
                                       name="size_min" id="size_max"
                                       placeholder="Minimum" />

                                <span class="input-group-text"> - </span>
                                <input type="number" class="form-control"
                                       name="size_max" id="size_max"
                                       placeholder="Maximum" />
                            </div>

                            {{-- Szobák --}}
                            <div class="input-group mb-3">
                                <span class="input-group-text">Szobák száma :</span>
                                <input type="number" class="form-control"
                                       name="room_min" id="room_min"
                                       placeholder="Minimum" />

                                <span class="input-group-text"> - </span>
                                <input type="number" class="form-control"
                                       name="room_max" id="room_max"
                                       placeholder="Maximum" />
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">Félszobák száma :</span>
                                <input type="number" class="form-control"
                                       name="half_room_min" id="half_room_min"
                                       placeholder="Minimum" />

                                <span class="input-group-text"> - </span>
                                <input type="number" class="form-control"
                                       name="half_room_max" id="half_room_max"
                                       placeholder="Maximum" />
                            </div>


                            <button class="btn btn-primary btn-block" type="submit">
                                Mentés
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('#cities').select2();
            $('#cityDistricts').select2();
            $('#statuses').select2();

        });
    </script>


@endsection
