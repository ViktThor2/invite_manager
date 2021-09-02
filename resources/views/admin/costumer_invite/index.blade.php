@extends('admin.layout.app')
@section('content')



    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">

            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->
                <div class="row d-flex justify-content-center">
                        <div class="col-8 p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Felhgasználó Meghívása</h1>
                            </div>
                            <form class="user" method="post" action="{{  route('invite.send') }}">
                              @csrf

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email"
                                        placeholder="Email cím">
                                </div>

                                <div class="form-group">
                                    <!-- Registracion button -->
                                    <button class="btn btn-primary btn-block" type="submit">
                                        Küldés
                                     </button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>

    </div>


@endsection
