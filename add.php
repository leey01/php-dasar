<?php
require "function.php";

if (isset ($_POST["submit"])) {// sudah di klik
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php'
        </script>
    ";
}else {
    echo "
    <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php'
        </script>
    ";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    
    <!-- Tabel -->

    <?php
        include "navbar.php"
    ?>

    

    <div class="container container-fluid mt-5">
        <div class="card"><div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h3 align="center">Tambah Data Siswa</h3>
                    <form action="" method="post">

                
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" require>
                        </div>
                        <div class="mb-3">
                            <label for="">Umur</label>
                            <input type="num" class="form-control" id="exampleInputEmail1" name="umur" require>
                            
                        </div>
                        <!-- <div class="mb-3">
                            <label for="">Element</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="umur">
                        </div> -->
                        <div class="mb-3">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="alamat" require>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="">Foto</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="foto">
                        </div> -->

                        <div></div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                                            
                </div>
            </div>     
    
</body>
</html>