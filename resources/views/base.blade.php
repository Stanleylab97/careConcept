
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>careConcept</title>

    <!-- Bootstrap -->
    <link href="{{asset('/careConcept/public/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/careConcept/public/gentelella-master/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/careConcept/public/gentelella-master/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{asset('/careConcept/public/gentelella-master/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="{{asset('/careConcept/public/gentelella-master/build/css/custom.min.css')}}" rel="stylesheet">
    @yield('top-css')
  

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>careConcept</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('/careConcept/public/gentelella-master/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenue,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('partials/_menu')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          @include('partials/_menu_footer')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('partials/_top_nav')
        <!-- /top navigation -->

        <!-- page content -->
         @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            careConcept &copy; 2020</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    @yield('footer-scripts')

        <!-- jQuery -->
        <script src="{{asset('/careConcept/public/gentelella-master/vendors/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('/careConcept/public/gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{asset('/careConcept/public/gentelella-master/vendors/fastclick/lib/fastclick.js')}}"></script>
        <!-- NProgress -->
        <script src="{{asset('/careConcept/public/gentelella-master/vendors/nprogress/nprogress.js')}}"></script>
        <!-- jQuery custom content scroller -->
        <script src="{{asset('/careConcept/public/gentelella-master/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>

        <!-- Custom Theme Scripts -->
        <script src="{{asset('/careConcept/public/gentelella-master/build/js/custom.min.js')}}"></script>
   
  </body>
</html>