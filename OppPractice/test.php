<?php
// Tạo mới một CURL
$ch = curl_init();
 
// Cấu hình cho CURL
curl_setopt($ch, CURLOPT_URL, "https://freetuts.net/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
// Thực thi CURL
$result =curl_exec($ch);
 
// Ngắt CURL, giải phóng
 curl_close($ch);
 
// In kết quả ra màn hình
$realCode = htmlentities($result);

?>