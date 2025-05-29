<html lang="en" class="perfect-scrollbar-on"><head>

	<meta charset="utf-8">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>p{{ $title }}</title>

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
   <meta name="viewport" content="width=device-width">


   <!-- Bootstrap core CSS     -->
   <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

   <!--  Paper Dashboard core CSS    -->
   <link href="{{ asset('css/paper-dashboard.css')}}" rel="stylesheet">


   <!--  Fonts and icons     -->
   <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">

   <link href="{{ asset('css/themify-icons.css')}}" rel="stylesheet">   
   <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/61/2/intl/vi_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/61/2/intl/vi_ALL/util.js"></script></head>

<body>
	<div class="wrapper">
	   @include ('layouts.sidebar')

	   <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="bd29d8c9-95c8-752d-74cf-c79704464a90">
         @include ('layouts.header')
         
         <div class="content">
            <div class="container-fluid">
               <div class="row">
                  @yield('content')
               </div>
            </div>
            @if($errors->any())
               <div class="alert alert-danger">
                  <ul>
                        @foreach($errors->all() as $error)
                           <li>{{ $error }}</li>
                        @endforeach
                  </ul>
               </div>
            @endif
         </div>

         @include ('layouts.footer')
	   <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 832px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 805px;"></div></div></div>
	</div>


   <script src="{{asset('js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/jquery-ui.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
   @include ('layouts.scripts')
</body>
<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
</html>