@extends("page.client.layout.app")

@section("breadcrumb")
  Home
@endsection

@section("content")

<section id="portfolio" class="portfolio">
  <div class="container" style="margin-top:50px;margin-bottom:50px;" data-aos="fade-up">

    <div class="section-title">
      <h2>Car</h2>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      <div class="mb-5">
        @component('page.client.components.gridcard')
          
        @endcomponent
      </div>
    </div>

  </div>
</section>

@endsection