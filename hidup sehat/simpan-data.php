<?php
// Include the database connection file
include ('koneksi.php');

// Check if the form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $nama = $_POST['nama'];
    $rm = $_POST['rm'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin']; // Corrected here
    $tanggal = $_POST['tanggal'];
    $penjamin = $_POST['penjamin'];
    $asuransi = isset($_POST['asuransi']) ? $_POST['asuransi'] : '';
    $paket = $_POST['paket'];
    $usia_tahun = $_POST['usia_tahun'];
    $usia_bulan = $_POST['usia_bulan'];
    $keluhan = $_POST['keluhan'];
    $riwayatdahulu = $_POST['riwayatdahulu'];
    $riwayatkeluarga = $_POST['riwayatkeluarga'];
    $merokok = $_POST['merokok'];
    $alkohol = $_POST['alkohol'];
    $obat = $_POST['obat'];
    $olahraga = $_POST['olahraga'];
    $jenis_olahraga = $_POST['jenis_olahraga'];
    $riwayatalergi = $_POST['riwayatalergi'];
    $alergi = $_POST['alergi'];
    $perkusi_jantung = $_POST['perkusi'];
    $auskultasi_jantung = $_POST['jantung-auskultasi'];
    $perkusi_pulmo = $_POST['pulmo-perkusi'];
    $auskultasi_pulmo = $_POST['pulmo-auskultasi'];
    $inspeksi_abdomen = $_POST['inspeksi'];
    $palpalsi_abdomen = $_POST['palpalsi'];
    $auskultasi_abdomen = $_POST['auskultasi'];
    $ginjal = $_POST['ginjal'];
    $ekstremitas_atas = $_POST['ekstremitas-atas'];
    $ekstremitas_bawah = $_POST['ekstremitas-bawah'];
    $tumor = $_POST['tumor'];
    $kelainan_kulit = $_POST['kelainan-kulit'];
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $bmi = $_POST['bmi'];
    $bmi_status = $_POST['bmi_status'];
    $tensi = $_POST['tensi'];
    $nadi = $_POST['nadi'];
    $respirasi = $_POST['respirasi'];
    $suhu = $_POST['suhu'];
    $hemoglobin = $_POST['hemoglobin'];
    $hematokrit = $_POST['hematokrit'];
    $trombosit = $_POST['trombosit'];
    $leukosit = $_POST['leukosit'];
    $led = $_POST['led'];
    $eritrosit = $_POST['eritrosit'];
    $hitung_jenis = $_POST['hitung-jenis'];
    $mcv = $_POST['MCV'];
    $mch = $_POST['MCH'];
    $gds = $_POST['gds'];
    $kolesterol = $_POST['kolesterol'];
    $hdl = $_POST['hdl'];
    $ldl = $_POST['ldl'];
    $tg = $_POST['tg'];
    $glukosa_puasa = $_POST['glukosa-puasa'];
    $hba1c = $_POST['hba1c'];
    $asam_urat = $_POST['asam-urat'];
    $ureum = $_POST['ureum'];
    $creatin = $_POST['creatin'];
    $sgot = $_POST['sgot'];
    $sgpt = $_POST['sgpt'];
   

   
    $sql = "INSERT INTO hidup_sehat     (nama, rm, tgl_lahir, jenis_kelamin, tanggal, penjamin, asuransi, paket, usia_tahun, usia_bulan,
                                        keluhan, riwayatdahulu, riwayatkeluarga, merokok, alkohol, obat, olahraga, j_olahraga, riwayatalergi, alergi,
                                        perkusi_jantung, auskultasi_jantung, perkusi_pulmo, auskultasi_pulmo, inspeksi_abdomen, palpalsi_abdomen, auskultasi_abdomen, ginjal, ekstremitas_atas, ekstremitas_bawah, tumor, kelainan_kulit,
                                        berat_badan, tinggi_badan, bmi, bmi_status, tensi, nadi, respirasi, suhu, hemoglobin, hematokrit, trombosit, leukosit, led, 
                                        eritrosit, hitung_jenis, mcv, mch, gds, 
                                        kolesterol, hdl, ldl, tg, glukosa_puasa, hba1c, 
                                        asam_urat, ureum, creatin, sgot, sgpt)
            VALUES ('$nama', '$rm', '$tgl_lahir', '$jenis_kelamin', '$tanggal', '$penjamin', '$asuransi', '$paket', '$usia_tahun', '$usia_bulan',
                    '$keluhan', '$riwayatdahulu', '$riwayatkeluarga', '$merokok', '$alkohol', '$obat', '$olahraga', '$jenis_olahraga', '$riwayatalergi', '$alergi',
                    '$perkusi_jantung', '$auskultasi_jantung', '$perkusi_pulmo', '$auskultasi_pulmo', '$inspeksi_abdomen', '$palpalsi_abdomen', '$auskultasi_abdomen', '$ginjal', '$ekstremitas_atas', '$ekstremitas_bawah', '$tumor', '$kelainan_kulit',
                    '$berat_badan', '$tinggi_badan', '$bmi', '$bmi_status', '$tensi', '$nadi', '$respirasi', '$suhu','$hemoglobin', '$hematokrit', '$trombosit', '$leukosit', '$led', 
                    '$eritrosit', '$hitung_jenis', '$mcv', '$mch', '$gds', 
                    '$kolesterol', '$hdl', '$ldl', '$tg', '$glukosa_puasa', '$hba1c', 
                    '$asam_urat', '$ureum', '$creatin', '$sgot', '$sgpt')";

if ($conn->query($sql) === TRUE) {
    // Close the database connection
    $conn->close();

    // Redirect to anamnesa.html
    header("Location: /mcu/index.html ");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {
// If the form data is not submitted through POST method, redirect to the form page
header("Location: your_form_page.php");
exit();
}
?>
