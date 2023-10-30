<div class="col l-2 m-0 c-0">
    <nav class="category">
        <h3 class="category__heading">
            <i class="category__heading-icon fa-solid fa-list-ul"></i>
            Danh Mục
        </h3>

    <?php
        if(isset($_GET['danhmuc'])){
            $tam = $_GET['danhmuc'];
        }
        else {$tam = '1';}
    ?>
        <ul class="category-list">
            <?php 
                $sql_hienthi_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
                $query_hienthi_danhmucsp = mysqli_query($mysqli, $sql_hienthi_danhmucsp);
                $i = 0;
                while($row = mysqli_fetch_array($query_hienthi_danhmucsp)) {
                    $i++;
            ?>
            <li class="category-item <?php 
            if ($tam == $row['id_danhmuc']) echo 'category-item--active'
            ?>">
                <a href="index.php?danhmuc=<?php echo $row['id_danhmuc'] ?>" class="category-item__link"><?php echo $row['tendanhmuc'] ?></a>
            </li>
            <?php } ?>
        </ul>
    </nav>
</div>