<x-layout>
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-12">
                <h1>Inserisci il tuo annuncio</h1>
            </div>
            <div class="col-12 col-md-8">
                <form method="POST" action="{{ route('announcement.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">title </label>
                        <input type="text" name="title" class="form-control" id="exampleInputtitle1"
                            aria-describedby="titleHelp">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">title </label>
                        <select name="category" id="category">
                            @foreach ($categories as $category)

                                <option value="{{ $category->id }}"> {{ $category->name }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputprice1" class="form-label">price </label>
                        <input type="number" name="price" class="form-control" id="exampleInputprice1">

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea name="description" id="exampleInputEmail1" class="form-control" cols="36"
                            rows="6"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Inserisci Annnuncio</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
