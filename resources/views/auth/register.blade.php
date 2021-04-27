<x-layout>

<div class="container card mt-5">
  <div class="row justify-content-evenly">
    <div class="col-md-5 p-0">
      <img src="/img/smoketransparent.png" alt="..." class="">
    </div>
    <div class="col-md-5 offset-md-2 d-flex align-items-center">
      <div class="card-body">
        <div class="text-center fs-1 fw-bold mt-3 tx-main-color"> Registrati</div>
        <form method="POST" action="{{route('register')}}">
          @csrf
          <div class="mb-3">
              <label for="name" class="form-label"></label>
              <input name="name" type="text" class="form-control" id="name" placeholder="Nome">
            </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"></label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="mb-3">
              <label for="exampleInputPasswordConfirm" class="form-label"></label>
              <input name="password_confirmation" type="password" class="form-control" id="exampleInputPasswordConfirm" placeholder="Conferma Password">
            </div>
            <div class="text-center">
              <button type="submit" class=" btn rounded-pill">Fai Plesto</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</x-layout>