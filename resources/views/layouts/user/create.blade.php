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

                            <h4 class="card-title">Create  User</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="name"  class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Email</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="email"  class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Phone</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="phone"  class="form-control">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">User Role</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select" name="role">


                                            <option   value="editor">Editor</option>
                                            <option  value="commentor">Commentor</option>
                                            <option  value="admin">Admin</option>

                                        </select>


                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Confirm Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" name="conf_password" class="form-control">
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


