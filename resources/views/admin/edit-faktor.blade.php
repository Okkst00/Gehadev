<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href={{ '../../assets/img/gdev-icon.png' }}>
    <link rel="stylesheet" href={{ '../../assets/css/admin/admin-edit-articles.css' }}>
    <title>Edit Standard Knowledge</title>
</head>
<body>

    <div class="container bg-white my-5 rounded-5 shadow">
        <div class="row justify-content-center py-5">
            <p class="gehadev-pack py-1 px-3">GehaDev'</p>
            <a href="/admin/input-faktor" class="btn-back py-2 px-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
            <h2 class="text-center main-title pb-5">Edit Faktor -- {{ $factorList->id }} </h2>
            <div class="text-center col-lg-10 col-md-10 col-11 mt-5">
                <form action="/admin/input-faktor/{{ $factorList->id }}" method="post" enctype="multipart/form-data"> 
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <textarea class="form-control mb-3" rows="2" name="id_faktor" placeholder="" id="id_faktor" required >{{ $factorList->id_faktor }} </textarea>
                    </div>
                    <div class="form-group mb-0">
                        <textarea class="form-control area-content mb-3" rows="3" name="faktor_det" id="faktor_det" placeholder="d" required>{!! $factorList->faktor_det!!}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control area-content mb-5" rows="2" name="faktor_quest" id="faktor_quest" placeholder="d" required>{!! $factorList->faktor_quest!!}</textarea>
                    </div>
                    <button type="submit" name="tambah" value="Edit Postingan" class="btn btn-success shadow-sm mt-lg-0 mt-md-0 mt-4">Edit Postingan <i class="bi bi-check-circle-fill"></i>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
        console.error( error );
        } );
    </script>
</body>
</html>