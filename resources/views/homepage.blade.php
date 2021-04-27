<x-layout>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="font-weight-light">Vertically Centered Masthead Content</h1>
          <p class="lead">A great starter layout for a landing page</p>
        </div>
      </div>
    </div>
  </header>
  <div class="container bg-main-color py-5 my-5 radius-custom">
    <div class="row text-center">
      <div class="col-12">
          <div class="row justify-content-around">
            <div class="col-6 col-md-6">
              <p class="fs-4">Cosa cerchi?</p>
            </div>
            <div class ="col-6 col-md-6">
              <p class="fs-4">Che categoria cerchi?</p>
            </div>
            <div class="col-6 col-md-3">
              <input class="sbar form-control" type="search" placeholder="Search" aria-label="Search">
            </div>
            <div class ="col-6 col-md-3">
              <select class="sbar form-control" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
      </div> 
    </div>
  </div>
    <div class="section1 d-flex align-items-center">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h3>Ultimi 5 annunci</h3>
                </div>
                    <div class="last-ads mt-5">
                        @foreach ($announcements as $announcement)
                            <div class="col-12">
                                <div class="card me-5 radius-custom2 text-center my-5">
                                    @if ($announcement->img)
                                        <img src="{{ Storage::url($announcement->img) }}" class="card-img-top float-right"
                                            alt="...">
                                    @else
                                        <img src="/img/default.jpg" class="card-img-top float-right" alt="">
                                    @endif
                                    <div class="card-body tx-sec-color">
                                        <p class="card-text">Pubblicato il : {{ $announcement->created_at->format('d/m/y') }}</p>
                                        <h5 class="card-title fs-2">{{ $announcement->title }}</h5>
                                        <p class="card-text fs-5">{{ $announcement->price }}€</p>
                                        <a href="{{ route('announcement.show', compact('announcement')) }}"
                                            class="btn rounded-pill">Go somewhere</a>
                                    </div>
                                    <div class="card-footer bg-main-color radius-custom3 tx-thi-color fs-5">
                                        <p class="card-text">Categoria : <a
                                            href="{{ route('announcement.category', ['category' => $announcement->category->id]) }}"
                                            class="card-text"> {{ $announcement->category->name }}</a></p>
                                      </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-main-color">
        <div class="row mt-5">
            <div class="col-12">
                <div class="last-ads mt-5">
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                              <div class="col-md-4 d-flex justify-content-center">
                                <i class="fas fa-bullhorn fa-5x tx-main-color"></i>
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title text-center fw-bold">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                              <div class="col-md-4 d-flex justify-content-center">
                                <i class="fas fa-bullhorn fa-5x tx-main-color"></i>
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title text-center fw-bold">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                              <div class="col-md-4 d-flex justify-content-center">
                                <i class="fas fa-bullhorn fa-5x tx-main-color"></i>
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title text-center fw-bold">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                              <div class="col-md-4 d-flex justify-content-center">
                                <i class="fas fa-bullhorn fa-5x tx-main-color"></i>
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title text-center fw-bold">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div>
                        <div class="card mb-3 me-5">
                            <div class="row g-0 align-items-center">
                              <div class="col-md-4 d-flex justify-content-center">
                                <i class="fas fa-bullhorn fa-5x tx-main-color"></i>
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title text-center fw-bold">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-layout>