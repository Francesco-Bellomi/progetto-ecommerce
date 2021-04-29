<nav class="navbar navbar-expand-lg bg-main-color tx-thi-color sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img src="/img/logo_small.png" alt="" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon me-2"><i class="fas fa-ellipsis-h fs-1"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item mx-3">
                        <a class="nav-link active nav-link annunci" href="{{ route('announcement.create') }}"> <i
                                class="fas fa-plus"></i> Inserisci Annuncio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login <i class="fas fa-sign-in-alt"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Registrati <i class="fas fa-user-plus"></i></a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu border-0 p-0 text-center" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                        href="{{ route('announcement.category', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link annunci mx-3" href="{{ route('announcement.create') }}"> <i class="fas fa-plus"></i>
                            Inserisci Annuncio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('announcement.index') }}">Lista Annunci</a>
                    </li>
                    @if (!Auth::user()->is_revisor)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lavoraconnoi') }}">Lavora con noi</a>
                    </li>
                    @endif
                    @if (Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a href="{{ route('revisor.homepage') }}" class="nav-link">
                                Area revisore
                                <span
                                    class="badge badge-pill badge-warning">{{ \App\Models\Announcement::ToBeRevisionedCount() }}</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('revisor.rejected') }}" class="nav-link">
                                Annunci rifiutati 
                                
                            </a>
                        </li>


                    @endif
                    <li class="nav-item dropdown border-0">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ciao {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item text-center" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('form-logout').submit()">
                                    <form method="POST" action="{{ route('logout') }}" id="form-logout">
                                        @csrf
                                    </form>
                                    Logout <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endauth

            {{-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
        </div>
    </div>
</nav>
