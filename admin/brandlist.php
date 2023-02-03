<?php

use LDAP\Result;

include "header.php";
include "slider.php";
include "class/brand_class.php";
?>
<?php
$brand = new brand;
$show_brand = $brand -> show_brand();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory_list">
                <h1>Danh Sách Cầu Thủ</h1>
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>Mã cầu thủ</th>
                        <th>Tên cầu thủ</th>
                        <th>Ngày sinh</th>
                        <th>Quê quán</th>
                        <th>Mã CLB</th>
                        <th>Tuỳ biến</th>
                    </tr>
                    <?php
                    if($show_brand){$i=0;
                        while($result = $show_brand->fetch_assoc()){$i++;
                    
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['ma_ct'] ?></td>
                        <td><?php echo $result['ten_ct'] ?></td>
                        <td><?php echo $result['ngay_sinh'] ?></td>
                        <td><?php echo $result['que_quan'] ?></td>
                        <td><?php echo $result['ma_clb'] ?></td>
                        <td><a href="brandedit.php?ma_ct=<?php echo $result['ma_ct'] ?>">Sửa</a>|<a href="branddelete.php?ma_ct=<?php echo $result['ma_ct'] ?>">Xoá</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
    
</body>
</html>