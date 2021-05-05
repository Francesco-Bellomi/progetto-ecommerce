<x-layout>
    @if (count($announcements) > 0)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center tx-sec-color fw-bold py-5">{{__('ui.risultati')}} : <span class=" tx-main-color fs-1">{{$q}}</span></h2>
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
                            <p class="card-text">{{__('ui.publicato')}} 
                                {{ $announcement->created_at->format('d/m/y') }}</p>
                            <h5 class="card-title fs-4">{{ $announcement->title }}</h5>
                            <p class="card-text fs-5">{{ $announcement->price }}€</p>
                            <a href="{{ route('announcement.show', compact('announcement')) }}"
                                class="btn rounded-pill">{{__('ui.dettaglio')}}</a>
                        </div>
                        <div class="card-footer bg-main-color radius-custom3 tx-thi-color fs-5">
                            <p class="card-text">{{__('ui.categoria')}} <a
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
        <div class="row text-center align-items-center">
            <div class="col-12 col-md-4 my-5 ">
                <h1 class="fw-bold  tx-main-color">{{__('ui.ops')}}</h1>
            </div>
            <div class="col-12 col-md-8 my-5">
                <img src="/img/errore.png" class="img-fluid" alt="">
            </div>
        </div>
    </div> 
    @endif
</x-layout>
