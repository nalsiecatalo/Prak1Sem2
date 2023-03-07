<?php

    $mh1 = [ 'ID'=>1, 'NIM'=>'01101', 'UTS'=>80, 'UAS'=>84, 'Tugas'=>92];
    $mh2 = [ 'ID'=>2, 'NIM'=>'01102', 'UTS'=>83, 'UAS'=>87, 'Tugas'=>90];
    $mh3 = [ 'ID'=>3, 'NIM'=>'01103', 'UTS'=>76, 'UAS'=>80, 'Tugas'=>97];
    $mh4 = [ 'ID'=>4, 'NIM'=>'01104', 'UTS'=>71, 'UAS'=>89, 'Tugas'=>83];
    $mh5 = [ 'ID'=>5, 'NIM'=>'01105', 'UTS'=>93, 'UAS'=>86, 'Tugas'=>89];

    $ar_nilai = [$mh1, $mh2, $mh3, $mh4, $mh5];

    

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Praktikum 1</title>
  </head>
  <body>
    <h1>Nilai Rata-rata Mahasiswa</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">NO.</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
    </tr>
  </thead>
  <tbody>

  <?php
        $nomor = 1;
        foreach($ar_nilai as $mh){

            $nilai_akhir = ($mh['UTS'] + $mh['UAS'] + $mh['Tugas']) / 3;

  ?>
    
    <tr>
        <td> <?= $nomor ?> </td>
        <td> <?= $mh['NIM'] ?> </td>
        <td> <?= $mh['UTS'] ?> </td>
        <td> <?= $mh['UAS'] ?> </td>
        <td> <?= $mh['Tugas'] ?> </td>
        <td> <?= number_format($nilai_akhir, 2 ,',',',') ?> </td>
    </tr>

    <?php
        $nomor++;
    }
    ?>

  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>