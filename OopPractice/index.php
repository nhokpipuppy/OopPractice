<?php
    include('__autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .link tr td {
            padding:5px 20px;
        }
        td {
            padding:5px 10px;
           
        }
        input[type="text"] {
            background: lightblue;
            outline: none;
            border: 1px solid #64a7bd;
            padding: 5px;
            border-radius: 7px;
            width: 430px;
        }
        input[type="submit"] {
            border: 1px solid red;
            padding: 5px;
            border-radius: 6px;
            background: #dc1b1b;
            color: white;
            cursor: pointer;
        }
        .show_data {
            width:700px;
            margin:auto;
           margin-top:20px;
        }

    </style>
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

<form action="" method="post" style="margin-top:20px;text-align:center;" accept-charset="ISO-8859-1">
    <input type="text" style={background:red} name='link' placeholder='Nhập url VnExpress tại đây' >
    <input type="submit" name='submit' value='Tách Dữ liệu'>
</form>



<?php
 if (isset($_POST['submit'])){
     $a = $_POST['link'];
     $b = strpos($a, 'https://vnexpress.net/');
    if ($b === false) {
        $b = strpos($a, 'https://vietnamnet.vn/');
        if ($b === false) {
            echo '<span style="color:red;font-weight:bold">Link bạn nhập không hợp lệ. Bạn phải nhập link từ trang 2 trang vnexpress.net và vietnamnet.vn</span>';
        } else {
            $c = new VietnamNet();
            $c -> url = $a;
            // gán giá trị cho các biến title và content
            $title = $c -> takeTitle();
            $content = $c -> takeContent();
            $data = array(
                'Title'   => $title,
                'Content' => $content,
            );
            $d = new WordWithDatabase();
            $d -> insert('data_vietnamnet', $data);
            }
     } else {
        $c = new VnExpress();
        $c->url = $a;
        // gán giá trị cho các biến title và content
        $title = $c->takeTitle();
        $content = $c->takeContent();
        $data = array(
            'Title'   => $title,
            'Content' => $content,
        );
        // var_dump($content);
        $d = new WordWithDatabase();
        $d->insert('data_vnexpress', $data);
            }
    } 
 



?>

<table class="show_data" border='1' style="border-collapse:collapse">
    <tr style="text-align:center;font-size:25px;font-weight:bold;">
        <td colspan='3'>Data VietnamNet </td>
    </tr>
    <tr style="text-align:center;">
        <td >ID</td>
        <td >Title</td>
        <td>Content</td>
    </tr>
    <?php
         $e = new WordWithDatabase();
         $sql1 = 'SELECT * FROM data_vietnamnet';
         $e->getList($sql1);
         foreach($e->getList($sql1) as $key=>$value)
         {
             echo '<tr>';
             echo "<td>".$value['Id']."</td>";
             echo "<td>".$value['Title']."</td>";
             echo "<td><a href=\"ShowContent.php?id=".$value['Id']."\">Show Content</a></td></tr>";
         }
    ?>
</table>

<table class="show_data" border='1' style="border-collapse:collapse">
    <tr style="text-align:center;font-size:25px;font-weight:bold;">
        <td colspan='3'>Data VnExpress </td>
    </tr>
    <tr style="text-align:center;">
        <td >ID</td>
        <td >Title</td>
        <td>Content</td>
    </tr>
    <?php
         $e = new WordWithDatabase();
         $sql1 = 'SELECT * FROM data_vnexpress';
         $e->getList($sql1);
         foreach($e->getList($sql1) as $key=>$value)
         {
             echo '<tr>';
             echo "<td>".$value['Id']."</td>";
             echo "<td>".$value['Title']."</td>";
             echo "<td><a href=\"ShowContent.php?id=".$value['Id']."\">Show Content</a></td></tr>";
         }
    ?>
</table>
</body>
</html>

