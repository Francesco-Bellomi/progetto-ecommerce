<x-layout>
  <!-- Page Content -->
<div class="container">
    <!-- Project One -->
    <div class="row align-items-center">
        <div class="col-12 col-md-6 mt-5">
            <div class="row">
                <div class="col-4 mb-5">
                    <a href="{{ route('announcement.index') }}" class="btn rounded-pill"><i class="fas fa-angle-double-left fs-2"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="tx-for-color fs-5">
                        {{__('ui.publicato')}} {{ $announcement->created_at->format('d/m/y') }}
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="tx-for-color fs-4">{{__('ui.prezzo2')}} <span class="tx-main-color">{{ $announcement->price }}€</span></p>
                </div>
            </div>
            <hr>
            <p class="tx-for-color fs-5">
                {{__('ui.nomearticolo')}}
            </p>
            <h2 class="tx-for-color">
                {{ $announcement->title }}
            </h2>
            
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
            <div class="col-12">
                <h6 class="tx-main-color text-end fs-3 fw-bold">{{__('ui.publicato2')}} {{$announcement->user->name}}</h6>
            </div> 
            <div class="carousel-inner">
                @if (count($announcement->images) > 0)
                @foreach ($announcement->images as $image)     
                <div class="carousel-item {{$loop->first ? 'active' : ' '}}">             
                    <img src="{{$image->getUrl(650,450)}}" class="rounded float-right img-fluid" alt="">                  
                </div>
                
                @endforeach
                @else
                    
                <div class="carousel-item active">
                    <img src="/img/default2.png" alt="" class="img-fluid">
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
            <p class="tx-for-color fs-5">
                {{__('ui.descrizioneannuncio')}}
            </p>
            <h4 class="tx-for-color">
                {{ $announcement->description }}
            </h4>
        </div>
    </div>
    @if ($announcement->user->id == Auth::id())
    <div class="row">
        <div class="col-4 mt-5">
            <a href="{{ route('announcement.edit' , compact('announcement')) }}" class="btn rounded-pill">{{__('ui.modifica')}}</a>
        </div>
    </div>    
    @endif
    <!-- /.row -->
</div>  
</x-layout>

