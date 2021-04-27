<x-layout>
  {{-- <h1>Registrati</h1>
    <section class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPasswordConfirm" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="exampleInputPasswordConfirm">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </section> --}}


<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="POST" action="{{route('register')}}">
              @csrf
              <div class="form-label-group">
                <label for="name" class="form-label"></label>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Nome">
              </div>

              <div class="form-label-group">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              
              <hr>

              <div class="form-label-group">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
              </div>
              
              <div class="form-label-group">
                <label for="exampleInputPasswordConfirm" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="exampleInputPasswordConfirm">
              </div>
              <div class="text-center">
                <button class="btn bg-main-color px-3 fs-5" type="submit">Register</button>
              </div>
              
              {{-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


<div class="container card">
  <div class="row justify-content-evenly">
    <div class="col-md-5 p-0">
      <img src="/img/smoketransparent.png" alt="..." class="">
    </div>
    <div class="col-md-5 offset-md-2 d-flex align-items-center">
      <div class="card-body">
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
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</x-layout>