<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2>Detail Data Pasien</h2>
  <table class="table">
    <tbody>
      <?php
        // Include the database connection file
        include ('koneksi.php');

        // Get the name parameter from the URL
        $nama = isset($_GET['nama']) ? $_GET['nama'] : '';

        // Retrieve data from the table based on the provided name
        $sql = "SELECT * FROM calonkaryawan WHERE nama = '$nama'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td><strong>Nama:</strong></td><td>" . $row["nama"] . "</td></tr>";
            echo "<tr><td><strong>RM:</strong></td><td>" . $row["rm"] . "</td></tr>";
            echo "<tr><td><strong>Tanggal:</strong></td><td>" . $row["tanggal"] . "</td></tr>";
            echo "<tr><td><strong>Paket:</strong></td><td>" . $row["paket"] . "</td></tr>";
            echo "<tr><td><strong>Tensi:</strong></td><td>" . $row["tensi"] . "</td></tr>";
            echo "<tr><td><strong>Nadi:</strong></td><td>" . $row["nadi"] . "</td></tr>";
            echo "<tr><td><strong>Respirasi:</strong></td><td>" . $row["respirasi"] . "</td></tr>";
            echo "<tr><td><strong>Suhu:</strong></td><td>" . $row["suhu"] . "</td></tr>";
          }
        } else {
          echo "<tr><td colspan='2'>Tidak ada data ditemukan.</td></tr>";
        }
        $conn->close();
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
