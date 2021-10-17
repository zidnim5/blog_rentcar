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
               <img :src="state.car.image_cover" alt="" class="img-fluid" />
             </div>

             <h2 class="entry-title">
               galery  title
             </h2>

             <div v-html="state.car.content" class="entry-content"></div>
           </article>
           <!-- End blog entry -->

           <div class="blog-author d-flex align-items-center">
             <!-- <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt=""> -->
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
                 Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum
                 sed possimus accusantium. Quas repellat voluptatem officia
                 numquam sint aspernatur voluptas. Esse et accusantium ut unde
                 voluptas.
               </p>
             </div>
           </div>
           <!-- End blog author bio -->
         </div>
         <!-- End blog entries list -->

         <div class="col-lg-4">
           <div class="sidebar">
             <h3 class="sidebar-title">Recent Posts</h3>
             <div class="sidebar-item recent-posts">
               <div
                 v-for="item_car in state.cars"
                 :key="item_car.slug"
                 class="post-item clearfix"
               >
                 <img :src="item_car.image_cover" alt="" />
                 <h4>
                   <a href="galery/slug" @click="window.onload()">title</a>
                 </h4>
                 <!-- <time datetime="2020-01-01">Admin</time> -->
               </div>
             </div>
             <!-- End sidebar recent posts-->
           </div>
           <!-- End sidebar -->
         </div>
         <!-- End blog sidebar -->
       </div>
     </div>
   </section>

@endsection