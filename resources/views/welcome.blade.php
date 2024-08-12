@extends('layouts.app')
@section('main-content')

@include('banners.welcome-banner')
<div class="space"></div>
@include('banners.multple-image-banner')

@include('includes.poojas')
@include('includes.popular-temples')

@include('banners.text-image')

@include('includes.popular-places')

@include('includes.popular-packages')

@include('includes.blogs')

@include('banners.video')
@endsection

@section('scripts')
<script>
    window.onscroll = function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 20) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-orange');
        } else {
            navbar.classList.remove('bg-orange');
            navbar.classList.add('bg-transparent');
        }
    };
</script>
@endsection