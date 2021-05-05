<x-layout>
    <div class="container-fluid py-2 mt-5 bg-work2">
        <div class="row">
            <div class="col-12 col-md-5 d-flex align-items-center text-center card ms-5">
                <div class="card-body">
                    <div class="text-center fs-1 fw-bold mt-3 tx-main-color">{{__('ui.sapere')}}</div>
                    <div class="text-center fs-4 fw-bold mt-3 tx-main-color">{{__('ui.informazioni')}}</div>
                    <form method="POST" action="{{route('lavoraconnoi.submit')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label"></label>
                            <input name="name"  type="text" class="form-control text-center sbar" id="name" placeholder="{{__('ui.nome')}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"></label>
                            <input name="email"  type="email" class="form-control text-center sbar" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputmessage" class="form-label"></label>
                            <textarea name="message" id="exampleInputmessage" cols="36" class="form-control text-center sbar" rows="10"  placeholder="{{__('ui.dubbio')}}"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class=" btn rounded-pill py-2">{{__('ui.inoltra')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</x-layout>