{{-- <x-layout>
  <h1>Login</h1>
    <section class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn ">Submit</button>
                  </form>
            </div>
        </div>
    </section>
</x-layout> --}}


<x-layout>
  <div class="container card mt-5">
    <div class="row justify-content-evenly">
      <div class="col-md-5 p-0">
        <img src="/img/smoketransparent.png" alt="..." class="">
      </div>
      <div class="col-md-5 offset-md-2 d-flex align-items-center">
        <div class="card-body">
          <div class="text-center fs-1 fw-bold mt-3 tx-main-color"> Login</div>
          <div class="text-center fs-4 fw-bold mt-3 tx-main-color"> Non sei ancora registrato? <a href="{{route('register')}}">fallo ora</a></div>
          <form method="POST" action="{{route('login')}}">
            @csrf
            
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"></label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"></label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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