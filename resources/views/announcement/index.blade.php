<x-layout>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center tx-main-color fw-bold py-5 display-1">Lista annunci</h1>
            </div>
            @foreach ($announcements as $announcement)
                <div class=" col-md-4 col-xl-3">
                    <div class="card my-5">
                        {{-- @if ($announcement->img)
                            <img src="{{ Storage::url($announcement->img) }}" class="card-img-top float-right"
                                alt="...">
                        @else
                            <img src="/img/default.jpg" class="card-img-top float-right" alt="">
                        @endif --}}
                        <div class="card-body">
                            <p>
                                @foreach ($announcement->images as $image)
                               
                                    <img src="{{Storage::url($image->file)}}" class="rounded float-right img-fluid" alt="">
                                
                                @endforeach
                                {{$announcement->body}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text">Pubblicato il :
                                {{ $announcement->created_at->format('d/m/y') }}</p>
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p>Categoria : <a href="{{ route('announcement.category', ['category' => $announcement->category->id]) }}"
                                class="card-text tx-main-color text-decoration-none"> {{ $announcement->category->name }}</a></p>
                            
                            <p class="card-text text-truncate">{{ $announcement->description }}</p>
                            <p class="card-text">{{ $announcement->price }}€</p>
                            <a href="{{ route('announcement.show', compact('announcement')) }}"
                                class="btn rounded-pill">Scopri di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row py-5">
            <div class="col-12 col-md-8">
                {{ $announcements->links() }}
            </div>
        </div>
    </div>
</x-layout>
