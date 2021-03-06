<x-layout>
    @if (session('message'))
        <div class="text-center fs-4 fs-1 fw-bold py-3 tx-thi-color bg-four-color">
            {{ session('message') }}
        </div>
    @endif



    <!-- Full Page Image Header with Vertically Centered Content -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100  justify-content-evenly align-items-center">
                <div class="col-12 col-lg-4 mt-5 text-center my-5 py-5">
                    <h2 class="font-weight-light fw-bold display-3 tx-thi-color animate__animated animate__bounce animate__slow	2s">{{__('ui.homepage')}}</h2>
                    
                    {{-- <p class="fs-3 py-2">Cosa cerchi?</p> --}}
                    <form method="GET" action="{{ route('search') }}">
                        @csrf
                        <input type="text" name="q" class="form-control sbar rounded-pill text-center py-2" placeholder="{{__('ui.cerchi')}}">
                        <button type="submit" class="btn bg-thi-color rounded-pill my-3 py-2">{{__('ui.scopri')}}</button>
                    </form>
                </div>
                <div class="col-12 col-lg-8 text-center my-5 py-5">
                    <img src="/img/main.png" alt="" class="img-fluid ">
                </div>
            </div>
        </div>
    </header>

    {{-- carousel ultimi annunci --}}
    <div class="section1 d-flex align-items-center">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-2 text-end">
                    <i class="fas fa-quote-left fs-3"></i>
                </div>
                <div class="col-10">
                    <h3 class="tx-for-color mt-5 py-3 fw-bold display-4">{{__('ui.scorri')}} </h3>
                </div>
                <div class="last-ads mt-5">
                    @foreach ($announcements as $announcement)
                        <div class="col-12 col-md-3">
                            <div class="card me-5 radius-custom2 text-center my-5">
                                @if (count($announcement->images) > 0)
                                <img src="{{$announcement->images->first()->getUrl(400,300)}}" class="radius-custom4 img-fluid" alt="">
                                      
                                @else
                                    <img src="/img/default.png" class="radius-custom4 " alt="">
                                @endif
                                <div class="card-body tx-sec-color">
                                    <p class="card-text">{{__('ui.publicato')}}
                                        {{ $announcement->created_at->format('d/m/y') }}</p>
                                    <h5 class="card-title fs-2">{{ $announcement->title }}</h5>
                                    <p class="card-text fs-5">{{ $announcement->price }}???</p>
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
        </div>
    </div>

    {{-- carousel consigli --}}
    <div class="container-fluid bg-main-color">
        <div class="row text-center">
            <div class="col-12 mt-5">
                <h2 class="tx-thi-color">{{__('ui.consigli')}}</h2>
                <h2 class="tx-thi-color">{{__('ui.consigli2')}}
                </h2>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-12">
                <div class="last-ads mt-5">
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <i class="fas fa-unlock-alt fa-5x tx-main-color"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body py-4">
                                        <p class="card-text tx-sec-color fs-5 py-3">{{__('ui.proteggi')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <i class="fas fa-credit-card fa-5x tx-main-color"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body py-4">
                                        <p class="card-text tx-sec-color fs-5 py-3">{{__('ui.metodi')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <i class="fas fa-user-friends fa-5x tx-main-color"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body py-4">
                                        <p class="card-text tx-sec-color fs-5 py-3">{{__('ui.oggetto')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <i class="fas fa-money-bill-wave fa-5x tx-main-color"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body py-4">
                                        <p class="card-text tx-sec-color fs-5 py-3">{{__('ui.prezzo')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <i class="fas fa-grin-squint-tears fa-5x tx-main-color"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body py-4">
                                        <p class="card-text tx-sec-color fs-5 py-3">{{__('ui.cinese')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section2">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 my-5">
                    <h4 class="tx-for-color mt-5 py-3 fw-bold fs-1">{{__('ui.affari')}}</h4>
                </div>
            </div>
            <div class="row py-5 justify-content-evenly">
                <div class="col-4 my-3">
                    <img src="/img/finger.png" alt="" class="img-fluid animate__animated animate__wobble animate__infinite infinite animate__slow	2s">
                </div>
                <div class="col-4 my-3 align-items-center">
                    <a href="{{ route('announcement.create') }}" class="btn rounded-pill fs-3 px-5">{{__('ui.inserisci')}}</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center my-5">
                <div class="col-6 text-center">
                    <h4 class="tx-for-color tx-sec-color fw-bold fs-1">{{__('ui.contattaci')}}</h4>
                    <h4 class="tx-for-color tx-sec-color fw-bold fs-1">{{__('ui.dubbio')}}</h4>
                    <a href="{{ route('contattaci') }}" class="btn rounded-pill fs-3 px-5 mb-5">{{__('ui.scrivici')}}</a>
                </div>
                <div class="col-6 text-center my-5">
                    <img src="/img/mail.png" class="img-fluid animate__animated animate__pulse animate__infinite infinite animate__slow	2s" alt="">
                </div>
            </div>
        </div>
    </div>
</x-layout>
