<x-layout>
  <h1>Registrati</h1>
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
    </section>
</x-layout>