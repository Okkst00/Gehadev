<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regist User</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href={{ '../../assets/css/registUser.css' }}>
    <link rel="icon" type="image/png" href={{ '../assets/img/gdev-icon.png' }}>

    <style>

@import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;1,500&display=swap");

* {
    font-family: nunito, sans-serif;
}

        
.btn-back {
    position: absolute;
    border-radius: 30px;
    background-color: rgb(255, 163, 25);
    color: white;
    width: fit-content;
    font-size: 18px;
    left: 10%;
    top: 30px;
    text-decoration: none;
}

.btn-back:hover {
    color: rgb(255, 255, 255);
    background-color: #09b45b;
}
    </style>
</head>
<body style="background-color: #4bca88;">

<div id="form-tes" style="background-color: rgb(208, 240, 218);border-radius: 15px;" class="container justify-content-center mt-5 text-center shadow py-5 px-5 ">
    <a href="/" class="btn-back py-2 px-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
    <div class="row justify-content-center">
        <div class="col col-lg-8 col-md-8 col-12 pb-3">
            <form id="form_start" class="">
                <h3 class="fw-bold">GehaDev'</h3>
                <p class=" fw-semibold">Segera Lengkapi Langkah Awal</p>
                <div class="mb-3 mt-5">
                  <label for="exampleInputEmail1" class="form-label fw-semibold">Nama</label>
                  <input type="text" class="form-control rounded-5 pb-2 px-3" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama...">
                </div>
                <div class="mb-3">
                  <label for="no_telp" class="form-label fw-semibold">No. Telepon</label>
                  <input type="text" class="form-control rounded-5 pb-2 px-3" name="no_telp" id="no_telp" placeholder="nomor telepon...">
                </div>
                <button onclick="start()" type="button" class="shadow w-100 btn btn-primary rounded-5 py-3 mt-4 btn-success fw-semibold"> Mulai Sekarang </button>
              </form>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        function start(){
            let data = document.querySelector('#form_start')
            if(!data.nama.value || !data.no_telp.value){
                alert('Wajib Diisi!')
                return
            }
            
            localStorage.setItem('nama',data.nama.value)
            localStorage.setItem('no_telp',data.no_telp.value)
            axios.post('/auth-user',{
                nama: data.nama.value,
                no_telp: data.no_telp.value
            }).then(e=>{
                localStorage.removeItem('index')
                localStorage.removeItem('jawaban')
                localStorage.removeItem('isDone')
                window.location = '/list-soal'
            })
            
        }
    </script>


</body>
</html>