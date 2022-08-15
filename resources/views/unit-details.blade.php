<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Detail Unit dari</span>
            <h1 class="mb-2">{{$data_unit->proyek}}</h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold">Rp. {{$data_unit->harga}}</strong></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="images/hero_bg_1.jpg" alt="Image" class="img-fluid"></div>
                <div><img src="images/hero_bg_2.jpg" alt="Image" class="img-fluid"></div>
                <div><img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3">Rp. {{$data_unit->harga}}</strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Kamar Tidur</span>
                    <span class="property-specs-number">{{$data_unit->kamar_tidur}}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Kamar Mandi</span>
                    <span class="property-specs-number">{{$data_unit->kamar_mandi}}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Dapur</span>
                    <span class="property-specs-number">{{$data_unit->dapur}}</span>
                    
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Tipe Properti</span>
                  <strong class="d-block">{{$data_unit->tipe_properti}}</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Luas Bangunan</span>
                  <strong class="d-block">{{$data_unit->luas_bangunan}} m<sup>2</sup></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Luas Tanah</span>
                  <strong class="d-block">{{$data_unit->luas_tanah}}m<sup>2</sup></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Sertifikasi Unit</span>
                  <strong class="d-block">{{$data_unit->sertifikasi_unit}}</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Status Properti</span>
                  <strong class="d-block">{{$data_unit->status_properti}}</strong>
                </div>
              </div>
              <h2 class="h4 text-black">Spesifikasi Bangunan</h2>
              <p>{{$data_unit->spesifikasi_bangunan}}</p>
              
              <div class="row no-gutters mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Gallery</h2>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_5.jpg" class="image-popup gal-item"><img src="images/img_5.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_6.jpg" class="image-popup gal-item"><img src="images/img_6.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_7.jpg" class="image-popup gal-item"><img src="images/img_7.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_8.jpg" class="image-popup gal-item"><img src="images/img_8.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Detail Properti</h3>

                <div class="d-flex text-right border-top py-0">
                  <div class="mr-auto p-2"><span class="d-inline text-black mb-0 caption-text">Dinding</span></div>
                  <div class="p-2"><strong class="d-inline">{{$data_unit->dinding}}</strong></div>
                </div>

                <div class="d-flex text-right border-top py-0">
                  <div class="mr-auto p-2"><span class="d-inline text-black mb-0 caption-text">Plafond</span></div>
                  <div class="p-2"><strong class="d-inline">{{$data_unit->plafond}}</strong></div>
                </div>
             
                <div class="d-flex text-center border-top py-0">
                  <div class="mr-auto p-2"><span class="d-inline text-black mb-0 caption-text">Pintu</span></div>
                  <div class="p-2"><strong class="d-inline">{{$data_unit->pintu}}</strong></div>
                </div>
              
                <div class="d-flex text-center border-top py-0">
                  <div class="mr-auto p-2"><span class="d-inline text-black mb-0 caption-text">Jendela</span></div>
                  <div class="p-2"><strong class="d-inline">{{$data_unit->jendela}}</strong></div>
                </div>
        
                <div class="d-flex text-center border-top py-0">
                  <div class="mr-auto p-2"><span class="d-inline text-black mb-0 caption-text">Lantai</span></div>
                  <div class="p-2"><strong class="d-inline">{{$data_unit->lantai}}</strong></div>
                </div>
           
                <div class="d-flex text-center border-top py-0">
                  <div class="mr-auto p-2"><span class="d-inline text-black mb-0 caption-text">Keramik WC</span></div>
                  <div class="p-2"><strong class="d-inline">{{$data_unit->keramik_wc}}</strong></div>
                </div>
        
                <div class="d-flex text-center border-top border-bottom py-0">
                  <div class="mr-auto p-2"><span class="d-inline text-black mb-0 caption-text">Sanitair</span></div>
                  <div class="p-2"><strong class="d-inline">{{$data_unit->sanitair}}</strong></div>
                </div> 
            </div>
            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Fasilitas Properti</h3>
           
                <div class="d-flex text-center border-top py-0">
                  <div class="mr-auto p-2"><span class="d-inline text-black mb-0 caption-text">Listrik</span></div>
                  <div class="p-2"><strong class="d-inline">{{$data_unit->listrik}}</strong></div>
                </div>
                <div class="d-flex text-center border-top border-bottom py-0">
                  <div class="mr-auto p-2"><span class="d-inline text-black mb-0 caption-text">Air</span></div>
                  <div class="p-2"><strong class="d-inline">{{$data_unit->air}}</strong></div>
                </div>
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