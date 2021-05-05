<x-layout>

    @if (session('access.denied.revisor.only'))
        <div class="alert alert-danger">
            accesso non consentito - solo per revisori
        </div>
    @endif


    @if (count($announcements)>0)

    @foreach ($announcements as $announcement)




        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card my-5 sbar radius-custom2">
                        <div class="card-header bg-main-color tx-thi-color radius-custom4">
                            Annuncio n° {{ $announcement->id }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2  tx-main-color">
                                    <h3 class="fw-bold">Utente </h3>
                                </div>
                                <div class="col-md-10">
                                    <h4>n° {{ $announcement->user->id }} , {{ $announcement->user->name }} ,
                                        {{ $announcement->user->email }}</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2  tx-main-color">
                                    <h3 class="fw-bold">Titolo  </h3>
                                </div>
                                <div class="col-md-10">
                                    <h4> {{ $announcement->title }} </h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2 fw-bold tx-main-color">
                                    <h3 class="fw-bold">Descrizione</h3>
                                </div>
                                <div class="col-md-10">
                                    <h4> {{ $announcement->description }} </h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center">
                                
                                    @foreach ($announcement->images as $image)
                                            <div class="col-12 col-md-6 my-2 text-center">
                                                <img src="{{ $image->getUrl(400, 300) }}" class="rounded img-fluid"
                                                alt="">
                                            </div>
                                            <div class="col-12 col-md-4 my-2 fw-bold">
                                                Adult :  <x-googleSafe value="{{$image->adult}}"/> <hr>
                                                Spoof : <x-googleSafe value="{{$image->spoof}}"/> <hr>
                                                Medical :<x-googleSafe value="{{$image->medical}}"/> <hr>
                                                Violence : <x-googleSafe value="{{$image->violence}}"/> <hr>
                                                Racy : <x-googleSafe value="{{$image->racy}}"/> <hr>
                                            </div>
                                            <div class="col-12 col-md-2 my-2 ">

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
                                <div class="col-12">
                                    <form method="POST" action="{{ route('revisor.undo', $announcement->id) }}">
                                        @csrf
                                        <button type="submit" class="btn rounded-pill ">Revisiona di nuovo</button>
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
    @endforeach
    @else

      <header class="masthead2">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5 text-end my-5 py-5">
                        <h2 class="fw-bold display-5 tx-main-color">Non ci sono annunci rifiutati.</h2>

                    </div>
                </div>
            </div>
        </header>

    @endif
  

</x-layout>
