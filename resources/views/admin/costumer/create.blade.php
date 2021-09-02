@extends('admin.layout.app')
@section('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">

            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->
                <div class="row d-flex justify-content-center">
                        <div class="col-8 p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Felhgasználó létrehozása</h1>
                            </div>
                            <form class="user" method="post" action="{{  route('costumer.store') }}">
                              @csrf

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name"
                                        placeholder="Felhasználónév" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email"
                                        placeholder="Email cím" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" placeholder="Jelszó" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="passwordconfirm" placeholder="Jelszó megerősítése" required>
                                    </div>
                                </div>
                                <input type="hidden" name="active" value="1">
                                <div class="form-group">
                                    <!-- Registracion button -->
                                    <button class="btn btn-primary btn-block" type="submit">
                                        Mentés
                                     </button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>

    </div>


@endsection
