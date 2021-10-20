@extends("page.client.layout.app")

@section("breadcrumb")
  Home
@endsection

@section("content")

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
     <div class="container" style="margin-top:50px;" data-aos="fade-up">
       <div class="section-title">
         <h2>@lang('contact.contact')</h2>
         <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
       </div>
 
       <div class="row" data-aos="fade-up" data-aos-delay="100">
         <div class="col-lg-6">
           <div class="row">
             <div class="col-md-12">
               <div class="info-box">
                 <i class="bx bx-map"></i>
                 <h3>@lang('contact.address')</h3>
                 <p> {!!config('app.address')!!}</p>
               </div>
             </div>
             <div class="col-md-6">
               <div class="info-box mt-4">
                 <i class="bx bx-envelope"></i>
                 <h3>@lang('contact.email')</h3>
                 <p>{{config('app.email')}}</p>
               </div>
             </div>
             <div class="col-md-6">
               <div class="info-box mt-4">
                 <i class="bx bx-phone-call"></i>
                 <h3>@lang('contact.wa')</h3>
                 <p>{{config('app.phone')}}</p>
               </div>
             </div>
           </div>
         </div>
 
         <div class="col-lg-6">
           {!!config('app.maps')!!}
         </div>
       </div>
     </div>
   </section>

@endsection