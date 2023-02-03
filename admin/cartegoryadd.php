<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $ten_clb= $_POST['ten_clb'];
    $insert_cartegory = $cartegory -> insert_cartegory($ten_clb);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm danh mục</h1>
                <form action="" method="POST">
                    <input type="text" placeholder="Nhập tên CLB" name="ten_clb">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>