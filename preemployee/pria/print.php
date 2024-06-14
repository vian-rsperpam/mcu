<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    header {
      text-align: center;
      margin-bottom: 20px;
    }
    .company-logo {
      display: inline-block;
      width: 50px; /* Sesuaikan lebar logo */
      vertical-align: middle;
    }
    .company-info {
      display: inline-block;
      vertical-align: middle;
      margin-left: 14px;
      font-size: 12px;
      text-align: left;
    }
    .company-info h3 {
      margin: 0;
      font-size: 14px;
    }
    .company-address {
      margin-top: 10px;
    }
    .result {
      border: 0px solid #ddd; /* Gaya border */
      padding: 10px;
      text-align: left;
      margin: 0 auto; /* Untuk menempatkan di tengah */
      max-width: 1000px; /* Sesuaikan lebar maksimum */
      font-size: 12px;
      line-height: 3px;
    }
    .result1 {
      border: 5px solid #000; /* Gaya border */
      padding: 10px;
      text-align: left;
      margin: 0 auto; /* Untuk menempatkan di tengah */
      max-width: 1000px; /* Sesuaikan lebar maksimum */
      font-size: 12px;
      line-height: 3px;
    }
    .title-container {
      text-align: center;
      margin-bottom: 20px;
      border: 5px solid #000;
      max-width: auto;
      position: center;
    }
    .print-btn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
    }
    @media print {
      .print-btn {
        display: none;
      }
    }
    .footer {
      font-size: 18px;
      font-weight: bold;
      text-decoration: underline;
      text-align: left;
      /* margin-left: 400px; */
    }
    .footer2 {
      font-size: 16px;
      text-align: left;
      /* margin-left: 420px */
      
    }
  </style>
</head>
<body>

<header>
  <img src="/mcu/logo.png" alt="Company Logo" class="company-logo">
  <div class="company-info">
    <h3>Rumah Sakit Permata Pamulang</h3>
    <p>Jl Siliwangi No 1A, Pamulang, Tangerang Selatan 15416<br>Telp. 021-74709079, 021-74704999 (hunting) ; Fax. 021-74709073</p>
  </div>
</header>

<div class="container mt 1">
  <div class="title-container">
    <h5>KESIMPULAN <br> HASIL MEDICAL CHECKUP</h5>
  </div>
  <div class="result1">
    <table class="table">
      <tbody>
        <?php
          // Include the database connection file
          include ('koneksi.php');

          // Get the name parameter from the URL
          $nama = isset($_GET['nama']) ? $_GET['nama'] : '';

          // Retrieve data from the table based on the provided name
          $sql = "SELECT * FROM preemploye_pria WHERE nama = '$nama'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr><td><strong>Nama :</strong></td><td>" . $row["nama"] . "</td></tr>";
              echo "<tr><td><strong>No RM :</strong></td><td>" . $row["rm"] . "</td></tr>";
              echo "<tr><td><strong>Tanggal pemeriksaan :</strong></td><td>" . $row["tanggal"] . "</td></tr>";
              echo "<tr><td><strong>Penjamin :</strong></td><td>" . $row["penjamin"] . "</td></tr>";
              echo "<tr><td><strong>Paket :</strong></td><td>" . $row["paket"] . "</td></tr>";
              echo "<tr><td><strong>Usia :</strong></td><td>" . $row["usia_tahun"] . " Tahun " . $row["usia_bulan"] . " Bulan</td></tr>";
            }
          } else {
            echo "<tr><td colspan='2'>Tidak ada data ditemukan.</td></tr>";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</div>

<div class="result">
    <table class="table">
      <tbody>
        <?php
          // Include the database connection file
          include ('koneksi.php');

          // Get the name parameter from the URL
          $nama = isset($_GET['nama']) ? $_GET['nama'] : '';

          // Retrieve data from the table based on the provided name
          $sql = "SELECT * FROM preemploye_pria WHERE nama = '$nama'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
              //anamnesa
              echo "<tr><td colspan='2'><strong style='font-size: 14px;'>ANAMNESA</strong></td></tr>";
              echo "<tr><td><strong style='font-size: 14px;'>Keluhan :</strong></td><td><pre style='font-size: 12px; font-family: Arial, sans-serif; line-height: 0.5;'>"  . nl2br($row["keluhan"]) . "</pre></td></tr>";
              echo "<tr><td><strong>Riwayat Penyakit Dahulu :</strong></td><td>" . $row["riwayatdahulu"] . "</td></tr>";
              echo "<tr><td><strong>Riwayat Penyakit Keluarga :</strong></td><td>" . $row["riwayatkeluarga"] . "</td></tr>";
              echo "<tr><td><strong>Riwayat Kebiasaan :</strong></td><td>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Merokok :</strong></td><td>"  . $row["merokok"] . "</td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Olahraga :</strong></td><td>"  . $row["olahraga"] . "</td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Jenis Olahraga :</strong></td><td>"  . $row["j_olahraga"] . "</td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Alkohol :</strong></td><td>"  . $row["alkohol"] . "</td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Obat-obatan :</strong></td><td>"  . $row["obat"] . "</td></tr>";
              echo "<tr><td><strong>Riwayat Alergi :</strong></td><td>" . $row["alergi"] . "</td></tr>";

               //Pemeriksaan Fisik
               echo "<tr><td colspan='2'><strong style='font-size: 14px;'>PEMERIKSAAN FISIK</strong></td></tr>";
               echo "<tr><td><strong>Antropometri</strong></td><td>";
               echo "<tr><td>&emsp;&emsp;<strong>Berat Badan :</strong></td><td>"  . $row["berat_badan"] . " Kg</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Tinggi Badan :</strong></td><td>"  . $row["tinggi_badan"] . " cm</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>BMI :</strong></td><td>"  . $row["bmi_status"] . " </td></tr>";

               echo "<tr><td><strong>Tanda-tanda vital</strong></td><td>";
               echo "<tr><td>&emsp;&emsp;<strong>Tensi :</strong></td><td>"  . $row["tensi"] . " mmHg</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Nadi :</strong></td><td>"  . $row["nadi"] . " x/menit</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Respirasi :</strong></td><td>"  . $row["respirasi"] . " x/menit</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Suhu :</strong></td><td>"  . $row["suhu"] . " &deg C</td></tr>";

               //Mata
               echo "<tr><td colspan='2'><strong style='font-size: 14px;'>MATA</strong></td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Buta Warna :</strong></td><td>"  . $row["butawarna"] . " Kg</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Konjunctiva :</strong></td><td>"  . $row["konjunctiva"] . " cm</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Sclera :</strong></td><td>"  . $row["sclera"] . " </td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Palpebra :</strong></td><td>"  . $row["palpebra"] . " </td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Refleks Cahaya :</strong></td><td>"  . $row["refleks_cahaya"] . " </td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Visus :</strong></td><td>";
               echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>OD :</strong></td><td>"  . $row["od"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>OS :</strong></td><td>"  . $row["os"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Catatan :</strong></td><td>"  . $row["catatan"] . "</td></tr>";

              //Mulut
               echo "<tr><td colspan='2'><strong style='font-size: 14px;'>MULUT</strong></td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Faring :</strong></td><td>"  . $row["faring"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Tonsil :</strong></td><td>"  . $row["tonsil"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Gigi :</strong></td><td>"  . $row["gigi"] . " </td></tr>";
               
              //Leher
               echo "<tr><td colspan='2'><strong style='font-size: 14px;'>LEHER</strong></td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Pembesaran KGB :</strong></td><td>"  . $row["kgb"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Pembesaran Tyroid :</strong></td><td>"  . $row["tyroid"] . "</td></tr>";

              //Telinga
               echo "<tr><td colspan='2'><strong style='font-size: 14px;'>TELINGA</strong></td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Membran Tympani :</strong></td><td>"  . $row["tympani"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Serumen Prope :</strong></td><td>"  . $row["prope"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Infeksi :</strong></td><td>"  . $row["infeksi"] . "</td></tr>";

               //Costovertebra
               echo "<tr><td colspan='2'><strong style='font-size: 14px;'>COSTROVERTEBRA</strong></td></tr>";
               echo "<tr><td colspan='2'><strong style='font-size: 14px;'>Jantung</strong></td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Perkusi :</strong></td><td>"  . $row["perkusi_jantung"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Auskultasi :</strong></td><td>"  . $row["auskultasi_jantung"] . "</td></tr>";

               echo "<tr><td colspan='2'><strong style='font-size: 14px;'>PULMO</strong></td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Perkusi :</strong></td><td>"  . $row["perkusi_pulmo"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Auskultasi :</strong></td><td>"  . $row["auskultasi_pulmo"] . "</td></tr>";

               //Abdomen
               echo "<tr><td colspan='2'><strong style='font-size: 14px;'>ABDOMEN</strong></td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Inspeksi :</strong></td><td>"  . $row["perkusi_jantung"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Palpalsi :</strong></td><td>"  . $row["auskultasi_jantung"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Auskultasi :</strong></td><td>"  . $row["auskultasi_abdomen"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Ginjal :</strong></td><td>"  . $row["ginjal"] . "</td></tr>";

               //Ekstremitas Atas
               echo "<tr><td><strong style='font-size: 14px;'>EKSTREMITAS ATAS :</strong></td><td>"  . $row["ekstremitas_atas"] . "</td></tr>";

               echo "<tr><td><strong style='font-size: 14px;'>EKSTREMITAS BAWAH :</strong></td><td>"  . $row["ekstremitas_bawah"] . "</td></tr>";

              //Kulit
              echo "<tr><td colspan='2'><strong style='font-size: 14px;'>KULIT</strong></td></tr>";
              echo "<tr><td>&emsp;&emsp;<strong>Tumor :</strong></td><td>"  . $row["tumor"] . "</td></tr>";
              echo "<tr><td>&emsp;&emsp;<strong>Kelainan Kulit :</strong></td><td>"  . $row["kelainan_kulit"] . "</td></tr>";

              //Laboratorium
              echo "<tr><td colspan='2'><strong style='font-size: 14px;'>LABORATORIUM</strong></td></tr>";

              echo "<tr><td>&emsp;&emsp;<strong>a. Darah Lengkap :</strong></td><td>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Hemoglobin :</strong></td><td>"  . $row["hemoglobin"] . " g/dl";
              echo "<br><br><br><br><br><small>(Nilai Normal Pria : 14 - 18g/dL)";
              echo "<br><br><br><br><br>(Nilai Normal Wanita : 12 -16g/dL)";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Hematokrit :</strong></td><td>"  . $row["hematokrit"] . " %";
              echo "<br><br><br><br><br><small>(Nilai Normal Pria : 41 - 54%)";
              echo "<br><br><br><br><br>(Nilai Normal Wanita : 38 - 46%)";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Trombosit :</strong></td><td>"  . $row["trombosit"] . " μL";
              echo "<br><br><br><br><br><small>(Normal : 150.000 - 400.000 μL)";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Leukosit :</strong></td><td>"  . $row["leukosit"] . " μL";
              echo "<br><br><br><br><br><small>(Normal : 50.000 - 10.000 μL)";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>LED :</strong></td><td>"  . $row["led"] . " mm/jam";
              echo "<br><br><br><br><br><small>(Nilai Normal Pria : 0 dan 15  mm/jam)";
              echo "<br><br><br><br><br>(Nilai Normal Waninita : 0 dan 20 mm/jam)";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Eritrosit :</strong></td><td>"  . $row["eritrosit"] . "";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Hitung Jenis :</strong></td><td>"  . $row["hitung_jenis"] . "";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>MCV :</strong></td><td>"  . $row["mcv"] . " fl";
              echo "<br><br><br><br><br><small>(Normal : 80 - 100 fl)";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>MCH :</strong></td><td>"  . $row["mch"] . " pg";
              echo "<br><br><br><br><br><small>(Normal : 27,5 - 33,2 pg)";

              echo "<tr><td>&emsp;&emsp;<strong>b. Gula Darah Sewaktu :</strong></td><td>" . $row["gds"] . " mg/dl";

              echo "<tr><td>&emsp;&emsp;<strong>Imunoserologi :</strong></td><td>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>HbsAg :</strong></td><td>"  . $row["hbsag"] . "";

              echo "<tr><td>&emsp;&emsp;<strong>c. Urinalisa :</strong></td><td>" . $row["urinalisa"] . " pH";

              //thorax
              echo "<tr><td><strong style='font-size: 14px;'>RONTGEN THORAX :</strong></td><td>"  . $row["thorax"] . "</td></tr>";

              //Kesan
              echo "<tr><td><strong style='font-size: 14px;'>KESAN :</strong></td><td>"  . $row["kesan"] . "</td></tr>";

              //Anjuran
              echo "<tr><td><strong style='font-size: 14px;'>ANJURAN :</strong></td><td><pre style='font-size: 12px; font-family: Arial, sans-serif; line-height: 0.5;'>"  . nl2br($row["anjuran"]) . "</pre></td></tr>";


            }
          } else {
            echo "<tr><td colspan='2'>Tidak ada data ditemukan.</td></tr>";
          }

          $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</div>

<div class="footer">
<br><br><br>(dr Anisa Nor Chalifa)
</div>

<div class="footer2">
Penanggung Jawab
</div>
          

<div class="print-btn">
  <button class="btn btn-primary" onclick="window.print()">Print</button>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
