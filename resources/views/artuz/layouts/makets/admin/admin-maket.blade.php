
<!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <!-- CSRF Token -->
            <meta name="csrf-token" content="qUWKZKhuW7RANGR0xHkIv5yCJzammcxTXFW7AiqP">
            <title>Gull - Laravel 6 + Bootstrap 4 admin template</title>
            <link href="https://.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">

            <link id="gull-theme" rel="stylesheet" href="{{ asset('admin/assets/styles/css/themes/lite-purple.min.css') }}">
            <link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/perfect-scrollbar.css') }}">
            {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
            <link href='https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />


        </head>
        <body class="text-left">

                <!-- Pre Loader Strat  -->
                    <div class='loadscreen' id="preloader">

                        <div class="loader spinner-bubble spinner-bubble-primary">


                        </div>
                    </div>
                <!-- Pre Loader end  -->




                <!-- ============ Compact Layout start ============= -->
                <!-- ============Deafult  Large SIdebar Layout start ============= -->


                            @yield('header-top-menyu')

                <!-- ============Deafult  Large SIdebar Layout End ============= -->


                <!--=============== Left side Start ================-->

                            @yield('left-navigation')
                <!--=============== Left side End ================-->


                <!-- ============ Body content start ============= -->

                            @yield('content')

                    <!-- Footer Start -->
                            @yield('footer')
                    <!-- fotter end -->



                <!-- ============ Body content End ============= -->
            </div>
        </div>
                <!--=============== End app-admin-wrap ================-->


                <!-- ============ Search UI Start ============= -->
                            @yield('ui-search')
                <!-- ============ Search UI End ============= -->


                <!-- ============ Customizer ============= -->
                            @yield('customizer')
                <!-- ============ End Customizer ============= -->

                <!-- ============ Large Sidebar Layout End ============= -->



            <script src="{{ asset('admin/assets/js/common-bundle-script.js') }}"></script>
            <script src="{{ asset('admin/assets/js/vendor/echarts.min.js') }}"></script>
            <script src="{{ asset('admin/assets/js/es5/echart.options.min.js') }}"></script>
            <script src="{{ asset('admin/assets/js/es5/dashboard.v1.script.js') }}"></script>
            <script src="{{ asset('admin/assets/js/script.js') }}"></script>
            <script src="{{ asset('admin/assets/js/sidebar.large.script.js') }}"></script>
            <script src="{{ asset('admin/assets/js/customizer.script.js') }}"></script>

            {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->

<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>

            <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>


        </body>

</html>
