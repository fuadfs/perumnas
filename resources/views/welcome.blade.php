<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.css')
  </head>
  <body>

  <div class="site-loader"></div>
  
  <div class="site-wrap">
  
    <!-- header section -->
    @include('layouts.header')
    <!-- end header section -->

    <!-- slider section -->
    @include('layouts.slider')
    <!-- end slider section -->

    <!-- filter section -->
    @include('layouts.filter')
    <!-- end filter section -->

    <!-- unit-list section -->
    @include('layouts.unit-list')
    <!-- end unit-list section -->

    <!-- why section -->
    @include('layouts.promotion')
    <!-- end why section -->

    <!-- news section -->
    @include('layouts.news-list')
    <!-- end news section -->

    <!-- agent section -->
    @include('layouts.project-list')
    <!-- end agent section -->
    
    <!-- footer section -->
    @include('layouts.footer')
    <!-- end footer section -->


  </div>
    @include('layouts.script')  
  </body>
</html>