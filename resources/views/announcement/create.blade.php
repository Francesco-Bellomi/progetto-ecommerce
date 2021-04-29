{{-- <x-layout>
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-12">
                <h1 class="text-center tx-main-color fw-bold py-5 display-1">Inserisci il tuo annuncio</h1>
            </div>
            <div class="col-12 col-md-8 text-center fs-3">
                <form method="POST" action="{{ route('announcement.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="exampleInputtitle1"
                            aria-describedby="titleHelp">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Seleziona categoria</label>
                        <select name="category" id="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputprice1" class="form-label">Prezzo</label>
                        <input type="number" name="price" class="form-control" id="exampleInputprice1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputimage" class="form-label">Aggiungi Immagine</label>
                        <input type="file" name="img" class="form-control" id="exampleInputimage">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Descrizione</label>
                        <textarea name="description" id="exampleInputEmail1" class="form-control" cols="36"
                            rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn rounded-pill">Inserisci annuncio</button>
                </form>
            </div>
        </div>
    </div>
</x-layout> --}}


<x-layout>
    <div class="container py-2 card mt-5 bg-work">
        <div class="row justify-content-evenly">
            <div class="col-md-5  d-flex align-items-center text-center">
                <div class="card-body">
                    <div class="text-center fs-1 fw-bold mt-3 tx-sec-color">Hai qualcosa da vendere?</div>
                    <div class="text-center fs-4 fw-bold mt-3 tx-sec-color">Inserisci subito il tuo annuncio ed inizia a guadagnare!</div>
                    <form method="POST" action="{{ route('announcement.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputtitle1" class="form-label mt-3"></label>
                            <input type="text" name="title" class="form-control text-center sbar" placeholder="Titolo Annuncio" id="exampleInputtitle1"
                                aria-describedby="titleHelp">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label  fw-bold">Seleziona categoria</label>
                            <select name="category" id="category" class="form-control sbar ">
                                @foreach ($categories as $category)
                                    <option class="text-center" value="{{ $category->id }}"> {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputprice1" class="form-label"></label>
                            <input type="number" name="price" class="form-control text-center sbar" placeholder="Inserisci Prezzo" id="exampleInputprice1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputimage" class="form-label"></label>
                            <input type="file" name="img" class="form-control text-center sbar" id="exampleInputimage" placeholder="Aggiungi Immagine">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"></label>
                            <textarea name="description" id="exampleInputEmail1" class="form-control text-center sbar" placeholder="Descrizione" cols="36"
                                rows="6"></textarea>
                        </div>
                        <button type="submit" class="btn rounded-pill">Inserisci annuncio</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-layout>