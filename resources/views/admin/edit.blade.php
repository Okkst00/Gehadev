<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href={{ '../assets/img/gdev-icon.png' }}>
    <link rel="stylesheet" href={{ '../assets/css/admin/admin-edit.css' }}>
    <title>Edit - Admin panel</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row bg-white pt-5 shadow">
            <h3 class="text-center my-3">Edit Artikel</h3>
            <div class="col-lg-11 mb-4 mx-auto">
                <div class="container container-fluid mb-5">
                    <div class="col-xl-1-12">
                        <div class="well well-lg">
                            <div class="row">
                                <div class="text-center col-lg-12 mt-4">
                                    <form action="" method="post" enctype="multipart/form-data"> 
                                        <div class="form-group">
                                            <textarea class="form-control mb-3" rows="2" name="judul" placeholder="Judul"></textarea>
                                        </div>
                                        <select class="form-select mb-3 w-100">
                                            <option selected>Pilih kategori</option>
                                            <option value="properti">properti</option>
                                            <option value="properti">properti</option>
                                            <option value="properti">properti</option>
                                        </select>
                                        <div class="form-group">
                                            <textarea class="form-control mb-5" rows="10" name="isi" placeholder="Isi"></textarea>
                                        </div>
                                        <input type="file" name="file">
                                        <!-- <input type="submit" name="tambah" value="Tambahkan" class="btn" style="background-color: #0f8146; color: white;"> -->
                                        <button type="submit" name="tambah" value="Tambahkan" class="btn shadow-sm" style="background-color: #0f8146; color: white;">Editkeun <i class="bi bi-check-circle-fill"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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