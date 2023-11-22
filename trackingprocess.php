<?php
    include "koneksi.php";
    $username = $_REQUEST['userr'];
    $trid = $_REQUEST['trid'];
    $statuspesanan = $_REQUEST['status'];
    $tanggal = $_REQUEST['tanggal'];
    $waktu = $_REQUEST['waktu'];
    $deskripsi = $_REQUEST['deskripsi'];
    $biayaperbaikan = $_REQUEST['biayaperbaikan'];
    $biayaadmin = $_REQUEST['biayaadmin'];
    
    $status = "UPDATE transactionheader SET statuspesanan = '$statuspesanan' WHERE transactionid = '$trid'";
    $perbaikan = "UPDATE transactionheader SET biaya = '$biayaperbaikan' WHERE transactionid = '$trid'";
    $admin = "UPDATE transactionheader SET hargajasaadmin = '$biayaadmin' WHERE transactionid = '$trid'";
    $hasilstatus = mysqli_query($con, $status);
    $hasilperbaikan = mysqli_query($con, $perbaikan);
    $hasiladmin = mysqli_query($con, $admin);
    
    if ($tanggal != "0000-00-00" && $waktu != "00:00:00" && $deskripsi != ""){
        $sejarahpemesanan = "INSERT into sejarahpemesanan VALUES ('$trid', '$tanggal', '$waktu', '$deskripsi')";
        $history = mysqli_query($con, $sejarahpemesanan);
    }
    header("Location: tracking.php?userr=$username&trid=$trid");
    
?>