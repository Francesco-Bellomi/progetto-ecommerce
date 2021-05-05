{{-- <x-layout>
    <div class="container-fluid py-2 mt-5 bg-work">
        <div class="row">
            <div class="col-12 col-md-5 d-flex align-items-center text-center card ms-5">
                <div class="card-body">
                    <div class="text-center fs-1 fw-bold mt-3 tx-main-color">Modifica il tuo
                        annuncio!
                    </div>
                    <form method="POST" action="{{ route('announcement.update', compact('announcement')) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3 tx-main-color mt-3">
                            <label for="exampleInputtitle1" class="form-label fw-bold">Modifica titolo</label>
                            <input type="text" name="title" class="form-control sbar text-center" id="exampleInputtitle1"
                                aria-describedby="titleHelp" value="{{ $announcement->title }}">
                        </div>
                        <div class="mb-3 tx-main-color">
                            <label for="category" class="form-label fw-bold">Modifica categoria</label>
                            <select name="category" class="form-control sbar text-center" id="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 tx-main-color">
                            <label for="exampleInputprice1" class="form-label fw-bold">Modifica prezzo</label>
                            <input type="number" name="price" class="form-control sbar text-center" id="exampleInputprice1"
                                value="{{ $announcement->price }}">
                        </div>
                        <div class="mb-3 tx-main-color">
                            <label for="exampleInputimage" class="form-label fw-bold">Cambia immagine annuncio</label>
                            <input type="file" name="img" class="form-control sbar text-center" id="exampleInputimage">
                            @if ($announcement->img)
                                <img src="{{ Storage::url($announcement->img) }}"
                                    class="card-img-top img-fluid float-right" alt="...">
                            @else
                                <img src="/img/default.jpg" class="card-img-top float-right img-fluid" alt="">
                            @endif
                        </div>
                        <div class="mb-3 tx-main-color">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Modifica descrizione</label>
                            <textarea name="description" id="exampleInputEmail1" class="form-control sbar " cols="36"
                                rows="6">{{ $announcement->description }}</textarea>
                        </div>
                        <button type="submit" class="btn rounded-pill">Modifica annuncio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout> --}}

<x-layout>
    <div class="container-fluid py-2 mt-5 bg-work3">
        <div class="row">
            <div class="col-12 col-md-5 d-flex align-items-center text-center card ms-5">
                <div class="card-body">
                    <div class="text-center fs-1 fw-bold mt-3 tx-main-color">Modifica il tuo
                        annuncio!
                    </div>
                    <form method="POST" action="{{ route('announcement.update', compact('announcement')) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @if ($errors->any())
                            <div class="alert alert-custom">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                       {{-- <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}"> --}}
                        <div class="mb-3 tx-main-color mt-3">
                            <label for="exampleInputtitle1" class="form-label fw-bold">Modifica titolo</label>
                            <input type="text" name="title" class="form-control sbar text-center" id="exampleInputtitle1"
                                aria-describedby="titleHelp" value="{{ $announcement->title }}">
                        </div>
                        <div class="mb-3 tx-main-color">
                            <label for="category" class="form-label fw-bold">Modifica categoria</label>
                            <select name="category" class="form-control sbar text-center" id="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 tx-main-color">
                            <label for="exampleInputprice1" class="form-label fw-bold">Modifica prezzo</label>
                            <input type="number" name="price" class="form-control sbar text-center" id="exampleInputprice1"
                                value="{{ $announcement->price }}">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="exampleInputimage" class="form-label"></label>
                            <input type="file" name="img" class="form-control text-center sbar" id="exampleInputimage" placeholder="Aggiungi Immagine">
                        </div>  --}}
                        {{-- <div class="form-group row">
                            <label for="images" class="col-md-12 col-form-label text-md-right fw-bold tx-main-color">
                                <input type="hidden" name="images" id="images">
                                Carica le tue immagini
                            </label>
                            <div class="col-md-12">
                                <div class="dropzone sbar" id="drophere"></div>
                                @error('images')
                                    <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="mb-3 tx-main-color">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Modifica descrizione</label>
                            <textarea name="description" id="exampleInputEmail1" class="form-control sbar " cols="36"
                                rows="6">{{ $announcement->description }}</textarea>
                        </div>
                        <button type="submit" class="btn rounded-pill">Modifica annuncio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
