<x-layout>
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-12">
                <h1 class="text-center tx-main-color fw-bold py-5 display-1">Modifica il tuo annuncio</h1>
            </div>
            <div class="col-12 col-md-8 text-center fs-3">
                <form method="POST" action="{{ route('announcement.update', compact('announcement')) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">Modifica titolo</label>
                        <input type="text" name="title" class="form-control" id="exampleInputtitle1"
                            aria-describedby="titleHelp" value="{{ $announcement->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Modifica categoria</label>
                        <select name="category" id="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputprice1" class="form-label">Modifica prezzo</label>
                        <input type="number" name="price" class="form-control" id="exampleInputprice1" value="{{ $announcement->price }}">
                    </div>
                    <div class="mb-3">
                        @if ($announcement->img)
                            <img src="{{ Storage::url($announcement->img) }}" class="card-img-top img-fluid float-right"
                                alt="...">
                        @else
                            <img src="/img/default.jpg" class="card-img-top float-right img-fluid" alt="">
                        @endif
                        <label for="exampleInputimage" class="form-label">Cambia immagine annuncio</label>
                        <input type="file" name="img" class="form-control" id="exampleInputimage">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Modifica descrizione</label>
                        <textarea name="description" id="exampleInputEmail1" class="form-control" cols="36"
                            rows="6">{{ $announcement->description }}</textarea>
                    </div>
                    <button type="submit" class="btn rounded-pill">Modifica annuncio</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
