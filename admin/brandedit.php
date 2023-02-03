<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>
<?php
$brand = new brand;

$ma_ct = $_GET['ma_ct'];
$get_brand = $brand -> get_brand($ma_ct);
if ($get_brand) {
    $resultA = $get_brand -> fetch_assoc();
}
?>
<!--  -->
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $ma_clb= $_POST['ma_clb'];
    $ma_ct = $_POST['ma_ct'];
    $ten_ct = $_POST['ten_ct'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $que_quan = $_POST['que_quan'];
    $update_brand = $brand -> update_brand($ma_clb,$ma_ct,$ten_ct,$ngay_sinh,$que_quan);
}
?>

<style>
    select{
        margin-top: 20px;
        height: 30px;
        width: 200px;
    }
</style>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Sửa Cầu Thủ</h1>
                <form action="" method="POST">
                    <label for="">Nhập tên cầu thủ <span class="saodo" >*</span></label>
                    <input type="text" placeholder="Nhập tên cầu thủ" name="ten_ct">
                    <label for="">Ngày tháng năm sinh <span class="saodo" >*</span></label>
                    <input type="datetime-local" name="ngay_sinh" >
                    <label for="">Nhập quê quán <span class="saodo" >*</span></label>
                    <input type="text" name="que_quan" >
                    <label for="">Chọn câu lạc bộ <span class="saodo" >*</span></label>
                    <select name="ma_clb" id="">
                        <option value="#">-- Chọn Danh Mục</option>
                        <?php
                        $show_cartegory = $brand ->show_cartegory();
                        if($show_cartegory){while($result = $show_cartegory -> fetch_assoc()){

                        ?>
                        <option <?php if($resultA['ma_clb']==$result['ma_clb']) {echo "SELECTED";} ?> 
                        value="<?php echo $result['ma_clb']?>"><?php echo $result['ten_clb']?></option>
                        <?php
                            }
                        }
                        ?>
                    </select> <br>
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>