<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hasil Diagnosa</title>
  </head>
  <body>
  <div class="container mt-2 text-center">
    <h2 style="text-align: center;">Hasil Diagnosa Penyakit Tanaman</h2>
</div>

  <div class="mb-5">
  <div class="container">
    <p>Lampiran : </p>
<form action="/home/diagnosa" method="post">
      <?php foreach ($penyakit as $h):?>
        <div class="card" style="border: aqua; border:1px solid black;">
        <div class="card-body">
          <h3 style="margin-left: 20px;">Data Pengajuan Konsultasi</h3>
          <p style="margin-left: 20px;" class="card-text">Username : <?= session()->get('username')?></p>
          <p class="card-text" style="margin-left: 20px;">Penyakit Tanaman Disebabkan Oleh: <?= $h['NamaPenyakit']?></p>
          <p class="card-text" style="margin-left: 20px;">Cara Menangani Penyakit : <br>  <?= $h['Solusi']?></p>
          <p class="card-text" style="margin-left: 20px;">Gejala Penyakit : <br>  <?= $h['Gejala']?></p>
          <div class="" style="text-align: right; margin-right:20px; margin-top:50px;">
          <p>Terimakasih Atas Kunjungannya</p>
          <br>
          <p style="margin-right: 40px;">-----------------------</p>
          <br>
          <p style="margin-right: 40px; font-weight: bold;">BB Green House</p>
        </div>
        </div>
      </div>
    <?php endforeach?>
</form>
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>