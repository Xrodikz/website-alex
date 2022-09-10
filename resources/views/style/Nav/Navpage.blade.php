<link rel="stylesheet" type="text/css" href="{!! ('resources/css/style.css') !!}">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Jaya Lestari Laptop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <form class="d-flex ms-auto" role="search">
          <input class="form-control me-2" type="search" placeholder="Cari barang" aria-label="Search">
          <button class="btn btn-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <ul class="navbar-nav ms-auto my-4 my-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/product">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h5 class="text-center">Welcome <b>{{ Auth::user()->name }}</b></h5>

  