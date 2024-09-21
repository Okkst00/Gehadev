<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href={{ '../assets/img/gdev-icon.png' }}>
    <link rel="stylesheet" href={{ '../assets/css/admin/admin-diag_tier.css' }}>
    <title>Input Diagnosa Harga Sewa| GehaMin'</title>

    <style>
              /* @import url('https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Poppins&family=Open+Sans&family=Roboto&display=swap'); */
@import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;1,500&display=swap");
/* @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap'); */

* {
    font-family: nunito, sans-serif;
}
    </style>
</head>
<body>


<div class="container mt-3" >
    <div class="row">
        <div class="col-lg-2 side-bars  mb-4 sticky-top">
            <img src={{ '../assets/img/8056.jpg' }} class="img-fluid rounded-circle shadow d-flex mx-auto mt-4" alt="">
            <div class="headtext text-center mt-3 text-white"><i class="bi bi-headset"></i>{{ Auth::user()->role }}</div>
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
                    <a href="/admin/atur-obat" class="ps-3 side-txt active"><i class="bi bi-bounding-box-circles"></i> Atur Solusi</a>
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
                    <a href="/admin/contacts" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-chat-dots"></i> Contacts</a>
                </li>
              </ul>
            </div>
        </div>

        <div class="col-lg-10 mb-4 main-section">
            <nav class="navbar navbar-expand-lg bg-light mb-4"  data-aos="fade-up">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Atur Solusi</a>
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
                  <div class="headtext text-center mt-3 text-white"><i class="bi bi-headset"></i>{{ Auth::user()->role }}</div>
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
                          <a href="/admin/atur-obat" class="ps-3 side-txt active"><i class="bi bi-bounding-box-circles"></i> Atur Solusi</a>
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
                          <a href="/admin/contacts" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-chat-dots"></i> Contacts</a>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
            
            <div class="row main-contents">
                <div class="col col-lg-11 mb-4 mx-auto">
                    <a href="/export-obat_penyakit" class="btn btn-danger">Export PDF</a>
                    <table class="table mt-4">
                        <thead style="background-color: #e9f6ee;">
                          <tr>
                            <td scope="col" class="fw-bold">No.</td>
                            <td scope="col" class="fw-bold">Nama</td>
                            <td scope="col" class="fw-bold">Action</td>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach ($data as $item)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama}}</td>
                                <td>
                                  <div data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-content="{{$item}}" class="badge bg-secondary">Manajemen Obat</i></div>
                                </td>
                              </tr>
                          @endforeach
                        </tbody> 
                      </table>
                    
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Obat</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="obat_penyakit" class="d-flex flex-wrap gap-4"></div>
                                <button id="btn_simpan" class="btn btn-success mt-5 px-5 rounded-5 text-end">Simpan</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
  
  let value_obat = []
  axios.get('/get-obat').then(e=>{
      let container_obat = document.querySelector("#obat_penyakit")
      e.data.forEach(item=>{
          let cont = document
          let label = document.createElement('label');
          label.setAttribute('class','d-flex gap-1')

          // Buat elemen <input> dengan tipe "checkbox" untuk setiap pilihan
          let input = document.createElement('input');
          input.setAttribute('type', 'checkbox');
          input.setAttribute('name', 'myCheckbox[]');
          input.setAttribute('class','value_obat text-small')
          input.setAttribute('value',item.id)

          // Tambahkan teks pilihan ke dalam elemen <label>
          label.textContent = item.nama;

          // Tambahkan elemen <input> ke dalam elemen <label>
          label.appendChild(input);

          // Tambahkan elemen <label> ke dalam elemen <div>
          container_obat.appendChild(label);
      })
  })

    const modal = document.getElementById('exampleModal')
    
    modal.addEventListener('show.bs.modal', event => {
      document.querySelectorAll('.value_obat').forEach(checkbox=>{
              checkbox.checked = false
          })
        const form = modal.querySelector('.modal-body form')
        const modalTitle = modal.querySelector('.modal-title')
        const button = event.relatedTarget
        let data = button.getAttribute('data-bs-content')
  
        data = JSON.parse(data)
        document.querySelector('#btn_simpan').setAttribute('data-id',data.id)
        modalTitle.textContent = data.nama

        axios.get('/get-obat-penyakit/'+data.id).then(e=>{
          let id_obat  = []
          e.data.forEach(id=>{
            id_obat.push(id.id_obat)
          })

          document.querySelectorAll('.value_obat').forEach(checkbox=>{
            if(id_obat.includes(parseInt(checkbox.value))){
              checkbox.checked = true
            }
          })
        })
    })



  document.querySelector('#btn_simpan').addEventListener("click",function(){
  let data = [];
  const checkboxes = document.querySelectorAll('.value_obat');
  checkboxes.forEach(checkbox => {
    if (checkbox.checked) {
      data.push({
        id_penyakit: document.querySelector('#btn_simpan').getAttribute('data-id'),
        id_obat: parseInt(checkbox.value)
      })
    }
    });

  axios.post('/obat-penyakit',{
      data: data
  }).then(e=>{
      if(e.status == 200){
      location.reload();
    }
  })
  })
  
</script>


</body>
</html>