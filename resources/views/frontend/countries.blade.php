@extends('frontend.layouts.master')

@section('content')
    <div class="background">
        <h1 class="page_title">{{ __('Countries') }}</h1>
    </div>

    <div class="container">
        <div class="projcard-container">
            @foreach ($countries as $country)
                <?php
                $maxLength = 600; // Set your desired maximum length
                
                // Get the raw content and strip all tags
                $strippedContent = strip_tags($country->content);
                
                // Decode HTML entities to handle double encoding
                $decodedContent = htmlspecialchars_decode($strippedContent);
                
                // Escape HTML entities
                $escapedContent = htmlspecialchars($decodedContent);
                
                // Take a substring of the escaped content
                $trimmedContent = substr($escapedContent, 0, $maxLength);
                ?>

                <div class="projcard projcard-blue">
                    <div class="projcard-innerbox">

                        @if ($country->image)
                            <img class="sample_page_image" src="{{ asset('uploads/country/' . $country->image) }}"
                                alt="Country Image">
                        @else
                            <img src="{{ asset('image/girl.jpg') }}" class="projcard-img" alt="">
                        @endif

                        <img class="projcard-img" src="{{ asset('uploads/country/' . $country->image) }}" />

                        <div class="projcard-textbox">
                            <div class="projcard-title">{{ $country->name }}</div>
                            {{-- <div class="projcard-subtitle">This explains the card in more detail</div> --}}
                            <div class="projcard-bar"></div>
                            <div class="projcard-description">{{ $trimmedContent }}...</div>
                            {{-- <div class="projcard-tagbox"> --}}

                            <a href="{{ route('singleCountry', ['slug' => $country->slug]) }}">
                                <button class="button bg-primary third m-auto">Read More &nbsp;&nbsp;<i
                                        class="fa-solid fa-arrow-right"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
