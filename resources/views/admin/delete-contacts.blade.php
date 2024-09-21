<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href={{ '../../assets/img/gdev-icon.png' }}>
    <title>Delete contacts</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;1,500&display=swap');

        * {
            font-family: nunito;
        }

        .dlt .row{
            height: 100vh;
            margin-top: -60px;
        }

        .dlt .row .col{
            display: grid;
            justify-content: center;
            align-items: center;
        }

    </style>

</head>
<body>
    <div class="container dlt">
        <div class="row justify-content-center align-items-center">
            <div class="col col-lg-6">
                <h4 class="mb-5 text-center">Apakah kamu yakin ingin hapus pesan dari : <strong>{{ $contactList->name }}</strong></h4>
                <div class="btns text-center">
                    <form action="/admin/destroy-contacts/{{ $contactList->id }}" method="post" class="d-inline-block">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger text-center px-5 py-2 rounded-5 shadow"><i class="bi bi-check-circle-fill"></i> Lanjutkan</button>
                    </form>
                    <a href="/admin/contacts" class="btn btn-success text-center px-5 py-2 rounded-5 shadow ms-lg-3 ms-md-3 ms-2"><i class="bi bi-x-circle-fill"></i> Batalkan</a>
                </div>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>