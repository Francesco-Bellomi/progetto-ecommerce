<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       @guest
         <li class="nav-item">  
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
         </li>
         <li class="nav-item">
          <a class="nav-link active" href="{{route('announcement.create')}}">Inserisci Annuncio</a>
        </li>
         <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
         </li>
         <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('register')}}">Registrati</a>
         </li> 
       @endguest
       @auth
       <li class="nav-item">
        <a class="nav-link" href="{{route('announcement.create')}}">Inserisci Annuncio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('announcement.index')}}">Lista Annunci</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Ciao {{Auth::user()->name}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li>
            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('form-logout').submit()">
              <form method="POST" action="{{route('logout')}}" id="form-logout">
                @csrf
              </form>
              Logout</a>
          </li>
        </ul>
      </li>
    </ul>   
       @endauth   
        
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>