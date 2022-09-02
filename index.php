<?php 



    // $dataSiswa = [
    //     [
    //         'nama' => 'ilyas',
    //         'umur' => '16',
    //         'asal' => 'Jaksel',
    //         'foto' => 'img/ilyas.jpeg',
    //       ],
    //       [
    //         'nama' => 'hegel',
    //         'umur' => '15', 
    //         'asal' => 'Temanggung',
    //         'foto' => 'img/hegel.jpeg',
    //       ],
    //       [
    //         'nama' => 'mika',
    //         'umur' => '16',
    //         'asal' => 'Bekasi',
    //         'foto' => 'img/mikawinbriker.jpeg',
    //     ]
    // ];

 
    // koneksi ke database
    require 'function.php';

    // tombol cari ditekan 
    if( isset($_POST["cari"]) ) {
      $siswa = cari($_POST["keyword"]);
    }

    $dataSiswa2 = mysqli_query($conn, "SELECT * FROM tb_siswa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <?php 
      require 'navbar.php';
    ?>

    <h3 style="text-align: center">Data Siswa</h3>

    <div class="container container-fluid">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Asal</th>
            <th scope="col">Action</th>
            <!-- <th scope="col">Foto</th> -->
            <th scope="col">
              <button class="btn btn-primary float-end" type="add data">
                  <a class="text-light" href="add.php">Add Data</a>
              </button>
            </th>
          </tr>
        </thead>
        <tbody>
        <?php $i=1; ?>
        <?php foreach($dataSiswa2 as $siswa): ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $siswa['nama']; ?></td>
            <td><?= $siswa['umur']; ?></td>
            <td><?= $siswa['alamat']; ?></td>
            <td>
                <a class="btn btn-primary" href="edit.php?id=<?= $siswa['id'] ?>">edit</a>
                <a class="btn btn-danger" href="hapus.php?id=<?= $siswa['id'] ?>" onclick="return confirm('yakin?');">delete</a>
            </td>
            <!-- <td><img src="<?= $siswa['foto']; ?>" alt="" width='100'></td> -->
          </tr>
        <?php $i++; ?>  
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>



</body>
</html>