
<section class="contacts ">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-md-between justify-content-center">
            <div id="contacts" class="col col-lg-5 col-md-8 col-11 shadow-lg mb-5 main-cont" data-aos="fade-down" data-aos-delay="100">
                <main class="form-signin px-4">
                    <form method="post">
                    @csrf
                      <h1 class="h3 mb-3 text-lg-start text-md-start text-center pb-3 " >Hubungi GehaDev'</h1>
                      <div class="form-floating mb-2">
                          <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" required autocomplete="off">
                          <label for="floatingInput">Nama</label>
                      </div>
                      <div class="form-floating mb-2">
                          <input type="email" class="form-control" id="floatingEmail"  placeholder="Email address" name="email" required autocomplete="off" >
                          <label for="floatingEmail">Email</label>
                      </div>
                      <div class="form-floating mb-4">
                          <textarea type="text" class="form-control" id="floatingMessage" rows="10" name="message" placeholder="Message"></textarea>
                          <label for="floatingMessage">Pesan</label>
                      </div>
                      <button class="w-100 btn btn-lg mb-5 btn-conts" type="submit"  name="kirim">Kirim <i class="bi bi-send-fill"></i> </button>
                    </form>
                </main>
            </div>
                <div class="col col-lg-3 col-md-5 col-9">
                    @if (Session::has('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                      <div class="card shadow" data-aos="fade-up">
                        <img src="{{ 'assets/img/header-hero.jpg' }}" class="card-img-top px-2 py-2" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">GehaDev'</h5>
                          <p class="card-text">
                            By Okky S
                          </p>
                          <div class="d-flex groups justify-content-between">
                              <a href="#" class="btn">Hubungi <i class="bi bi-chevron-right"></i></a>
                          </div>
                        </div>
                      </div>
                    {{-- <div class="card shadow" data-aos="fade-up">
                      <img src="{{ 'assets/img/ghsmpl4.jpg' }}" class="card-img-top px-2 py-2" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">PT Anori Digipreneur Nusantara</h5>
                        <p class="card-text">
                          Salah satu perusahaan yang bergerak di bidang properti
                        </p>
                        <div class="d-flex groups justify-content-between">
                            <a href="https://www.anoribiz.tech/" class="btn">Lihat <i class="bi bi-chevron-right"></i></a>
                            <span class="support-txt text-muted me-2 mt-2">Supported <i class="bi bi-check-lg"></i></span>
                        </div>
                      </div>
                    </div> --}}
                  </div>
            <!-- <div class="col col-lg-5 col-md-6 col-12 pt-5 text-lg-center text-md-end text-center pb-lg-0 pb-md-0 pb-5 img-conts" data-aos="fade-up" data-aos-delay="700">
                <img src="img/gdev-icon.png" class="img-fluid w-50 pt-5 text-center" alt="">
                <p class="pt-4 text-center" style="font-weight: bold; font-size: 21px; color: rgb(226, 226, 226);">Part of PT. Gehaisme Indonesia</p>
            </div> -->
        </div>
    </div>
  </section>
