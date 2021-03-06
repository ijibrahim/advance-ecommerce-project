<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/icon.png') }}">

    <title>DevsStream E-commerce Admin - Dashboard</title>
    <!-- {{ asset('backend/') }} -->
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">
	<!-- Toaster css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">

  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

@include('admin.body.header')
  
  <!-- Left side column. contains the logo and sidebar -->
@include('admin.body.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  

    @yield('admin')




  </div>
  <!-- /.content-wrapper -->
@include('admin.body.footer')



  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
	<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>	
	<script src="{{ asset('assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
	<script src="{{ asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
	<script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Sunny Admin App -->
    {{-- Tags Input Script --}}
    <script src="{{ asset('assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>
{{-- CK Editor script --}}

    <script src="{{ asset('assets/vendor_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
    <script src="{{ asset('backend/js/pages/editor.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/data-table.js') }}"></script>

	<script src="{{ asset('backend/js/template.js') }}"></script>
	<script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>
	<!-- toaster js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;
            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;
            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;
            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif
    </script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('backend/js/code.js') }}"></script>

</body>
</html>
