<x-layout>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Index</h1>
            </div>
            @foreach ($announcements as $announcement)
                <div class="col-12 col-md-3">
                    <div class="card">
                        @if ($announcement->img)
                            <img src="{{ Storage::url($announcement->img) }}" class="card-img-top float-right"
                                alt="...">
                        @else
                            <img src="/img/default.jpg" class="card-img-top float-right" alt="">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p>Categoria : </p>
                            <a href="{{ route('announcement.category', ['category' => $announcement->category->id]) }}"
                                class="card-text"> {{ $announcement->category->name }}</a>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <p class="card-text">{{ $announcement->price }}</p>
                            <a href="{{ route('announcement.show', compact('announcement')) }}"
                                class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                {{ $announcements->links() }}
            </div>
        </div>
    </div>
</x-layout>
