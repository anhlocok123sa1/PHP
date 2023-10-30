<div class="app__container">
    <div class="grid wide">
        <div class="row sm-gutter app__content">
            <?php
                include("sidebar/sidebar.php");
            ?>

            <?php
                $sql_hienthi_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
                $query_hienthi_danhmucsp = mysqli_query($mysqli, $sql_hienthi_danhmucsp);
                $i = 0;
                while($row = mysqli_fetch_array($query_hienthi_danhmucsp)) {
                    $i++;
                    $path = $row['path'];
                    if(isset($_GET['danhmuc'])) {
                        $tam = $_GET['danhmuc'];
                    } else {
                        $tam = 'phukienmaytinh';
                    }
    
                    if($tam==$row['id_danhmuc']) {
                        include("main/$path");
                    }
                    
                }
            ?>
            
        </div>
    </div>
</div>