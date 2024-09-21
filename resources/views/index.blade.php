<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href={{ '../assets/css/style.css' }}>
    <link rel="icon" type="image/png" href={{ '../assets/img/gdev-icon.png' }}>
    <title>GehaDev' | All About Guest House Predictable Predictions Support</title>
</head>

<body>

<!-- 
  <div class="preloader">
    <div class="row justify-content-center mb-4" style="margin-top: 130px;">
      <div class="col text-center">
      <img src="img/gdev-icon.png" class="w-25 img-fluid text-center" alt="spinner" data-aos="zoom-out">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col">
        <h5 class="text-center" style="font-weight: bold;" data-aos="zoom-out">Part of PT Gehaisme Indonesia</h5>
      </div>
    </div>
  </div> -->

    @include('template.navbar')
    
    @include('template.bottom-bar')

    <div data-bs-spy="scroll" data-bs-target="#navbar1" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">    
      <div class="bgr-header mb-3" data-aos="fade-down" id="bg-header">
          <div class="container">
              <div class="row pt-5 pb-5 justify-content-lg-between justify-content-md-between justify-content-center">
                  <div class="col col-lg-6 col-md-5 col-11 pt-2 text-center">
                      <!-- <img src="img/gh.png" class="img-fluid mb-5" alt=""> -->
                      <div class="dp-wrap">
                          <div id="dp-slider">
                            <div class="dp_item shadow" data-class="1" data-position="1">
                              <div class="dp-img">
                                <img src="{{ 'assets/img/header-hero4.jpg' }}" class="img-fluid shadow" alt="">
                              </div>
                            </div>
                            <div class="dp_item shadow" data-class="2" data-position="2">
                              <div class="dp-img">
                                <img src="{{ 'assets/img/header-hero2.jpg' }}" class="img-fluid shadow" alt="">
                              </div>
                            </div>
                            <div class="dp_item shadow" data-class="3" data-position="3">
                              <div class="dp-img">
                                <img src="{{ 'assets/img/header-hero3.jpg' }}" class="img-fluid shadow" alt="">
                              </div>
                            </div>
                            <div class="dp_item shadow" data-class="4" data-position="4">
                              <div class="dp-img">
                                <img src="{{ 'assets/img/header-hero.jpg' }}" class="img-fluid shadow" alt="">
                              </div>
                            </div>
                          </div>
                          <span id="dp-next" class="shadow-sm">
                            <h3><i class="bi bi-chevron-right"></i></h3>
                          </span>
                          <span id="dp-prev" class="shadow-sm">
                            <h3><i class="bi bi-chevron-left"></i></h3>
                          </span>
                          <!-- <ul id="dp-dots">
                            <li data-class="1" class="active"></li>
                            <li data-class="2"></li>
                            <li data-class="3"></li>
                            <li data-class="4"></li>
                          </ul> -->
                        </div>
                  </div>
                  <div class="col col-lg-5 col-md-6 col-11 ps-lg-2 ps-md-2 ps-3 pt-lg-4 pt-md-5 pt-2">
                      <p class="text-white hero-title">GehaDev'</p>
                      <p class="text-white hero-text mb-lg-4 mb-md-4 mb-4">Ayo kembangkan Guest Housemu<span> </span></p>
                      <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" class="btn btnHeader py-2 px-4 mt-lg-1">
                        Pelajari GehaDev' <i class="bi bi-caret-down-fill"></i>
                      </button>
                      @include('template.main-button')
                  </div>
              </div>
          </div>
      </div>

      @include('template.offcanvas')

      <section class="bgr-about" id="about">
        <div class="container">
          <h3 class="text-center">Pelayanan kami <i class="bi bi-headset"></i></h3>
          <div class="row justify-content-center pt-5 pb-3 main-abouts">
            <div class="col col-lg-3 col-md-5 col-9 text-center shadow mx-2 mt-lg-0 mt-md-4 mt-4 main-about">
              <div class="icons py-4 text-start">
                <i class="bi bi-house-fill px-3 py-2"></i>
              </div>
              <p class="px-lg-2 px-md-2 px-2 pb-2"><i class="bi bi-check-circle-fill" style="color:#ffffff"></i> Memberi pengetahuan mengenai serba - serbi properti Guest House</p>
              <div class="text-center btns-bott mb-lg-4 mb-md-4 mb-4 ">
                <a href="/knowlegde" class="btn w-75">Cek sekarang <i class="bi bi-arrow-right-circle-fill"></i></a>
              </div>
            </div>
            <div class="col col-lg-3 col-md-5 col-9 text-center shadow mx-2 mt-lg-0 mt-md-4 mt-4 main-about">
              <div class="icons py-4 text-start">
                <i class="bi bi-book-half px-3 py-2"></i>
              </div>
              <p class="px-lg-2 px-md-2 px-2 pb-2"><i class="bi bi-check-circle-fill" style="color:#ffffff"></i> Memberikan artikel sederhana mengenai properti Guest House</p>
              <div class="text-center btns-bott mb-lg-4 mb-md-4 mb-4 ">
                <a href="/all-posts" class="btn w-75">Cek sekarang <i class="bi bi-arrow-right-circle-fill"></i></a>
              </div>
            </div>
            <div class="col col-lg-3 col-md-5 col-9 text-center shadow mx-2 mt-lg-0 mt-md-4 mt-4 main-about"> 
              <div class="icons py-4 text-start">
                <i class="bi bi-tags-fill px-3 py-2"></i>
              </div>
              <p class="px-lg-2 px-md-2 px-2 pb-2"><i class="bi bi-check-circle-fill" style="color:#ffffff"></i> Memberi penentuan harga sewa kamar Guest House tipe Standard</p>
              <div class="text-center btns-bott mb-lg-4 mb-md-4 mb-4 ">
                <a href="/regist-user" class="btn w-75">Cek sekarang <i class="bi bi-arrow-right-circle-fill"></i></a>
              </div>
            </div>
        </div>

            <div class="row justify-content-lg-center justify-content-md-center justify-content-center mt-5 about2">
              <div class="col col-lg-12 col-md-12 col-12 text-center" id="menu">
                <button class="btn text-center px-4  active" href="#d1">Layanan</button>
                <button class="btn text-center px-4 ms-lg-1 ms-md-1 ms-2" href="#d2">Tentang</button>
                <button class="btn text-center px-4 ms-1 mt-lg-0 mt-md-0 mt-2" href="#d3">Pembuat</button>
              </div>
            </div>

            <div class="row justify-content-center my-5 content-menu">
              <div class="col col-lg-12 col-md-12 col-12">
                <div class="main-menu-content">
                  <div class="page active" id="d1">
                      <div class="container">
                        <li class="text1"><i class="bi bi-check-circle-fill"></i> Memberikan penentuan harga sewa kamar Guest House tipe Standard yang sesuai</li>
                        <li class="text1"><i class="bi bi-check-circle-fill"></i> Memberikan artikel sederhana mengenai properti Guest House</li>
                        <li class="text1"><i class="bi bi-check-circle-fill"></i> Memberi penentuan harga sewa kamar Guest House tipe Standard</li>
                      </div>  
                  </div>
                  <div class="page" id="d2">
                      <div class="container">
                        <p class="text2 text-center"><b style="color: #4bca88;">GehaDev'</b> Merupakan sebuah aplikasi berbasis web yang mampu menyediakan layanan penentuan harga sewa kamar Guest House tipe Standard yang sesuai</p>
                          <div class="col text-center">
                            <img src="{{ 'assets/img/home1.png' }}" class="img-fluid image-d2" alt="">
                          </div>
                      </div>  
                  </div>
                  <div class="page" id="d3">
                    <div class="container mt-2">
                      <div class="row justify-content-lg-start justify-content-md-start justify-content-center">
                        <div class="col col-lg-3 col-md-5 col-9">
                          <div class="card shadow border-0">
                            <img src="{{ 'assets/img/header-hero.jpg' }}" class="img-fluid card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">GehaDev'</h5>
                              <p class="card-text text-muted">By Okky S</p>
                              <a href="#" class="btn">Hubungi <i class="bi bi-envelope-check-fill"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>

      <div class="bgr-hero mb-1 py-lg-5 py-md-4 py-3" id="bg-hero">
          <div class="container" id="main-hero">
              <div class="row pt-1 pb-5 justify-content-center">
                  <div class="col col-lg-12 col-md-11 col-11 ps-2 pt-5">
                      <p class="text-white hero-title">GehaDev'</p>
                      <p class="text-white hero-text">Konsultasikan Harga Kamar Standardmu... 
                        <span>
                          <a href="/regist-user">
                            <button type="button" class="btn py-2 px-4 mt-lg-o mt-md-3 mt-3 mb-3"> Konsultasi Harga Sewa Kamar</button>
                          </a>
                        </span> 
                      </p>
                      <p class="hero-text2 text-center py-4 mt-5 px-lg-4 px-md-4 px-3">Bagi anda yang ingin mengetahui serba - serbi mengenai properti Guest House
                          <a href="/option">
                            <button type="button" class="btn pb-2 px-4 mt-lg-0 mt-md-4 mt-4 px-3">Lihat Artikel Sekarang</button>
                          </a>
                      </p>
                  </div>
              </div>
          </div>
      </div>

      <main style="margin-top: 20px; margin-bottom: 185px;" id="articles">
        <section class=" text-center container">
          <div class="row pt-lg-5 pt-md-5 pt-5">
            <div class="col-lg-6 col-md-8 mx-auto">
              <h2 class=" text-black mt-5" style="font-weight: 700">Artikel <i class="bi bi-newspaper"></i></h2>
            </div>
          </div>
        </section>
      
        <div class="articles pb-5 pt-2">
          <div class="container">
            <div class="row justify-content-center">             
              @foreach ($postList->slice(0, 3) as $data)
                <div class="col col-lg-4 col-md-6 col-11 main-cont mt-4">
                  <div class="card  border-0 shadow">
                      <img src="{{ asset('storage/'.$data->image) }}" alt="img-logo" class="img-fluid mx-3 mt-3">
                      <div class="card-body p-4">
                          <h6 class="mb-3" >
                            <a class="py-1 px-3" href="#" style="text-decoration: none;">
                              {{ $data->category }}
                            </a>
                          </h6>
                        <h5 class="pt-1 px-1">
                          <a href="posts/{{ $data->slug }}">
                            {{ $data->title }}
                          </a>
                        </h5>
                          <div class="d-flex justify-content-between  pt-4">
                              <div class="btn-group">
                                  <a href="posts/{{ $data->slug }}" class="px-2"> Baca Kuy </a>
                              </div>
                              <small class="text-muted"><i class="bi bi-clock-fill"></i> {{ $data->updated_at->diffForhumans() }}</small>
                          </div>
                      </div>
                  </div>
                </div>
              @endforeach
              <div class="row showAll">
                <h6 class="text-end p-2 mb-3">
                    <a href="all-posts" class="p-2 px-3">Lihat semua <i class="bi bi-arrow-right-circle"></i></a>
                </h6>
              </div>
          </div>
        </div>
      </main>
      
      @include('template.contacts')

    </div>

    {{-- @include('template.rocket') --}}

    @include('template.btn-top')
    
    @include('template.main-footer')

    <!-- <div id="loadingDiv"><div class="loader">Loading...</div></div> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>