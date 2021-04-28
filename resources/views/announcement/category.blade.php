<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Tutti Gli Annunci Della Categoria : {{ $category->name }}</h1>
            </div>
            @foreach ($announcements as $announcement)
                <div class="col-12 col-md-4">
                    <div class="card">
                        @if ($announcement->img)
                            <img src="{{ Storage::url($announcement->img) }}" class="card-img-top float-right"
                                alt="...">
                        @else
                            <img src="/img/default.jpg" class="card-img-top float-right" alt="">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text text-truncate">{{ $announcement->description }}</p>
                            <p class="card-text">{{ $announcement->price }}</p>
                            <a href="{{ route('announcement.index') }}" class="btn rounded-pill">Torna alla pagina
                                annunci</a>
                            <div class="my-2"><a href="{{ route('announcement.show', compact('announcement')) }}"
                                class="btn rounded-pill">Dettagli articolo</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-3">
                {{ $announcements->links() }}
            </div>
        </div>
    </div>
</x-layout>
