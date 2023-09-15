<!doctype html>
<html lang="en">

<head>
  <title>{{ config('app.name') }}</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= url('resources/css/style.css'); ?>">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navabr-expend navbar-dark bg-dark">
        <a href="{{ url('/') }}" class="navbar-brand">{{ config('app.name') }}</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nar ml-auto">
                @auth
                    <li class="nav-item">
                        <a href="{{ url('user') }}" class="nav-link">User</a>

                    </li>
                    <li class="nav-item">

                        <a href="{{ url('logout') }}" class="nav-link">Logout</a>
                    </li>
                @endauth
            </ul>
        </div>
        <a class="btn btn-danger btn-lg" href="{{ url('logout/') }}" role="button">Keluar</a>
    </nav>
  </header>
  <main>
    <div class="container mt-3">
        @yield('content')
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <!-- <script src="js/jquery.min.js"></script> -->
    <script type="text/javascript" src="<?= url('resources/js/jquery.min.js'); ?>"></script>

    <script type="text/javascript" src="<?= url('resources/js/main.js'); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
