<?php
include('Class.php');
include('DB_driver.php');
// $a = new Total();
// $a->url = 'https://vnexpress.net/thoi-su/bo-quoc-phong-sap-xep-lai-hang-loat-don-vi-3863006.html';
// $b=$a->takeCodeWebsite();
// $search1 = 'class="title_news_detail mb10"';
// // xóa đoạn code bên trên tiêu đề
// $c = deleteBefore($search1, $b);
// $search2 = '</article>';
// // xóa đoạn code bên dưới nội dung
// $e = deleteAfter($search2, $c);
// // Lấy tiêu đề
// $f = deleteBefore('>', $e);
// $g = explode('<p class="Normal">',$e);
// unset($g[0]);
// $gString = implode(' ',$g);
// // var_dump($gString);
// // Xóa ảnh trong phần nội dung
// $h = deleteBefore('<table', $gString);
// $h = deleteAfter('/table>',$h);
// // xóa 1 vài chi tiết phụ 
// $gString = str_replace( $h,' ', $gString);
// $gString = str_replace( '<p></p>',' ', $gString);
// echo $gString;
$a = new VietnamNet();
$a->url = 'https://vietnamnet.vn/vn/thoi-su/chinh-tri/bo-quoc-phong-khong-cat-giam-tong-cuc-chi-co-cau-lai-ben-trong-497208.html';
echo $a->takeTitle();
echo '<br>';
echo $a->takeContent();
$title = $a->takeTitle();

$content = $a->takeContent();

$data = array(
    'Title'=> $title,
    'Content'=> $content,
);

$b = new DB_driver();
$b->insert('data', $data);

?>
