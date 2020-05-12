@extends('makets.admin.site.index')
    @section('content')

    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="main-content">
            
<div class="breadcrumb">
<h1>Lists</h1>
<ul>
<li><a href="lists.html">Apps</a></li>
<li>Contacts</li>
</ul>
</div>
<div class="separator-breadcrumb border-top"></div>


<section class="contact-list">
<div class="row">
    <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-header text-right bg-transparent">
                    <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-primary btn-md m-1"><i class="i-Add-User text-white mr-2"></i> Add Contact</button>
                </div>
                <!-- begin::modal -->
                <div class="ul-card-list__modal">
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                        <div class="modal-body">
                                                <form>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-2 col-form-label">Phone</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" id="" placeholder="number....">
                                                            </div>
                                                        </div>
                                                        <fieldset class="form-group">
                                                            <div class="row">
                                                                <div class="col-form-label col-sm-2 pt-0">Radios</div>
                                                                <div class="col-sm-10">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                                        <label class="form-check-label ml-3" for="gridRadios1">
                                                                            First radio
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                                        <label class="form-check-label ml-3" for="gridRadios2">
                                                                            Second radio
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check disabled ">
                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled="">
                                                                        <label class="form-check-label ml-3" for="gridRadios3">
                                                                            Third disabled radio
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">Checkbox</div>
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                    <label class="form-check-label ml-3" for="gridCheck1">
                                                                        Example checkbox
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                
                                                                <button type="submit" class="btn btn-success">Update</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                        </div>
                                  </div>
                                </div>
                              </div>
                </div>
                <!-- end::modal -->

                <div class="card-body">
                    
                    <div class="table-responsive">
                        <div id="ul-contact-list_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="ul-contact-list_length">
                               </div></div>
                                <div class="col-sm-12 col-md-6"><div id="ul-contact-list_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="ul-contact-list"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="ul-contact-list" class="display table dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="ul-contact-list_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="ul-contact-list" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 230px;">F.I.SH</th>
                                    <th class="sorting" tabindex="0" aria-controls="ul-contact-list" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 164px;">O'qitadigan fanlar</th>
                                    <th class="sorting" tabindex="0" aria-controls="ul-contact-list" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 101px;">Telefon</th>
                                    <th class="sorting" tabindex="0" aria-controls="ul-contact-list" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 93px;">Lavozim</th>
                                    <th class="sorting" tabindex="0" aria-controls="ul-contact-list" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 38px;">Tug'ulgan yil</th>
                                    <th class="sorting" tabindex="0" aria-controls="ul-contact-list" rowspan="1" colspan="1" aria-label="Joining Date: activate to sort column ascending" style="width: 120px;">Dan ishlamoqda</th>
                                    {{-- <th class="sorting" tabindex="0" aria-controls="ul-contact-list" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 57px;">Salary</th> --}}
                                    <th class="sorting" tabindex="0" aria-controls="ul-contact-list" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 59px;"></th></tr>
                            </thead>
                            <tbody>
                            
                                @foreach ($tichers as $item)
                                                                  
                            <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        <a href="lists.html">
                                            <div class="ul-widget-app__profile-pic">
                                                <img class="profile-picture avatar-sm mb-2 rounded-circle img-fluid" src="{{ asset('admin/assets/images/faces/1.jpg')}}" alt="">
                                               {{ $item->familya }} {{ $item->ism }} {{ $item->sharif }}
                                            </div>
                                           
                                        </a>
                                    </td>
                                    <td>jhonwick_23@gmail.com</td>
                                    <td>{{ $item->tell}}</td>
                                <td><a href="lists.html#" class="badge badge-primary m-2 p-2">{{ $item->mavqe->name}}</a></td>
                                    <td>{{ $item->tugulgan_yil}}</td>
                                    <td>April 25, 2019</td>
                                    {{-- <td>$320,800</td> --}}
                                    <td>
                                        <a href="lists.html" class="ul-link-action text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                            <i class="i-Edit"></i>
                                        </a>
                                       <a href="lists.html" class="ul-link-action text-danger mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Want To Delete !!!">
                                           <i class="i-Eraser-2"></i>
                                       </a>  
                                    </td>

                                </tr>
                                @endforeach
                                </tbody>
                           
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="ul-contact-list_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="ul-contact-list_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="ul-contact-list_previous"><a href="#" aria-controls="ul-contact-list" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="ul-contact-list" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="ul-contact-list" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="ul-contact-list_next"><a href="#" aria-controls="ul-contact-list" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>

                </div>
            </div>
        </div>
</div>
</section>



        </div>

     @push('style')
     
     <link id="gull-theme" rel="stylesheet" href="{{ asset('admin/assets/styles/css/themes/lite-purple.min.css') }}">
     <link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/perfect-scrollbar.css')}}">
<link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/pickadate/classic.css')}}">
<link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/pickadate/classic.date.css')}}">  

     <link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/datatables.min.css')}}">
   
         
     @endpush

     @push('script')
         
 
     
     <!-- page script -->
     
   
 

     
     <script src="{{ asset('admin/assets/js/common-bundle-script.js') }}"></script>
          
     <script src="{{ asset('admin/assets/js/vendor/datatables.min.js')}}"></script>
     <script src="{{ asset('admin/assets/js/tooltip.script.js')}}"></script> 
     {{-- <script>
        $('#ul-contact-list').DataTable();
        </script> --}}
     {{-- <script src="{{ asset('admin/assets/js/vendor/echarts.min.js') }}"></script>
     <script src="{{ asset('admin/assets/js/es5/echart.options.min.js') }}"></script>
     <script src="{{ asset('admin/assets/js/es5/dashboard.v1.script.js') }}"></script> --}}
     <script src="{{ asset('admin/assets/js/script.js') }}"></script>
     <script src="{{ asset('admin/assets/js/sidebar.large.script.js') }}"></script>
     <script src="{{ asset('admin/assets/js/customizer.script.js') }}"></script>
     
     

 

        @endpush
    @endsection