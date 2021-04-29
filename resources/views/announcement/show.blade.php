<x-layout>
  <!-- Page Content -->
<div class="container">


    <!-- Project One -->
    <div class="row align-items-center">
        <div class="col-12 col-md-6 mt-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="tx-for-color fs-5">
                        Inserito il {{ $announcement->created_at->format('d/m/y') }}
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="tx-for-color fs-4">Prezzo : <span class="tx-main-color">{{ $announcement->price }}€</span></p>
                </div>
            </div>
            <hr>
            <p class="tx-for-color fs-2">
                Nome articolo
            </p>
            <p class="tx-for-color fs-4">
                {{ $announcement->title }}
            </p>
            <hr>
            <div class="row mt-5">
                <div class="col-6">
                    <div>
                        <a href="{{ route('announcement.index') }}" class="btn rounded-pill">Torna indietro</a>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <div> <a href="{{ route('announcement.edit' , compact('announcement')) }}" class="btn rounded-pill">Modifica annuncio</a></div>
                    </div>
                </div>
            </div>
          </div>
      <div class="col-12 col-md-6 mt-5">
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
    </div>
    <div class="row">
        <div class="col-12">
            <p class="tx-for-color fs-2">
                Descrizione annuncio
            </p>
            <p class="tx-for-color fs-4">
                {{ $announcement->description }}
            </p>
        </div>
    </div>
    <!-- /.row -->
</div>  
</x-layout>

