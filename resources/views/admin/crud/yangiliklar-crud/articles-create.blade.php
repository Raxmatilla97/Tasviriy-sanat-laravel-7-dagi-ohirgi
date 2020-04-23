
@extends('makets.admin.site.index')
    @section('content')


    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="main-content">
                       <div class="breadcrumb">
        <h1>Yangiliklarni joylash sahifasi</h1>
        <ul>
            <li><a href="{{ route('admin') }}">Asosiy admin panel</a></li>
            <li>Siz turgan sahifa</li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>


 
  

    @if ($errors->any())
    <div class="alert alert-card alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <!-- begin::sizing -->
    <div class="col-lg-8 mb-3">
        <div class="card">
            <div class="card-header bg-transparent">
                <h3 class="card-title"> Ko'rsatilgan katakchalarni to'ldiring!</h3>
            </div>
            <!--begin::form-->
        <form method="POST" action="{{route('yangiliklar.store')}}" enctype="multipart/form-data">
                @csrf

                {{-- Yangilikni kiritgan odamni user id --}}
               <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
               
                <div class="card-body">
                    <div class="form-row ">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4"  class="ul-form__label">Yangilikni nomlanishi: (Qisqa va aniq holda, lotin yozuvida, kichik harflarda):</label>
                            {{-- <div class="ul-form__text form-text">@if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif</div> --}}
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                                <i class="i-Information"></i>
                                            </span>
                                         
                                            
                                </div>
                               
                              
                                
                                <input type="text" required  value="{{ old('title') }}" name="title" id="slug-source" class="form-control" placeholder="Yngilik nomlari qisqartirilib yozilsin." aria-label="Text"  aria-describedby="basic-addon1">
                          

                            </div>
                            <small class="ul-form__text form-text ">
                                <div style="color: blue;">YANGILIK MANZILI: Iltimos bu yerga hech qanday o'zgartirish kiritmang. Yangilik nomini yozganizda avtomatik bajariladi.</div>
                        </small><div class="ul-form__text form-text">@if ($errors->has('slug'))
                            <span class="text-danger">{{ $errors->first('slug') }}</span>
                        @endif</div>
                            <input type="text" required value="{{ old('slug') }}" name="slug" id="slug-target" class="form-control" placeholder="Bu yerga hechnarsa yozmaysiz avtomatik kiritiladi!" aria-label="Username" aria-describedby="basic-addon1">
                            
                        </div>
                        {{-- <div class="col-lg-12  mb-3">
                            <div class="card card-body border-top-info ul-border__bottom">
                                <div class="text-center">
                                    <h5 class="heading text-primary">Yangilik kafedra nomidan chiqishini istaysizmi?</h5>
                                    <p class="mb-3 text-muted">Buning uchun pastdagi tugmani bosing. <strong>Eslatma! Agar siz buni istamasangiz bu tugmaga tegmang.</strong></p>
    
                                    <button type="button" class="btn btn-primary collapsed" data-toggle="collapse" data-target="#collapse-button-collapsed" aria-expanded="false">
                                        Bu yerga bosing!
                                    </button>
                                </div>
    
                                <div class="collapse" id="collapse-button-collapsed" style="">
                                    <div class="mt-3">

                                        <p>Endi siz o'z kafedrangizni yoki hohlagan kafedrani nomidan bu yangilikni chiqarishingiz mumkin.</p>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="picker1">Yangilik bo'limini tanlang.</label>
                                            <div class="ul-form__text form-text">@if ($errors->has('kafedra_id'))
                                                <span class="text-danger">{{ $errors->first('kafedra_id') }}</span>
                                            @endif</div>
                                            <select name="kafedra_id" class="form-control form-control-rounded">
                                                <option value="">Kerakli kafedrani belgilang!</option>
                                                @foreach ($kafedralar as $kafedra )
                                                <option value="{{$kafedra->id}}">{{$kafedra->name}}</option>
                                                @endforeach
                                                
                                               
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                       
                        
                        <div class="mb-3 forn-group col-md-4">
                                
                            <img id="blah" src="{{ "/storage/photos/1/news.png" }}" alt="your image" /></div>

                        <div class="form-group col-md-8">
                            <label for="inputEmail4" class="ul-form__label">Joint Addons:</label>
                            <div class="ul-form__text form-text">@if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif</div>

                            

                            <style>
                            #blah{
                                max-width:180px;
                              }
                              input[type=file]{
                              padding:10px;
                              background:#2d2d2d;}
                              </style>

                              <script>
                              function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                    
                                    reader.onload = function (e) {
                                        $('#blah')
                                            .attr('src', e.target.result);
                                    };
                    
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }</script>

                           
                                <div class="input-group mb-3 ">
                                <div class="custom-file">
                                   
                                    <input required onchange="readURL(this);" type="file" value="{{ old('image') }}" name="image" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose
                                            file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                                </div>
                            </div>

                            <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                            Some help content goes here
                                    </small>
                        </div>
                    </div>

                    {{-- <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script> --}}
                    
                    {{-- <textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
                  <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                    <script>
                      var options = {
                        filebrowserImageBrowseUrl: '/filemanager?type=Images',
                        filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/filemanager?type=Files',
                        filebrowserUploadUrl: '/filemanager/upload?type=Files&_token='
                      };
                    </script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>

                <script>
                    CKEDITOR.replace('my-editor', options);
                    </script> --}}


                </div>
                


            <!-- end::form -->
        </div>
    </div>
    <!-- end::sizing -->

   
    <!-- begin::input-icons -->
    <div class="col-lg-4 mb-3">
        <div class="card">
            <div class="card-header bg-transparent">
                <h3 class="card-title"> Qo'shimcha ma'lumotlar</h3>
            </div>
            <!--begin::form-->

                <div class="card-body">
                    <div class="form-row ">
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="ul-contact-page__profile">
                                    <div class="user-profile">
                                        <img class="profile-picture mb-3" src="http://gull-html-laravel.ui-lib.com/assets/images/faces/2.jpg" alt="">
                                    </div>
                                    <div class="ul-contact-page__info">
                                        @foreach ( $users as $user)
                                        <p class="m-0 text-20">{{$user->name}}</p>
                                        <p class="text-muted m-0">{{$user->role_name}}</p>
                                        @endforeach
                                        
                                        <p class="text-muted mt-3">DieSachbearbeiter
                                                Choriner Straße 49
                                                10435 Berlin</p>
          
                                        {{-- <p class="text-muted mt-3">NO: 234-987-665-340</p> --}}
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                        <div class="col-md-12 form-group mb-2">
                            <label for="picker1">Yangilik bo'limini tanlang.</label>
                            <div class="ul-form__text form-text">@if ($errors->has('cate_id'))
                                <span class="text-danger">{{ $errors->first('cate_id') }}</span>
                            @endif</div>
                            <select required  name="cate_id" class="form-control form-control-rounded">
                                <option value="">Kerakli bo'limni tanlang!</option>
                                @foreach ($category as $cate )
                                <option value="{{$cate->id}}">{{$cate->title}}</option>
                                @endforeach
                               
                            </select>
                        </div>

                      



                       

                        {{-- <label class=" switch switch-primary mr-2">
                            <span>Yangilik chop etilsinmi?</span>
                            <input name="active" type="checkbox" chaked="1" value="{{ old('active') }}">
                            <span class="slider"></span>
                        </label> --}}
                       
                    </div>
                    <div class="ul-form__text form-text">@if ($errors->has('active'))
                        <span class="text-danger">{{ $errors->first('active') }}</span>
                    @endif</div>
                    <p>Yangilik chop etilishga tayyormi? </p> 
                    <div style="margin: top;">
                    <label class="radio radio-outline-primary">
                        <input type="radio" name="active" value="0"  checked formcontrolname="radio">
                        <span >Yo'q, hali yangilik ohiriga yetmagan!</span>
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="radio radio-outline-success">
                        <input type="radio" name="active" value="1" formcontrolname="radio">
                        <span>Ha, yangilik saytda chop etilishga tayyor!</span>
                        <span class="checkmark"></span>
                    </label>
                </div>
                </div>


            

            <!-- end::form -->
        </div>
    </div>
    <!-- end::input-icons -->



    
   

     <!-- begin::input-icons -->
     <div class="col-lg-12 mb-3">
        <div class="card">
            <div class="card-header bg-transparent">
                <h3 class="card-title"> Yangilikning asosiy qismini kiriting.</h3>
            </div>
           

            <div class="col-lg-11 mb-3 " style=" margin: auto;">
           
           <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                @if ($errors->has('desc'))
                    

                    <div class="alert alert-card alert-danger" role="alert">
                        <strong class="text-capitalize">Diqqat!</strong> {{ $errors->first('desc') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif
                    <textarea rows="20" name="desc" class="form-control my-editor">{!! old('desc', '') !!}</textarea></center>
                    <script>
                      var editor_config = {
                        path_absolute : "/filemanager?type=Files",
                        selector: "textarea.my-editor",
                        plugins: [
                          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                          "searchreplace wordcount visualblocks visualchars code fullscreen",
                          "insertdatetime media nonbreaking save table contextmenu directionality",
                          "emoticons template paste textcolor colorpicker textpattern"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                        relative_urls: false,
                        file_browser_callback : function(field_name, url, type, win) {
                          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                          if (type == 'image') {
                            cmsURL = cmsURL + "&type=Images";
                          } else {
                            cmsURL = cmsURL + "&type=Files";
                          }
                          tinyMCE.activeEditor.windowManager.open({
                            file : cmsURL,
                            title : 'Filemanager',
                            width : x * 0.8,
                            height : y * 0.8,
                            resizable : "yes",
                            close_previous : "no"
                          });
                        }
                      };
                      tinymce.init(editor_config);
                    </script> 

                </div>
        </div>
    </div>
    <!-- end::input-icons -->

    <div class="card-footer bg-transparent" style="margin-left: auto;">
        <div class="mc-footer">
            <div class="row">
                <div class="col-lg-12">
                    <button type="submit" data-style="expand-left" class="btn btn-lg btn-primary ladda-button basic-ladda-button">Bazaga yuborish</button>
                    <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>


               
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</div>



@endsection
