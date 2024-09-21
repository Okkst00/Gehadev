<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href={{ '../../assets/img/gdev-icon.png' }}>
    <link rel="stylesheet" href={{ '../../assets/css/admin/admin-contacts.css' }}>
    <title>Contacts | GehaMin'</title>
</head>
<body>


<div class="container mt-3" >
    <div class="row">
        <div class="col-lg-2 side-bars  mb-4 sticky-top">
            <img src={{ '../assets/img/8056.jpg' }} class="img-fluid rounded-circle shadow d-flex mx-auto mt-4" alt="">
            <div class="headtext text-center mt-3 text-white"><i class="bi bi-headset"></i> {{ Auth::user()->role }}</div>
            <div class="card border-0 mt-5">
                <ul class="list-unstyled">
                    <li class="py-2 mb-2">
                        <a href="/admin/dashboard" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-speedometer2"></i> Dashboard</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/penyakit" class="ps-3 side-txt"><i class="bi bi-tags"></i> Input Diagnosa</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/gejala" class="ps-3 side-txt"><i class="bi bi-clipboard-plus"></i> Input Gejala</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/obat" class="ps-3 side-txt"><i class="bi bi-bezier"></i> Input Solusi</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/aturan" class="ps-3 side-txt"><i class="bi bi-file-ruled"></i> Atur Rule</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/atur-obat" class="ps-3 side-txt"><i class="bi bi-bounding-box-circles"></i> Atur Solusi</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/report" class="ps-3 side-txt"><i class="bi bi-activity"></i> Data Report</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/user" class="ps-3 side-txt"><i class="bi bi-person-circle"></i> Data User</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/admin" class="ps-3 side-txt"><i class="bi bi-headset"></i> Data Admin</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/artikel" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-book-half"></i> Articles</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/knowledge" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-book"></i> Knowledge</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/contacts" class="ps-lg-3 ps-md-4 ps-3 side-txt active"><i class="bi bi-chat-dots"></i> Contacts</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-10 mb-4 main-section">
            <nav class="navbar navbar-expand-lg bg-light mb-4"  data-aos="fade-up">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Contacts / Pesan</a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="btn nav-link px-3 py-2 shadow btn-log"  href="/logout">Logout <i class="bi bi-box-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
    
            <a class="btn btn-side mb-5 shadow-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
              <div class="icon text-center">
                <i class="bi bi-chevron-right text-center"></i>
              </div>
            </a>
            
            <div class="offcanvas offcanvas-start side-mob" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel">Admin panel</h5>
                  <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <img src={{ '../assets/img/8056.jpg' }} class="img-fluid rounded-circle shadow d-flex mx-auto mt-4" alt="">
                    <div class="headtext text-center mt-3 text-white"><i class="bi bi-headset"></i> {{ Auth::user()->role }}</div>
                    <div class="card border-0 mt-5 bg-transparent">
                        <ul class="list-unstyled">
                            <li class="py-2 mb-2">
                                <a href="/admin/dashboard" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-speedometer2"></i> Dashboard</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/penyakit" class="ps-3 side-txt"><i class="bi bi-tags"></i> Input Diagnosa</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/gejala" class="ps-3 side-txt"><i class="bi bi-clipboard-plus"></i> Input Gejala</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/obat" class="ps-3 side-txt"><i class="bi bi-bezier"></i> Input Solusi</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/aturan" class="ps-3 side-txt"><i class="bi bi-file-ruled"></i> Atur Rule</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/atur-obat" class="ps-3 side-txt"><i class="bi bi-bounding-box-circles"></i> Atur Solusi</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/report" class="ps-3 side-txt"><i class="bi bi-activity"></i> Data Report</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/user" class="ps-3 side-txt"><i class="bi bi-person-circle"></i> Data User</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/admin" class="ps-3 side-txt"><i class="bi bi-headset"></i> Data Admin</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/artikel" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-book-half"></i> Articles</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/knowledge" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-book"></i> Knowledge</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/contacts" class="ps-lg-3 ps-md-4 ps-3 side-txt active"><i class="bi bi-chat-dots"></i> Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row main-mess justify-content-center">
                @foreach ($contactList as $data)
                    <div class="col-lg-6 col-md-6 col-12 mb-4">
                        <div class="card border-0 shadow py-4 px-3" style="border-radius: 12px;">
                            <h5 class="px-3 name-text text-black">{{ $data->name }}</h5>
                            <p class="px-3 mail-text" id="email">{{ $data->email }}</p>
                            <p class="px-3 time-text"><i class="bi bi-clock-fill"></i> {{ $data->updated_at->diffForhumans() }}</p>
                            <p class="px-3 py-3 mx-3 fill-text">{{ $data->message }}</p>
                            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank" class="btn btn-send text-center mx-3 shadow py-2">Balas via email <i class="bi bi-send-check-fill"></i></a>
                            <form action="/admin/delete-contacts/{{ $data->id }}" method="post" class="mx-3 text-center">
                                @csrf
                                @method('delete')
                                    <button class="btn btn-danger text-center shadow py-2 mt-2 rounded-5 w-100" type="submit">Hapus <i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

  
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>