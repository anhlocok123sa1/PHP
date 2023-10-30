<?php
    include("../../config/config.php");

    if(isset($_POST['themdanhmuc'])) {
        $tenloaisp = $_POST['tendanhmuc'];
        $thutu = $_POST['thutu'];
        $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tenloaisp."','".$thutu."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../index.php?action=quanlydanhmucsanpham');
    } elseif(isset($_POST['suadanhmuc'])) {
        $tendanhmuc = $_POST['tendanhmuc'];
        $thutu = $_POST['thutu'];
        $id = $_POST['iddanhmuc'];
        $sql_sua = "UPDATE tbl_danhmuc SET tendanhmuc='$tendanhmuc',thutu='$thutu' WHERE id_danhmuc='".$id."'";
        mysqli_query($mysqli,$sql_sua);
        header('Location:../../index.php?action=quanlydanhmucsanpham');
    }elseif(isset($_GET['iddanhmuc'])) {
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucsanpham');
    }
?>
