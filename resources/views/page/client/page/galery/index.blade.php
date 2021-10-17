@extends("page.client.layout.app")

@section("breadcrumb")
  Home
@endsection

@section("content")

<!-- ======= Contact Section ======= -->
<section id="portfolio" class="portfolio">
     <div class="container" style="margin-top:50px;" data-aos="fade-up">
       <div class="section-title">
         <h2>Galery</h2>
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

    function getGalery(){
      axios.get(`{{url("/api/galery")}}`).then(function(response) {
        console.log(response)
        $('.galery-listing').html(response.data)
            }).catch(function(error){
              galeryError++
              if (galeryError > 2) {
                console.log("failed fetching data galery")
              }
            })
    }

    $(document).ready(function() {
      // stuff here...      
      getGalery()
    });

  </script>
@endpush