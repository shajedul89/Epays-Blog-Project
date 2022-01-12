<!DOCTYPE html>
@extends('frontend.app')

@section('title')
   Home
@endsection

@section('metadescription')
 I am vary much happy about my todays performance
@endsection

@section('main-content')

@php
    $post=App\Models\post::latest()->first();
    $blog=App\Models\post::latest()->get()->take(5)->splice(1);
@endphp
   <!-- header area start -->
   <div class="header-area-wrapper">
    <div class="header-area index-04">
        <div class="container-fluid">
            <div class="row header-slider-index-04-inst">
                <div class="col-lg-12">
                    <div class="single-slid-item">
                        <div class="img-box" style="background-image: url({{ URL::to('')}}/img/header/index-04/01.jpg);">
                            <!-- <img src="{{ URL::to('')}}/img/header/index-04/01.jpg" alt="image"> -->
                            <div class="content">
                                <div class="post-meta">
                                    <ul class="list">
                                        <li class="list-item">
                                            <a href="#">
                                                <i class="las la-tag icon"></i>
                                                <span class="text">nature</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="title">
                                    <a href="#">Love is the flower you’ve got to let grow.</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-slid-item">
                        <div class="img-box" style="background-image: url({{ URL::to('')}}/img/header/index-04/02.jpg);">
                            <!-- <img src="{{ URL::to('')}}/img/header/index-04/02.jpg" alt="image"> -->
                            <div class="content">
                                <div class="post-meta">
                                    <ul class="list">
                                        <li class="list-item">
                                            <a href="#">
                                                <i class="las la-tag icon"></i>
                                                <span class="text">nature</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="title">
                                    <a href="#">Love is the flower you’ve got to let grow.</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-slid-item">
                        <div class="img-box" style="background-image: url({{ URL::to('')}}/img/header/index-04/03.jpg);">
                            <!-- <img src="{{ URL::to('')}}/img/header/index-04/03.jpg" alt="image"> -->
                            <div class="content">
                                <div class="post-meta">
                                    <ul class="list">
                                        <li class="list-item">
                                            <a href="#">
                                                <i class="las la-tag icon"></i>
                                                <span class="text">nature</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="title">
                                    <a href="#">Love is the flower you’ve got to let grow.</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header area end -->

<!-- blog area start -->
<div class="blog-list-flower-area-wrapper-index-04">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <div class="single-blog-list-nature">
                    <div class="img-box">
                        <img src="{{-- {{ URL::to('')}}/ --}} {{ $post->images }}" width="800px" alt="image">
                    </div>
                    <div class="content">
                        <h3 class="title">
                            <a href="#">{{ $post->title }}</a>
                        </h3>
                        <p class="info" style="text-align:justify">{{ $post->description }}</p>
                        <div class="post-meta">
                            <ul class="list">
                                <li class="list-item">
                                    <a href="#">
                                        <i class="las la-tag icon"></i>
                                        <span class="text">{{ $post->postCat->name }}</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <i class="lar la-comment icon"></i>
                                        <span class="text">comments</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <ul class="social-link">
                                        <li>
                                            <span class="sec">share:</span>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lab la-facebook-f icon-s"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lab la-instagram icon-s"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lab la-linkedin-in icon-s"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lab la-pinterest-p icon-s"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row grid">
                    @foreach ($blog as $b)


                    <div class="col-md-6 col-lg-6">
                        <div class="single-blog-list-nature">
                            <div class="img-box">
                                <img src="{{-- {{ URL::to('')}}/ --}} {{ $b->images }}" alt="image">
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    <a href="#">{{ $b->title }}</a>
                                </h3>
                                <div class="post-meta">
                                    <ul class="list">
                                        <li class="list-item">
                                            <a href="#">
                                                <i class="las la-tag icon"></i>
                                                <span class="text">{{ $b->postCat->name }}</span>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#">
                                                <i class="lar la-comment icon"></i>
                                                <span class="text">comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="add-banner-x add-4">
                            <a href="#">
                                <img src="{{ URL::to('')}}/img/add-banner/06.jpg" alt="image">
                            </a>
                        </div>
                    </div>
                </div>


            </div>


        @include('frontend.sidebar')
        </div>
    </div>
    <div class="highlight-index-04">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="img-box-wrap">
                    <div class="content">
                        <span class="link">
                            <a href="#">
                                <i class="lab la-instagram icon"></i>
                                <span class="title d-block">Follow us on Instagram</span>
                            </a>
                        </span>
                    </div>
                    <div class="img-box">
                        <img src="{{ URL::to('')}}/img/footer/index-04/04.jpg" alt="image">
                    </div>
                    <div class="img-box">
                        <img src="{{ URL::to('')}}/img/footer/index-04/02.jpg" alt="image">
                    </div>
                    <div class="img-box">
                        <img src="{{ URL::to('')}}/img/footer/index-04/05.jpg" alt="image">
                    </div>
                    <div class="img-box">
                        <img src="{{ URL::to('')}}/img/footer/index-04/03.jpg" alt="image">
                    </div>
                    <div class="img-box">
                        <img src="{{ URL::to('')}}/img/footer/index-04/01.jpg" alt="image">
                    </div>
                    <div class="img-box">
                        <img src="{{ URL::to('')}}/img/footer/index-04/06.jpg" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog area end -->

@endsection
</html>
