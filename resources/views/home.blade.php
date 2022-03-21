@extends('layout')

@section('title', 'Home - WOKMENU')

@section('content')
<div id="indicators" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#indicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#indicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#indicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#indicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/carousel/1.webp') }}" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/carousel/2.webp') }}" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/carousel/3.webp') }}" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/carousel/4.webp') }}" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#indicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#indicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="p-5 section" data-aos="fade-left">
    <div class="container border border-white">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 class="breathe-font text-white" id="taste-of-asia">TASTE OF ASIA</h1>
        </div>
        <div class="px-5">
            <p class="text-white text-center h1 px-5">
                ORIGINAL ASIAN TASTE IN EVERY DISH WITH A MODERN TWIST. <br>WE SPECIALIZE IN THAI AND VIETNAMESE DISHES AND DESSERTS!
            </p>
        </div>
    </div>
</div>

<div class="p-5 bg-black" data-aos="fade-right">
    <div class="container">
        <div class="row p-5">
            @for ($x = 1; $x <= 4; $x++)
            <div class="col-3 text-center item">
                <a data-fslightbox="gallery" href="{{ asset('images/gallery/'.$x.'.webp') }}">
                    <img class="img-fluid border-0 gallery-image mb-3" src="{{ asset('images/gallery/'.$x.'.webp') }}" data-aos="fade-up">
                </a>
            </div>
            @endfor
        </div>
    </div>
</div>

<div class="p-5 bg-transparent" data-aos="fade-up">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('images/map.webp') }}" class="w-75">
        </div>
        <br>
        <p class="h1 text-center text-black">123 MAIN ST. WESTMINSTER CA 92683</p>
        <p class="h2 text-center text-black">MON-FRI: 9AM-7PM | SAT-SUN: 11AM-9PM</p>
    </div>
</div>
@endsection