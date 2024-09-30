<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MCU Preemployee Pria</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      padding: 20px;
      background: url('./bg.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Helvetica Neue', sans-serif;
      color: #333;
    }

    .card {
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border: none;
      background-color: rgba(255, 255, 255, 0.8);
      /* Slightly transparent */
    }

    .card-header {
      background-color: rgba(255, 255, 255, 0.8);
      /* Slightly transparent */
      color: #f58436;
      border-bottom: none;
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      font-weight: 600;
      border-radius: 8px 8px 0 0;
    }

    .card-header img {
      max-height: 50px;
      margin-right: 15px;
    }

    .card-body {
      padding: 30px;
    }

    .form-control {
      border-radius: 6px;
      border: 1px solid rgba(206, 212, 218, 0.5);
      /* Semi-transparent border */
      padding: 10px;
      font-size: 1rem;
    }

    .btn-success {
      border-radius: 6px;
      background-color: #28a745;
      border-color: #28a745;
      padding: 12px;
      font-size: 1rem;
      font-weight: 600;
      width: 100%;
      transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
    }

    .btn-success:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }

    .btn-cancel {
      border-radius: 6px;
      background-color: #dc3545;
      border-color: #dc3545;
      padding: 12px;
      font-size: 1rem;
      font-weight: 600;
      width: 100%;
      transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
      color: #fff;
      text-align: center;
    }

    .btn-cancel:hover {
      background-color: #c82333;
      border-color: #bd2130;
    }

    .form-section {
      margin-bottom: 25px;
    }

    .form-section h5 {
      border-bottom: 2px solid #f0f2f5;
      padding-bottom: 10px;
      margin-bottom: 20px;
      font-size: 1.5rem;
      font-weight: 500;
      color: #423f90;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <img src="./logo.png" alt="Logo">
        MCU Preemploye Pria
      </div>
      <div class="card-body">
        <form class="form-horizontal" method="post" action="simpan-data.php" id="mainForm">
          <div class="form-section">
            <h5>Identitas</h5>
            <?php include 'form/identitas.html'; ?>
          </div>
          <div class="form-section">
            <h5>Anamnesa</h5>
            <?php include 'form/anamnesa.html'; ?>
          </div>
          <div class="form-section">
            <h5>Pemeriksaan Fisik</h5>
            <?php include 'form/pemeriksaan-fisik.html'; ?>
          </div>
          <div class="form-section">
            <h5>Costovertebra</h5>
            <?php include 'form/costovertebra.html'; ?>
          </div>
          <div class="form-section">
            <?php include 'form/rka.html'; ?>
          </div>
          <div class="d-flex justify-content-between">
            <button id="submitBtn" class="btn btn-primary btn-lg btn-block mr-2" type="submit" name="action" value="print">Simpan</button>
            <a id="cancelBtn" href="../index.php" class="btn btn-secondary btn-lg">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    document.getElementById('submitBtn').addEventListener('click', function(event) {
      event.preventDefault();
      if (confirm('Apakah Anda yakin ingin menyimpan data?')) {
        document.getElementById('mainForm').submit();
      }
    });

    document.getElementById('cancelBtn').addEventListener('click', function(event) {
      event.preventDefault();
      if (confirm('Apakah Anda yakin ingin membatalkan?')) {
        window.location.href = this.href;
      }
    });
  </script>
</body>

</html>