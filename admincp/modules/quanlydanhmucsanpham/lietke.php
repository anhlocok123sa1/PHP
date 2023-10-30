<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>

<table style='width:100%' border="1" cellspacing="0" cellpadding="0">
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Thứ tự</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
        $i++;
    ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $row['tendanhmuc']?></td>
        <td><?php echo $row['thutu']?></td>
        <td><a href="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a>|<a href="modules/quanlydanhmucsanpham/sua.php?query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>&tendanhmuc=<?php echo $row['tendanhmuc'] ?>&thutu=<?php echo $row['thutu'] ?>">Sửa</a></td>
    </tr>
    <?php
    }
    ?>
</table>