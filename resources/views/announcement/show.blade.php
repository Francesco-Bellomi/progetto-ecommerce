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
            @if (count($announcement->images) > 0)
            @foreach ($announcement->images as $item)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->index}}"
                class="active" aria-current="true" aria-label="Slide {{$loop->index}}"></button>
                
            @endforeach   
            @else
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 0"></button>
            
            @endif
            </div> 
            <div class="carousel-inner">
                @if (count($announcement->images) > 0)
                @foreach ($announcement->images as $image)     
                <div class="carousel-item {{$loop->first ? 'active' : ' '}}">             
                    <img src="{{Storage::url($image->file)}}" class="rounded float-right img-fluid" alt="">                  
                </div>
                
                @endforeach
                @else
                    
                <div class="carousel-item active">
                    <img src="/img/default.jpg" alt="" class="img-fluid">
                </div>
                    
                @endif                   
                
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

