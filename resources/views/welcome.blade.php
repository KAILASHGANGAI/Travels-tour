@extends('layouts.app')
@section('main-content')

@include('banners.welcome-banner')
<div class="space"></div>
@include('banners.multple-image-banner')

@include('includes.popular-temples')

@include('banners.text-image')

@include('includes.popular-places')

@include('includes.popular-packages')
@include('banners.video')
@endsection