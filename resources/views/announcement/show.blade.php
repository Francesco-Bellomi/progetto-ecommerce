<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Dettagli annuncio : {{ $announcement->title }}</h1>
            </div>
            <div class="col-12 col-md-6">{{ $announcement->description }}</div>
            <div class="col-12 col-md-6">
                @if ($announcement->img)
                    <img src="{{ Storage::url($announcement->img) }}" class="card-img-top float-right img-fluid" alt="...">
                @else
                    <img src="/img/default.jpg" class="card-img-top float-right" alt="">
                @endif
            </div>
            <div class="col-12 col-md-3">
                {{ $announcement->price }}
            </div>
            <div class="col-12 col-md-3">
                {{ $announcement->created_at->format('d/m/y') }}
            </div>
            <a href="{{ route('announcement.index') }}" class="btn btn-success">Torna indietro</a>
        </div>
    </div>
</x-layout>
