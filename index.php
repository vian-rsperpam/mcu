<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
<img src="logors.png" alt="Logo" class="logo">

    <div class="navbar">
        <a class="active" href="basic/hasil-basic.php">Hasil MCU</a>
        <a href="./basic/index.php">MCU Basic</a>
        <a href="./standart/index.php">MCU Standar</a>
        <div class="dropdown">
            <a href="index.html" class="dropbtn">Pre Employee</a>
            <div class="dropdown-content">
                <a href="./preemployee/pria/index.php">Pria</a>
                <a href="./preemployee/wanita/index.php">Wanita</a>
                <!-- Add more submenu items as needed -->
            </div>
        </div>
        <a href="./umroh/index.php">MCU Umroh</a>
        <a href="./hidup sehat/index.php">Program Hidup Sehat</a>
        <a href="./calonkaryawan/index.php">Calon Karyawan</a>
        <a href="./kartap/index.php">Karyawan Tetap</a>
        <a href="./tambahan/index.php">Tambahan</a>
        <a href="./custom/index.php">Custom</a>
        <a href="logout.php">Logout</a>
    </div>
    <h2 class="welcome-text">Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>

    <div id="current-time"></div>

<script>
    // Function to get the current time
    function getCurrentTime() {
        var now = new Date();
        var day = now.toLocaleDateString('en-US', { weekday: 'long' });
        var date = now.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
        var time = now.toLocaleTimeString('en-US', { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: false });
        return day + ', ' + date + ' ' + time;
    }

    // Update time every second
    function updateTime() {
        var currentTimeElement = document.getElementById('current-time');
        if (currentTimeElement) {
            currentTimeElement.innerHTML = getCurrentTime();
        }
    }

    // Call updateTime every second
    setInterval(updateTime, 1000);
</script>
</body>
</html>
