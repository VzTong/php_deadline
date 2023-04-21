<?php
include("../include/common.php");
check_login();

$id = $_GET["id"] ?? -1;

$sql_sel = "select * from product where id_product=?"; //Chọn product có id = _____;
$sql_del = "delete from product where id_product=?"; //Xóa product có id = _____;

$data = db_select($sql_sel, [$id]);

if (empty($data)) {
    js_alert("Không có gì để xóa $id");
    js_redirect_to("/");
    die;
}

$data = $data[0];

// Xóa file ảnh
remove_file($data["img_product"]);
//Xóa trong database
db_execute($sql_del, [$id]);
js_alert("Xóa thành công");
js_redirect_to("/"); // "/" => lấy file index.php
