
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


<div class="row">
    <!-- begin::sizing -->
    <div class="col-lg-8 mb-3">
        <div class="card">
            <div class="card-header bg-transparent">
                <h3 class="card-title"> Sizings</h3>
            </div>
            <!--begin::form-->
            <form action="form-input-group.html">
                <div class="card-body">
                    <div class="form-row ">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4" class="ul-form__label">Large Input Group:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                                <i class="i-Information"></i>
                                            </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Large Size" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                        Some help content goes here
                                </small>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4" class="ul-form__label">Joint Addons:</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
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
                        <div class="form-group col-md-12">
                            <label for="inputEmail4" class="ul-form__label">Small Input Group:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="small size" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                            <i class="i-Business-Mens"></i>
                                        </span>
                                </div>
                            </div>

                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4" class="ul-form__label">Small Input Group:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                                    <i class="i-Information"></i>
                                                </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Large Size" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                            Some help content goes here
                                    </small>
                        </div>

                    </div>

                    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<textarea name="content" class="form-control my-editor">{!! old('content', '') !!}</textarea>
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
                <div class="card-footer bg-transparent">
                    <div class="mc-footer">
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="button" class="btn  btn-primary m-1">Submit</button>
                                <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>



                            </div>
                        </div>
                    </div>
                </div>


            <!-- end::form -->
        </div>
    </div>
    <!-- end::sizing -->

    <!-- begin::input-icons -->
    <div class="col-lg-4 mb-3">
        <div class="card">
            <div class="card-header bg-transparent">
                <h3 class="card-title"> Input Icons</h3>
            </div>
            <!--begin::form-->

                <div class="card-body">
                    <div class="form-row ">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4" class="ul-form__label">Left Icon Input:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent" id="basic-addon1">
                                                <i class="i-Search-People"></i>
                                            </span>
                                </div>
                                <input type="text" class="form-control" placeholder="search..." aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                        Some help content goes here
                                </small>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4" class="ul-form__label">Right Icon Input:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="search..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent" id="basic-addon2">
                                            <i class="i-Search-People"></i>
                                        </span>
                                </div>
                            </div>

                        </div>


                    </div>



                </div>


            </form>

            <!-- end::form -->
        </div>
    </div>
    <!-- end::input-icons -->


</div>

</div>



@endsection
