<!doctype html>
<html lang="en">
  <head>
  	<title>{{$title ?? 'Mahasiswa'}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @vite(['resources/sass/app.scss'])
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="sidebar-05/css/style.css">
         
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="" class="logo">Portfolic <span>Portfolio Agency</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class=>
	            <a href="#"><span class="fa fa-home mr-3"></span> Beranda</a>
	          </li>
	          <li>
	              <a href="/mahasiswa"><span class="fa fa-user mr-3"></span> Mahasiswa</a>
	          </li>
	          <li>
              
	        </ul>


	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        @yield('content')
      </div>
		</div>

    <script src="sidebar-05/js/jquery.min.js"></script>
    <script src="sidebar-05/js/popper.js"></script>
    <script src="sidebar-05/js/bootstrap.min.js"></script>
    <script src="sidebar-05/js/main.js"></script>
  </body>
</html>