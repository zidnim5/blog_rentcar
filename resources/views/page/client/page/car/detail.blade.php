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
             <div class="img-center">
               
              @php
                $image_cover = null;   
              @endphp
              @inject('urlgen', '\App\Http\Controllers\Injection\MediaService')
              @if (isset($data->getMedia('article')[0]))
                    @php
                        $original = $urlgen->UrlGenerator('article',$data->getMedia('article')[0]->getUrl());
                        $image_cover = config('app.base_url').'/'.$original;
                    @endphp
              @endif
              <img src="{{ $image_cover  ?? "http://pasirrentcar.com/admin/img/vehicleimages/avanza.png" }}" alt="" class="img-fluid" />

             </div>

             <h2 class="entry-title">
               {{$data->title}}
             </h2>

             <div class="entry-meta">
               <ul>
                 <li class="d-flex align-items-center">
                   <i class="bi bi-person"></i>
                   <a href="blog-single.html">ADMIN</a>
                 </li>
               </ul>
             </div>

             <div v-html="state.car.content" class="entry-content">
               {!! $data->content !!}
             </div>
           </article>
           <!-- End blog entry -->
         </div>


         <div class="col-lg-4">
           <div class="sidebar recentpost" style="margin-left: 0px;">
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

@push('script')
<script>
  let postError = 0 

  function getRecentPost(){
    console.log("fetching data");
    axios.get(`{{url("/api/car/show/recent-post")}}`).then(function(response) {
          console.log(response)
          $('.recentpost').html(response.data)
          }).catch(function(error){
            carError++
            if (carError > 2){
              console.log("failed fetching data car")
            }
          })
  }

  $(document).ready(function() {
    // stuff here...      
    getRecentPost()
  });
</script> 
@endpush