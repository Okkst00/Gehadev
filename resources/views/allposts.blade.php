<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
   <link rel="icon" type="image/png" href="{{ 'assets/img/gdev-icon.png' }}">
   <link rel="stylesheet" href="{{ 'assets/css/allposts.css' }}">
   <title>Semua Artikel - GehaDev'</title>
</head>

<body>

   <div class="top-base">
      <nav class="navbar navbar-expand-lg mb-lg-3 mb-md-3 mb-0" data-aos="fade-down">
         <div class="container">
            <a class="navbar-brand ms-lg-3 ms-md-3 ms-2" href="index.html">GehaDev'</a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               <li class="nav-item me-lg-3 me-md-3 ms-lg-0 ms-md-0 ms-2 mt-lg-0 mt-md-2 mt-2">
                  <div class="py-2 px-3 btn-nav1"><i class="bi bi-clock-fill"></i> <span id="clocks"></span></div>
               </li>
            </ul>
         </div>
      </nav>

      @include('template.btn-back2')

      <h2 class="title-main text-center">Semua Artikel</h2>
      <h5 class="title-main2 text-center mb-lg-1 mb-md-1 mb-1 mt-5">" meluangkan waktu untuk membaca tidak akan
         membuatmu rugi "</h5>
      <div class="container pb-5">
         <div class="row justify-content-center">
            <div class="col col-lg-5 col-md-6 col-10 text-center">
               <div class="input-group mb-3 text-center">
                  <input type="text" class="form-control border-0" placeholder="Filter artikel..." id="input"
                     onkeyup="instantSearch()">
                  <span class="input-group-text bg-white border-0"><i class="bi bi-search"></i></span>
               </div>
            </div>
         </div>
      </div>

   </div>

   <div class="articles pb-5 pt-1">
      <div class="container">
         <div class="row justify-content-center">
            @foreach ($postList as $data)
               <div class="col col-lg-4 col-md-6 col-11 main-cont mt-4">
                  <div class="card  border-0 shadow">
                     <img src="{{ asset('storage/' . $data->image) }}" alt="img-logo" class="img-fluid mx-3 mt-3">
                     <div class="card-body p-4">
                        <h6 class="mb-3">
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
                           <small class="text-muted"><i class="bi bi-clock-fill"></i>
                              {{ $data->updated_at->diffForhumans() }}</small>
                        </div>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>
         {{-- <a href="#" class="btn mt-5 " id="loadMore">Muat lebih banyak <i
               class="bi bi-chevron-double-down"></i></a> --}}
      </div>
   </div>


   @include('template.bott-opt')

   @include('template.btn-top')

   @include('template.main-footer')

   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   <script>
      AOS.init();
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <script src="{{ 'assets/js/allposts.js' }}"></script>
</body>

</html>
