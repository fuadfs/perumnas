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

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="bg-white">
              <span class="d-block text-secondary small text-uppercase">Agustus 13, 2022</span>
              <h1 class="h1 text-black mb-3">Sekitar 95% unit LA Resort sudah dihuni</h1>
            </div>
            <div>
              <div>
                <div><img src="images/hero_bg_1.jpg" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.</p>
              <p>Nisi voluptatum error ipsum repudiandae, autem deleniti, velit dolorem enim quaerat rerum incidunt sed, qui ducimus! Tempora architecto non, eligendi vitae dolorem laudantium dolore blanditiis assumenda in eos hic unde.</p>
              <p>Voluptatum debitis cupiditate vero tempora error fugit aspernatur sint veniam laboriosam eaque eum, et hic odio quibusdam molestias corporis dicta! Beatae id magni, laudantium nulla iure ea sunt aliquam. A.</p>

            </div>
          </div>
          
        </div>
      </div>
    </div>

    @include('layouts.footer')

  </div>
    @include('layouts.script')    
  </body>
</html>