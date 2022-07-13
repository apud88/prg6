DAFTAR PINJAM BUKU

<div class="table-responsive">
  <table class="table", border="1">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Siswa</th>
        <th scope="col">Meminjam</th>
        <th scope="col">Kembali</th>
        <th scope="col">Buku</th>
        <th scope="col">Jumlah Halaman</th>
        <th scope="col">Penulis</th>
        <th scope="col">Type</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 0;?>
      <?php foreach ($join as $row): $no++?>
      <tr>
        <td><?= $no; ?></td>
        <td><?=$row['name_student'];?></td>
        <td><?=$row['takenDate'];?></td>
        <td><?=$row['broughtDate'];?></td>
        <td><?=$row['name_book'];?></td>
        <td><?=$row['pagecount'];?></td>
        <td><?=$row['name_author'];?></td>
        <td><?=$row['name_type'];?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Bootstrap basic table example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
