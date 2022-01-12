<!DOCTYPE html>
<html lang="en">

@php
    $settings= App\Models\settings::find(1)
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('metadescription')">


    @include('frontend.partials.style')

</head>

<body>
    <!-- preloader start -->
    {{-- @include('frontend.partials.preloader') --}}
    <!-- preloader end -->

    <!-- nav area start -->
    @include('frontend.menu')
    <!-- navbar area end -->

    @section('main-content')
    @show


    <!-- footer area start -->
    @include('frontend.footer')
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="scroll-to-top">
        <i class="fas fa-angle-up"></i>
    </div>
    <!-- back to top area end -->

  @include('frontend.partials.script');

</body>

</html>
