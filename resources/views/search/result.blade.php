<x-layout>
    @if (count($announcements) > 0)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center tx-main-color fw-bold py-5">I risultati della tua ricerca : {{$q}}.</h1>
            </div>
            @foreach ($announcements as $announcement)
                <div class="col-12 col-md-4">
                    <div class="card me-5 radius-custom2 text-center my-5">
                        @if (count($announcement->images) > 0)
                            <img src="{{ $announcement->images->first()->getUrl(400, 300) }}"
                                class="radius-custom4 img-fluid" alt="">

                        @else
                            <img src="/img/default.jpg" class="radius-custom4 img-fluid" alt="">
                        @endif
                        <div class="card-body tx-sec-color">
                            <p class="card-text">Pubblicato il :
                                {{ $announcement->created_at->format('d/m/y') }}</p>
                            <h5 class="card-title fs-4">{{ $announcement->title }}</h5>
                            <p class="card-text fs-5">{{ $announcement->price }}€</p>
                            <a href="{{ route('announcement.show', compact('announcement')) }}"
                                class="btn rounded-pill">Dettaglio</a>
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
    @else
    <div class="container mt-5">
        <div class="row text-center ">
            <div class="col-12 ">
                <h1 class="fw-bold  tx-main-color">OPS... Quello che cerchi non è qui!</h1>
            </div>
        </div>
    </div> 
    <div class="container py-5 mt-3 error">
    </div>
    @endif
</x-layout>
