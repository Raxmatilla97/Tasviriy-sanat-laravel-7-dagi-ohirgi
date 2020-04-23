@extends('institut.backend.makets.sayt')
    @section('content')


    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="main-content">
                       <div class="breadcrumb">
        <h1>E'lonlarni joylash va tahrirlash sahifasi</h1>
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
                                <p class="text-success text-24 t-font-boldest line-height-1 mb-2">{{ $posterStatActive->count()}} ta</p>

                            </div>
                            
                            <div style="margin: auto; margin-left: 20%;" >
                                <p class="typo_link text-danger mt-2 mb-0">No Activlic</p>
                                <p class="text-danger text-24 t-font-boldest line-height-1 mb-2">{{ $posterStatNotActive->count()}} ta</p>

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
                                <p style="margin-bottom: 0px; margin-top: -10%; width: 180px; " class="heading text-info">Tasdiqlanganlik bo'yicha</p>
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
                            
                                <p class="text-success mt-2 mb-0">Tasdiqlangan</p>
                                <p class="text-success text-24 t-font-boldest line-height-1 mb-2">{{ $posterStatApproval->count()}} ta</p>

                            </div>
                            
                            <div style="margin: auto; margin-left: 20%;" >
                                <p class="typo_link text-danger mt-2 mb-0">Tasdiqlanmagan</p>
                                <p class="text-danger t-font-boldest text-24 line-height-1 mb-2">{{ $posterStatNotApproval->count()}} ta</p>

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
                                <p style="margin-bottom: 0px;  width: 180px; " class="heading text-info">Barcha e'lonlar</p>
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
                                <p class="typo_link text-primary t-font-boldest text-24 line-height-1 mb-2">{{ $posterStat->count()}} ta</p>

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
                                    {{ __("E'lonlar ro'yxati") }}
                                </h3>
                            </div>
                            <button style="margin-bottom: 10px; margin-right: 50px;" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Qo'shimcha amaliyotlar
                            </button>
                            <div class="dropdown-menu " x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(697px, 51px, 0px);">
                            <a class="dropdown-item" href="{{ route('elonlar.approw')}}">Tasdiqlanmagan e'lonlar</a>
                                <a class="dropdown-item" href="{{ route('elonlar.yesapprow') }} ">Tasdiqlangan e'lonlar</a>
                                <a class="dropdown-item" href="{{ route('elonlar.activmas')}}">Aktivmas e'lonlar</a>
                                <a class="dropdown-item" href="{{ route('elonlar.activlar')}}">Aktivlashgan yangiliklar</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('elon.index')}}">Barcha yangiliklar</a>
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
                                                <th scope="col">E'lon nomi</th>
                                                <th scope="col">Aftor</th>
                                                <th scope="col">Kafedra tomonidan</th>
                                                <th scope="col">Yaratilgan sana</th>
                                                <th scope="col">Holati va Tasdiqlanganligi</th>
                                               
                                                <th scope="col">Qo'shimcha ishlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($posters as $item)
                                               <!-- start tr -->

                                            <tr>
                                                <th scope="row" @if ($item->active == 0 || $item->tasdiq == 0) style="background: #ff0000b8;" @else style="background: #008000a8;" @endif>
                                                    <label class="checkbox checkbox-outline-info">

                                                        <input type="checkbox" > <!-- checked="" ni ishlatsa barchasi cheklanadi -->

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{('')}}/{{ $item->img }}" id="userDropdown" alt="">
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
                                                <span class="typo_link text-info">Bo'limlari: {{ $item->category->name}}</span>
                                                
                                                </td>

                                                <td>
                                                    {{$item->users->name}}
                                                </td>

                                                <td>
                                                    @if ( isset($item->kafedra->name) )  {{$item->kafedra->name}} @else <p class="typo_link text-warning">Kafedra kiritilmagan</p> @endif
                                                </td>

                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <span class="badge badge-pill @if($item->active == 0) badge-outline-danger  @else badge-outline-success @endif  p-2 m-1"> @if($item->active == 0) Activ emas! @else Bu sahifa active! @endif</span>
                                                    <span class="badge badge-pill @if($item->tasdiq == 0) badge-outline-danger  @else badge-outline-success @endif  p-2 m-1"> @if($item->tasdiq == 0) Tasdiqlanmagan! @else Tasdiqlangan! @endif</span>

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
                                           
                                            {{ $posters->links() }}
                                        </li>
                                     
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::exclusive datatable plugin  -->











            <!-- end::latest log -->
        </div>



    </div>






        @endsection
