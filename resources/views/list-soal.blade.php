<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Soal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href={{ '../assets/img/gdev-icon.png' }}>
</head>

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

body{

    font-size: 0.8rem !important;
}
.button-soal{
    border: 1px solid #f8a13d;
    padding: 10px;
    padding-left: 13px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    border-radius: 8px;
    font-weight: 500;
    background-color: white;
}
.button-soal.active{
    border: 1px solid #4bca88 !important;
    background-color: #4bca88 !important;
    color: white;
}
.btn-primary{
    background-color: #4bca88 !important;
    border-color: #4bca88 !important;
}

.btn-primary:hover{
    background-color: #f8a13d !important;
    border-color: #4bca88 !important;
}


</style>

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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="mb-5 d-flex align-items-center justify-content-between">
                        <div id="jml_pertanyaan" style="background-color: #1c9b59; color: white;" class="px-3 py-2 rounded-2">Pertanyaan ke - 1</div>
                        <button class="btn btn-danger px-5 rounded-5 shadow-sm" onclick="reset()">Reset</button>
                    </div>
                
                    <h4 id="pertanyaan" class="fw-bold"></h4>
                    <button id="btn_ada" onclick="submitJawaban('ada')" class="btn btn-outline-success w-100 rounded-5 py-2 mt-4 fw-semibold">ada</button>
                    <button  id="btn_tidak" onclick="submitJawaban('tidak')" class="btn btn-outline-success w-100 rounded-5 py-2 mt-3 fw-semibold">tidak</button>
                    <div class="mt-3 d-flex justify-content-center gap-3">
                        <button class="btn btn-primary shadow-sm rounded-5 px-4" onclick="btnPrevious()"><i class="bi bi-caret-left-fill"></i> Prev</button>
                        <button class="btn btn-primary shadow-sm rounded-5 px-4" onclick="btnNext()">Next <i class="bi bi-caret-right-fill"></i></button>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-12 col-12 mt-lg-0 mt-md-4 mt-5">
                    <div class="d-flex flex-wrap gap-2">
                        @for ($i = 1; $i <= 37; $i++)
                            <button onclick="klikSoal({{$i}})" data-soal="{{$i}}" class="button-soal">{{$i}}</button>
                        @endfor
                    </div>
    
                        <button onclick="selesai()" id="btn_selesai" class="btn w-100 mt-4 text-white mx-auto d-none" style="background-color: green">Selesai</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    <script>
        if(localStorage.getItem('isDone') == 'done'){
            window.location = '/report'
        }
        if(!localStorage.getItem('nama') || !localStorage.getItem('no_telp')){
            window.location = '/#form-tes'
        }
        let gejala = {!! json_encode($gejala) !!}
        let index = Number(localStorage.getItem('index'))
        let jawaban = JSON.parse(localStorage.getItem('jawaban')) ?? []
        
        showSoal()

        function showSoal(){
            document.querySelector('#btn_tidak').classList.replace('btn-primary','btn-outline-success')
            document.querySelector('#btn_ada').classList.replace('btn-primary','btn-outline-success')

            document.querySelector('#jml_pertanyaan').innerHTML = `Pertanyaan ke ${index+1}/${gejala.length}`
            document.querySelector('#pertanyaan').innerHTML = `Apakah Ada ${gejala[index].nama} ?`

            const foundObj = jawaban.find(({ id_gejala }) => id_gejala === gejala[index].id);
            if(foundObj){
                console.log(foundObj.value == 'ada')
                if(foundObj.value == 'ada'){
                    console.log(document.querySelector('#btn_ada'))
                    document.querySelector('#btn_ada').classList.replace('btn-outline-success','btn-primary')
                    document.querySelector('#btn_tidak').classList.remove('btn_primary')
                }else{
                    document.querySelector('#btn_tidak').classList.add('btn-outline-success','btn-primary')
                    document.querySelector('#btn_ada').classList.remove('btn-primary')
                }
            }
        }
        
        function klikSoal(e){
            index = Number(e-1)
            showSoal()
        }
        
        function isDone(){
            if(jawaban.length == gejala.length){
                document.querySelector('#btn_selesai').classList.remove('d-none')
            }else{
                document.querySelector('#btn_selesai').classList.add('d-none')
            }
        }

        function btnNext(){
            if(index >= (gejala.length - 1)){
                return
            }
            index++;
            localStorage.setItem('index',index)
            showSoal()
        }

        function btnPrevious(){
            if(index <= 0){
                return
            }
            index--;
            localStorage.setItem('index',index)
            showSoal()
        }

        // logic & style jawab ya & tidak
        function submitJawaban(jwb){
            document.querySelector('.button-soal[data-soal="'+(index+1)+'"]').classList.add('active')
            if(jwb == 'ada'){
                document.querySelector("#btn_ada").classList.replace('btn-outline-success','btn-primary')
                document.querySelector('#btn_tidak').classList.replace('btn-primary','btn-outline-success')
            }else{
                document.querySelector("#btn_tidak").classList.replace('btn-outline-success','btn-primary')
                document.querySelector('#btn_ada').classList.replace('btn-primary','btn-outline-success')
            }

            const foundObj = jawaban.find(({ id_gejala }) => id_gejala === gejala[index].id);
            if (foundObj) {
                Object.assign(foundObj,{
                id_gejala: gejala[index].id,
                value: jwb
            })
            }else{
                jawaban.push({
                id_gejala: gejala[index].id,
                value: jwb
             })
            }
            localStorage.setItem('jawaban',JSON.stringify(jawaban))
            isDone()
        }

        // fungsi reset jawaban
        function reset(){
            localStorage.removeItem('index')
            localStorage.removeItem('jawaban')
            location.reload()
        }

        function selesai(){
            axios.post('/sistem',{
                no_telp: localStorage.getItem('no_telp'),
                jawaban: JSON.parse(localStorage.getItem('jawaban'))
            }).then(e=>{
                window.location = '/report'
            })
        }
    </script>

</body>
</html>