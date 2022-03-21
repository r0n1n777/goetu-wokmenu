@extends('layout')

@section('title', 'Location - WOKMENU')

@section('content')

<img src="{{ asset('images/location/1.webp') }}" class="w-100 location-image" data-aos="fade-left">

<img src="{{ asset('images/location/2.webp') }}" class="w-100 location-image" data-aos="fade-right">

<div class="p-5 bg-transparent" data-aos="fade-up">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('images/map.webp') }}" class="w-75">
        </div>
        <br>
        <p class="h1 text-center text-black">123 MAIN ST. WESTMINSTER CA 92683</p>
        <p class="h2 text-center text-black">MON-FRI: 9AM-7PM | SAT-SUN: 11AM-9PM</p>
        <br>
        <p class="h1 text-center text-black">
            <a class="text-dark text-decoration-none" href="https://www.yelp.com" target="_blank">
                YELP.COM/BIZ/LAWOK
            </a>
        </p>
        <p class="h1 text-center text-black">
            <a class="text-dark text-decoration-none" href="https://www.facebook.com/wokmenu" target="_blank">
                FACEBOOK.COM/LAWOK
            </a>
        </p>
        <p class="h1 text-center text-black">
            <a class="text-dark text-decoration-none" href="https://www.instagram.com" target="_blank">
                INSTAGRAM.COM/LAWOK
            </a>
        </p>
    </div>
</div>
@endsection