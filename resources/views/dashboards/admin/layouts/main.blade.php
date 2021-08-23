<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Smartvillage</title>
    <!-- Begin Jekyll SEO tag v2.6.1 -->
    <title>Smartvillage</title>
    <meta name="generator" content="Jekyll v3.8.5"/>
    <meta property="og:title" content="Introduction"/>
    <meta property="og:locale" content="en_US"/>
    <meta name="description" content="AdminLTE v3 Documentaion"/>
    <meta property="og:description" content="AdminLTE v3 Documentaion"/>
    <meta property="og:site_name" content="AdminLTE v3 Documentaion"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script type="application/ld+json">
{"@type":"WebSite","url":"/","headline":"Introduction","name":"AdminLTE v3 Documentaion","description":"AdminLTE v3 Documentaion","@context":"https://schema.org"}

    </script>
    <!-- End Jekyll SEO tag -->


    <link rel="stylesheet" href="{{asset("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700")}}">
    <link rel="stylesheet" href="{{asset("/assets/plugins/fontawesome-free/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/docs.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/highlighter.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/adminlte.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/adminpanel.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/jquery.dataTables.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/summernote.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
           <!-- <li class="nav-item dropdown">
                <a class="nav-link bg-info rounded dropdown-toggle" href="#" id="navbarVersionDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    v3.0
                </a>
                <div class="dropdown-menu py-0" aria-labelledby="navbarVersionDropdown">
                    <a class="dropdown-item bg-info disabled" href="#">v3.0</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{asset("https://adminlte.io/docs/2.4/installation")}}">v2.4</a>
                    <a class="dropdown-item"
                       href="{{asset("https://adminlte.io/themes/AdminLTE/documentation/index.html")}}"><= v2.3</a>
                </div>
            </li>-->
        </ul>

        <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item d-none d-sm-inline-block">
              <a href="index3.html" class="nav-link">Home</a>
            </li> -->
        </ul>

        <!-- SEARCH FORM -->
        <!-- <form class="form-check-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form> -->
        <div class="pull-right">
            <ul class="nav pull-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li><a href="{{url('admin/logout')}}"><i class="icon-off"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{url('admin/dashboard')}}" class="brand-link logo-switch">
            <img src="{{url('assets/img/bmw-logo.png')}}" alt="AdminLTE Docs Logo Small" class="brand-image-xl logo-xs">
            <img src="{{url('assets/img/bmw-logo.png')}}" alt="AdminLTE Docs Logo Large" class="brand-image-xs logo-xl"
                 style="left: 12px;width:30px;height: 30px ">


        </a>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('assets/img/bmw-logo.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">

                </a>
            </div>
        </div>

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">


                    <li class="nav-item  ">


                        <a href="{{url('admin/brand')}}" class="nav-link ">
                            <i class="fas fa-car-side"></i>
                            <p>
                                {{__('messages.add_brand')}}

                            </p>
                        </a>
                    </li>


                    <li class="nav-item ">

                        <a href="{{url('admin/model')}}" class="nav-link">
                            <i class="fas fa-car"></i>
                            <p>
                                {{__('messages.add_model')}}

                            </p>
                        </a>
                    </li>



                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper px-4 py-2">
        <div class="content-header">

        </div>

        <div class="content px-2">
            @yield('content')

        </div>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
            v3.0.5
        </div>
        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>



<script src="{{asset("assets/plugins/jquery/jquery.min.js")}}"></script>
<script src="{{asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
<script src="{{asset("assets/js/adminlte.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.dataTables.js")}}"></script>
<script src="{{asset("assets/js/init.js")}}"></script>
<script src="{{asset("assets/js/summernote.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.js"></script>

<script type='text/javascript'>

    $(document).ready(function(){

        // Department Change
        $('#brand').change(function(){
            // alert('hello');

            // Department id
            var id = $(this).val();
            //alert(id);
            // Empty the dropdown
            $('#model').find('option').not(':first').remove();

            // AJAX request
            $.ajax({
                url: 'models/'+id,
                type: 'get',
                dataType: 'json',
                success: function(response){

                    var len = 0;
                    if(response['data'] != null){
                        len = response['data'].length;
                    }

                    if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){

                            var id = response['data'][i].id;
                            console.log(id)
                            var name = response['data'][i].name;
//alert(name);
                            var option = "<option value='"+id+"'>"+name+"</option>";

                            $("#model").append(option);
                        }
                    }

                }
            });
        });
        $('#brands').change(function(){
            // alert('hello');

            // Department id
            var id = $(this).val();
            //alert(id);
            // Empty the dropdown
            $('#models').find('option').not(':first').remove();

            // AJAX request
            $.ajax({
                url: '{{url('admin/models/')}}/'+id,
                type: 'get',
                dataType: 'json',
                success: function(response){

                    var len = 0;
                    if(response['data'] != null){
                        len = response['data'].length;
                    }

                    if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){

                            var id = response['data'][i].id;
                            console.log(id)
                            var name = response['data'][i].name;
//alert(name);
                            var option = "<option value='"+id+"'>"+name+"</option>";

                            $("#models").append(option);
                        }
                    }

                }
            });
        });



    });

</script>
</body>
</html>
