<x-layout>


    <div class="container card mt-5">
        <div class="row justify-content-evenly">
            <div class="col-12 col-md-5 p-0">
                <img src="/img/smoketransparent.png" alt="..." class="">
            </div>
            <div class="col-12 col-md-5 offset-md-2 d-flex align-items-center">
                <div class="card-body">
                    <div class="text-center fs-1 fw-bold mt-3 tx-main-color">Login</div>
                    <div class="text-center fs-4 fw-bold mt-3 tx-sec-color"> Non sei ancora registrato? <a
                            href="{{ route('register') }}" class="text-decoration-none tx-main-color">Iscriviti ora</a>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label"></label>
                            <input name="email" type="email" class="form-control text-center" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        @error(session('email'))
                              <div class="text-center fs-5   tx-thi-color bg-four-color">
                                La email non è presente
                            </div>
                        @enderror
                        <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label"></label>
                            <input name="password" type="password" class="form-control text-center"
                                id="exampleInputPassword1" placeholder="Password">
                        </div>
                        @error(session('password'))
                              <div class="text-center fs-5   tx-thi-color bg-four-color">
                                La password è sbagliata
                            </div>
                        @enderror

                        <div class="text-center">
                            <button type="submit" class=" btn rounded-pill my-3">Fai Plesto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
