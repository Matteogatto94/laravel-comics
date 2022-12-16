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

<section class="banner_list bg-primary">
    <div class="container text-white text-center">
        <div class="row">
            <div class="col">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span>DIGITAL COMICS</span>
            </div>

            <div class="col">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span>DC MERCHANDISE</span>
            </div>

            <div class="col">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span>SUBSCRIPTION</span>
            </div>

            <div class="col">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="" class="locator">
                <span>COMIC SHOP LOCATOR</span>
            </div>

            <div class="col">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
</section>
@endsection