@extends("page.client.layout.app")

@section("breadcrumb")
  Home
@endsection

@section("content")

<!-- ======= Contact Section ======= -->
<section id="portfolio" class="portfolio">
     <div class="container" style="margin-top:50px;margin-bottom:50px;" data-aos="fade-up">
       <div class="section-title">
         <h2>Galery</h2>
       </div>
     
       <div
         class="row portfolio-container"
         data-aos="fade-up"
         data-aos-delay="200"
       >

       @component('page.client.components.gridcard')
          
       @endcomponent

           </div>
         </div>
       </div>
     </div>
   </section>

@endsection