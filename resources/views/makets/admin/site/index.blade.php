
@extends('makets.admin.admin-maket')


{{-- Admin panel eng yuqori qismdagi menyu fragmenti --}}
@section('top-header')
     
     @include('admin.pages.top-header')

@endsection

{{-- Admin panel yon traf menyulari --}}
@section('sidebar-menyu')
     
     @include('admin.pages.sidebar-menyu')

@endsection

{{-- Admin panel asosiy o'zgaruvchan content qismi --}}
@section('content')
    
     @include('admin.pages.content')

@endsection 

{{-- Admin panel eng pastki footer qismi --}}
@section('chart-sidebar')
    
     @include('admin.pages.chart-sidebar')

@endsection 
