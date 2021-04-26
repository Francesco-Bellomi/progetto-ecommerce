<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Dettagli annuncio : {{ $announcement->title }}</h1>
            </div>
            <div class="col-12 col-md-6">{{ $announcement->description }}</div>
            <col-12 class="col-md-4">
                {{ $announcement->price }}
            </col-12>
            <a href="{{ route('announcement.index') }}" class="btn btn-success">Torna indietro</a>
        </div>
    </div>
</x-layout>
