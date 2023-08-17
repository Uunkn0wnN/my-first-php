<!DOCTYPE html>
<html>
<head>
  <!-- website name/title -->
  <title>Administrator</title>
  <!-- tampilan atau ukuran layar -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Memanggil file CSS terpisah -->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <!-- Bagian untuk menentukan usia -->
  <h1>penentu usia</h1>
  <?php
  // Menghasilkan angka acak antara 1 dan 10 untuk mewakili usia
  $usia = rand(1, 10);
  if ($usia <= 5) {
      echo "anda masih balita!<br> dengan umur $usia <br/>";
  } else {
      echo "anda sudah dewasa!<br> dengan umur $usia <br/>";
  }
  ?>

  <!-- Bagian untuk menentukan jenis kue berdasarkan bahan -->
  <h1>penentu kue</h1>
  <?php
  // Jenis-jenis tepung yang tersedia
  $tepungg = array(
      "terigu",
      "tepung",
      "ketan"
  );
  $gula = "coklat";
  $gula2 = "putih";
  // Memilih satu jenis tepung secara acak
  $tepung = $tepungg[array_rand($tepungg)];
  
  // Menentukan jenis kue berdasarkan kombinasi tepung dan gula
  if ($tepung == "terigu" && $gula2 == "putih") {
      $hasil = "gula: $gula2<br>hasilnya: kue bolu";
  } elseif ($tepung == "terigu" && $gula == "coklat") {
      $hasil = "gula: $gula<br>hasilnya: kue cucur";
  } elseif ($tepung == "tepung" && $gula2 == "putih") {
      $hasil = "gula: $gula2<br>hasilnya: mochi";
  } elseif ($tepung == "ketan" && $gula == "coklat") {
      $hasil = "gula: $gula<br>hasilnya: biji salak";
  }
  echo "bahan: tepung $tepung dan $hasil";
  ?>

  <!-- Bagian untuk menentukan status lulus berdasarkan nilai -->
  <h1>penentu lulus</h1>
  <?php
  // Menghasilkan nilai acak antara 60 dan 100 untuk representasi nilai ujian
  $nilai = rand(60, 100);
  if ($nilai == 60) {
      $hasill = "E";
      $status = "tidak lulus";
  } elseif ($nilai >= 61 && $nilai <= 70) {
      $hasill = "D";
      $status = "tidak lulus";
  } elseif ($nilai >= 71 && $nilai <= 80) {
      $hasill = "C";
      $status = "lulus";
  } elseif ($nilai >= 80 && $nilai <= 90) {
      $hasill = "B";
      $status = "lulus";
  } elseif ($nilai >= 91 && $nilai <= 100) {
      $hasill = "A";
      $status = "lulus";
  }
  echo "status: $status<br>nilai: $nilai ( $hasill )";
  ?>

  <!-- Bagian untuk simulasi sistem lift -->
  <h1>Lift Sistem</h1>
  <?php
  // Menghasilkan lantai dan kapasitas acak untuk lift
  $lantai = rand(1, 5);
  $kapasitas = rand(1, 10);
  
  // Menampilkan informasi lift menuju lantai atau pesan terlalu berat
  if ($lantai <= 5 && $kapasitas <= 5) {
      echo "lift menuju ke lantai $lantai<br>pintu lift terbuka !";
  } else {
      echo "terlalu berat !, maksimum kapasitas adalah 5 <br>kapasitas dalam lift ini saat ini adalah $kapasitas";
  }
  ?>

  <!-- Bagian untuk operasi aritmatika -->
  <h1>Aritmatika</h1>
  <?php
  // Menghasilkan dua angka acak untuk operasi aritmatika
  $number = rand(1, 20);
  $numberr = rand(1, 10);
  // Melakukan operasi penjumlahan
  $penjumlahan = $number + $numberr;
  echo "$number + $numberr = $penjumlahan<br>";
  // Melakukan operasi pengurangan
  $pengurangan = $number - $numberr;
  echo "$number - $numberr = $pengurangan<br>";
  // Melakukan operasi perkalian
  $perkalian = $number * $numberr;
  echo "$number x $numberr = $perkalian<br>";
  // Melakukan operasi pembagian
  $pembagian = $number / $numberr;
  echo "$number : $numberr = $pembagian<br>";
  ?>

  <!-- Footer dengan tautan ke halaman web dan profil GitHub -->
  <footer>
    <p><a href="https://crowerls.221447.repl.co/">Bagas Putra Ramadhan</a><br><a href="https://github.com/Uunkn0wnN">XII ips 2</a></p>
  </footer>
</body>
</html>





<!-- made by Uunkn0wnN -->
