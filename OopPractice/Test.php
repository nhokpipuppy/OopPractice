
<?php
include('__autoload.php');
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

// TEST CLASS VNEXPRESS
// $a = new VnExpress();
// $a->url = 'https://vnexpress.net/the-gioi/my-canh-bao-cong-dan-than-trong-khi-toi-trung-quoc-3863310.html';
// var_dump($a->takeTitle()) ;
// echo '<br>';
// $content = $a->takeContent();
// // $content = str_replace('<p', ' ', $content);

// var_dump($content) ;
// $title = $a->takeTitle();

// $content = $a->takeContent();

// $data = array(
//     'Title'=> $title,
//     'Content'=> $content,
// );

// $b = new DB_driver();
// $b->insert('data', $data);
// TEST CLASS VIETNAMNET
function deleteAfter($search, $content)
        {
            $result = explode($search, $content);
            return $result[0];
        }

function deleteBefore($search, $content)
        {
            $result = explode($search, $content);
            return $result[1];
        }

$a = new VietnamNet();
$a->url = 'https://vietnamnet.vn/vn/giai-tri/the-gioi-sao/nhan-sac-that-cua-cac-hoa-hau-viet-khi-khong-son-phan-499272.html';
var_dump($a->takeTitle()) ;
echo '<br>';
$content = $a->takeContent();
// $content = str_replace('<p', ' ', $content);
// $content = deleteBefore('alt="" />', $content);
// $content = deleteBefore('</p>', $content);
// $content = deleteAfter('<p class="t-j">', $content);
var_dump($content);
// var_dump(strip_tags($content)) ;
// $delete = deleteBefore('class="article-relate"', $content);
// $delete = deleteAfter('class="t-j"', $delete);
// var_dump($delete) ;
?>
