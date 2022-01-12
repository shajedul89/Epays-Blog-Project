@extends('frontend.app')

@section('title')
    Contact
@endsection

@section('metadescription')
 I am vary much happy about my todays performance
@endsection

@section('main-content')





    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">contact</h2>
                        <ul class="page-list">
                            <li class="list-item"><a href="index.html">Home</a></li>
                            <li class="list-item"><a href="#">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact us area start -->
    <div class="contact-us-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="address-wrapper">
                        <ul class="address-list">
                            <li class="single-address-item">
                                <div class="content">
                                    <h5 class="title">address:</h5>
                                    <p class="info">{{ $settings->address }}</p>

                                </div>
                            </li>
                            <li class="single-address-item">
                                <div class="content">
                                    <h5 class="title">phone:</h5>
                                    <p class="info">{{ $settings->Contact }}</p>

                                </div>
                            </li>
                            <li class="single-address-item">
                                <div class="content">
                                    <h5 class="title">email:</h5>
                                    <p class="info">{{ $settings->email }}</p>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="get-in-touch-wrapper">
                        <h3 class="title">Have any Query? Send Message </h3>
                        <form>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" placeholder="First name" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputPasswor"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="exampleutEma"
                                            placeholder="Phone Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <textarea id="textarea1" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                <button type="submit" class="btn-default">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us area end -->

    <!-- map area start -->
    <div class="google-map-area">
        <iframe
        {!! htmlspecialchars_decode($settings->Maps) !!}
            width="2000" height="680" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- map area end -->

    @endsection
