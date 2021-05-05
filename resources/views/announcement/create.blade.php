<x-layout>
    <div class="container-fluid py-2 mt-5 bg-work">
        <div class="row">
            <div class="col-12 col-md-5 d-flex align-items-center text-center card ms-5">
                <div class="card-body">
                    <div class="text-center fs-1 fw-bold mt-3 tx-main-color">Hai qualcosa da vendere?</div>
                    <div class="text-center fs-4 fw-bold mt-3 tx-main-color">Inserisci subito il tuo annuncio ed inizia a guadagnare!

                    </div>
                    <form method="POST" action="{{ route('announcement.store') }}" enctype="multipart/form-data">
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
                       <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                        <div class="mb-3">
                            <label for="exampleInputtitle1" class="form-label mt-3"></label>
                            <input type="text" name="title" class="form-control text-center sbar" placeholder="Titolo Annuncio" id="exampleInputtitle1"
                                aria-describedby="titleHelp" value="{{old('title')}}">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label fw-bold tx-main-color">Seleziona categoria</label>
                            <select name="category" id="category" class="form-control sbar ">
                                @foreach ($categories as $category)
                                    <option class="text-center" value="{{ $category->id }}"> {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputprice1" class="form-label"></label>
                            <input type="number" name="price" class="form-control text-center sbar" placeholder="Inserisci Prezzo" id="exampleInputprice1" value="{{old('price')}}">
                        </div>
                        <div class="form-group row">
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
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"></label>
                            <textarea name="description" id="exampleInputEmail1" class="form-control text-center sbar" placeholder="Descrizione" cols="36"
                                rows="6">{{old('description')}}</textarea>
                        </div>
                        <button type="submit" class="btn rounded-pill py-2">Inserisci annuncio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>