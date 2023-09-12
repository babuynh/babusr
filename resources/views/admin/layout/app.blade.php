<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta data -->
      <meta charset="UTF-8">
      <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
      <meta content="" name="description">
      <meta content="" name="author">
      <meta name="keywords" content=""/>
      <!-- Title -->
      <title> Health Mind</title>
      <!--Favicon -->
      <link rel="icon" href="{{asset('admin/assets/img/fav.png') }}" type="image/x-icon"/>
      <!--Bootstrap.min css-->
      <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
      <!--Style css-->
      <link rel="stylesheet" href="{{asset('admin/assets/css/style.css') }}">
      <!--Icons css-->
      <link rel="stylesheet" href="{{asset('admin/assets/css/icons.css') }}">
      <!-- P-Scrollbar css-->
      <link rel="stylesheet" href="{{asset('admin/assets/plugins/p-scroll/p-scroll.css') }}">
      <!--Sidemenu css-->
      <link rel="stylesheet" href="{{asset('admin/assets/plugins/sidemenu/sidemenu-1/sidemenu-1.css') }}">
      <!-- Sidemenu-responsive-tabs  css -->
      <link href="{{asset('admin/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css') }}" rel="stylesheet">
      <!-- Siderbar css-->
      <link href="{{asset('admin/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
      <!-- jvectormap CSS -->
      <link href="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
      <!-- Color-skins css -->
      <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('admin/assets/colors/color-skins/color.css') }}" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
    @include('admin.layout.header')
    @include('admin.layout.sidebar')
    @yield('content')
    @include('admin.layout.footer')
      <!--app closed-->
      <!-- Back to top -->
      <a href="#top" id="back-to-top" ><i class="fa fa-long-arrow-up"></i></a>
      <!--Jquery.min js-->
      <script src="{{asset('admin/assets/js/jquery.min.js') }}"></script>
      <!--popper js-->
      <script src="{{asset('admin/assets/js/popper.js') }}"></script>
      <!--Bootstrap.min js-->
      <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
      <!--Tooltip js-->
      <script src="{{asset('admin/assets/js/tooltip.js') }}"></script>
      <!-- Jquery star rating-->
      <script src="{{asset('admin/assets/plugins/rating/jquery.rating-stars.js') }}"></script>
      <!--Sidemenu js-->
      <script src="{{asset('admin/assets/plugins/sidemenu/sidemenu-1/sidemenu-1.js') }}"></script>
      <!-- Sidemenu-responsive-tabs  js -->
      <script src="{{asset('admin/assets/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js') }}"></script>
      <!-- Sidebar js-->
      <script src="{{asset('admin/assets/plugins/sidebar/sidebar.js') }}"></script>
      <!--P-Scrollbar js-->
      <script src="{{asset('admin/assets/plugins/p-scroll/p-scroll.js') }}"></script>
      <script src="{{asset('admin/assets/js/p-scroll.js') }}"></script>
      <!--Othercharts js-->
      <script src="{{asset('admin/assets/plugins/othercharts/jquery.knob.js') }}"></script>
      <script src="{{asset('admin/assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>
      <!--OtherCharts js-->
      <script src="{{asset('admin/assets/js/othercharts.js') }}"></script>
      <!-- ECharts js -->
      <script src="{{asset('admin/assets/plugins/echarts/echarts.js') }}"></script>
      <!--Chart js-->
      <script src="{{asset('admin/assets/plugins/Chart.js/dist/Chart.min.js') }}"></script>
      <script src="{{asset('admin/assets/plugins/Chart.js/dist/Chart.extension.js') }}"></script>
      <!-- Vector Plugin -->
      <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
      <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
      <script src="{{asset('admin/assets/plugins/jvectormap/gdp-data.js') }}"></script>
      <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
      <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js') }}"></script>
      <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-au-mill.js') }}"></script>
      <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js') }}"></script>
      <script src="{{asset('admin/assets/js/jvectormap.js') }}"></script>
      <!--Dashboard js-->
      <script src="{{asset('admin/assets/js/index2.js') }}"></script>
      <!--Showmore js-->
      <script src="{{asset('admin/assets/js/jquery.showmore.js') }}"></script>
      <!--Scripts js-->
      <script src="{{asset('admin/assets/js/scripts1.js') }}"></script>

	  	<!-- ECharts js -->
		<script src="{{asset('admin/assets/plugins/echarts/echarts.js') }}"></script>

		<!--Peitychart js -->
		<script src="{{asset('admin/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
		<script src="{{asset('admin/assets/plugins/peitychart/peitychart.init.js') }}"></script>

		<!--Dashboard js-->
	<script src="{{asset('admin/assets/js/index3.js') }}"></script>




   </body>
</html>
