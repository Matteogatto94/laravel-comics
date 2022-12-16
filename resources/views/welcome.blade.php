@extends('layouts.app')

@section('content')
<div class="jumbotron"></div>
<div class="container">
    <button type="button" class="btn btn-primary btn-lg">CURRENT SERIES</button>

    <div class="row row-cols-md-6 g-4 mt-4 text-center">

        @forelse($comics as $comic)
        <div class="col">
            <img class="card-img-top" src="{{ $comic['thumb'] }}">
            <p>{{$comic['series']}}</p>
        </div>
        @empty
        <div class="col">
            <p>No comics in this show yet.</p>
        </div>
        @endforelse
    </div>
    <div class="button_bottom d-flex justify-content-center">
        <button type="button" class="btn btn-primary">LOAD MORE</button>
    </div>
</div>
@endsection