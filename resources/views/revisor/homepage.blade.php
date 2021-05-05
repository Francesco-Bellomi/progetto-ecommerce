<x-layout>

    @if (session('access.denied.revisor.only'))
        <div class="alert alert-danger">
            accesso non consentito - solo per revisori
        </div>
    @endif

    {{-- @foreach ($announcements as $announcement) --}}

    @if ($announcement)



        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card my-5 sbar radius-custom2">
                        <div class="card-header bg-main-color tx-thi-color radius-custom4">
                            Annuncio # {{ $announcement->id }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <h3>Utente </h3>
                                </div>
                                <div class="col-md-10">
                                    <h3> #{{ $announcement->user->id }} , {{ $announcement->user->name }} ,
                                        {{ $announcement->user->email }}</h3>
                                </div>
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
                            <div class="row ">
                                
                                    @foreach ($announcement->images as $image)
                                            <div class="col-12 col-md-6 my-2 text-center">
                                                <img src="{{ $image->getUrl(400, 300) }}" class="rounded img-fluid"
                                                alt="">
                                            </div>
                                            <div class="col-12 col-md-3 my-2">
                                                Adult :  <x-googleSafe value="{{$image->adult}}"/> <br>
                                                Spoof : <x-googleSafe value="{{$image->spoof}}"/> <br>
                                                Medical :<x-googleSafe value="{{$image->medical}}"/> <br>
                                                Violence : <x-googleSafe value="{{$image->violence}}"/> <br>
                                                Racy : <x-googleSafe value="{{$image->racy}}"/> <br>
                                            </div>
                                            <div class="col-12 col-md-3 my-2">

                                                <b>Labels</b>
                                                <ul>
                                                    @if ($image->labels)
                                                        @foreach ($image->labels as $label)
                                                            <li>{{ $label }}</li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                            
                                            
                                    @endforeach
                                
                            </div>
                            <hr>
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <form method="POST" action="{{ route('revisor.reject', $announcement->id) }}">
                                        @csrf
                                        <button type="submit" class="btn rounded-pill btn-reject ">Rifiuta
                                            Annuncio</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <form method="POST" action="{{ route('revisor.accept', $announcement->id) }}">
                                        @csrf
                                        <button type="submit" class="btn rounded-pill btn-accept">Accetta
                                            Annuncio</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card-footer bg-main-color radius-custom3">
                            <p class="tx-thi-color">Categoria : <a
                                href="{{ route('announcement.category', ['category' => $announcement->category->id]) }}"
                                class="card-text link-cat"> {{ $announcement->category->name }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else

        {{-- <div class="container">
        <div class="row">
            <div class="col-12 text-center align-items-center mt-5">
                <h3 class="tx-main-color fw-bold"></h3>
            </div>
        </div>
    </div> --}}
        <header class="masthead2">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5 text-end my-5 py-5">
                        <h2 class="fw-bold display-5 tx-main-color">Non ci sono articoli da revisionare.</h2>

                    </div>
                </div>
            </div>
        </header>

    @endif
    {{-- @endforeach --}}

</x-layout>
