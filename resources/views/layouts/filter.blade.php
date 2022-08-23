<div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form action="{{ route('search') }}" method="GET" class="form-search col-md-12" style="margin-top: -100px;">
            @csrf
            <div class="search-bar">
                <input type="text" name="search" class="form-control" placeholder="Search here">
            </div>
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="customRange2" class="form-label">Example range</label>
                  <div class="select-wrap">
                    <input type="range" class="form-range" min="0" max="5" id="customRange2">
                  </div>
              </div>
              <div class="col-md-3">
                <label for="offer-types">Lokasi</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="searchloc" id="offer-types" class="form-control d-block rounded-0">
                    <option value="" selected>Please select one option</option>
                    @foreach($data_lokasi as $dl)
                    <option value="{{$dl -> lokasi}}">{{$dl -> lokasi}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="select-city">Tipe</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="searchtype" id="select-city" class="form-control d-block rounded-0">
                    <option value="" selected>Please select one option</option>
                    @foreach($data_tipe_properti as $dtp)
                    <option value="{{$dtp -> tipe_properti}}">{{$dtp -> tipe_properti}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <input type="submit" class="btn btn-success text-white btn-block rounded-0" value="Search">
              </div>
            </div>
          </form>
        </div>  

        <!-- <div class="row">
          <div class="col-md-12">
            <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
              <div class="mr-auto">
              </div>
              <div class="ml-auto d-flex align-items-center">
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select class="form-control form-control-sm d-block rounded-0">
                    <option value="">Sort by</option>
                    <option value="">Price Ascending</option>
                    <option value="">Price Descending</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div> -->
       
      </div>
</div>