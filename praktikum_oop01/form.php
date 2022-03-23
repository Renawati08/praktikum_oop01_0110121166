<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css"
</head>

<body>
    <h1>Form Nilai Siswa</h1>
<form action="form.php" method="POST">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="Masukan NIM anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="pilih_mk" class="col-4 col-form-label">Pilih MK</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="PW">Pemrograman web</option>
        <option value="BD">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" placeholder="Masukan nilai UTS" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
<?php
require_once 'class_nilaimahasiswa.php';
if($_POST){
    $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
    $keterangan = $ns->hitungNilai();
    $hasil = $ns->grade($keterangan);
    $hasil2 = $ns->predikat($keterangan);
    echo "NIM : " .$ns->nim;
    echo "<br>";
    echo "Matkul : " .$ns->matkul;
    echo "<br>";
    echo "Nilai : " .$ns->nilai;
    echo "<br>";
    echo "Status : " .$hasil;
    echo "<br>";
    echo "Grade : " .$hasil2;
}
?>
</body>
</html>