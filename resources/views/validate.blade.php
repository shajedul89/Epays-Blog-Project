{{--Error Handling:--}}
{{----------------------------------------------------------}}
@if($errors -> any())

    {{-- <p class="alert alert-danger"> {{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p> --}}
    <script>
        swal('Validation Error','{{ $errors->first() }}','warning');
    </script>
@endif

{{--Success Message:--}}
{{--=====================================================--}}

@if(Session::Has('success'))

    {{-- <p class="alert alert-success"> {{Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p> --}}
<script>
    swal("Good job!", "{{Session::get('success') }}", "success");
</script>

@endif

@if(Session::Has('warning'))

    {{-- <p class="alert alert-success"> {{Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p> --}}
<script>
    swal("Validation Error!", "{{Session::get('warning') }}", "warning");
</script>

@endif



