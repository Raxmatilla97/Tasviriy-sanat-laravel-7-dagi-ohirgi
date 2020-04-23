@extends('artuz.layouts.makets.admin.site.index')
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

    <div class="separator-breadcrumb border-top"></div>


        <div class="row mt-12">
            <!-- begin exclusive datatable plugin -->
            <div class="col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head v-margin">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    {{ __("Maqola, Yangiliklar, Elonlar ro'yhatlari") }}
                                </h3>
                            </div>
                            <button type="button" class="btn bg-white _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(697px, 51px, 0px);">
                                <a class="dropdown-item" href="list.html#">Action</a>
                                <a class="dropdown-item" href="list.html#">Another action</a>
                                <a class="dropdown-item" href="list.html#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="list.html#">Separated link</a>
                            </div>
                        </div>

                        <div class="ul-widget-body">
                            <div class="ul-widget3">
                                <div class="ul-widget6__item--table" style="height: auto; overflow-y: scroll;">
                                    <table class="table ">
                                        <thead>
                                            <tr class="ul-widget6__tr--sticky-th">
                                                <th scope="col">#</th>
                                                <th scope="col">Avtor</th>
                                                <th scope="col">Maqola nomi</th>
                                                <th scope="col">Yaratilgan sana</th>
                                                <th scope="col">Holati</th>

                                                <th scope="col">Qo'shimcha ishlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($articles as $item)
                                               <!-- start tr -->

                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">

                                                        <input type="checkbox" > <!-- checked="" ni ishlatsa barchasi cheklanadi -->

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                            <img src="{{ $item->img}}" id="userDropdown" alt="">
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                <a href="{{ $item->alias }}" class="ul-widget4__title d-block">{{ $item->title}}</a>
                                                <span>Bo'limlari: {{ $item->category->title}}</span>
                                                </td>

                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <span class="badge badge-pill @if($item->has_active == 0) badge-outline-danger  @else badge-outline-success @endif  p-2 m-1"> @if($item->has_active == 0) Activ emas! @else Bu sahifa active! @endif</span>
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
                                            <a class="page-link" href="list.html#">Previous</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="list.html#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="list.html#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="list.html#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="list.html#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::exclusive datatable plugin  -->





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
            </div>










            <!-- end::latest log -->
        </div>



    </div>






        @endsection
