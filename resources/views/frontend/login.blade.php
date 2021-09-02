<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ingatlankezelő</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
              <div class="container">

                  <div class="card o-hidden border-0 shadow-lg my-5">

                      <div class="card-body p-0">

                          <!-- Nested Row within Card Body -->
                          <div class="row d-flex justify-content-center">
                                <div class="col-8 p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bejelentkezés</h1>
                                    </div>

                        <form class="user" method="post" action="{{  route('login.store') }}">
                          @csrf

                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="email"
                                    placeholder="Email cím">
                            </div>
                            <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        name="password" placeholder="Jelszó">
                            </div>
                            <div class="form-group">
                                <!-- Registracion button -->
                                <button class="btn btn-primary btn-block" type="submit">
                                    Bejelentkezés
                                 </button>
                            </div>
                        </form>

                               </div>
                          </div>
                      </div>
                  </div>

              </div>

</html>
