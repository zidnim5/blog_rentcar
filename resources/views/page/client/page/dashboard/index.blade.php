@extends("page.client.layout.app")

@section("breadcrumb")
  Home
@endsection

@section("content")

</section>

     <!-- ======= Services Section ======= -->
     <section id="services" class="services  mt-4">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <img src="{{ asset('assets/mobil/service-others.png') }}" alt="" srcset="">
          {{-- <h2>@lang('dashboard.services')</h2> --}}
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
        </div>

        <div class="row">
          <div class="col-md-8 offset-md-2 text-center" style="line-height: 30px;">
           <strong>Pasir Rentcar</strong> merupakan salah satu diantara Penyedia Jasa Transportasi di Purwokerto komplit plit Sopir + Bensin, Kami memperhatikan apapun yang akan membuat anda nyaman dan selalu berusaha memuaskan Anda ketika menggunakan Jasa Rental Mobil Purwokerto termurah dari kami,  kami juga siap menghadirkan rentalan sesuai kebutuhan anda dengan menyediakan berbagai jenis kendaraan sesuai kebutuhan.
           <br>
           <br>
           Selain memberi layanan penawaran rental mobil purwokerto termurah, kami juga berusaha memberikan armada terbaik untuk kepuasan anda, salah satunya dengan selalu menjaga kebersihan mobil luar dalam sehingga terbebas dari bau yang tidak di inginkan seperti  bau asap rokok dan lain-lain, kami juga secara rutin mengecek armada yang digunakan, selain itu sopir yang bertugas membawa armada kami adalah sopir resmi sudah mempunyai jam terbang tinggi serta sudah lulus edukasi agar selalu mengutamakan keselamatan dan kepuasan anda  dalam setiap kali bertugas di banyak perjalanan.
           <br>
           <br>
           supir yang bertugas sudah berpengalaman, berdedikasi, berpendidikan, punya lisensi, aman,  sopir yang profesional dan sopir yang akan mengemudikan mobil dengan menepati kaidah-kaidah resmi perlalulintasan yang berlaku.
           <br>
          </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
 
     <!-- ======= Car blog Section ======= -->
     <section id="portfolio" class="portfolio" style="margin-top: 50px;">

        <div class="section-title">
          <h2>@lang('dashboard.choose') @lang('dashboard.car') !</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
        </div>
        <div class="car-listing" style="margin-top: -30px;">
          @component('page.client.components.gridcard')
          @endcomponent
        </div>
       
               
           
     </section><!-- End Portfolio Section -->
 
     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg ">
       <div class="container" data-aos="fade-up">
 


 <div class="section-title">
  <h2>@lang('dashboard.services')</h2>
  <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
</div>

<div class="row">
  <div class="col-md-6">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
      {{-- <i class="bi bi-briefcase"></i> --}}
      <h4><a href="#">Rental Lepas Kunci</a></h4>
      <p>Rental mobil tanpa pengemudi ( Self Driver )</p>
    </div>
  </div>
  <div class="col-md-6 mt-4 mt-md-0">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
      {{-- <i class="bi bi-card-checklist"></i> --}}
      <h4><a href="#">Rental + Supir</a></h4>
      <p>Konsultasikan perjalanan anda dengan supir terbaik dari kami</p>
    </div>
  </div>
  <div class="col-md-6 mt-4 mt-md-0">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
      {{-- <i class="bi bi-bar-chart"></i> --}}
      <h4><a href="#">Perjalanan Wisata</a></h4>
      <p>Rencanakan liburan hebat anda bersama kami. Kami menyediakan paket paket wisata ternyaman untuk anda dan keluarga anda.</p>
    </div>
  </div>
  <div class="col-md-6 mt-4 mt-md-0">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
      {{-- <i class="bi bi-binoculars"></i> --}}
      <h4><a href="#">Antar Jemput</a></h4>
      <p>Kami siap membantu anda yang sedang membutuhkan jasa antar jemput ( Drop off / Pick up )</p>
    </div>
  </div>

    <div class="col-md-12 text-center">
      <div class="wrap">
        <a href="https://api.whatsapp.com/send?phone={{config('app.phone')}}&text=Halo%20admin" class="button"><i class="fa fa-whatsapp fa-2x text-white"></i></a>
      </div>
    </div>
     </section><!-- End Services Section -->

 
     
     <!-- ======= Galery Section ======= -->
     <section id="portfolio" class="portfolio">
       <div class="container" data-aos="fade-up">
 
         <div class="section-title">
           <h2>@lang('dashboard.galery')</h2>
           <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
         </div>

         <div class="galery-listing" style="margin-top: -30px;">
              @component('page.client.components.gridcard')
                  
              @endcomponent
         </div>
 
       </div>



     </section><!-- End Portfolio Section -->


     <!-- ======= Services Section ======= -->
     <section id="services" class="services  mt-4">
      <div class="container" data-aos="fade-up">

        
         <div class="section-title">
           <img src="{{ asset('assets/mobil/service.png') }}" alt="" srcset="">
           <h2>@lang('dashboard.about_us')</h2>
            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>  --}}
         </div>
 
         <div class="row">
           <div class="col-md-8 offset-md-2 text-left" style="line-height: 30px;">
            <strong>Pasir Rentcar</strong>  merupakan perusahaan yang Bergerak di Bidang Jasa Transportasi Purwokerto Dengan Kantor Pusat di Purwokerto. Kami berusaha memberikan armada terbaik untuk kepuasan Anda selaku pengguna rental serta untuk kenyamanan Anda dalam perjalanan sewa dengan armada terbaik dan terbaru yang selalu dicek kondisinya setiap saat. Selain itu sopir yang bertugas membawa armada kami adalah sopir resmi dan sudah mempunyai jam tinggi serta berpengalaman dalam melakukan banyak perjalanan.
            <br>
            <br>
            Apapun pilihan jenis mobil yang Anda butuhkan kami sediakan. Pasir Rentcar Purwokerto menyediakan sopir berpengalaman, berdedikasi, berpendidikan, punya lisensi, aman, dan memberikan kenyamanan. Sopir yang profesionalis tentu saja sopir yang akan menepati kaidah-kaidah resmi perlalulintasan yang berlaku setiap saat.
            <br>
           </div>

           </div>
         </div>
         
    </section><!-- End Services Section -->
    <div class="row mt-3">
      <div class="col-lg-12" style="height: 350px;">
        {!!config('app.maps')!!}
       </div>
    </div>
@endsection

@push('script')
  <script>
    let carError = 0 
    let galeryError = 0 

    function getCar(){
      axios.get(`{{url("/api/dashboard/car/display?paginate=3")}}`).then(function(response) {
            console.log(response)
            $('.car-listing').html(response.data)
            }).catch(function(error){
              carError++
              if (carError > 2){
                console.log("failed fetching data car")
              }
            })
    }

    function getGalery(){
      axios.get(`{{url("/api/dashboard/galery/display?paginate=3")}}`).then(function(response) {
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
      getCar()
      getGalery()
    });

  </script>
@endpush