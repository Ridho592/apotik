<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: #5ba9f7; /* Warna biru muda */
    }
  </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{asset('image/NSP.JPG')}}" alt="" width="50" height="50" class="d-inline-block align-text-top">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ asset("/") }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ asset("/obat") }}">Obat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ asset("/user") }}">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
              </li>
            </ul>
          </div>
        </div>
</nav>



<main>
<!-- untuk include file blade php lain di tengah main -->
@yield('content')








</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var toastEl = document.querySelector(".toast");
        if (toastEl) {
            var toast = new bootstrap.Toast(toastEl);
            toast.show();
        }
    });
</script>


</body>
</html>
