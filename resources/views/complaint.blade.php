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
            <h1 class="mb-2">Pengaduan</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-12 mb-5">
          
            <form action="#" class="p-5 bg-white border">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nama Lengkap</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Nama Lengkap Anda">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Alamat Email Anda">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Subjek</label>
                  <input type="text" id="subject" class="form-control" placeholder="Masukan Subjek Pengaduan">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Pesan</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Isi Pengaduan"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Kirim Pengaduan" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>
          </div>

        </div>
      </div>
    </div>

    @include('layouts.footer')

  </div>
    @include('layouts.script')    
  </body>
</html>