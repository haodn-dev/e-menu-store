<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.head')
<body class="container-fluid">
{{--the page got sidebar on the left with header ontop right with boootstrap --}}
<div class="row">
    <div class="col-md-2">
        @include('components.sidebar')
    </div>
    <div class="col-md-10">
        <div class="right-content-container">
            <div class="right-content">
                @include('components.header')
                @yield('content')
            </div>
        </div>
    </div>
</div>
@include('components.footer')
</body>
</html>
