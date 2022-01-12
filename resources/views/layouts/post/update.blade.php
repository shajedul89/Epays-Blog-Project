@extends('layouts.app')

@section('main-content')

<div class="page-wrapper">

    <div class="content container-fluid">
@include('validate')
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome {{ Auth::user()->name }}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">

                <div class="col-md-10">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h4 class="card-title">Update  Post</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Post Title</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Categories</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select"  name="cat">

                                            <option value="{{ $post->postCat->id }}">{{ $post->postCat->name }}</option>

                                            @foreach ($post_category as $p_cat )

                                            <option  value= "{{ $p_cat->id  }}">{{ $p_cat->name }}</option>
                                            @endforeach


                                        </select>




                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Select Tag</label>
                                    <div class="col-md-8">
                                        @foreach ($post_tags as $ptag )
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="{{ $ptag->id }}" name="tags[]"
                                                @foreach ($post->Tags as $t )
                                                @if ($ptag->id == $t->id)
                                                checked

                                                @endif
                                                @endforeach


                                                > {{ $ptag->name }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Post Content</label>
                                    <div class="col-md-9">
                                        <textarea rows="5" cols="5" name="content"  class="form-control" id="ckeditor" placeholder="Enter text here"> {{ $post->description }}</textarea>
                                    </div>
                                </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Featured image</label>
                                        <div class="col-md-9">
                                            <label for="fimg" id="first"><img src="{{ URL::to('')}}/media/post/{{ $post->images }}" style="width:100px;cursor: pointer"/></label>
                                            <input class="form-control" type="hidden" name="old_image" value="{{ $post->images }}"  id="" style="display: none">
                                            <input class="form-control" type="file" name="new_image" id="fimg" style="display: none">
                                            <img src="" alt="" id="feather_img" style="max-width:30%;display:block">
                                            <label for="fimg" style="display: ;margin-bottom: 15px" id="second"><span class="btn btn-sm btn-primary mt-2 "> Change Image</span></label>
                                        </div>
                                    </div>


                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>

@endsection


