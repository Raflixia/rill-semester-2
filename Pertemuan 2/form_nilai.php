<!DOCTYPE html>
<html>

<head>
<title>Form Nilai</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <fieldset style="border:1px solid black">
        <legend>Silahkan isi Form Dibawah Ini</legend>
    <?php
    $data_matkul = [
        'WEB1' => 'Pemrograman Web 1',
        'WEB2' => 'Pemrograman Web 2',
        'BASDAT'=> 'Basis Data',
        'UI/UX'=> 'UI/UX',
        'JARKOM'=> 'Jaringan Komputer',
    ]
    ?>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Pemrograman Web 2">WEB1</option>
        <option value="Pemrograman Web 2">WEB2</option>
        <option value="Basis Data">BASDAT</option>
        <option value="UI/UX">UI/UX</option>
        <option value="Jaringan Komputer">JARKOM</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas_praktikum" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="tugas_praktikum" name="tugas_praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<fieldset>
<?php
  if (isset($_GET['submit'])) {
  $_nama = $_GET['nama_lengkap'];
  $_matkul = $_GET['matkul'];
  $_nilai_uts = $_GET['nilai_uts'];
  $_nilai_uas = $_GET['nilai_uas'];
  $_nilai_tugas = $_GET['tugas_praktikum'];
  ?>
  <h2>Hasil perhitungan nilai mahasiswa</h2>
  Nama mahasiswa: <?=$_nama; ?><br>
  Mata Kuliah: <?=$data_matkul[$_matkul]; ?><br>
  Nilai UTS: <?=$_nilai_uts; ?><br>
  Nilai UAS: <?=$_nilai_uas; ?><br>
  Nilai Tugas Praktikum: <?=$_nilai_tugas; ?><br>
  <?php } ?>
</fieldset>
</body>
</html>