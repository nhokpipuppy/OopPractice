<?php
    include('__autoload.php');
?>
<table border="1">
    <tr>
         <td style=" text-align:center; font-weight:bold; color: blue;">Mot so link test tham khảo</td>
    </tr>
    <tr>
         <td>https://vietnamnet.vn/vn/thoi-su/chinh-tri/giam-doc-so-gtvt-tp-hcm-duoc-bo-nhiem-lam-truong-ban-quan-ly-duong-sat-do-thi-499478.html</td>
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

<form action="" method="post">
    <input type="text" name='linkVnExpress' placeholder='Nhập url VnExpress tại đây' >
    <input type="submit" name='submit1' value='Tách Dữ liệu'>
</form>

<form action="" method="post">
    <input type="text" name='linkVietnamNet' placeholder='Nhập url VietnamNet tại đây' >
    <input type="submit" name='submit2' value='Tách Dữ liệu'>
</form>

<?php
 if (isset($_POST['submit1'])){
     $a = $_POST['linkVnExpress'];
     $b = strpos($a, 'https://vnexpress.net/');
    if ($b === false) {
        echo '<span style="color:red;font-weight:bold">Link ban nhap khong phai o trang vnexpress</span>';
    } else {
        $c = new VnExpress();
        $c->url = $a;
        $title = $c->takeTitle();
        // echo $title;
        $content = $c->takeContent();
        // echo $content;
        $data = array(
            'Title' => $title,
            'Content' => $content,
        );
        $d = new DB_driver();
        $d->insert('data_vnexpress', $data);
            }
 }

 if (isset($_POST['submit2'])) {
    $a = $_POST['linkVietnamNet'];
    $b = strpos($a, 'https://vietnamnet.vn/');
   if ($b === false) {
       echo '<span style="color:red;font-weight:bold">Link ban nhap khong phai o trang VietnamNet</span>';
   } else {
       $c = new VietnamNet();
       $c -> url = $a;
       $title = $c -> takeTitle();
       // echo $title;
       $content = $c -> takeContent();
       // echo $content;
       $data = array(
           'Title' => $title,
           'Content' => $content,
       );
       $d = new DB_driver();
       $d -> insert('data_vietnamnet', $data);
           }
}
?>