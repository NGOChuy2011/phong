<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>
<!--  -->
<?php
$brand = new brand;
$ma_ct = $_GET['ma_ct'];
$delete_brand = $brand -> delete_brand($ma_ct);
?>
