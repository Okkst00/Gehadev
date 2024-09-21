<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Penentuan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href={{ '../assets/img/gdev-icon.png' }}>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;1,500&display=swap");

* {
    font-family: nunito, sans-serif;
}


        nav {
    background-color: white;
}

nav .navbar-brand {
    font-weight: bold; 
    font-size: 24px;
}

nav .container ul li .btn-nav1 {
    color: black;
    border-radius: 30px; 
    background-color: #4bca88;
    font-weight: bold;
    border: 0;
    font-size: 17px;
}

nav .container ul li .btn-nav1:hover {
    color: rgb(255, 255, 255);
    background-color: #09b45b;
}

    ::-webkit-scrollbar {
        width: 10px;
        padding-left: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px rgb(227, 226, 226);
        border-radius: 2px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: -webkit-linear-gradient(
            top,
            #1aac60 0%,
            #4bca88 12%,
            #78e3ac 47%,
            #1aac60 100%
        );
        border-radius: 2px;
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #4bca88;
    }

    </style>

</head>
<body style="background-color: #eefff6">
  
    <nav class="navbar navbar-expand-lg" data-aos="fade-down">
        <div class="container">
          <a class="navbar-brand ms-lg-3 ms-md-3 ms-2" href="index.html">GehaDev'</a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item me-lg-3 me-md-3 ms-lg-0 ms-md-0 ms-2 mt-lg-0 mt-md-2 mt-2">
                <a href="/" class=" text-decoration-none"><div class="py-2 px-3 btn-nav1"><i class="bi bi-house-door-fill"></i> Kembali</div></a>
              </li>
            </ul>
        </div>
      </nav>
  
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-12 d-flex align-items-center flex-column d-none" id="no_harga">
                <img style="width: 300px;" src={{ '../assets/img/houseNT.png' }} alt="" class="mb-4">
                <div class="alert alert-success text-center">
                    <h5>Data Yang Kamu Inputkan Tidak Terdeteksi</h5>
                    <p class="text-center">Tetep Rajin Rawat Propertimu Yaaa..</p>
                </div>
                <button onclick="tesulang()" class="btn btn-success mt-4 mb-5 px-5 py-2 rounded-5 shadow">Tes Ulang</button>
            </div>
            <div id="ada_harga" class="col-lg-8 col-md-12 col-12 d-none mt-5">
                <div class="deskripsi">
                <img id="foto_harga" class="img-fluid float-lg-start me-4 rounded-4" style="width: 250px; height: 250px; object-fit: cover;" src="" alt="">
                <h4 class="fw-bold">Kamu berada di Harga <b id="harga"></b></h4>
                <p id="deskripsi"></p>
            </div> 
            <div class="ket pt-3">
                <h4 class="fw-bold">Solusi Propertimu</h4>
                <p id="solusi"></p>
                <br><br>
                <div class="d-flex justify-content-center">
                    <button onclick="tesulang()" class="btn btn-success mt-4 mb-5 px-5 py-2 rounded-5 shadow">Tes Ulang</button>
                </div>
            </div>
            </div>
                <div id="riwayat_tes" class="col-lg-4 col-md-6 col-10 shadow rounded-4 py-4 px-3 bg-white" style="height: 80vh; overflow: auto;">
                    <h6 class="mb-3"><i class="bi bi-clock-fill"></i>&nbsp; Riwayat Anda</h6>
                </div>
        </div>
        
        <br><br> 
        <div class="row">
            <div class="col">
                <h4 id="title_obat" class="mt-2 d-none fw-bold">Rekomendasi Yang Kamu Lakukan</h4>
                <div id="container_obat" class="mt-1 d-none mb-5 row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
                </div>
            </div>
        </div>
    </div>
    

    @include('template.btn-top')
    
    @include('template.main-footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
    <script>
        localStorage.setItem('isDone',"done")
        axios.get('/get-report/'+localStorage.getItem('no_telp')).then(({data})=>{
            console.log(data)
            data.forEach(e=>{
                document.querySelector("#riwayat_tes").innerHTML += 
                `<div class="card mb-2 rounded-4" style="width: 100%;">
                    <div class="row g-0">
                      <div class="col-md-4 my-2 mx-2">
                        <img src="${e.foto ? '/uploads/'+e.foto : '{{ '../assets/img/houseNT.png' }}'}" class="img-fluid rounded-3" alt="..." style="width: 120px; height: 75px; object-fit: cover;">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <p class="card-title">${e.nama ?? "Tidak ada gejala"}</p>
                          <p class="card-text"><small class="text-muted">${e.tanggal}</small></p>
                        </div>
                      </div>
                    </div>
                  </div>`
            })
            if(data[0].id === null){
                document.querySelector('#no_harga').classList.remove('d-none')
            }else{
                document.querySelector('#harga').innerHTML = data[0].nama
                document.querySelector('#deskripsi').innerHTML = data[0].penjelasan
                document.querySelector('#solusi').innerHTML = data[0].tindakan
                document.querySelector('#foto_harga').setAttribute('src','/uploads/'+data[0].foto)
                document.querySelector('#ada_harga').classList.remove('d-none')
                axios.get('/get-obat-penyakit-relation/'+data[0].penyakit_id).then(({data})=>{
                // document.querySelector("#container_obat").
                data.forEach(obat=>{
                    document.querySelector("#container_obat").classList.remove('d-none')
                    document.querySelector("#title_obat").classList.remove('d-none')
                    document.querySelector("#container_obat").innerHTML += `<div class="col">
                    <div class="card rounded-3">
                        <img style="height: 140px; object-fit: cover;" src="../uploads/${obat.foto}"  class="img-fluid mx-2 my-2 rounded-3" alt="..."> 
                        <div class="card-body">
                        <h5 class="card-title fw-bold">${obat.nama}</h5>
                        <small class="card-text">${obat.deskripsi}</small>
                        </div>
                    </div>
                </div>`
                })
            })
            }
            
        })

        function tesulang(){
            localStorage.removeItem('jawaban')
            localStorage.removeItem('index')
            localStorage.removeItem('isDone')
            window.location = '/list-soal'
        }
    </script>

    
    </body>
    </html>

 