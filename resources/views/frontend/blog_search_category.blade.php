@extends('frontend.app')

@section('title')
   Blog
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
                        <h2 class="page-title">nature blog</h2>
                        <ul class="page-list">
                            <li class="list-item"><a href="index.html">Home</a></li>
                            <li class="list-item"><a href="#">nature</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- blog grid nature area start -->
    <div class="blog-grid-nature">
        <div class="container">
            <div class="row">
                @foreach ($blog  as $b )


                <div class="col-lg-4">
                    <div class="blog-list-flower-area-wrapper-index-04 ">
                        <div class="grid">
                            <div class="single-blog-list-nature">
                                <div class="img-box">
                                   <a href="{{ url('blogSingleView',$b->id) }}"> <img src="{{-- {{ URL::to('')}}/media/post/ --}}{{ $b->images }}" alt="image"></a>
                                </div>
                                <div class="content">
                                    <h3 class="title">
                                        <a href="{{ url('blogSingleView',$b->id) }}">{{ $b->title }}</a>
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
                                                    <span class="text">{{ $b->Author->name }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-lg-4">
                    <div class="btn-wrapper text-center margin-top-10">
                        <div class=" transparent v-3-r">{{ $blog->links() }}</div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <!-- blog grid nature area end -->

  @endsection
