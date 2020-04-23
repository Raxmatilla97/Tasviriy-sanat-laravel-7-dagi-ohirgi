@extends('artuz.layouts.makets.admin.site.index')
    @section('content')


    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="main-content">
                       <div class="breadcrumb">
        <h1>Studentlarni kiritish va tahrirlash sahifasi</h1>
        <ul>
            <li><a href="{{ route('admin') }}">Asosiy admin panel</a></li>
            <li>Siz turgan sahifa</li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>


        <div class="row mt-12">
            <!-- begin exclusive datatable plugin -->
            <div class="col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head v-margin">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    {{ __("Maqola, Yangiliklar, Elonlar ro'yhatlari") }}
                                </h3>
                            </div>
                                @if($errors->any())

                                <div class="alert alert-danger">
                                    <strong>XATOLIK!</strong>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>

                                </div>

                                @endif

                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                <p>{{ $message }}</p>

                                </div>

                                @endif
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 15px; margin-left: 50%;">Talaba Qo'shish</button>
                            <button type="button" class="btn bg-white _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(697px, 51px, 0px);">
                                <a class="dropdown-item btn btn-success" href="list.html#">Action</a>
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
                                                <th scope="col">Surat</th>
                                                <th scope="col">F.I.Sh</th>
                                                <th scope="col">Tug'ulgan kun</th>
                                                <th scope="col">Ta'lim shakli</th>
                                                <th scope="col">Guruh</th>
                                                <th scope="col">Telefon raqami</th>
                                                <th scope="col">Qo'shimcha ishlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($data as $item)
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
                                                            <img src="{{ $item->surat  }}" id="userDropdown" alt="{{ $item->ism }}">


                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                <a href="#" class="ul-widget4__title d-block">{{ $item->familya}}</a>
                                                <span><b>{{ $item->familyasi }} {{ $item->ismi }} {{ $item->sharifi}} </b></span>
                                                </td>

                                                <td>{{ $item->tugulgan_kun }} chi {{ $item->tugulgan_oy }} - {{ $item->tugulgan_yil }} yil</td>

                                                <td>{{ $item->talim_shakli }} ta'lim shaklida</td>


                                                <td>
                                                    <span class="badge badge-pill @if($item->has_active == 0) badge-outline-danger  @else badge-outline-success @endif  p-2 m-1"> @if($item->has_active == 0) Mavjud emas! @else Bu sahifa active! @endif</span>
                                                </td>
                                                <td>{{ $item->tell_nomer}}</td>
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



                                         {{-- ------------------------------------ Yangi talaba qo'shish modeli ------------------------------------  --}}

                                    <!-- Modal -->
                                    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg"  style="max-width: 1200px;" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title modal-success" id="exampleModalLabel">Talaba qo'shish</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card" >
                                                    <div class="card-header bg-transparent">
                                                        <h3 class="card-title">Tasviriy sa'nat kafedrasiga talabalarni qo'shish formasi</h3>
                                                    </div>
                                                    <!--begin::form-->
                                                <form action="{{ route('talabalar.store')}}" method="POST">

                                                        @csrf
                                                        <div class="card-body">


                                                            <div class="form-row">

                                                                <div class="form-group col-md-4">
                                                                    <label for="inputEmail12" class="ul-form__label">Talabaning familyasi:</label>
                                                                    <input type="text" class="form-control" name="familyasi" id="inputEmail12" placeholder="Talabaning familyasini kiriting">
                                                                    <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        <b>Iltimos familyani behato kiriting <a style="color: red;">*</a></b>
                                                                    </small>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="inputtext11" class="ul-form__label">Talabaning ismi:</label>
                                                                    <input type="text" class="form-control" id="inputtext11" name="ismi" placeholder="Talabaning ismini kiriting">
                                                                    <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        <b>Iltimos ismni behato kiriting <a style="color: red;">*</a></b>
                                                                    </small>
                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <label for="inputEmail13" class="ul-form__label">Talabaning sharifi:</label>
                                                                    <div class="input-group mb-2">
                                                                        <div class="input-group-prepend">
                                                                            {{-- <div class="input-group-text bg-transparent">
                                                                                <i class="i-Checked-User"></i>
                                                                            </div> --}}
                                                                        </div>
                                                                        <input type="text" class="form-control" name="sharifi" id="inlineFormInputGroup" placeholder="Talabaning sharifini kiriting">
                                                                    </div>
                                                                    <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        <b>Iltimos sharifini behato kiriting <a style="color: red;">*</a></b>
                                                                    </small>
                                                                </div>


                                                            </div>


                                                            <div class="custom-separator"></div>


                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputtext14" class="ul-form__label">Yashash ma'nzili:</label>
                                                                    <input type="text" class="form-control" name="yashash_manzili" id="inputtext14" placeholder="Toshkent viloyati, Bo'stonliq tumani, Shaxri">
                                                                    <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                       Talabaning yashash manzilini kiriting
                                                                    </small>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail15" class="ul-form__label">Telefon nomeri:</label>
                                                                    <div class="input-right-icon">
                                                                        <input type="text" name="tell_nomer" class="form-control" id="inputEmail15" placeholder="+998(xx) xxx-xx-xx">
                                                                        <span class="span-right-input-icon">
                                                                            <i class="ul-form__icon i-Information"></i>
                                                                        </span>
                                                                    </div>

                                                                    <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                       Talabaning qo'l telefoni yoki uy telefonini kiriting
                                                                    </small>
                                                                </div>

                                                                <div class="form-group col-md-3">
                                                                    <label for="inputEmail16" class="ul-form__label">Passport seriyasi va raqami:</label>
                                                                    <div class="input-right-icon">
                                                                        <input type="text" name="pass_num" class="form-control" id="inputEmail16" placeholder="AA 123456">
                                                                        <span class="span-right-input-icon">
                                                                            <i class="ul-form__icon i-Map-Marker"></i>
                                                                        </span>
                                                                    </div>

                                                                    <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        Talabaning passport seriyasi va raqamini kiriting
                                                                    </small>
                                                                </div>







                                                            </div>


                                                            <div class="custom-separator"></div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-2 mb-3">
                                                                    <label for="inputNumber" class="ul-form__label">Tug'ulgan kuni:</label>
                                                                    <div class="input-right-icon">

                                                                    <select name="tugulgan_kun" class="form-control text-center">
                                                                        @for($i = 0; $i <= 31; $i++)
                                                                        <option value="{{$i}}" >{{ $i}} </option>
                                                                        @endfor

                                                                    </select>
                                                                    </div>

                                                                    <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        04
                                                                    </small>
                                                                </div>




                                                                <div class="form-group col-md-2 mb-3">
                                                                    <label for="inputEmail17" class="ul-form__label">Tug'ulgan oyi:</label>
                                                                    <div class="input-right-icon">

                                                                    <select name="tugulgan_oy" class="form-control text-center">
                                                                        <option value="Yanvar">Yanvar</option>
                                                                        <option value="Fevral">Fevral</option>
                                                                        <option value="Mart">Mart</option>
                                                                        <option value="Aprel">Aprel</option>
                                                                        <option value="May">May</option>
                                                                        <option value="Iyun">Iyun</option>
                                                                        <option value="Iyul">Iyul</option>
                                                                        <option value="Avgust">Avgust</option>
                                                                        <option value="Sentiyabr">Sentiyabr</option>
                                                                        <option value="Oktiyabr">Oktiyabr</option>
                                                                        <option value="Noyabr">Noyabr</option>
                                                                        <option value="Dekabr">Dekabr</option>

                                                                    </select>
                                                                    </div>

                                                                    <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        Please enter your postcode
                                                                    </small>
                                                                </div>



                                                                    <div class="form-group col-md-2 mb-3">
                                                                        <label for="inputYear" class="ul-form__label">Tug'ulgan yili:</label>
                                                                        <div class="input-right-icon">

                                                                        <select name="tugulgan_yil" class="form-control text-center">


                                                                            <?php

                                                                                $currently_selected = date('Y');
                                                                                // Year to start available options at
                                                                                $earliest_year = 1980;
                                                                                // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
                                                                                $latest_year = 2005;


                                                                                // Loops over each int[year] from current year, back to the $earliest_year [1950]
                                                                                foreach ( range( $latest_year, $earliest_year ) as $i ) {
                                                                                    // Prints the option with the next year in range.
                                                                                    print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
                                                                                }

                                                                                ?>

                                                                        </select>
                                                                        </div>



                                                            </div>
                                                          <div class="form-group col-md-5 mr-2">
                                                                <label for="inputEmail17" class="ul-form__label">Tug'ulgan joyi:</label>
                                                                <div class="input-right-icon">
                                                                    <input type="text" name="tugulgan_joy" class="form-control" id="inputEmail17" placeholder="Toshkent viloyati, ..... ..">
                                                                    <span class="span-right-input-icon">
                                                                        <i class="ul-form__icon i-New-Mail"></i>
                                                                    </span>
                                                                </div>

                                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                    Talabaning tug'ulgan joyini kiriting
                                                                </small>
                                                            </div>


                                                            <div class="form-group col-md-4 ">
                                                                    <label for="inputEmail18" class="ul-form__label">Ta'lim shakli:</label>
                                                                    <div class="ul-form__radio-inline">
                                                                        <label class=" ul-radio__position radio radio-primary form-check-inline">
                                                                            <input type="radio" name="talim_shakli" value="Kunduzgi">
                                                                            <span class="ul-form__radio-font">Kunduzgi</span>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                        <label class="ul-radio__position radio radio-primary" style="padding-right: 20px;  ">
                                                                            <input type="radio" name="talim_shakli" value="Kechki">
                                                                            <span class="ul-form__radio-font">Kechki</span>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                        <label class="ul-radio__position radio radio-primary "  >
                                                                            <input type="radio" name="talim_shakli" value="Sirtqi">
                                                                            <span class="ul-form__radio-font">Sirtqi</span>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                       Talabaning ta'lim shaklini belgilang
                                                                    </small>
                                                                </div>

                                                            </div>
                                                            <div class="card-body">
                                                                <div class="card-title">Talabaning surati va passport kopyasini yuklash qismi</div>
                                                                {{-- <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="inputGroupFileAddon01">Talabaning surati yuklanadi:</span>
                                                                    </div>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="surat" class="custom-file-input" id="surat01" aria-describedby="inputGroupFileAddon01">

                                                                        <label class="custom-file-label" for="sirat01">Suratni yuklang</label>
                                                                    </div>
                                                                </div> --}}


                                                                <div class="col-md-12">
                                                                    <h2 class="mt-4">Talabaning surati yuklanadi</h2>
                                                                    <div class="input-group">
                                                                      <span class="input-group-btn">
                                                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                                                          <i class="fa fa-picture-o"></i> Belgilang
                                                                        </a>
                                                                      </span>
                                                                      <input id="thumbnail" class="form-control" type="text" name="surat">

                                                                    </div>
                                                                    <style>
                                                                        img{
                                                                         margin: top;
                                                                        }
                                                                    </style>
                                                                     <div class="surat">
                                                                          <div id="holder" style="margin-top:15px;max-height:100px; margin: top"></div>


                                                                     </div>


                                                                </div>


                                                                    <div class="col-md-12">
                                                                    <h2 class="mt-4">Talabaning pasport nusxasi yuklanadi (surat yoki pdf 1,2 fayllar bo'lsaham)</h2>
                                                                    <div class="input-group">
                                                                      <span class="input-group-btn">
                                                                        <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                                                                          <i class="fa fa-picture-o"></i> Belgilang
                                                                        </a>
                                                                      </span>
                                                                      <input id="thumbnail2" class="form-control" type="text" name="pass_copy">
                                                                    </div>
                                                                    <div id="holder2" style="margin-top:15px;max-height:100px;"></div>
                                                                  </div>
                                                                        {{--
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="inputGroupFileAddon02">Talabaning pasport nusxasi yuklanadi:</span>
                                                                    </div>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon02">
                                                                        <label class="custom-file-label" for="inputGroupFile02">Pasport nusxasini yuklang</label>
                                                                    </div>
                                                                </div> --}}


                                                            </div>

                                                        </div>
                                                        {{--
                                                        <div class="card-footer">
                                                            <div class="mc-footer">
                                                                <div class="row">
                                                                    <div class="col-lg-12 text-center">
                                                                        <button type="button" class="btn  btn-primary m-1">Save</button>
                                                                        <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}

                                                        <div class="modal-footer">


                                                            <button type="submit" class="btn btn-primary m-1">Save changes</button>
                                                            <button type="button" class="btn btn-secondary m-1" data-dismiss="modal">Close</button>
                                                          </div>
                                                    </form>

                                                    <!-- end::form 3-->

                                                            {{--
                                                 @section('scripts')

                                                 <script>
                                                     $('#browse_file').on('click', function(){
                                                         $('#surat'),click();

                                                     })
                                                     $('#surat').on('change', function(e){
                                                         showFile(this, '#showImage');
                                                     })
                                                 </script>

                                                 @endsection --}}



                                                </div>

                                            </div>



                                        </div>





                                        </div>
                                    </div>








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





        </div>



    </div>
      <!--######################################
         File managerning java scripit biblotekasi
        ######################################## -->
     @include('artuz.layouts.admin.fragmentlar.file-manager')


        @endsection
