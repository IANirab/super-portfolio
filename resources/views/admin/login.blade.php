<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin Area :: login</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('panel/images/favicon.ico') }}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('panel/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('panel/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('panel/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('panel/css/app-style.css') }}" rel="stylesheet"/>

</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card card-primary card-authentication1 mx-auto my-5 animated bounceInDown">
		<div class="card-body">
		 <div class="card-content p-2">
       @if(session()->has('message'))
       <div class="alert alert-danger p-2 text-center">
           {{ session()->get('message') }}
       </div>
       @endif
		  <div class="card-title text-uppercase text-center pb-2">Sign In</div>
		    <form action="" method="post">
          @csrf
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="email" class="sr-only">Email</label>
				  <input type="email" name="email" id="email" class="form-control form-control-rounded" placeholder="Email Address" required>
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="password" class="sr-only">Password</label>
				  <input type="password" id="password" class="form-control form-control-rounded" placeholder="Password" name="password" required>
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			 <button type="submit" class="btn btn-primary btn-round btn-block waves-effect waves-light">Sign In</button>
			 </form>
		   </div>
		  </div>
	     </div>

     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('panel/js/jquery.min.js') }}"></script>
  <script src="{{ asset('panel/js/popper.min.js') }}"></script>
  <script src="{{ asset('panel/js/bootstrap.min.js') }}"></script>
  <!-- waves effect js -->
  <script src="{{ asset('panel/js/waves.js') }}"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('panel/js/app-script.js') }}"></script>

</body>
</html>
