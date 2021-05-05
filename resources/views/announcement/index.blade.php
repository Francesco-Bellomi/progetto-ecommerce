<x-layout>
    @if (session('message'))
        <div class="text-center fs-4 fs-1 fw-bold py-3 tx-thi-color bg-four-color">
            {{ session('message') }}
        </div>
    @endif



    <div class="container">
        <div class="row align-items-center my-5 ">
            <div class="col-12 col-sm-5">
                <h1 class="text-center tx-main-color fw-bold py-5">Lista annunci</h1>
            </div>
            <div class="col-12 col-sm-5 text-center">
                <form method="GET" action="{{ route('search') }}" class="d-flex">
                    @csrf
                    <input type="text" name="q" class="form-control sbar rounded-pill text-center" placeholder="Cosa cerchi?">
                    <button type="submit" class="btn bg-thi-color rounded-pill mx-2"><i class="fas fa-search"></i></button>
                </form>
            </div>
            @foreach ($announcements as $announcement)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card me-5 radius-custom2 text-center my-5">
                        @if (count($announcement->images) > 0)
                            <img src="{{ $announcement->images->first()->getUrl(400, 300) }}"
                                class="radius-custom4 img-fluid" alt="">

                        @else
                            <img src="/img/default.png" class="radius-custom4 img-fluid" alt="">
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
        <div class="row py-5">
            <div class="col-12 col-md-8">
                {{ $announcements->links() }}
            </div>
        </div>
    </div>
</x-layout>
