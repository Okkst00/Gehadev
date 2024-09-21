<div class="row main-button justify-content-center align-items-center">
    <div class="col col-lg-12 col-md-12 col-11 shadow bg-white py-3 rounded-5 px-4">
        <a href="/regist-user" type="button" class="btn btn1 mx-1 px-4 text-white rounded-4">Konsultasi Harga</a>
        <a href="/all-posts" type="button" class="btn btn2 mx-1 px-4 text-white rounded-4">Artikel</a>
        <a href="/knowledge" type="button" class="btn btn3 mx-1 px-4 text-white rounded-4">Pengetahuan</a>
        <p class="text px-2 py2">GehaDev'</p>
    </div>
</div>


<style>

    .main-button {
        margin-top: 80px;
        margin-left: -90px;
    }

    .main-button .col .text {
        position: absolute;
        top: -17px;
        left: 15px;
        background-color: rgb(231, 231, 231);
        font-size: 15px;
        font-weight: bold;
        border-radius: 5px
    }

    .main-button .col {
        background: -webkit-linear-gradient(bottom, #1aac60 0%, #2eaf6c 12%, #48e795 100%);
    }

    .main-button .col a {
        text-decoration: none;
    }

    .main-button .col .btn1 {
        background: -webkit-linear-gradient(left, rgb(250, 181, 103) 20%, rgb(240, 151, 51) 100%);
        font-weight: 600;
        font-size: 17px;
        transition: all 0.3s ease-in-out;
        box-shadow: 1px 3px 12px #535353;
        text-decoration: none;
        margin-top: -2px
    }

    .main-button .col .btn1:hover {
        transform: translate(0, 2px);
        box-shadow: 1px 3px 6px #5a5a5a;
        background: -webkit-linear-gradient(left, rgb(255, 193, 121) 20%, rgb(248, 163, 65) 100%);
    }

    .main-button .col .btn2 {
        background: -webkit-linear-gradient(left, rgb(143, 45, 255) 20%, rgb(107, 11, 216) 100%);
        font-weight: 600;
        font-size: 17px;
        transition: all 0.3s ease-in-out;
        box-shadow: 1px 3px 12px #535353;
        text-decoration: none;
        margin-top: -2px
    }
    
    .main-button .col .btn2:hover {
        transform: translate(0, 2px);
        box-shadow: 1px 3px 6px #5a5a5a;
        background: -webkit-linear-gradient(left, rgb(155, 67, 255) 20%, rgb(114, 15, 228) 100%);
    }

    .main-button .col .btn3 {
        background-color: rgb(255, 28, 187);
        font-weight: 600;
        font-size: 17px;
        transition: all 0.3s ease-in-out;
        box-shadow: 1px 3px 12px #535353;
        text-decoration: none;
        margin-top: -2px
    }
    
    .main-button .col .btn3:hover {
        transform: translate(0, 2px);
        box-shadow: 1px 3px 6px #5a5a5a;
        background-color: rgb(255, 55, 195);
    }



    @media (min-width:1080px) {

        .main-button{
            position: absolute;
            animation: slide 1.4s .1s ease-in;
        }

        @keyframes slide {
            0% {
                right: -500px;
            }

            100% {
                right: 7%;
            }
        }
    }



    
    @media (max-width:768px) {

        .main-button {
            position: absolute; 
            margin-left: -200px;
        }
        
        .main-button .col .btn1 {
            font-size: 15px;
        }
    }

    
    @media (max-width:450px) {
        
        .main-button {
            display: none;
        }

    }

</style>
