<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pasirrent Car</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('vendor/aos/aos.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/boxicons/css/boxicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/glightbox/css/glightbox.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/remixicon/remixicon.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/swiper/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">

  <!-- shimmer -->
  <style>
    .shine {
      background: #f6f7f8;
      background-image: linear-gradient(to right, #f6f7f8 0%, #e6e7e8 20%, #f6f7f8 40%, #f6f7f8 100%);
      background-repeat: no-repeat;
      background-size: 800px 104px;
      display: inline-block;
      position: relative;

      -webkit-animation-duration: 5s;
      -webkit-animation-fill-mode: forwards;
      -webkit-animation-iteration-count: infinite;
      -webkit-animation-name: placeholderShimmer;
      -webkit-animation-timing-function: linear;
    }

    .line-style {
      height: 20px;
      margin-top: 10px;
      width: 100%;
    }

    .box-style {
      height: 104px;
      width: 100%;
    }

    @-webkit-keyframes placeholderShimmer {
      0% {
        background-position: 0 0;
      }

      50% {
        background-position: 1000px 0;
      }

      100% {
        background-position: 0 0;
      }
    }
  </style>
  
  @stack('css')

</head>
<body>
    @include("page.client.layout.components.header")

  <main id="main">

    @if(isset($header))
    <section class="breadcrumbs">
      <div class="container">
        <h2>@yield("breadcrumb")</h2>
      </div>
    </section>
    @endif
    @yield("content")
  </main>

  @include("page.client.layout.components.footer")
  
  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

  @stack("script")

</body>
</html>
