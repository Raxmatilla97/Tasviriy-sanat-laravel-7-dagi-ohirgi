@extends('artuz.layouts.makets.admin.admin-maket')
    @section('left-navigation')


<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">

            <li class="nav-item">
                <a class="nav-item-hold" href="{{route('admin')}}">
                        <i class="nav-icon i-Bar-Chart"></i>
                        <span class="nav-text">Asosiy sahifa</span>
                    </a>
                    <div class="triangle"></div>
                </li>



            <li class="nav-item" data-item="yangilik">
            <a class="nav-item-hold" href="{{route('yangiliklar')}}" >
                    <i class="nav-icon i-File-Horizontal-Text"></i>
                    <span class="nav-text">Yangiliklar</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="{{route('talabalar.index')}}">
                        <i class="nav-icon i-Administrator"></i>
                        <span class="nav-text">Talabalar</span>
                    </a>
                    <div class="triangle"></div>
                </li>
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->
        <ul class="childNav" data-parent="yangilik">

            <li class="nav-item ">
                <a class=""
            href="{{ route('yangiliklar')}}">
                    <i class="nav-icon i-Letter-Open"></i>
            <span class="item-name">{{ __("Yangiliklar ro'yxati")}}</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class=""
            href="{{ route('yangilik.qoshish')}}">
                    <i class="nav-icon i-Clock-3"></i>
            <span class="item-name">{{ __("Yangilik qo'shish")}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="dashboard/dashboard2.html"
                    class="">
                    <i class="nav-icon i-Clock-4"></i>
                    <span class="item-name">{{ __("Yangiliklar bo'limlari")}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class=""
                    href="dashboard/dashboard3.html">
                    <i class="nav-icon i-Over-Time"></i>
                    <span class="item-name">{{ __("Yangiliklar sozlamlari")}}</span>
                </a>
            </li>

        </ul>






    </div>
    <div class="sidebar-overlay"></div>
</div>

@endsection
