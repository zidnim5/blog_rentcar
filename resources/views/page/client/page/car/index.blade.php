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

    function getCar(){
      axios.get(`{{url("/api/car")}}`).then(function(response) {
            console.log(response)
            $('.car-listing').html(response.data)
            }).catch(function(error){
              carError++
              if (carError > 2){
                console.log("failed fetching data car")
              }
            })
    }

    $(document).ready(function() {
      // stuff here...      
      getCar()
    });

  </script>
@endpush