<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 | @yield('title')</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
</head>
<body>

    {{-- Navbar Start --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Blade Templating</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Students") ? 'active' : '' }}" href="/students">Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Class") ? 'active' : '' }}" href="/class">Class</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Extracurricular") ? 'active' : '' }}" href="/extracurricular">Extracurriculars[Master]</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Teachers") ? 'active' : '' }}" href="/teacher">Teachers[Master]</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    {{-- Navbar End --}}

    {{-- Content Start --}}
    <div class="container">
      @yield('content')
    </div>
    {{-- Content End --}}

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>