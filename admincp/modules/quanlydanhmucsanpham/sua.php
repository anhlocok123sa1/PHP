<?php
    include("../../config/config.php");
    $id = $_GET['iddanhmuc'];
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc=$id ";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>
<p>Sửa danh mục sản phẩm</p>
<form method="post" action='xuly.php'>
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td>Tên danh mục: </td>
            <td><input type="text" name="tendanhmuc" value='<?php echo $_GET['tendanhmuc'] ?>'></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" name="thutu" value='<?php echo $_GET['thutu'] ?>'></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name='suadanhmuc' value="Sửa"></td>
        </tr>
    </table>
    <input type="hidden" name="iddanhmuc" value='<?php echo $_GET['iddanhmuc'] ?>'>
</form>