<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Upvex - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admin\assets\images\favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('admin\assets\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin\assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin\assets\css\app.min.css')}}" rel="stylesheet" type="text/css">

  </head>
  <body>
		
    <div id="wrapper">
     
        @include('admin.theme.sidebar')	
        <div id="content">
        @include('admin.theme.nav')
        @include('admin.theme.content')
        </div>
    
    
    </div>
 

  <!-- Vendor js -->
  <script src="{{asset('admin\assets\js\vendor.min.js')}}"></script>

  <!-- Table Editable plugin-->
  <script src="{{asset('admin\assets\libs\jquery-tabledit\jquery.tabledit.min.js')}}"></script>

  <!-- Table editable init-->
  <script src="{{asset('admin\assets\js\pages\tabledit.init.js')}}"></script>

  <!-- App js -->
  <script src="{{asset('admin\assets\js\app.min.js')}}"></script> 

  </body>
</html>