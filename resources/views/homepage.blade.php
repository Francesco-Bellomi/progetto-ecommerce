<x-layout>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif



    <!-- Full Page Image Header with Vertically Centered Content -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100  justify-content-evenly align-items-center">
                <div class="col-12 col-lg-4 mt-5 text-center my-5 py-5">
                    <h2 class="font-weight-light fw-bold display-3 tx-thi-color">Benvenuti su</h2>
                    <h2 class="font-weight-light fw-bold display-3 tx-thi-color">Plesto</h2>
                    {{-- <p class="fs-3 py-2">Cosa cerchi?</p> --}}
                    <form method="GET" action="{{ route('search') }}">
                        @csrf
                        <input type="text" name="q" class="form-control sbar rounded-pill text-center py-2" placeholder="Cosa cerchi?">
                        <button type="submit" class="btn bg-thi-color rounded-pill my-3 py-2">Scopri tutti i nostri annunci</button>
                    </form>
                </div>
                <div class="col-12 col-lg-8 text-center my-5 py-5">
                    <img src="/img/main.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </header>
    {{-- <div class="container bg-text py-5 radius-custom">
        <div class="row text-center ">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-4">
                    </div>
                    <div class="col-6 col-md-6">
                        <p class="fs-3">Che categoria cerchi?</p>
                    </div>
                    
                    <div class="col-6 col-md-3">
                        <li class="nav-item dropdown list-unstyled ">
                            <a class="nav-link dropdown-toggle bg-white rounded-pill sbar tx-sec-color " href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorie
                            </a>
                            <ul class="dropdown-menu border-0 p-0 text-center ms-5 " aria-labelledby="navbarDropdown">
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item "
                                            href="{{ route('announcement.category', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- carousel ultimi annunci --}}
    <div class="section1 d-flex align-items-center">
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center tx-for-color mt-5 py-3 fs-1 fw-bold">Scorri i nostri ultimi annunci</h3>
                </div>
                <div class="last-ads mt-5">
                    @foreach ($announcements as $announcement)
                        <div class="col-12 col-md-4">
                            <div class="card me-5 radius-custom2 text-center my-5">
                                @if ($announcement->img)
                                    <img src="{{ Storage::url($announcement->img) }}"
                                        class="card-img-top img-fluid radius-custom4" alt="...">
                                @else
                                    <img src="/img/default.jpg" class="card-img-top img-fluid" alt="">
                                @endif
                                <div class="card-body tx-sec-color">
                                    <p class="card-text">Pubblicato il :
                                        {{ $announcement->created_at->format('d/m/y') }}</p>
                                    <h5 class="card-title fs-2">{{ $announcement->title }}</h5>
                                    <p class="card-text fs-5">{{ $announcement->price }}€</p>
                                    <a href="{{ route('announcement.show', compact('announcement')) }}"
                                        class="btn rounded-pill">Scopri di più</a>
                                </div>
                                <div class="card-footer bg-main-color radius-custom3 tx-thi-color fs-5">
                                    <p class="card-text">Categoria : <a
                                            href="{{ route('announcement.category', ['category' => $announcement->category->id]) }}"
                                            class="card-text link-cat"> {{ $announcement->category->name }}</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- carousel consigli --}}
    <div class="container-fluid bg-main-color">
        <div class="row text-center">
            <div class="col-12 mt-5">
                <h2 class="tx-thi-color">I nostri consigli</h2>
                <h2 class="tx-thi-color">Ecco qualche semplice consiglio per concludere i tuoi affari in tutta sicurezza
                </h2>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-12">
                <div class="last-ads mt-5">
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <i class="fas fa-bullhorn fa-5x tx-main-color"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-center fw-bold">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <i class="fas fa-bullhorn fa-5x tx-main-color"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-center fw-bold">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <i class="fas fa-bullhorn fa-5x tx-main-color"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-center fw-bold">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <i class="fas fa-bullhorn fa-5x tx-main-color"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-center fw-bold">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <i class="fas fa-bullhorn fa-5x tx-main-color"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-center fw-bold">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section2">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 my-5">
                    <h2 class="tx-main-color fw-bold fs-1">I tuoi affari iniziano da qui!</h2>
                </div>
            </div>
            <div class="row py-5 justify-content-evenly">
                <div class="col-4 my-3">
                    <img src="/img/finger.png" alt="" class="img-fluid">
                </div>
                <div class="col-4 my-3 align-items-center">
                    <a href="{{ route('announcement.create') }}" class="btn rounded-pill fs-3 px-5">Inserisci
                        annuncio</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center my-5">
                <div class="col-6 text-center">
                    <h1 class="tx-for-color tx-main-color fw-bold fs-1">Contattaci</h1>
                    <p class="tx-for-color tx-main-color fw-bold fs-2">Per qualsiasi dubbio</p>
                    <a href="" class="btn rounded-pill fs-3 px-5 mb-5">Scrivici!</a>
                </div>
                <div class="col-6 text-center my-5">
                    <img src="/img/mail.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</x-layout>
