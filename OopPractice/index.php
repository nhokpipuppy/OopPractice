<?php
    include('__autoload.php');
    include('Action/Function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./Css/CssIndex.css?v=<?php echo time()?>">
</head>
<body>
<table class="link" border="1" style="border-collapse:collapse; width:900px;margin:auto">
    <tr>
         <td style=" text-align:center; font-weight:bold; font-size:20px; color: blue;">Một số link test tham khảo</td>
    </tr>
    <tr>
         <td>https://vietnamnet.vn/vn/thoi-su/chinh-tri/giam-doc-so-gtvt-tp-hcm-duoc-bo-nhiem-lam-truong-ban-quan-ly-duong-sat-do-thi-499478.html</td>
    </tr>
    <tr>
         <td>https://vietnamnet.vn/vn/thoi-su/ha-noi-doi-xay-nha-cao-tang-vuot-quy-dinh-tren-dat-vang-sat-ho-guom-499607.html</td>
    </tr>
    <tr>
         <td>https://vietnamnet.vn/vn/giai-tri/nhac/huong-tram-doi-dau-voi-erik-justatee-tai-zing-music-awards-499456.html</td>
    </tr>
    <tr>
         <td>https://vnexpress.net/thoi-su/ong-bui-xuan-cuong-quay-lai-lam-truong-ban-quan-ly-duong-sat-do-thi-tp-hcm-3863288.html</td>
    </tr>
    <tr>
         <td>https://vnexpress.net/kinh-doanh/chung-khoan-my-lao-doc-vi-apple-3863326.html</td>
    </tr>
    <tr>
         <td>https://vnexpress.net/the-gioi/my-canh-bao-cong-dan-than-trong-khi-toi-trung-quoc-3863310.html</td>
    </tr>
</table>

<form action="" method="post" style="margin-top:20px;text-align:center;" >
    <input type="text" style={background:red} name='link' placeholder='Nhập url tại đây' >
    <input type="submit" name='submit' value='Tách Dữ liệu'>
</form>
<?php

 if (isset($_POST['submit'])){
     $a = $_POST['link'];
     $b = strpos($a, 'https://vnexpress.net/');
    if ($b === false) {
        $b = strpos($a, 'https://vietnamnet.vn/');
        if ($b === false) {
            echo '<span>Link bạn nhập không hợp lệ. Bạn phải nhập link từ 2 trang vnexpress.net và vietnamnet.vn</span>';
        } else {
            echo insertData('data_vietnamnet', 'VietnamNet');
            }
     } else {
        echo insertData('data_vnexpress', 'VnExpress');
            }
    } ;
    showData('data_vietnamnet', 'Data VietnamNet');
    showData('data_vnexpress', 'Data VnExpress');
?>
</body>
</html>
