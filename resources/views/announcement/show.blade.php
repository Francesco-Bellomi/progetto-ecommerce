<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center  fw-bold py-5 display-1">Dettagli : {{ $announcement->title }}</h1>
            </div>
            <div class="col-12 col-md-6">
                <p> {{ $announcement->price }} €
                </p>
                <p>
                    {{ $announcement->created_at->format('d/m/y') }}
                </p>
                <p>
                    {{ $announcement->description }}
                </p>
                <div class="py-5"> <a href="{{ route('announcement.index') }}" class="btn btn-success rounded-pill">Torna indietro</a></div>
            </div>

            <div class="col-12 col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            @if ($announcement->img)
                                <img src="{{ Storage::url($announcement->img) }}" class="card-img-top float-right"
                                    alt="...">
                            @else
                                <img src="/img/default.jpg" class="card-img-top float-right" alt="">
                            @endif
                        </div>
                        <div class="carousel-item">
                            @if ($announcement->img)
                                <img src="{{ Storage::url($announcement->img) }}" class="card-img-top float-right"
                                    alt="...">
                            @else
                                <img src="/img/default.jpg" class="card-img-top float-right" alt="">
                            @endif
                        </div>
                        <div class="carousel-item">
                            @if ($announcement->img)
                                <img src="{{ Storage::url($announcement->img) }}" class="card-img-top float-right"
                                    alt="...">
                            @else
                                <img src="/img/default.jpg" class="card-img-top float-right" alt="">
                            @endif
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-3">

            </div>
        </div>
    </div>
</x-layout>
