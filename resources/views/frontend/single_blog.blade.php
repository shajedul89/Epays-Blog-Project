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
                        <h2 class="page-title">blog details</h2>
                        <ul class="page-list">
                            <li class="list-item"><a href="index.html">Home</a></li>
                            <li class="list-item"><a href="#">blog details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->


    <!-- blog details area start -->
    <div class="blog-details-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-box">
                        <h4 class="title">{{ $blogs ->title }}
                        </h4>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="content contact-1">
                        <div class="post-meta">
                            <ul class="list">
                                <li class="list-item">
                                    <a href="#">
                                        <i class="lar la-user icon"></i>
                                        <span class="text">{{ $blogs->Author->name }}</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <i class="lar la-clock icon"></i>
                                        <span class="text">{{ date('F d,Y',strtotime($blogs->created_at)) }}</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <i class="las la-tag icon"></i>
                                        <span class="text">{{ $blogs->postCat->name }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-box img-box-2">
                        <img src="{{-- {{ URL::to('')}}/media/post/ --}}{{ $blogs->images }}"  alt="image">
                    </div>




                    <!-- tag and social link area start -->
                    <div class="blog-details-tag-icon">
                        <div class="tag">
                            @foreach ($blogs->Tags as $t)
                            <a href="#" class="tag-btn">{{ $t->name }}</a>
                            @endforeach


                        </div>
                        <div class="icon">
                            <p class="name">share:</p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="lab la-facebook-f icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lab la-twitter icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lab la-pinterest-p icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lab la-linkedin-in icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- tag and social link area end -->

                    {!! htmlspecialchars_decode($blogs->description) !!}
                    <!-- comment area start -->
                    <div class="comment-area">
                        <div class="comment-pagination">
                            <ul class="pagination-main">
                                <li class="list">
                                    <a href="#">
                                        <i class="las la-arrow-left icon"></i>
                                        Prev Post
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="#">
                                        Next Post
                                        <i class="las la-arrow-right icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="comment-section-title">3 comments</h3>
                        <ul class="comment-list">
                            <li>
                                <div class="single-comment-wrap">
                                    <div class="thumb">
                                        <img src="{{ URL::to('')}}/img/blog-details/comment/03.jpg" alt="image">
                                    </div>
                                    <div class="content">
                                        <div class="content-top">
                                            <div class="left">
                                                <h4 class="title">bryana colon</h4>
                                                <ul class="post-meta">
                                                    <li class="meta-item">
                                                        <a href="#">
                                                            <i class="las la-calendar icon"></i>
                                                            20 june 2021
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="reply-btn"><i class="las la-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <p class="comment">Folly words widow one downs few age every seven. If miss part
                                            by fact he park just shew. Discovered had get considered projection who
                                            favourable.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="has-children">
                                <ul>
                                    <li>
                                        <div class="single-comment-wrap">
                                            <div class="thumb">
                                                <img src="{{ URL::to('')}}/img/blog-details/comment/02.jpg" alt="image">
                                            </div>
                                            <div class="content">
                                                <div class="content-top">
                                                    <div class="left">
                                                        <h4 class="title">bryana colon</h4>
                                                        <ul class="post-meta">
                                                            <li class="meta-item">
                                                                <a href="#">
                                                                    <i class="las la-calendar icon"></i>
                                                                    20 june 2021
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="right">
                                                        <a href="#" class="reply-btn"><i class="las la-reply"></i>
                                                            Reply</a>
                                                    </div>
                                                </div>
                                                <p class="comment">Folly words widow one downs few age every seven. If
                                                    miss part
                                                    by fact he park just shew. Discovered had get considered projection
                                                    who
                                                    favourable.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="single-comment-wrap">
                                    <div class="thumb">
                                        <img src="{{ URL::to('')}}/img/blog-details/comment/01.jpg" alt="image">
                                    </div>
                                    <div class="content">
                                        <div class="content-top">
                                            <div class="left">
                                                <h4 class="title">bryana colon</h4>
                                                <ul class="post-meta">
                                                    <li class="meta-item">
                                                        <a href="#">
                                                            <i class="las la-calendar icon"></i>
                                                            20 june 2021
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="reply-btn"><i class="las la-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <p class="comment">Folly words widow one downs few age every seven. If miss part
                                            by fact he park just shew. Discovered had get considered projection who
                                            favourable.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <!-- comment form area start -->
                        <div class="comment-form-area">
                            <h3 class="comment-section-title">post your comment</h3>

                            <form action="https://bytesed.com/tf/ozagi/blog-details.html" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="url" class="form-control" placeholder="Website" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control"
                                                placeholder="Comments" cols="30" rows="10" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="btn-wrapper">
                                            <button type="submit" class="btn-default">Post Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- comment form area end -->
                    </div>
                    <!-- comment area end -->
                </div>

                @include('frontend.sidebar')
            </div>

        </div>
    </div>
    <!-- blog details area end -->

    @endsection

