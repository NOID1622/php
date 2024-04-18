<?php
    // kode anda
    include "koneksi.php";
    $sql = "DELETE FROM stockBarang WHERE idBarang ='".$_GET['id']."'";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "Berhasil Menhapus data";
        header("Location: index.php");
    }else{
        echo "Gagal Menhapus Data";
        
    }
    $conn->close();
    
?>
