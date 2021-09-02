<!DOCTYPE html>
<html>

  <head>
      <title>Ingatlankezelő</title>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


  </head>

  <body id="page-top">

        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
              @include('admin.layout.message')

                <div class="card-body p-0">

                    <!-- Nested Row within Card Body -->
                    <div class="row d-flex justify-content-center">
                            <div class="col-8 p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Regisztráció</h1>
                                </div>
                                <form class="user" method="post" action="{{  route('invite.store', $id ) }}">
                                  @csrf

                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control form-control-user" name="name"
                                            placeholder="Felhasználónév">
                                    </div>

                                    <div class="form-group mb-2">
                                      <input type="email" class="form-control form-control-user" name="email"
                                          placeholder="Email cím">
                                    </div>

                                    <div class="form-group row mb-2">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Jelszó">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="passwordconfirm" placeholder="Jelszó megerősítése">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Registracion button -->
                                        <button class="btn btn-primary btn-block w-100" type="submit">
                                            Regisztráció
                                         </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>

        </div>



  </body>
</html>
