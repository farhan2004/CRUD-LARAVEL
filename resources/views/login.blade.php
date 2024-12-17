<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LARAVEL 3A</title>
	<!-- Bootstrap Styles-->
    <link href="{{ asset('tema/assets/css/bootstrap.css') }}" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="{{ asset('tema/assets/css/font-awesome.css') }}" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="{{ asset('tema/assets/css/custom-styles.css')}}" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
</head>
<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            @yield('judul')
                        </h1>
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{ asset('tema/assets/js/jquery-1.10.2.js') }}"></script>
      <!-- Bootstrap Js -->
    <script src="{{ asset('tema/assets/js/bootstrap.min.js') }}"></script>
    <!-- Metis Menu Js -->
    <script src="{{ asset('tema/assets/js/jquery.metisMenu.js') }}"></script>
      <!-- Custom Js -->
    <script src="{{ asset('tema/assets/js/custom-scripts.js') }}"></script>
    
   
</body>
</html>
