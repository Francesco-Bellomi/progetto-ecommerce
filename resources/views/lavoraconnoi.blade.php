<x-layout>
    <div class="container card mt-5">
        <div class="row justify-content-evenly">
            <div class="col-md-5 offset-md-2 d-flex align-items-center">
                <div class="card-body">
                    <div class="text-center fs-1 fw-bold mt-3 tx-main-color">Vuoi Lavorare con noi?</div>
                    <div class="text-center fs-4 fw-bold mt-3 tx-main-color">Richiedi subito di divendare un revisionatore di annunci</div>
                    <form method="POST" action="{{route('lavoraconnoi.submit')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label"></label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Nome">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"></label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputmessage" class="form-label"></label>
                            <textarea name="message" id="exampleInputmessage" cols="36" class="form-control" rows="10"  placeholder="Scrivi perchè vorresti lavorare con noi"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class=" btn rounded-pill">Inoltra la Richiesta</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 p-0">
                <img src="/img/smoketransparent.png" alt="..." class="">
            </div>
        </div>
    </div>
</x-layout>
