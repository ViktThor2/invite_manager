<!DOCTYPE html>
<html>

  <head>
      <title>Ingatlankezelő</title>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <link rel="stylesheet" href="{{ asset('css/admin.css') }}" >
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" >
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" >

      <script src="{{ asset('js/admin.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

  </head>

  <body id="page-top">

    <div id="wrapper">
      @include('frontend.layout.left-nav')

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">
            @include('frontend.layout.top-nav')

            @include('frontend.layout.message')

            @yield('content')
          </div>

          @include('frontend.layout.footer')
      </div>
      <!-- End of Content Wrapper -->

      @include('frontend.layout.logout')
    </div>

  <script>
      $(function(){

          $.extend(true, $.fn.dataTable.defaults, {
                  language: {
                      "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Hungarian.json"
                  },
              pageLength: 100,

              buttons: [
                  {
                      extend: 'copy',
                      className: 'btn-default',
                      text: 'Másolás',
                      exportOptions: {
                          columns: ':visible'
                      }
                  },
                  {
                      extend: 'csv',
                      className: 'btn-default',
                      text: 'CSV',
                      exportOptions: {
                          columns: ':visible'
                      }
                  },
                  {
                      extend: 'excel',
                      className: 'btn-default',
                      text: 'Excel',
                      exportOptions: {
                          columns: ':visible'
                      }
                  },
                  {
                      extend: 'pdf',
                      className: 'btn-default',
                      text: 'PDF',
                      exportOptions: {
                          columns: ':visible'
                      }
                  },
                  {
                      extend: 'print',
                      className: 'btn-default',
                      text: 'Nyomtatás',
                      exportOptions: {
                          columns: ':visible'
                      }
                  }
              ]

          });

      });
  </script>
  @yield('script')

  </body>
</html>
