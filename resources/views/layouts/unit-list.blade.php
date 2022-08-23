<div class="site-section site-section-sm bg-light">
      <div class="container">
      
        <div class="row mb-5">
          <div>
            @if($data_empty != null)
              <p>{{$data_empty}}</p>
            @endif
          </div>
          @foreach($data_unit as $data)
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="{{ url('unit-details', $data->id) }}" class="property-thumbnail">
                <div class="offer-type-wrap">
                  @if($data->diskon != null)
                  <span class="offer-type bg-danger">Diskon DP {{ $data->diskon }}%*</span>
                  @endif
                </div>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="{{ url('unit-details', $data->id) }}">{{ $data->proyek }}</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> {{$data->lokasi}}</span>
                <strong class="property-price text-primary mb-3 d-block text-success">{{$data->harga}}</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Kamar tidur</span>
                    <span class="property-specs-number">{{ $data->kamar_tidur}}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Kamar mandi</span>
                    <span class="property-specs-number">{{ $data->kamar_mandi}}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Tipe</span>
                    <span class="property-specs-number">{{ $data->tipe_properti}}</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>
          @endforeach
        </div>

        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>  
        </div>
        
      </div>
</div>