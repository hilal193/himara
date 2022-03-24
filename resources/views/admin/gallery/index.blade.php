@extends('layouts.app')

@section('content')
@include('layouts.flash')

<div class="d-flex p-2 m-2">
<h1>Partie Admin Gallery</h1>

    <a class="btn btn-primary m-auto" href="{{ route("images.create") }}">create</a>

</div>


{{-- <section class="section">
    <div class="row">
        @foreach ($imageAll as $item)
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $item->nom }}</h4>
                    <p>{{ $item->url }}</p>
                </div>
                <div class="card-body">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img src="{{ asset('/images/gallery/'. $item->url) }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item active">
                                <img src="{{ asset('/images/gallery/'. $item->url) }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @endforeach


    </div>
</section> --}}

<section id="content-types">
    <div class="row">
        @foreach ($imageAll as $item)
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img-top img-fluid" src="{{ asset('/storage/images/'. $item->url) }}" alt="Card image cap" style="height: 20rem">
                    <div class="card-body">
                        <h4 class="card-title">{{ $item->nom }}</h4>
                        <p class="card-text">
                          {{ $item->nom}}
                        </p>
                        <p class="card-text">
                           {{ $item->url}}
                        </p>
                        <form action="{{ route('images.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger block">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</section>


@endsection



