<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.css')
  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    @include('layouts.header')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Berita</h1>
          </div>
        </div>
      </div>
    </div>

    @include('layouts.news-list')

    @include('layouts.footer')

  </div>
    @include('layouts.script')    
  </body>
</html>