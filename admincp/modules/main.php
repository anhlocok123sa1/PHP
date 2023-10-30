<div class="main">
    <?php
        if(isset($_GET['action'])) {
            $tam = $_GET['action'];
        } else {
            $tam = "";
        }
        
        if($tam == 'quanlydanhmucsanpham') {
            include("modules/quanlydanhmucsanpham/them.php");
            include("modules/quanlydanhmucsanpham/lietke.php");
        } else {
            include("modules/dashboard.php");
        }
    ?>
</div>