<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Nilai </title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
  <br/>

<form class="form-horizontal" method="POST" action="array_siswa.php">
<fieldset>

<!-- Form Name -->
<legend>Form Nilai Siswa</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nama Lengkap</label>
  <div class="col-md-6">
  <input id="nama" name="nama" type="text" placeholder="Nama Lengkap" class="form-control input-md">

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Mata Kuliah</label>
  <div class="col-md-6">
    <select id="matkul" name="matkul" class="form-control">
      <option value="1">Pilih Mata Kuliah</option>
      <option value="DDP">Dasar-Dasar Pemrograman</option>
      <option value="BD2">Basis Data II</option>
      <option value="WEB1">Pemrograman Web</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UTS</label>
  <div class="col-md-5">
  <input id="uts" name="uts" type="text" placeholder="Nilai uts" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UAS</label>
  <div class="col-md-5">
  <input id="uas" name="uas" type="text" placeholder="Nilai uas" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai Tugas/Praktikum</label>
  <div class="col-md-5">
  <input id="tugas" name="tugas" type="text" placeholder="Nilai Tugas" class="form-control input-md">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Simpan</button>
  </div>
</div>

</fieldset>
</form>

<?php
/*
     $proses = $_GET['simpan'];
     $nama = $_GET['nama'];
     $matkul = $_GET['matkul'];
     $uts = $_GET['uts'];
     $uas = $_GET['uas'];
     $tugas = $_GET['tugas'];

     echo 'Proses : '.$proses;
     echo '<br/>Nama : '.$nama;
     echo '<br/>Mata Kuliah : '.$matkul;
     echo '<br/>Nilai UTS : '.$uts;
     echo '<br/>Nilai UAS : '.$uas;
     echo '<br/>Nilai Tugas Praktikum  : '.$tugas;
*/
?>
</body>
</html>
