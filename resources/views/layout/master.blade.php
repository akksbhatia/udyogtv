<!DOCTYPE html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">

      <title>@yield('title')</title>
      
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="/img/udyog_logo.png">
      <!-- Bootstrap core CSS-->
      <!-- Custom styles for this template-->
      <link href="/css/app.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="/vendor/owl-carousel/owl.theme.css">
   </head>
   <body id="page-top">

      <!-- TOP NAV BAR -->
      
     @include('layout.nav')

      <!-- TOP NAV BAR END -->


       <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="video-page.html">
               <i class="fas fa-fw fa-home"></i>
               <span>Home</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="single-channel.html">
               <i class="fas fa-fw fa-user-alt"></i>
               <span>Job Portal</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-list-alt"></i>
               <span>Industries</span>
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="categories.html">Bhawana</a>
                  <a class="dropdown-item" href="categories.html">Narela</a>
                  <a class="dropdown-item" href="categories.html">Others</a>
               </div>
            </li>
         </ul>

         <!-- SIDE NAV BAR SHOULD END HERE!!!! -->

         


         <div id="content-wrapper">
            <div class="container-fluid pb-0">
                  @yield('content')
               </div>
            </div>
            <!-- /.container-fluid -->
           
         </div>

            <!-- SIDE NAV BAR END -->


      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <!-- Bootstrap core JavaScript-->
     
      <script type="text/javascript" src="/js/app.js"></script>
   </body>

</html>