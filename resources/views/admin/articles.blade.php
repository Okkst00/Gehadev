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
    <link rel="stylesheet" href={{ '../../assets/css/admin/admin-articles.css' }}>
    <title>Artikel - Admin panel</title>
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
                        <a href="/admin/artikel" class="ps-lg-3 ps-md-4 ps-3 side-txt active"><i class="bi bi-book-half"></i> Articles</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/knowledge" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-book"></i> Knowledge</a>
                    </li>
                    <li class="py-2 mb-2">
                        <a href="/admin/contacts" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-chat-dots"></i> Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-10 mb-4 main-section">
            <nav class="navbar navbar-expand-lg bg-light mb-4"  data-aos="fade-up">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Artikel</a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="btn nav-link px-3 py-2 shadow btn-log" href="#" >Logout <i class="bi bi-box-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <a class="btn btn-side mb-5 shadow-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <div class="icon text-center">
                  <i class="bi bi-chevron-right"></i>
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
                                <a href="/admin/artikel" class="ps-lg-3 ps-md-4 ps-3 side-txt active"><i class="bi bi-book-half"></i> Articles</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/knowledge" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-book"></i> Knowledge</a>
                            </li>
                            <li class="py-2 mb-2">
                                <a href="/admin/contacts" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-chat-dots"></i> Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
              </div>
            <div class="row">
                <div class="col-lg-11 mb-4 mx-auto">
                    <div class="container container-fluid mb-5">
                        <div class="col-xl-1-12">
                            <div class="well well-lg">
                                <div class="row">
                                    <div class="text-center col-lg-12 mt-4">
                                        <form action="" method="post" enctype="multipart/form-data"> 
                                            @csrf
                                            <div class="form-group">
                                                <textarea class="form-control mb-3" rows="2" name="title" id="title" placeholder="Judul"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control mb-3" rows="2" name="slug" id="slug" placeholder="Slug"></textarea>
                                            </div>
                                            <select class="form-select mb-3 w-100" name="category" id="category">
                                                <option selected>Pilih kategori</option>
                                                <option value="PROPERTI">PROPERTI</option>
                                                <option value="GENERAL">GENERAL</option>
                                                <option value="MARKETING">MARKETING</option>
                                                <option value="BUSINESS">BUSINESS</option>
                                            </select>
                                            <div class="form-group mb-5">
                                                <textarea class="form-control mb-5 content" rows="10" name="content" placeholder="Isi" id="content"></textarea>
                                            </div>
                                            <input type="file" name="image">
                                            <!-- <input type="submit" name="tambah" value="Tambahkan" class="btn" style="background-color: #0f8146; color: white;"> -->
                                            <button type="submit" name="tambah" value="Tambahkan" class="btn shadow-sm" style="background-color: #0f8146; color: white;">Tambahkan <i class="bi bi-check-circle-fill"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="articles pb-5 pt-2">
                    <div class="container">
                        <h2 class="text-center mt-5" style="font-weight: bold;">Articles</h2>
                        <div class="row justify-content-center">
                            @foreach ($postList as $data)
                                <div class="col col-lg-4 col-md-6 col-11 main-cont mt-4">
                                    <div class="card  border-0 shadow">
                                        <img src="{{ asset('storage/'.$data->image) }}" class="img-fluid mx-2 mt-2">
                                        <div class="card-body p-3">
                                            <h6 class="mb-3" >
                                                <a class="py-1 px-3" href="#" style="text-decoration: none;">
                                                    {{ $data->category }}
                                                </a>
                                            </h6>
                                            <h5 class=" px-0">
                                            <a href="#" class="title">
                                                {{ $data->title }}
                                            </a>
                                            </h5>
                                            <div class="time pt-1">
                                                <small class="text-muted"><i class="bi bi-clock-fill"></i> {{ $data->updated_at->diffForhumans() }}</small>
                                            </div>
                                            <div class="d-flex justify-content-end pt-4">
                                                <div class="btn-group">
                                                    <a href="/admin/edit-artikel/{{ $data->id }}" class="px-3 py-2 edit me-2 shadow-sm"><i class="bi bi-pen-fill"></i> Edit </a>
                                                    <form action="/admin/delete-artikel/{{ $data->id }}" method="post" class=" text-center">
                                                        @csrf
                                                        @method('delete')
                                                    <button class="btn px-3 py-2 delete shadow-sm" type="submit"><i class="bi bi-trash3-fill"></i> Hapus </button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                  </div>
            </div>
        </div>
    </div>
</div>

    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
        console.error( error );
        } );
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>