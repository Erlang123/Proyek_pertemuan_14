<?php include "conn.php"; session_start(); include "view_process_data.php"?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<container class="fluid-container"> 
    <!-- Sidebar -->
    <div class="sidebar"> 
        <!-- Isi dari sidebar --> 
        <span class="sidebar-title">Dashboard</span>
        <ul class="sidebar-list">
            <li class="list-item">Jumlah baris: <?php echo $jumlah_baris;?></li>
            <li class="list-item">Jumlah kolom: <?php echo $jumlah_kolom;?></li>
        </ul>
    </div>
    <div class="table-wrapper"> 
        <!-- Title Table -->
        <h2 style="padding: 0 15px;font-family: Helvetica;">Pendaftar</h2>
        <hr style="border:unset;border-bottom:solid 1px rgba(0,0,0,0.1);">
        <!-- List data -->
        <table class="table">
            <thead style="background: black; color:white;">
                <tr>
                    <td>No.</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Alamat</td>
                    <td>Agama</td>
                    <td>Asal Sekolah</td>
                    <td>Utility</td>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($_SESSION["isdatanotempty"]) && $_SESSION["isdatanotempty"] == true){
                for($var1 = 0; $var1 < count($_SESSION["datacontainer"]); $var1++){
                echo "<tr>";
                    for($var2 = 0; $var2 < count($_SESSION["datacontainer"][$var1]); $var2++){
                    echo "<td>" . $_SESSION["datacontainer"][$var1][$var2] . "</td>";
                    }
                echo "<td><a class='btn' href='data_processing.php?selector=delete&post_id=" . $_SESSION["datacontainer"][$var1][0] . "'>Delete</a><a href='update_page_admin.php?pre_id=" . $_SESSION['datacontainer'][$var1][0] . "&pre_nama=" . $_SESSION['datacontainer'][$var1][1] . "&pre_jenis_kelamin=" . $_SESSION['datacontainer'][$var1][2] . "&pre_alamat=" . $_SESSION['datacontainer'][$var1][3] . "&pre_agama=" . $_SESSION['datacontainer'][$var1][4] . "&pre_asal_sekolah=" . $_SESSION['datacontainer'][$var1][5] . "' class='btn'>Change</a>";
                echo "</tr>";
                }} else{echo "<tr><td colspan='7'>Data kosong</td></tr>";}?>
            </tbody>
        </table>
    </div>
</container>
</body>
</html>