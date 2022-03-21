@extends('layout')

@section('title', 'Menu - WOKMENU')

@section('content')
<div class="p-5 section" data-aos="fade-left">
    <div class="container">
        <div class="px-5 text-center">
            <h1 class="text-white menu-title">THAI MENU</h1>
        </div>
        <div class="px-5">
            <p class="h1 text-white text-start">
                TOM YUM... $10<br>
                CHICKEN CURRY... $10<br>
                FISH NAMTOK... $20<br>
                PAD PAK BONG... $11<br>
                GREEN CURRY... $10
            </p>
        </div>
    </div>
</div>

<div class="p-5 bg-transparent" data-aos="fade-up">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-6">
                <img src="{{ asset('images/menu/1.webp') }}" class="img-fluid">
            </div>
            <div class="col-6">
                <img src="{{ asset('images/menu/2.webp') }}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="p-5 section" data-aos="fade-right">
    <div class="container">
        <div class="px-5 text-center">
            <h1 class="text-white menu-title">VIETNAMESE MENU</h1>
        </div>
        <div class="px-5">
            <p class="h1 text-white text-end">
                SPRING ROLLS... $6<br>
                PHO NOODLES... $10<br>
                DRY RICE VERMICELLI... $10<br>
                BRAISED FISH... $15<br>
                BRAISED PORK... $15
            </p>
        </div>
    </div>
</div>

<div class="p-5 bg-transparent" data-aos="fade-up">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-6">
                <img src="{{ asset('images/menu/3.webp') }}" class="img-fluid">
            </div>
            <div class="col-6">
                <img src="{{ asset('images/menu/4.webp') }}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

@endsection