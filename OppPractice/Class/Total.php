<?php
class Total
{
    public $url;
    
    protected function takeCodeWebsite()
    {
        $ch = curl_init();
        // Config  for CURL
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // Run CURL
        $result =curl_exec($ch);
        // Stop CURL, release
        curl_close($ch);
        // return code
        return $result;
    }

    protected function deleteAfter($search, $content)
        {
            $result = explode($search, $content);
            return $result[0];
        }

    protected function deleteBefore($search, $content)
        {
            $result = explode($search, $content);
            return $result[1];
        }
}





// $a = new VietnamNet();
// $a->url = 'https://vietnamnet.vn/vn/thoi-su/chinh-tri/cong-an-phai-luon-giu-minh-trong-sach-vung-vang-khong-bi-sa-nga-499400.html';
// echo $a->takeTitle();
// $a = new VnExpress();
// $a->url = 'https://vnexpress.net/the-gioi/my-canh-bao-cong-dan-than-trong-khi-toi-trung-quoc-3863310.html';
// echo $a->takeTitle();
 
// $a = new Total();
// $a->url = 'https://vietnamnet.vn/vn/thoi-su/chinh-tri/cong-an-phai-luon-giu-minh-trong-sach-vung-vang-khong-bi-sa-nga-499400.html';
// $b = $a->takeCodeWebsite();
// $c = deleteBefore('class="title f-22 c-3e">', $b);
// // var_dump($c);
// $c = deleteAfter('<div class="inner-article"',$c);
// // var_dump($c);
// // lấy tiêu đề trang
// $f = deleteAfter('</h1>', $c);
// var_dump($f);
// $c = str_replace( $f,' ', $c);

// $c = explode('<p>',$c);
// unset($c[0]);
// // foreach($c as $key => $value){
// //     echo $key.'='.htmlentities($value);
// //     // $value = deleteAfter('</p>', $value);
// // }
// $c = explode('<a href', $c);
// for ($i = 0;$i < count($c); $i++){
//      $c[$i] = deleteAfter('</a>', $c[$i]);
// }
// var_dump($c);

?>