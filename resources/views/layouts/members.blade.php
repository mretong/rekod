
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>NKEA</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset ('css/navbar-top-fixed.css')}}" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="home">N.K.E.A</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('warta.index') }}">Warta <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('bicara.index')}}">Perbicaraan <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="borangh">Borang H <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="borangk">Borang K <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="setting">Tetapan Sistem <span class="sr-only"></span></a>
          </li>
        </ul>        
      </div>
    </nav>
    @show
    <div class="container">
            @yield('content')
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset ('js/jquery-3.2.1.slim.min.js')}}"></script>
    <script src="{{ asset ('js/popper.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
  </body>
</html>
