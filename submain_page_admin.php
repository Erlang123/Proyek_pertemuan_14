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
        <!-- List data -->
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
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
                echo "<td><a class='btn btn-danger' href='data_processing.php?selector=delete&post_id=" . $_SESSION["datacontainer"][$var1][0] . "'>Delete</a>";
                echo "</tr>";
                }} else{echo "<tr><td colspan='7'>Data kosong</td></tr>";}?>
            </tbody>
        </table>
    </div>
</container>
</body>
</html>