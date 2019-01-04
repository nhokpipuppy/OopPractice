<?php
    include('Class.php');
    include('DB_driver.php');
?>
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
            'Title'=> $title,
            'Content'=> $content,
        );
        $d = new DB_driver();
        $d->insert('data', $data);
            }
 }
 if (isset($_POST['submit2'])){
    $a = $_POST['linkVietnamNet'];
   $b = strpos($a, 'https://vietnamnet.vn/');
   if ($b === false) {
       echo '<span style="color:red;font-weight:bold">Link ban nhap khong phai o trang VietnamNet</span>';
   } else {
       $c = new VietnamNet();
       $c->url = $a;
       $title = $c->takeTitle();
       // echo $title;
       $content = $c->takeContent();
       // echo $content;
       $data = array(
           'Title'=> $title,
           'Content'=> $content,
       );
       $d = new DB_driver();
       $d->insert('data', $data);
           }
}
?>