<!DOCTYPE html>
<html lang="en">

<head>

   @include('layouts.head')

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
   @include('layouts.header')
    <!-- /Header -->

    <!-- Sidebar -->
   @include('layouts.menu')
    <!-- /Sidebar -->

    <!-- Page Wrapper -->

 @section('main-content')
 @show
    <!-- /Page Wrapper -->



<form id="logout_form" action="{{route('logout')}}" method="POST" class="d-none">
    @csrf

</form>


</div>

@include('layouts.partials.script')

</body>


</html>
