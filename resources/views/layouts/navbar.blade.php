<!--STYLED IN BANNER SCSS-->
<div class="banner">
        <img src="{{asset('storage/images/dc-logo.png')}}">
        <h2 id="title-tag">Digital Archaeological Archive of Davidson College</h2>
</div>

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}"><i class="fa-solid fa-house"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Query the Database
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Artifact Queries</a></li>
              <li><a class="dropdown-item" href="#">Image Queries</a></li>
              <li><a class="dropdown-item" href="#">Site Queries</a></li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="#">About the Database</a>
          </li>
          @if(Auth::check())
          @if(Auth::user()->user_type === 'admin')
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('admin.dashboard')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-pen-to-square"></i>Admin Dashboard
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('collections')}}">Add Collection</a></li>
              <li><a class="dropdown-item" href="#">Verify Data</a></li>
            </ul>
          </li>
          @endif
        @endif
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-light" type="submit">Search</button>
        </form>
        @if(Auth::check())
        <form action="{{route('logout')}}" method="POST">
          @csrf
          @method('POST')
          <button type="submit" class="btn btn-light ms-1">Logout</button>
      </form>
        @else
        <a href="{{route('login')}}"><button class="btn btn-light ms-1" type="submit">Login</button></a>
        @endif

      </div>
    </div>
  </nav>
  @if(Auth::check())
  <h2>{{Auth::user()->name}}</h2>
  @endif