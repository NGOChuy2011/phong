<?php
include "Database.php";
?>
<?php
class brand{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    public function insert_brand($ten_ct,$ngay_sinh,$que_quan,$ten_clb){
        $query = "INSERT INTO tbl_cauthu (ten_ct,ngay_sinh,que_quan,ma_clb) VALUES ('$ten_ct','$ngay_sinh','$que_quan','$ten_clb')";
        $result = $this ->db ->insert($query);
        header('location:brandlist.php');
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_clb ORDER BY ma_clb DESC";
        $result = $this ->db ->select($query);
        return $result;
    }
    public function show_brand(){
        $query = "SELECT * FROM tbl_cauthu";
        $result = $this ->db ->select($query);
        return $result;
    }
    // public function show_brand(){
    //     // $query = "SELECT * FROM tbl_cauthu ORDER BY ma_ct DESC";
    //     $query = "SELECT tbl_cauthu.*, tbl_clb.ten_clb 
    //     FROM tbl_cauthu INNER JOIN tbl_clb ON tbl_cauthu.ma_clb = tbl_clb.ma_clb
    //     ORDER BY tbl_cauthu.ma_ct DESC";
    //     $result = $this ->db ->select($query);
    //     return $result;
    // }
    public function get_brand($ma_ct){
        $query = "SELECT * FROM tbl_cauthu WHERE ma_ct = '$ma_ct'";
        $result = $this ->db ->select($query);
        return $result;
    }
    public function update_brand($ma_clb,$ten_ct,$ma_ct){
        $query = "UPDATE tbl_cauthu SET ten_ct = '$ten_ct',ma_clb = '$ma_clb' WHERE ma_ct = '$ma_ct' ";
        $result = $this ->db ->update($query);
        header('location:brandlist.php');
        return $result;
    }
    public function delete_brand($ma_ct){
        $query = "DELETE FROM tbl_cauthu WHERE ma_ct = '$ma_ct' ";
        $result = $this ->db ->delete($query);
        header('location:brandlist.php');
        return $result;
    }
}
?>












