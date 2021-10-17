  {{-- 
     $base_url = string
     {
          data: [
               {
                    'title' => string
                    'slug' => string
                    'imag_cover' => string
               }
          ]
     }     
--}}

     @if(isset($data))
     @foreach($data as $item_data)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ $item_data->image_cover }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $item_data->title }}</h4>
              <div class="portfolio-links">
                <a href="{{ $base_url }}.'/'.{{ $item_data->slug }}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
     @endforeach
     @else
          <box class="shine box-style"></box>
          <div style="width:100%;">
               <lines class="shine line-style"></lines>
               <lines class="shine line-style"></lines>
               <lines class="shine line-style"></lines>
          </div>
     @endif