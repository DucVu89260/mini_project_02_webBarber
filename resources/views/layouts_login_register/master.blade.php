<html lang="en" class="perfect-scrollbar-on">
<head>
	<meta charset="utf-8">
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Paper Dashboard PRO by Creative Tim</title>

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
   <meta name="viewport" content="width=device-width">


   <!-- Bootstrap core CSS     -->
   <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">

   <!--  Paper Dashboard core CSS    -->
   <link href="{{asset('/css/paper-dashboard.css')}}" rel="stylesheet">


   <!--  CSS for Demo Purpose, don't include it in your project     -->
   <link href="{{asset('/css/demo.css')}}" rel="stylesheet">


   <!--  Fonts and icons     -->
   <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">
   <link href="../../assets/css/themify-icons.css" rel="stylesheet">
   <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/61/2/intl/vi_ALL/common.js"></script>
   <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/61/2/intl/vi_ALL/util.js"></script>
</head>

<body>
   <nav class="navbar navbar-transparent navbar-absolute">
      <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../dashboard/overview.html">Barber shop Adminstration</a>
         </div>
         <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li>
                  <a href="{{route('register')}}">
                     Register
                  </a>
               </li>
               <li>
                  <a href="../dashboard/overview.html">
                     Dashboard
                  </a>
               </li>
               </ul>
         </div>
      </div>
   </nav>

   <div class="wrapper wrapper-full-page">
      <div class="full-page login-page" data-color="blue" data-image="{{ asset('/img/background/background-2.jpg') }}">
      <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
         <div class="content">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                     @yield('content_user')
                  </div>
               </div>
            </div>
         </div>

        	<footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright">
                        © <script>document.write(new Date().getFullYear())</script>2025, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                  </div>
               </div>
         </footer>
      <div class="full-page-background" style="background-image: url(../../assets/img/background/background-2.jpg) "></div></div>
   </div>

	<script src="../../assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="../../assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="../../assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
	<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Forms Validations Plugin -->
	<script src="../../assets/js/jquery.validate.min.js"></script>

	<!-- Promise Library for SweetAlert2 working on IE -->
	<script src="../../assets/js/es6-promise-auto.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="../../assets/js/moment.min.js"></script>

	<!--  Date Time Picker Plugin is included in this js file -->
	<script src="../../assets/js/bootstrap-datetimepicker.js"></script>

	<!--  Select Picker Plugin -->
	<script src="../../assets/js/bootstrap-selectpicker.js"></script>

	<!--  Switch and Tags Input Plugins -->
	<script src="../../assets/js/bootstrap-switch-tags.js"></script>

	<!-- Circle Percentage-chart -->
	<script src="../../assets/js/jquery.easypiechart.min.js"></script>

	<!--  Charts Plugin -->
	<script src="../../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../../assets/js/bootstrap-notify.js"></script>

	<!-- Sweet Alert 2 plugin -->
	<script src="../../assets/js/sweetalert2.js"></script>

	<!-- Vector Map plugin -->
	<script src="../../assets/js/jquery-jvectormap.js"></script>

	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<!-- Wizard Plugin    -->
	<script src="../../assets/js/jquery.bootstrap.wizard.min.js"></script>

	<!--  Bootstrap Table Plugin    -->
	<script src="../../assets/js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
	<script src="../../assets/js/jquery.datatables.js"></script>

	<!--  Full Calendar Plugin    -->
	<script src="../../assets/js/fullcalendar.min.js"></script>

	<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
	<script src="../../assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/demo.js"></script>

	<script type="text/javascript">
        $().ready(function(){
            demo.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
	</script>


<div class="collapse navbar-collapse off-canvas-sidebar">
   <ul class="nav nav-mobile-menu">
      <li>
         <a href="register.html">
               Register
         </a>
      </li>
      <li>
         <a href="../dashboard/overview.html">
            Dashboard
         </a>
      </li>
   </ul>
</div>
</body><!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
</html>