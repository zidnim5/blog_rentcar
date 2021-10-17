@extends("page.client.layout.app")

@section("breadcrumb")
  Home
@endsection

@section("content")

<section id="blog" class="blog">
     <div class="container" style="margin-top: 100px;" data-aos="fade-up">
       <div class="row">
         <div class="col-lg-8 entries">
           <article class="entry entry-single">
             <div class="entry-img">
               <img :src="{{ $data->image_cover ?? null }}" alt="" class="img-fluid" />
             </div>

             <h2 class="entry-title">
               title
             </h2>

             <div class="entry-meta">
               <ul>
                 <li class="d-flex align-items-center">
                   <i class="bi bi-person"></i>
                   <a href="blog-single.html">ADMIN</a>
                 </li>
               </ul>
             </div>

             <div v-html="state.car.content" class="entry-content"></div>
           </article>
           <!-- End blog entry -->

           <div class="blog-author d-flex align-items-center">
             <!-- <img -->
             <!-- src="assets/img/blog/blog-author.jpg" class="rounded-circle -->
             <!-- float-left" alt="" /> -->
             <div>
               <h4>PASIR RENTCAR</h4>
               <div class="social-links">
                 <a href="https://twitters.com/#"
                   ><i class="bi bi-twitter"></i
                 ></a>
                 <a href="https://facebook.com/#"
                   ><i class="bi bi-facebook"></i
                 ></a>
                 <a href="https://instagram.com/#"
                   ><i class="biu bi-instagram"></i
                 ></a>
               </div>
               <p>
                 {!! $data->content ?? null !!}.
               </p>
             </div>
           </div>
           <!-- End blog author bio -->
         </div>
         <!-- End blog entries list -->

         <div class="col-lg-4">
           <div class="sidebar">
             @component('page.client.components.recentpost')
                 
             @endcomponent
             <!-- End sidebar recent posts-->
           </div>
           <!-- End sidebar -->
         </div>
         <!-- End blog sidebar -->
       </div>
     </div>
   </section>

@endsection