@extends('institut.backend.makets.sayt')
    @section('content')


    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="main-content">
                       <div class="breadcrumb">
        <h1>Yangiliklar bo'limlari sahifasi</h1>
        <ul>
            <li><a href="{{ route('admin') }}">Asosiy admin panel</a></li>
            <li>Siz turgan sahifa</li>
        </ul>
    </div>

    {{-- <section class="ul-widget-stat-s1">
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
                                <p class="text-success text-24 t-font-boldest line-height-1 mb-2">{{ $articleStatActive->count()}} ta</p>

                            </div>
                            
                            <div style="margin: auto; margin-left: 20%;" >
                                <p class="typo_link text-danger mt-2 mb-0">Tasdiqlanmagan</p>
                                <p class="text-danger t-font-boldest text-24 line-height-1 mb-2">{{ $articleStatNotActive->count()}} ta</p>

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
    </section> --}}

    <div class="separator-breadcrumb border-top"></div>


        <div class="row mt-12">
            <!-- begin exclusive datatable plugin -->
            <div class="col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head v-margin">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    {{ __("Yangiliklar bo'limlari ro'yxati") }}
                                </h3>
                            </div>
                           
                            <button type="button"  style="margin-bottom: 10px; margin-right: 50px;"  class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Yangi bo'lim qo'shish</button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Bo'lim qo'shish</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <div class="card-body">
                                                    <div class="card-title mb-3">Bo'lim ochish</div>
                                                    <form action="{{ route('yangilik-bolim.store')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6 form-group mb-3">
                                                                <label for="slug-source">Yangilik bo'limi nomi</label>
                                                                <input type="text" required value="{{ old('name') }}" name="name" id="slug-source" class="form-control form-control-rounded" id="slug-source" placeholder="Bo'limni nomini kiriting">
                                                            </div>
                        
                                                            <div class="col-md-6 form-group mb-3">
                                                                <label for="slug-target">Bo'lim manzili (Bu yerni o'zgartirish shart emas)</label>
                                                                <input type="text" required value="{{ old('slug') }}" name="slug" id="slug-target" class="form-control form-control-rounded"  placeholder="Sayt manzili avtomatik kiritiladi">
                                                            </div>
                        
                        
                                                            <div class="col-md-6 form-group mb-3">
                                                                <label for="picker1">Bo'lim activlashtirilsinmi?</label>
                                                                <select  name="active" class="form-control form-control-rounded">
                                                                    <option value="0" >Yo'q activlashmasin!</option>
                                                                    <option value="1">Ha activlashsin!</option>
                                                                   
                                                                </select>
                                                            </div>
                        
                                                            
                                    
                                                            <div class="col-md-6 form-group mb-3">
                                                                <label for="inputEmail4" class="ul-form__label">Surat yuklashingiz mumkin:</label>
                                                                <div class="ul-form__text form-text">@if ($errors->has('img'))
                                                                    <span class="text-danger">{{ $errors->first('img') }}</span>
                                                                @endif</div>
                                    
                                                                
                                    
                                                               
                                    
                                                               
                                                                    <div class="input-group mb-3 ">
                                                                    <div class="custom-file">
                                                                       
                                                                        <input required onchange="readURL(this);" type="file" value="{{ old('img') }}" name="img" class="custom-file-input" id="inputGroupFile02">
                                                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Suratni belgilang</label>
                                                                    </div>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="inputGroupFileAddon02">Yuklash</span>
                                                                    </div>
                                                                </div>
                                    
                                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                                Some help content goes here
                                                                        </small>
                                                            </div>
                                                        </div>
                                    
                                                        </div>
                                                    
                                             
                                       
                                    

                                        {{-- tugadi --}}
                                            </div>
                                    
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                                                <button type="submit" class="btn btn-primary">Bo'limni joylash</button>
                                            </div>
                                        </form>
                                   
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-card alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    
                        @if ($message = Session::get('success'))
                        <div class="alert alert-card alert-success" role="alert">
                            <strong class="text-capitalize">Bajarildi!</strong> {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        @endif
                    
                        <div class="ul-widget-body">
                            <div class="ul-widget3">
                                <div class="ul-widget6__item--table" style="height: auto; overflow-y: scroll;">
                                    <table class="table ">
                                        <thead>
                                            <tr class="ul-widget6__tr--sticky-th">
                                                <th scope="col">#</th>
                                                <th scope="col">Surat</th>
                                                <th scope="col">Bo'lim nomi</th>
                                                <th scope="col">Nechta yangilik borligi</th>
                                              
                                                <th scope="col">Saytda ko'rinishligi</th>
                                               
                                                <th scope="col">Qo'shimcha ishlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($articlesCategory as $item)
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
                                                <a href="{{ $item->slug }}" class="typo_link text-primary t-font-boldest">{{ $item->name}}</a>
                                               
                                                
                                                </td>

                                                <td>
                                                   nechta yangilik borligi
                                                </td>

                                                

                                               
                                                <td>
                                                    <a href="{{''}}/{{ $item->slug}}">  <button type="button" class="btn btn-raised btn-raised-primary m-1">Saytda ko'rish</button></a>
                                                

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
                                           
                                            {{ $articlesCategory->links() }}
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
