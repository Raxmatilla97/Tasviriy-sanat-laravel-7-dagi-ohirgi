@extends('makets.admin.site.index')
    @section('content')


    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="main-content">
                       <div class="breadcrumb">
        <h1>Yangiliklarni joylash va tahrirlash sahifasi</h1>
        <ul>
            <li><a href="{{ route('admin') }}">Asosiy admin panel</a></li>
            <li>Siz turgan sahifa</li>
        </ul>
    </div>

    

    <section class="ul-widget-stat-s1">
        <div class="row">
            
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center">
                        <i class="i-Feedburner"></i>
                        <div class="content" style="    max-width: 150px; margin: auto;">
                            <div style="
                            
                            width: 150px;
                        ">
                                <p style="margin-bottom: 0px; " class="heading text-info">Faollik bo'yicha</p>
                            </div>
                            <style>
                                .flex-container {
                                  display: flex;
                                  height: 40px;
                            width: 150px;
                            margin-right: auto;
                                }
                                
                               .flex-container > div {
                                  /* background-color: #f1f1f1; */
                                  /* margin: 10px;
                                  padding: 20px; */
                                  text-align: center;
                                  /* font-size: 30px; */
                                } 
                                </style>

                            <div class="flex-container" > 
                            <div style="margin: auto;">
                            
                                <p class="text-success mt-2 mb-0">Active</p>
                                <p class="text-success text-24 t-font-boldest line-height-1 mb-2">{{ $articleStatActive->count()}} ta</p>

                            </div>
                            
                            <div style="margin: auto; margin-left: 20%;" >
                                <p class="typo_link text-danger mt-2 mb-0">No Activlic</p>
                                <p class="text-danger text-24 t-font-boldest line-height-1 mb-2">{{ $articleStatNotActive->count()}} ta</p>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center">
                        <i class="i-Like-2"></i>
                        <div class="content" style="    max-width: 150px; margin: auto;">
                            <div style="
                            
                            width: 150px;
                        ">
                                <p style="margin-bottom: 0px; margin-top: -10%; width: 180px; " class="heading text-info">Ovozlar bo'yicha</p>
                            </div>
                            <style>
                                .flex-container {
                                  display: flex;
                                  height: 40px;
                            width: 150px;
                            margin-right: auto;
                                }
                                
                               .flex-container > div {
                                  /* background-color: #f1f1f1; */
                                  /* margin: 10px;
                                  padding: 20px; */
                                  text-align: center;
                                  /* font-size: 30px; */
                                } 
                                </style>

                            <div class="flex-container" > 
                            <div style="margin: auto;">
                            
                                <p class="text-success mt-2 mb-0">Yoqdi</p>
                                <p class="text-success text-24 t-font-boldest line-height-1 mb-2"> N ta</p>

                            </div>
                            
                            <div style="margin: auto; margin-left: 20%;" >
                                <p class="typo_link text-danger mt-2 mb-0">Yoqmadi</p>
                                <p class="text-danger t-font-boldest text-24 line-height-1 mb-2">N ta</p>

                            </div>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center">
                        <i class="i-File-Horizontal-Text"></i>
                        <div class="content" style="     margin-bottom: -5%;
                        max-width: 150px; ">
                            <div style="
                            
                            width: 150px;
                        ">
                                <p style="margin-bottom: 0px;  width: 180px; " class="heading text-info">Barcha yangiliklar</p>
                            </div>
                            <style>
                                .flex-container {
                                  display: flex;
                                  height: 40px;
                            width: 150px;
                            margin-right: auto;
                                }
                                
                               .flex-container > div {
                                  /* background-color: #f1f1f1; */
                                  /* margin: 10px;
                                  padding: 20px; */
                                  text-align: center;
                                  /* font-size: 30px; */
                                } 
                                </style>

                            
                            <div style="margin: auto;">
                            
                                <p class="text-primary mt-2 mb-0">Barchasi</p>
                                <p class="typo_link text-primary t-font-boldest text-24 line-height-1 mb-2">{{ $articleStat->count()}} ta</p>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="separator-breadcrumb border-top"></div>


    @if ($message = Session::get('success'))
    <div class="alert alert-card alert-success" role="alert">
        <strong class="text-capitalize">Bajarildi!</strong> {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
        <div class="row mt-12">
            <!-- begin exclusive datatable plugin -->
            <div class="col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head v-margin">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    {{ __("Yangiliklar ro'yxati") }}
                                </h3>
                            </div>
                            <button style="margin-bottom: 10px; margin-right: 50px;" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Qo'shimcha amaliyotlar
                            </button>
                            <div class="dropdown-menu " x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(697px, 51px, 0px);">
                           
                                <a class="dropdown-item" href="{{ route('yangiliklar.activmas')}}">Aktivmas yangiliklar</a>
                                <a class="dropdown-item" href="{{ route('yangiliklar.activlar')}}">Aktivlashgan yangiliklar</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('yangiliklar')}}">Barcha yangiliklar</a>
                            </div>
                        </div>

                        <div class="ul-widget-body">
                            <div class="ul-widget3">
                                <div class="ul-widget6__item--table" style="height: auto; overflow-y: scroll;">
                                    <table class="table ">
                                        <thead>
                                            <tr class="ul-widget6__tr--sticky-th">
                                                <th scope="col">#</th>
                                                <th scope="col">Surat</th>
                                                <th scope="col">Yangilik nomi</th>
                                                <th scope="col">Aftor</th>
                                                <th scope="col">Kafedra tomonidan</th>
                                                <th scope="col">Yaratilgan sana</th>
                                                <th scope="col">Holati va Tasdiqlanganligi</th>
                                               
                                                <th scope="col">Qo'shimcha ishlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($articles as $item)
                                               <!-- start tr -->

                                            <tr>
                                                <th scope="row" @if ($item->active == 0) style="background: #ff0000b8;" @else style="background: #008000a8;" @endif>
                                                    <label class="checkbox checkbox-outline-info">

                                                        <input type="checkbox" > <!-- checked="" ni ishlatsa barchasi cheklanadi -->

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{('')}}/{{ $item->image }}" id="userDropdown" alt="">
                                                                {{-- @if ( isset($item->image) )
                                                            <img src="{{ $item->image}}" id="userDropdown" alt="">
                                                                @else
                                                                <img src="{{('$item->image')}}" id="userDropdown" alt="">
                                                                @endif --}}
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                
                                                <td>
                                                <a href="{{ $item->slug }}" class="typo_link text-primary t-font-boldest">{{ $item->title}}</a><br>
                                                <a href="{{ $item->category->slug}}"><span class="typo_link text-info">Bo'limlari: {{ $item->category->title}}</span></a> 
                                                
                                                </td>

                                                <td>
                                                    {{$item->users->name}}
                                                </td>

                                                <td>
                                                   <p class="typo_link text-warning">Kafedra kiritilmagan</p>
                                                </td>

                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <span class="badge badge-pill @if($item->active == 0) badge-outline-danger  @else badge-outline-success @endif  p-2 m-1"> @if($item->active == 0) Activ emas! @else Bu sahifa active! @endif</span>
                                                   

                                                </td>
                                               

                                                <td class="">
                                                    <button type="button" class="btn bg-white _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(641px, 142px, 0px);">
                                                        <a class="dropdown-item ul-widget__link--font" href="list.html#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="list.html#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="list.html#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="list.html#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="list.html#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                           
                                            {{ $articles->links() }}
                                        </li>
                                     
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::exclusive datatable plugin  -->




{{-- 
            <!-- begin::latest log -->
            <div class="col-lg-4 col-xl-4 mt-4 mb-4">

                    <div class="card">
                        <div class="card-body">
                            <div class="ul-widget__head pb-20 v-margin">
                                <div class="ul-widget__head-label">
                                    <h3 class="ul-widget__head-title">
                                        Authors Profit
                                    </h3>
                                </div>
                                <button type="button" class="btn btn-info dropdown-toggle _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Latest
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item ul-widget__link--font" href="list.html#">
                                        <i class="i-Bar-Chart-4"> </i>
                                        Export</a>
                                    <a class="dropdown-item ul-widget__link--font" href="list.html#">
                                        <i class="i-Data-Save"> </i>
                                        Save
                                    </a>
                                    <a class="dropdown-item ul-widget__link--font" href="list.html#">
                                        <i class="i-Duplicate-Layer"></i>
                                        Import</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item ul-widget__link--font" href="list.html#">
                                        <i class="i-Folder-Download"></i>
                                        Update</a>
                                    <a class="dropdown-item ul-widget__link--font" href="list.html#">
                                        <i class="i-Gears-2"></i>
                                        Customize</a>
                                </div>
                            </div>
                            <div class="ul-widget__body">
                                <div class="ul-widget1">


                                     @foreach ($users as $item)



                                    <div class="ul-widget4__item ul-widget4__users">
                                        <div class="ul-widget4__img">
                                            <img src="../assets/images/faces/2.jpg" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </div>
                                        <div class="ul-widget2__info ul-widget4__users-info">
                                            <a href="list.html#" class="ul-widget2__title">
                                               {{$item->name}}
                                            </a>
                                            <span href="#" class="ul-widget2__username">
                                                Developer
                                            </span>
                                        </div>
                                        <span class="ul-widget4__number t-font-boldest text-danger">{{ $item->alias }}</span>
                                    </div>


                                    @endforeach


                                    <!-- <div class="ul-widget4__item ul-widget4__users">
    <div class="ul-widget4__img">
    <img src="http://gull-html-laravel.ui-lib.com/assets/images/faces/5.jpg" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    </div>
    <div class="ul-widget2__info ul-widget4__users-info">
    <a href="#" class="ul-widget2__title">
    Ryan Fox
    </a>
    <span href="#" class="ul-widget2__username">
    Backend Developer
    </span>
    </div>
    <span class="ul-widget4__number t-font-boldest text-info">+100</span>
    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                <br>

                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Latest Log
                                </h3>
                            </div>
                            <div class="ul-widget__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab" href="list.html#__g-widget-s6-tab1-content" role="tab" aria-selected="true">
                                            Today
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="list.html#__g-widget-s6-tab2-content" role="tab" aria-selected="false">
                                            Month
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="__g-widget-s6-tab1-content">
                                    <div class="ul-widget-s6__items">
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-primary ul-widget6__dot"></p>
                                            </span>
                                            <span class="ul-widget-s6__text">12 new users registered</span>
                                            <span class="ul-widget-s6__time">Just Now</span>
                                        </div>
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-success ul-widget6__dot"></p>
                                            </span>
                                            <p class="ul-widget-s6__text">
                                                System shutdown
                                                <span class="badge badge-pill badge-primary  m-2">Primary</span>
                                            </p>
                                            <span class="ul-widget-s6__time">14 mins</span>
                                        </div>

                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-warning ul-widget6__dot"></p>
                                            </span>
                                            <span class="ul-widget-s6__text">System error -
                                                <a href="list.html" class="typo_link text-danger">
                                                    Danger state text</a>
                                            </span>
                                            <span class="ul-widget-s6__time">2 hrs </span>
                                        </div>
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-danger ul-widget6__dot"></p>
                                            </span>
                                            <span class="ul-widget-s6__text">12 new users registered</span>
                                            <span class="ul-widget-s6__time">Just Now</span>
                                        </div>
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-info ul-widget6__dot"></p>
                                            </span>
                                            <p class="ul-widget-s6__text">
                                                System shutdown
                                                <span class="badge badge-pill badge-success  m-2">Primary</span>
                                            </p>
                                            <span class="ul-widget-s6__time">14 mins</span>
                                        </div>

                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-dark ul-widget6__dot"></p>
                                            </span>
                                            <span class="ul-widget-s6__text">System error -
                                                <a href="list.html" class="typo_link text-danger">
                                                    Danger state text</a>
                                            </span>
                                            <span class="ul-widget-s6__time">2 hrs </span>
                                        </div>
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-primary ul-widget6__dot"></p>
                                            </span>
                                            <span class="ul-widget-s6__text">12 new users registered</span>
                                            <span class="ul-widget-s6__time">Just Now</span>
                                        </div>
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-success ul-widget6__dot"></p>
                                            </span>
                                            <p class="ul-widget-s6__text">
                                                System shutdown
                                                <span class="badge badge-pill badge-danger  m-2">Primary</span>
                                            </p>
                                            <span class="ul-widget-s6__time">14 mins</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="__g-widget-s6-tab2-content">
                                    <div class="ul-widget2">
                                        <div class="ul-widget-s6__items">
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-danger ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">44 new users registered</span>
                                                <span class="ul-widget-s6__time">Just Now</span>
                                            </div>
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-warning ul-widget6__dot"></p>
                                                </span>
                                                <p class="ul-widget-s6__text">
                                                    System shutdown
                                                    <span class="badge badge-pill badge-primary  m-2">Primary</span>
                                                </p>
                                                <span class="ul-widget-s6__time">14 mins</span>
                                            </div>

                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-primary ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">System error -
                                                    <a href="list.html" class="typo_link text-danger">
                                                        Danger state text</a>
                                                </span>
                                                <span class="ul-widget-s6__time">2 hrs </span>
                                            </div>
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-danger ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">12 new users registered</span>
                                                <span class="ul-widget-s6__time">Just Now</span>
                                            </div>
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-info ul-widget6__dot"></p>
                                                </span>
                                                <p class="ul-widget-s6__text">
                                                    System shutdown
                                                    <span class="badge badge-pill badge-success  m-2">Primary</span>
                                                </p>
                                                <span class="ul-widget-s6__time">14 mins</span>
                                            </div>

                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-dark ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">System error -
                                                    <a href="list.html" class="typo_link text-danger">
                                                        Danger state text</a>
                                                </span>
                                                <span class="ul-widget-s6__time">2 hrs </span>
                                            </div>
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-primary ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">12 new users registered</span>
                                                <span class="ul-widget-s6__time">Just Now</span>
                                            </div>
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-success ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">System shutdown
                                                    <span class="badge badge-pill badge-danger  m-2">Primary</span></span>
                                                <span class="ul-widget-s6__time">14 mins</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}










            <!-- end::latest log -->
        </div>



    </div>






        @endsection
