<?php

/*
 * Thay "php_common_function" bằng tên thư mục của bạn ở htdocs
 */

// Thư mục gốc ở htdocs (đối với XAMPP)
define('ROOT_PATH', "/php_deadline/deadline");

// Thư mục chứa file asset (css/js/img)
define('ASSET_PATH', "/php_deadline/deadline/asset");

// Thư mục chứa file upload bởi admin
define('UPLOAD_PATH', "/php_deadline/deadline/upload");

// Đường dẫn đầy đủ đến thư mục hiện tại, không cần chỉnh sửa nếu dùng XAMPP
define('DOCUMENT_ROOT_PATH', $_SERVER["DOCUMENT_ROOT"]);

// Thông tin đăng nhập database
$database = [
	"host" => "localhost",
	"db" => "bt",
	"username" => "root",
	"password" => "",
];
