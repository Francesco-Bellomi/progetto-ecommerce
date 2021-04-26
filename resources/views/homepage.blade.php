<x-layout>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Homepage</h1>
            </div>
            @foreach ($announcements as $announcement)
                <div class="col-12 col-md-4">
                    <div class="card">
                        @if ($announcement->img)
                            <img src="{{ Storage::url($announcement->img) }}" class="card-img-top float-right"
                                alt="...">
                        @else
                            <img src="/img/default.jpg" class="card-img-top float-right" alt="">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text">Categoria : {{ $announcement->category->name }}</p>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <p class="card-text">{{ $announcement->price }}</p>
                            <a href="{{ route('announcement.show', compact('announcement')) }}"
                                class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
