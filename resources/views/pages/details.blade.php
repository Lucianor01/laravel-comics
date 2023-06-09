@extends('layout.app')

@section('titlePage')
    Comics DC | Details
@endsection

@section('content')
    {{-- ! SECTION DETAILS 1 --}}
    <section>
        <div id="container-details">
            <div class="blue-line"></div>
            <div class="container">
                <div class="position-relative">
                    <img class="img-top" src="{{ $singleComics['thumb'] }}" alt="{{ $singleComics['title'] }}">
                </div>
                <div id="container-details-comics" class="p-4">
                    <div class="row my-4">
                        <div class="col-8">
                            <h2 class="card-title mb-3">{{ $singleComics['title'] }}</h2>
                            <div class="d-flex mb-3 price text-light justify-content-between">
                                <div class="col-9 border-end border-black">
                                    <div class="d-flex justify-content-between p-2 px-4">
                                        <div>
                                            <span class="c-green">U.S. Price:</span>
                                            <span>{{ $singleComics['price'] }}</span>
                                        </div>
                                        <div>
                                            <span class="c-green">AVAILABLE</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ms-2 p-2">
                                    <span>Check Availability &#9662;</span>
                                </div>
                            </div>
                            <p>{{ $singleComics['description'] }}</p>
                        </div>
                        <div class="col-4 right-container">
                            <h3 class="text-end">ADVERTISEMENT</h3>
                            <img class="float-end" src="{{ Vite::asset('resources/img/advertisement.jpg') }}"
                                alt="adv">
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="button-home" href="{{ route('home') }}">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ! SECTION DETAILS 2 --}}
    <section id="section-details-2">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4>Talent</h4>
                </div>
                <div class="col-6">
                    <h4>Specs</h4>
                </div>
            </div>
        </div>
    </section>
@endsection
