<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    header {
      text-align: left;
      margin-bottom: 20px;
      margin-left: 40px;
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
margin-left: 40px;
      /* margin-left: 400px; */
    }
    .footer2 {
      font-size: 16px;
      text-align: left;
      margin-left: 40px;
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
          include_once(__DIR__ . '/../../function/value.php');


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
          include_once(__DIR__ . '/../../function/value.php');


          // Get the name parameter from the URL
          $nama = isset($_GET['nama']) ? $_GET['nama'] : '';

          // Retrieve data from the table based on the provided name
          $sql = "SELECT * FROM preemploye_pria WHERE nama = '$nama'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
              $hemoglobin_status = getHemoglobinStatus($row["hemoglobin"], $row["jenis_kelamin"]);
              $hematokrit_status = getHematokritStatus($row["hematokrit"], $row["jenis_kelamin"]);
              $trombosit_status = getTrombositStatus($row["trombosit"]);
              $leukosit_status = getLeukositStatus($row["leukosit"]);
              $led_status = getLedStatus($row["led"], $row["jenis_kelamin"]);
              $eritrosit_status = geteritrositStatus($row["eritrosit"], $row["jenis_kelamin"]);
              $mcv_status = getMCVStatus($row["mcv"]);
              $mch_status = getMCHStatus($row["mch"]);
              $gds_status = getGDSStatus($row["gds"]);
              $urinalisa_status = getUrinalisaStatus($row["urinalisa"]);

              //anamnesa
              echo "<tr><td colspan='2'><strong style='font-size: 14px;'>ANAMNESA</strong></td></tr>";
              echo "<tr>
               <td style='font-size: 12px; font-weight: bold;'>Keluhan :</td>
                     <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["keluhan"]) . "</td>
                   </tr>";
              echo "<tr><td><strong>Riwayat Penyakit Dahulu :</strong></td><td>" . $row["riwayatdahulu"] . "</td></tr>";
             echo "<tr>
               <td style='font-size: 12px; font-weight: bold;'>Riwayat Penyakit Keluarga :</td>
                     <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["riwayatkeluarga"]) . "</td>
                   </tr>";
              echo "<tr><td><strong>Riwayat Kebiasaan :</strong></td><td>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Merokok :</strong></td><td>"  . $row["merokok"] . "</td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Olahraga :</strong></td><td>"  . $row["olahraga"] . "</td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Jenis Olahraga :</strong></td><td>"  . $row["j_olahraga"] . "</td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Alkohol :</strong></td><td>"  . $row["alkohol"] . "</td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Obat-obatan :</strong></td><td>"  . $row["obat"] . "</td></tr>";
              echo "<tr>
               <td style='font-size: 12px; font-weight: bold;'>Alergi :</td>
                     <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["alergi"]) . "</td>
                   </tr>";

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
              echo "<tr>
               <td style='font-size: 14px; font-weight: bold;'>OD:</td>
                     <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["od"]) . "</td>
                   </tr>";
              echo "<tr>
               <td style='font-size: 14px; font-weight: bold;'>OS:</td>
                     <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["os"]) . "</td>
                   </tr>";
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
               echo "<tr>
               <td style='font-size: 12px; font-weight: bold;'>&emsp;&emsp;Auskultasi:</td>
                     <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["auskultasi_jantung"]) . "</td>
                   </tr>";

               echo "<tr><td colspan='2'><strong style='font-size: 14px;'>PULMO</strong></td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Perkusi :</strong></td><td>"  . $row["perkusi_pulmo"] . "</td></tr>";
               echo "<tr>
               <td style='font-size: 12px; font-weight: bold;'>&emsp;&emsp;Auskultasi:</td>
                     <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["auskultasi_pulmo"]) . "</td>
                   </tr>";

               //Abdomen
               echo "<tr><td colspan='2'><strong style='font-size: 14px;'>ABDOMEN</strong></td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Inspeksi :</strong></td><td>"  . $row["perkusi_jantung"] . "</td></tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Palpalsi :</strong></td><td>"  . $row["auskultasi_jantung"] . "</td></tr>";
               echo "<tr>
               <td style='font-size: 12px; font-weight: bold;'>&emsp;&emsp;Auskultasi:</td>
                     <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["auskultasi_abdomen"]) . "</td>
                   </tr>";
               echo "<tr><td>&emsp;&emsp;<strong>Ginjal :</strong></td><td>"  . $row["ginjal"] . "</td></tr>";

               //Ekstremitas Atas
               echo "<tr>
               <td style='font-size: 14px; font-weight: bold;'>Ekstremitas Atas:</td>
                     <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["ekstremitas_atas"]) . "</td>
                   </tr>";

               echo "<tr>
               <td style='font-size: 14px; font-weight: bold;'>Ekstremitas Bawah:</td>
                     <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["ekstremitas_bawah"]) . "</td>
                   </tr>";

              //Kulit
              echo "<tr><td colspan='2'><strong style='font-size: 14px;'>KULIT</strong></td></tr>";
              echo "<tr><td>&emsp;&emsp;<strong>Tumor :</strong></td><td>"  . $row["tumor"] . "</td></tr>";
              echo "<tr><td>&emsp;&emsp;<strong>Kelainan Kulit :</strong></td><td>"  . $row["kelainan_kulit"] . "</td></tr>";

              //Laboratorium
              echo "<tr><td colspan='2'><strong style='font-size: 14px;'>LABORATORIUM</strong></td></tr>";

              echo "<tr><td>&emsp;&emsp;<strong>a. Darah Lengkap :</strong></td><td>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Hemoglobin :</strong></td><td>"  . $row["hemoglobin"] . " g/dl <strong>" . $hemoglobin_status . "</strong><br><br><br><br><br><small>(Nilai Normal Pria: 14 - 18 g/dL)<br><br><br><br>(Nilai Normal Wanita: 12 - 16 g/dL)</small></td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Hematokrit :</strong></td><td>"  . $row["hematokrit"] . " % <strong>" . $hematokrit_status . "</strong><br><br><br><br><br><small>(Nilai Normal Pria: 41 - 54 %)<br><br><br><br>(Nilai Normal Wanita: 38 - 46 %)</small></td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Trombosit :</strong></td><td>"  . $row["trombosit"] . " μL <strong>" . $trombosit_status . "</strong><br><br><br><br><br><small>(Nilai Normal : 150.000 - 400.000 μL)</small></td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Leukosit :</strong></td><td>"  . $row["leukosit"] . " μL <strong>" . $leukosit_status . "</strong><br><br><br><br><br><small>(Nilai Normal : 50.000 - 100.000 μL)</small></td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>LED :</strong></td><td>"  . $row["led"] . " mm/jam <strong>" . $led_status . "</strong><br><br><br><br><br><small>(Nilai Normal Pria: 0-15 mm/jam)<br><br><br><br>(Nilai Normal Wanita: 0 - 20 mm/jam)</small></td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Eritrosit :</strong></td><td>"  . $row["eritrosit"] . " μL <strong>" . $eritrosit_status . "</strong><br><br><br><br><br><small>(Nilai Normal Pria: 4.700.000 - 6.400.000 μL)<br><br><br><br>(Nilai Normal Wanita: 4.200.000 - 5.400000 μL)</small></td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Hitung Jenis :</strong></td><td>"  . $row["hitung_jenis"] . "";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>MCV :</strong></td><td>"  . $row["mcv"] . " fl <strong>" . $mcv_status . "</strong><br><br><br><br><br><small>(Nilai Normal : 80 - 100 fl)</small></td></tr>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>MCH :</strong></td><td>"  . $row["mch"] . " pg <strong>" . $mch_status . "</strong><br><br><br><br><br><small>(Nilai Normal : 27.5 - 33.2 pg)</small></td></tr>";

              echo "<tr><td>&emsp;&emsp;<strong>b. Gula Darah Sewaktu :</strong></td><td>" . $row["gds"] . " mg/dl <strong>" . $gds_status . "</strong><br><br><br><br><br><small>(Nilai Normal : < 200 mg/dl)</small></td></tr>";

              echo "<tr><td>&emsp;&emsp;<strong>c. Imunoserologi :</strong></td><td>";
              echo "<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>HbsAg :</strong></td><td>"  . $row["hbsag"] . "";

              echo "<tr><td>&emsp;&emsp;<strong>c. Urinalisa :</strong></td><td>" . $row["urinalisa"] . " pH <strong>" . $urinalisa_status . "</strong><br><br><br><br><br><small>(Nilai Normal : 5 - 8 pH)</small></td></tr>";

              //thorax
              echo "<tr>
              <td style='font-size: 14px; font-weight: bold;'>RONTGEN THORAX:</td>
                    <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["thorax"]) . "</td>
                  </tr>";

              //Kesan
             echo "<tr>
                    <td style='font-size: 14px; font-weight: bold;'>KESAN:</td>
                    <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["kesan"]) . "</td>
                  </tr>";

              //Anjuran
             echo "<tr>
                    <td style='font-size: 14px; font-weight: bold;'>ANJURAN:</td>
                    <td style='font-size: 12px; font-family: Arial, sans-serif; line-height: 1; padding: 1; border: 1; margin: 0; white-space: pre-wrap;'>" . nl2br($row["anjuran"]) . "</td>
                  </tr>";


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
<br><br>(dr Anisa Nor Chalifa)
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
