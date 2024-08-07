@extends('makets.admin.app')
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
                    <span class="nav-text">AXBOROT</span>
                </a>
                <div class="triangle"></div>
            </li>
            
         

                <li class="nav-item " data-item="ukituvchilar">
                    <a class="nav-item-hold" href="lists.html#">
                        <i class="nav-icon i-Library"></i>
                        <span class="nav-text">O'qituvchilar</span>
                    </a>
                    <div class="triangle"></div>
                </li>

                <li class="nav-item " data-item="talabalar">
                    <a class="nav-item-hold" href="lists.html#">
                        <i class="nav-icon i-Business-ManWoman"></i>
                        <span class="nav-text">Talabalar</span>
                    </a>
                    <div class="triangle"></div>
                </li>

                <li class="nav-item " data-item="gallereya">
                    <a class="nav-item-hold" href="lists.html#">
                        <i class="nav-icon i-Video-Photographer"></i>
                        <span class="nav-text">Gallereya</span>
                    </a>
                    <div class="triangle"></div>
                </li>

            {{-- <li class="nav-item">
                <a class="nav-item-hold" href="">
                        <i class="nav-icon i-Administrator"></i>
                        <span class="nav-text">Talabalar</span>
                    </a>
                    <div class="triangle"></div>
                </li> --}}

        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->

        {{-- Yangiliklar --}}
        <ul class="childNav" data-parent="yangilik">
            <li class="nav-item">
        </li>
        <li class="nav-item dropdown-sidemenu">
            <a>
                <i class="nav-icon i-Receipt"></i>
                <span class="item-name">Kafedra - Yangiliklari <span
                        class=" ml-2 badge badge-pill badge-danger">Yangi</span></span>
                <i class="dd-arrow i-Arrow-Down"></i>
            </a>
            <ul class="submenu">
                <li class="nav-item ">
                    <a class=""
                href="{{ route('yangiliklar')}}">
                        <i class="nav-icon i-Letter-Open"></i>
                <span class="item-name">{{ __("Yangiliklar ro'yxati")}}</span>
                    </a>
                </li>
    
                <li class="nav-item ">
                    <a class=""
                href="{{ route('yangiliklar.create')}}">
                        <i class="nav-icon i-Clock-3"></i>
                <span class="item-name">{{ __("Yangilik qo'shish")}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('yangilik-bolim.index')}}"
                        class="">
                        <i class="nav-icon i-Clock-4"></i>
                        <span class="item-name">{{ __("Yangilik bo'limlari")}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="dashboard/dashboard3.html">
                        <i class="nav-icon i-Over-Time"></i>
                        <span class="item-name">{{ __("Yangiliklar sozlamlari")}}</span>
                    </a>
                </li>
                <li></li>
            </ul>
        </li>
    </ul>
         {{-- Elonlar --}}
         <ul class="childNav" data-parent="yangilik">
            <li class="nav-item">
        </li>
        <li class="nav-item dropdown-sidemenu">
            <a>
                <i class="nav-icon i-Receipt"></i>
                <span class="item-name">Kafedra - E'lonlari <span
                        class=" ml-2 badge badge-pill badge-danger">Yangi</span></span>
                <i class="dd-arrow i-Arrow-Down"></i>
            </a>
            <ul class="submenu">
                <li class="nav-item ">
                    <a class=""
                href="">
                        <i class="nav-icon i-Letter-Open"></i>
                <span class="item-name">{{ __("E'lonlar ro'yxati")}}</span>
                    </a>
                </li>
    
                <li class="nav-item ">
                    <a class=""
                href="">
                        <i class="nav-icon i-Clock-3"></i>
                <span class="item-name">{{ __("E'lon qo'shish")}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=""
                        class="">
                        <i class="nav-icon i-Clock-4"></i>
                        <span class="item-name">{{ __("E'lonlar bo'limlari")}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="dashboard/dashboard3.html">
                        <i class="nav-icon i-Over-Time"></i>
                        <span class="item-name">{{ __("E'lonlar sozlamlari")}}</span>
                    </a>
                </li>
                <li></li>
            </ul>
        </li>
        {{-- tugadi --}}

        

            
           
            
        </ul>
    

{{-- 
        
         <ul class="childNav" data-parent="ukituvchilar">

            <li class="nav-item ">
                <a class=""
            href="">
                    <i class="nav-icon i-Letter-Open"></i>
            <span class="item-name">{{ __("Yangiliklar ro'yxati")}}</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class=""
            href="">
                    <i class="nav-icon i-Clock-3"></i>
            <span class="item-name">{{ __("Yangilik qo'shish")}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href=""
                    class="">
                    <i class="nav-icon i-Clock-4"></i>
                    <span class="item-name">{{ __("Yangilik bo'limlari")}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class=""
                    href="dashboard/dashboard3.html">
                    <i class="nav-icon i-Over-Time"></i>
                    <span class="item-name">{{ __("Yangiliklar sozlamlari")}}</span>
                </a>
            </li>

        </ul>  --}}




        <ul class="childNav" data-parent="ukituvchilar" style="display: block;">

            <li class="nav-item">
            <a class="" href="{{ route('oqituvchilar.index')}}">
                    <i class="nav-icon i-Arrow-Down-in-Circle"></i>
                    <span class="item-name">O'qituvchilar ro'yxati</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="" href="#">
                    <i class="nav-icon i-Arrow-Down-in-Circle"></i>
                    <span class="item-name">Kuratorlar</span>
                </a>
            </li>
    
        </ul> 

        <ul class="childNav" data-parent="talabalar" style="display: block;">

            <li class="nav-item">
                <a class="" href="#">
                    <i class="nav-icon i-Arrow-Down-in-Circle"></i>
                    <span class="item-name">Guruhlar</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="" href="#">
                    <i class="nav-icon i-Arrow-Down-in-Circle"></i>
                    <span class="item-name">Umumiy talabalar ro'yxati</span>
                </a>
            </li>
    
        </ul> 

        <ul class="childNav " data-parent="gallereya" style="display: block;">

            <li class="nav-item ">
                <a class="" href="#">
                    <i class="nav-icon i-Arrow-Down-in-Circle"></i>
                    <span class="item-name">Gallereya suratlari</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="" href="#">
                    <i class="nav-icon i-Arrow-Down-in-Circle"></i>
                    <span class="item-name">Yangi qo'shish</span>
                </a>
            </li>
    
        </ul> 


    </div>

    
    


    
    <div class="sidebar-overlay"></div>
</div>

@endsection
