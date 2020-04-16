@extends('artuz.layouts.makets.admin.admin-maket')


{{-- Admin panel eng yuqori qismdagi menyu fragmenti --}}
@section('header-top-menyu')
     
     @include('artuz.layouts.admin.pages.header-top-menyu')

@endsection

{{-- Admin panel yon traf menyulari --}}
@section('left-navigation')
     
     @include('artuz.layouts.admin.pages.left-navigation')

@endsection

{{-- Admin panel asosiy o'zgaruvchan content qismi --}}
@section('content')
    
     @include('artuz.layouts.admin.pages.content')

@endsection 

{{-- Admin panel eng pastki footer qismi --}}
@section('footer')
    
     @include('artuz.layouts.admin.pages.footer')

@endsection 


{{-- Admin panel eng yuqori qidiruv formasi --}}

@section('ui-search')
    
     @include('artuz.layouts.admin.pages.ui-search')

@endsection 

{{-- Admin panel o'ng taraf holatni ozgartirish va Dark ko'rinishni berish funksiyasi --}}
@section('customizer')
    
     @include('artuz.layouts.admin.pages.customizer')

@endsection 
