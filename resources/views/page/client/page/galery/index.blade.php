@extends("page.client.layout.app")

@section("breadcrumb")
  Home
@endsection

@section("content")

<!-- ======= Contact Section ======= -->
<section id="portfolio" class="portfolio">
     <div class="container" style="margin-top:50px;" data-aos="fade-up">
       <div class="section-title">
         <h2>@lang('galery.galery')</h2>
       </div>
     
       <div
        class="galery-listing" style="margin-top: -30px;"
       >

       @component('page.client.components.gridcard')
          
       @endcomponent

           </div>
         </div>
       </div>
     </div>
   </section>

@endsection


@push('script')
  <script>
    let carError = 0 
    let galeryError = 0 
    let page = 1;
    var is_loading = false;
    let last = false;

    function getGalery(){
      is_loading = true;
      axios.get(`{{url('/api/galery?page=${page}')}}`).then(function(response) {
          if (page < 2){
              $('.galery-listing').html(response.data)
            }else{
              $('.galery-listing').append(response.data)
            }

            if (page > 1){
              last = true;
            }

            page++;
            is_loading = false;
        }).catch(function(error){
          galeryError++
          if (galeryError > 2) {
            console.log("failed fetching data galery")
          }
        });
    }

    $(document).ready(function() {
      // stuff here...      
      $(window).scroll(function() {
            if(!last){
              if(!is_loading){
                if($(window).scrollTop() + $(window).height() >= $(document).height() - 150) {
                  console.log(`Fetching data...${page}`);
                  getGalery();
                }
              }
            }
        });
      getGalery()
    });

  </script>
@endpush