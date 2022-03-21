@extends('layout')

@section('title', 'Contact Us - WOKMENU')

@section('content')

<img src="{{ asset('images/contact/1.webp') }}" class="w-100 contact-image" data-aos="fade-left">

<div class="p-5 section" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="w-75">
                    <h1 class="text-white font-weight-bold"><b>NAME</b></h1>
                    <input type="text" class="form-control p-2 mb-4 text-capitalize rounded-0">
                    <h1 class="text-white font-weight-bold"><b>EMAIL</b></h1>
                    <input type="text" class="form-control p-2 mb-4 rounded-0">
                    <h1 class="text-white font-weight-bold"><b>PHONE NUMBER</b></h1>
                    <input type="phone" class="form-control p-2 mb-4 rounded-0">
                    <h1 class="text-white font-weight-bold"><b>SUBJECT</b></h1>
                    <input type="text" class="form-control p-2 mb-4 rounded-0">
                    <h1 class="text-white font-weight-bold"><b>MESSAGE</b></h1>
                    <textarea rows="6" class="form-control p-2 mb-4 rounded-0"></textarea>
                    <div class="text-center">
                        <button type="button" class="p-3 my-4 contact-button border-0 rounded">
                            <h1 class="font-weight-bold m-0"><b>SUBMIT</b></h1>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection