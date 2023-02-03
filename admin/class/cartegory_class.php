<?php
include "Database.php";
?>
<?php
class cartegory{
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }

    public function insert_cartegory($ten_clb){
        $query = "INSERT INTO tbl_clb (ten_clb) VALUES ('$ten_clb')";
        $result = $this ->db ->insert($query);
        // header('location:cartegorylist.php');
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_clb ORDER BY ma_clb DESC";
        $result = $this ->db ->select($query);
        return $result;
    }
    public function get_cartegory($ma_clb){
        $query = "SELECT * FROM tbl_clb WHERE ma_clb = '$ma_clb'";
        $result = $this ->db ->select($query);
        return $result;
    }
    public function update_cartegory($ten_clb,$ma_clb){
        $query = "UPDATE tbl_clb SET ten_clb = '$ten_clb' WHERE ma_clb = '$ma_clb' ";
        $result = $this ->db ->update($query);
        header('location:cartegorylist.php');
        return $result;
    }
    public function delete_cartegory($ma_clb){
        $query = "DELETE FROM tbl_clb WHERE ma_clb = '$ma_clb' ";
        $result = $this ->db ->delete($query);
        header('location:cartegorylist.php');
        return $result;
    }
}
?>