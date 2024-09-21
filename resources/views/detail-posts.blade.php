<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href={{ '../assets/css/detail-posts.css' }}>
    <link rel="icon" type="image/png" href={{ '../assets/img/gdev-icon.png' }}>
    <title>{{ $postList->title }}</title>
</head>
<body>
    
    <div class="header">
        <div class="progress-container">
          <div class="progress-bar" id="myBar"></div>
        </div>  
    </div>
    
    <nav class="navbar navbar-expand-lg" data-aos="fade-down">
        <div class="container">
          <a class="navbar-brand ms-lg-3 ms-md-3 ms-2" href="index.html">GehaDev'</a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item me-lg-3 me-md-3 ms-lg-0 ms-md-0 ms-2 mt-lg-0 mt-md-2 mt-2">
                  <div class="py-2 px-3 btn-nav1"><i class="bi bi-clock-fill"></i> <span id="clocks"></span></div>
              </li>
            </ul>
        </div>
    </nav>

    @include('template.btn-back3')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="bg-images col col-lg-12">
                <img src="{{ asset('storage/'.$postList->image) }}" class="img-fluid px-0 shadow border-0" alt="">
                <h1 class="mt-5 mb-3" style="font-weight: bold;">{{ $postList->title }}</h1>
                <h5 class="mb-3" style="font-weight: bold;"><i class="bi bi-headset"></i> Gehamin' &nbsp; <span style="color: #f38d18;"> <i class="bi bi-clock-fill"></i> {{ $postList->updated_at->diffForhumans() }} </span> </h5>
                <p class="mt-5" style="font-size: 17px; text-align: justify;">{!! $postList->content!!}
                </p>
            </div>
        </div>
    </div>

    @include('template.bott-opt')

    @include('template.btn-top')

    <svg viewbox="0 -40 340 110" width="100%" height="110" preserveaspectratio="none" style="margin-top: -50px;">
        <!-- <path transform="translate(0, -20)" d="M0,10 c80,-22 240,0 350,18 c90,17 260,7.5 350,-20 v50 h-700" fill="#CEB964" /> -->
        <path d="M0,3 c10,-40 230,-12 350,7 c80,10 260,3 350,-1 v100 h-700z" fill="white" />
    </svg>
    
      <footer class="d-flex flex-wrap align-items-center pb-lg-5 pb-md-5 pb-3  ps-lg-5 ps-md-4 pe-lg-5 pe-md-4">
        <div class="col-md-6 col-lg-6 col-12 mb-0 text-muted text-center text-lg-start text-md-start mb-sm-4 cright-txt">&copy; <script>document.write(new Date().getFullYear());</script>
           GehaDev'. All rights reserved
        </div>
        <ul class="nav col-md-6 col-lg-6 col-12 text-center text-lg-end text-md-end justify-content-center justify-content-lg-end justify-content-md-end">
          <li class="nav-item text-center text-lg-end text-md-end">
            <a href="https://instagram.com" class="nav-link px-2 text-muted">
              <i class="bi bi-instagram"></i>
            </a>
          </li>
          <li class="nav-item text-center text-lg-end text-md-end">
            <a href="https://facebook.com" class="nav-link px-2 text-muted">
              <i class="bi bi-facebook"></i>
            </a>
          </li>
          <li class="nav-item text-center text-lg-end text-md-end">
            <a href="https://github.com" class="nav-link px-2 text-muted">
              <i class="bi bi-github"></i>
            </a>
          </li>
          <li class="nav-item text-center text-lg-end text-md-end">
            <a href="https://linkedin.com" class="nav-link px-2 text-muted">
              <i class="bi bi-linkedin"></i>
            </a>
          </li>
        </ul>
      </footer>
  
      <div class="ft-bott">
          <div class="container pb-4 pt-5 footer-bott">
              <div class="row justify-content-lg-center justify-content-center justify-content-md-center">
                  <div class="col col-lg-3 col-md-5 col-7 text-center">
                      <a href="#" class="nav-link py-2 px-4">
                          Designed by <b> Okky S</b>
                      </a>
                  </div>
              </div>
          </div>
      </div>

    <div class="borders">
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('assets/js/detail-posts.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>