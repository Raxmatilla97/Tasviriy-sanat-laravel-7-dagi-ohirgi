

@extends('artuz.layouts.makets.front.sayt')

@section('navigation')
     
     @include('artuz.layouts.front.pages.navigation')

@endsection


@section('sliders')
    
     @include('artuz.layouts.front.pages.sliders')

@endsection



@section('info-intro')
    
     @include('artuz.layouts.front.pages.info-intro')

@endsection


@section('info-banner')
    
     @include('artuz.layouts.front.pages.info-banner')

@endsection



@section('articles')
    
     @include('artuz.layouts.front.pages.articles')

@endsection

@section('info-2-gramma')
    
     @include('artuz.layouts.front.pages.info-2-gramma')

@endsection


@section('gallereya')
    
     @include('artuz.layouts.front.pages.gallereya')

@endsection


@section('video-section')
    
     @include('artuz.layouts.front.pages.video-section')

@endsection

{{-- @section('slider')

     @include('artuz.layouts.front.');

@endsection --}}


@section('content')
    
     @include('artuz.layouts.front.pages.content')

@endsection


{{-- @section('bar')
	{!! $rightBar !!}
@endsection

@section('footer')
	{!! $footer !!}
@endsection --}}

