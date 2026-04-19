@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div>
<main class="page_content">

    <!-- Page Banner -->
    <section class="page_banner text-center" 
    style="background-image:url('{{ $contact_detail->banner_image }}'); 
    background-repeat: no-repeat; 
    background-size: cover; 
    background-position: center; 
    width: 100%;">
        <div class="container decoration_wrap">
            <h1 class="page_title text-white">Contact Us</h1>
            <ul class="breadcrumb_nav unordered_list_center">
                <li><a href="{{ route('contact-us') }}" class="text-white" style="text-shadow: 0px 0px 20px #060606;">Home</a></li>
                <li class="text-white">Contact Us</li>
            </ul>
        </div>
    </section>

    <!-- Contact Detail Section -->
    <section class="about_section section_space_lg decoration_wrap">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image -->
                <div class="col col-lg-6 order-last order-lg-first text-center">
                    <div class="about_image decoration_wrap">
                        <img class="amin-up-down" 
                             src="{{ $contact_detail->quote_request_image }}" 
                             alt="{{ $contact_detail->heading }}">
                    </div>
                </div>

                <!-- Content -->
                <div class="col col-lg-6">
                    <div class="about_content mb-4 mb-lg-0">
                        <div class="section_heading">
                            <h3 class="heading_title">{{ $contact_detail->heading }}</h3>
                            <div class="row mt-3">
                                <div class="col col-md-12">
                                    <ul class="icon_list unordered_list_block">
                                        <li>
                                            <span class="list_item_text">{!! $contact_detail->description !!}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <livewire:contact-us/>
</main>
</div>
@endsection
