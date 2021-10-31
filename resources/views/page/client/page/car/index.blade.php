@extends("page.client.layout.app")

@section("breadcrumb")
  Home
@endsection

@section("content")

<section id="portfolio" class="portfolio" style="margin-top: 100px;">
  
  <div class="section-title">
    <h2>@lang('car.car')</h2>
  </div>
  <div class="section-body car-listing" style="margin-top: -30px;"> 
        @component('page.client.components.gridcard')
          
        @endcomponent
  </div>
    
  </div>
</section>

@endsection


@push('script')
  <script>
    let carError = 0 
    let galeryError = 0 
    let last = false;
    let page = 1;
    var is_loading = true;

    function getCar(){
      is_loading = true;
      axios.get(`{{url('/api/car?page=${page}')}}`).then(function(response) {
            if (page < 2){
              $('.car-listing').html(response.data)
            }else{
              $('.car-listing').append(response.data)
            }
            if (page > 1){
              last = true;
            }
            page++;
            is_loading = false;

            }).catch(function(error){
              carError++
              if (carError > 2){
                console.log("failed fetching data car")
              }
            })
    }

    $(document).ready(function() {
      // stuff here...      
      $(window).scroll(function() {
            if(!last){
              if(!is_loading){
                if($(window).scrollTop() + $(window).height() >= $(document).height() - 150) {
                  console.log(`Fetching data...${page}`);
                  getCar();
                }
              }
            }
        });
      getCar()
    });

  </script>
@endpush