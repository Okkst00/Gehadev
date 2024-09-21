<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href={{ '../assets/img/gdev-icon.png' }}>
    <link rel="stylesheet" href={{ '../assets/css/admin/admin-diag_tier.css' }}>
    <title>Input Diagnosa Harga Sewa| GehaMin'</title>
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
                    <a href="/admin/aturan" class="ps-3 side-txt active"><i class="bi bi-file-ruled"></i> Atur Rule</a>
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
                    <a href="/admin/contacts" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-chat-dots"></i> Contacts</a>
                </li>
              </ul>
            </div>
        </div>

        <div class="col-lg-10 mb-4 main-section">
            <nav class="navbar navbar-expand-lg bg-light mb-4"  data-aos="fade-up">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Atur Rule Set</a>
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
                          <a href="/admin/aturan" class="ps-3 side-txt active"><i class="bi bi-file-ruled"></i> Atur Rule</a>
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
                          <a href="/admin/contacts" class="ps-lg-3 ps-md-4 ps-3 side-txt"><i class="bi bi-chat-dots"></i> Contacts</a>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
            
            <div class="row main-contents">
                <div class="col col-lg-11 mb-4 mx-auto">
                    <a href="/export-aturan" class="btn btn-danger mt-2">Export PDF</a>
                    <table class="table mt-3">
                        <thead style="background-color: #e9f6ee;">
                          <tr>
                            <td scope="col">No.</td>
                            <td scope="col">Keputusan</td>
                            <td scope="col">Action</td>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $item)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama}}</td>
                                <td>
                                  <div data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-content="{{$item}}" class="badge bg-secondary"><i class="bi bi-gear"></i></i></div>
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
                              <div id="value_gejala">
                              </div>
                              
                              <hr>
                                <div id="gejala_penyakit" class="d-flex gap-4 flex-wrap"></div>
                                <button id="btn_simpan" onclick="simpan()" class="btn btn-success px-5 rounded-5 mt-5">Simpan</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

        function setValueGejala(id,nama){
          let gejala = document.querySelector('#value_gejala')
            let element = `<button data-id='${id}' data-nama='${nama}' type="button" class="btn my-1 me-2 btn-sm btn-gejala position-relative" style="background-color: #97f5bb;">
              ${nama}
              <span onclick='deleteValueGejala(${id})' class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                x
              </span>
            </button>`
            if(!gejala.innerHTML.includes(element)){
              gejala.innerHTML += element
            }
        }

        function deleteValueGejala(id){
            document.querySelector('button[data-id="'+id+'"]').remove()
        }
        
        axios.get('/get-gejala').then(e=>{
            let container_obat = document.querySelector("#gejala_penyakit")
            e.data.forEach(item=>{
                let cont = document
                let label = document.createElement('label');
                label.setAttribute('class','d-flex justify-content-between align-items-center gap-1')

                // Buat elemen <input> dengan tipe "checkbox" untuk setiap pilihan
                let input = document.createElement('button');
                input.setAttribute('type', 'button');
                input.setAttribute('name', 'gejala[]');
                input.setAttribute('class','value_gejala btn btn-success btn-sm')
                input.setAttribute('data-id',item.id)
                input.innerHTML = '+'

                // Tambahkan teks pilihan ke dalam elemen <label>
                label.textContent = item.nama;

                // Tambahkan elemen <input> ke dalam elemen <label>
                label.appendChild(input);
                label.setAttribute('style','width: 40%')
                
                // Tambahkan elemen <label> ke dalam elemen <div>
                container_obat.appendChild(label);
            })
        }).then(z=>{
            document.querySelectorAll('.value_gejala').forEach(function(btn){
                btn.addEventListener('click',function(){
                  setValueGejala(btn.getAttribute('data-id'),btn.previousSibling.textContent)
                  console.log(value_gejala)
                })
            })
        })

        const modal = document.getElementById('exampleModal')
        
        modal.addEventListener('show.bs.modal', event => {
          document.querySelector('#value_gejala').innerHTML = ''
        const form = modal.querySelector('.modal-body form')
        const modalTitle = modal.querySelector('.modal-title')
        const button = event.relatedTarget
        let data = button.getAttribute('data-bs-content')
   
        data = JSON.parse(data)
        document.querySelector('#btn_simpan').setAttribute('data-id',data.id)
        modalTitle.textContent = data.nama

        axios.get('/get-aturan/'+data.id).then(e=>{
          console.log(e)
              e.data.forEach(el=>{
                setValueGejala(el.id,el.nama)
              })

            })
        })

    function simpan(){
        let value = []
        document.querySelectorAll('.btn-gejala').forEach(el=>{
        value.push({
            id_penyakit: document.querySelector('#btn_simpan').getAttribute('data-id'),
            id_gejala: el.getAttribute('data-id')
        })
        })
        
        axios.post('/aturan',{
            data: value
        }).then(e=>{
            if(e.status == 200){
            location.reload();
        }
        })

  }

</script>

</body>
</html>