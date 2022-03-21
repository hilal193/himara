@extends('layouts.app')

@section('content')
    {{-- @if (count($team) < 8)
        <div class="m-5 d-flex">

            <h1>Partie Admin Staf</h1>
            <a class="btn btn-primary m-auto " href="{{ route('images.create') }}">create</a>
        </div>
    @else
        <p>Maximum employés atteint</p>
    @endif --}}

    <div class="m-5 d-flex">

        <h1>Partie Admin Staf</h1>
        <a class="btn btn-primary m-auto " href="{{ route('teams.create') }}">create</a>
    </div>



    @foreach ($team as $item)
        <div class="col-md-12 col-sm-12">
            <div class="card">

                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">{{ $item->fullname }}</h4>
                        <p class="card-text">
                            {{ $item->description }}
                        </p>

                        <small class="text-muted">{{ $item->fonction->fonction }}</small>
                    </div>
                    <img class="card-img-bottom img-fluid" src="{{ asset('/storage/images/' . $item->img) }}" alt="Card image cap"
                        style="height: 20rem; object-fit: cover;">
                </div>

            </div>
        </div>
    @endforeach
@endsection
