<x-layout>

    @if (session('access.denied.revisor.only'))
        <div class="alert alert-danger">
            accesso non consentito - solo per revisori
        </div>
    @endif

    @foreach ($announcements as $announcement)
        
    @if ($announcement)
        
   

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Annuncio # {{ $announcement->id }}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Utente </h3>
                            </div>
                            {{-- <div class="col-md-10">
                                <h3> #{{ $announcement->user->id }} , {{ $announcement->user->name }} ,
                                    {{ $announcement->user->email }}</h3>
                            </div> --}}
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Titolo </h3>
                            </div>
                            <div class="col-md-10">
                                <h3> {{ $announcement->title }} </h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Descrizione</h3>
                            </div>
                            <div class="col-md-10">
                                <h3> {{ $announcement->description }} </h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Immagini</h3>
                            </div>
                            <div class="col-md-10">
                                <img src="{{ Storage::url($announcement->img) }} " alt="">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <form method="POST" action="{{ route('revisor.reject', $announcement->id) }}">
                                    @csrf
                                    <button type="submit" class="btn">Reject</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form method="POST" action="{{ route('revisor.accept', $announcement->id) }}">
                                    @csrf
                                    <button type="submit" class="btn">Accept</button>
                                </form>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Non ci sono articoli da revisionare</h3>
            </div>
        </div>
    </div>

     @endif

     @endforeach
</x-layout>
