<?php
class Total
{
    public $url;
    public function takeCodeWebsite()
    {
        $ch = curl_init();
        // Cấu hình cho CURL
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // Thực thi CURL
        $result =curl_exec($ch);
        // Ngắt CURL, giải phóng
        curl_close($ch);
        // Trả về code
        return $result;
    }
    public function deleteAfter($search, $content)
        {
            $result = explode($search, $content);
            return $result[0];
        }

    public function deleteBefore($search, $content)
        {
            $result = explode($search, $content);
            return $result[1];
        }
}

class VnExpress extends Total
{
    public $search1 = 'class="title_news_detail mb10"';
    public $search2 = '</article>';
    public $search3 = '>';
    public $search4 = '<p class="Normal">';
    public $search5 = '<table';
    public $search6 = '/table>';
    
    
    public function deleteGarbage() {
        
        $b = parent::takeCodeWebsite();
        // xóa đoạn code bên trên tiêu đề
        $c = parent::deleteBefore($this->search1, $b);
        // xóa đoạn code bên dưới nội dung
        $e = parent::deleteAfter($this->search2, $c);
        // Lấy tiêu đề
        return $e;
    }

    public function takeTitle()
    {
        $f = parent::deleteBefore($this->search3, $this->deleteGarbage());
        return $f;
    }

    public function takeContent()
    {
        $g = explode($this->search4,$this->deleteGarbage());
        // bỏ phần chú thíc giữa nội dung và tiêu đề
        unset($g[0]);
        $gString = implode(' ',$g);
        // Xóa ảnh trong phần nội dung
        if (strpos($gString,$this->search5)) {
            $h = parent::deleteBefore($this->search5, $gString);
            $h = parent::deleteAfter($this->search6,$h);
            // xóa 1 vài chi tiết phụ 
            $gString = str_replace( $h,' ', $gString);
            return $gString;
        }
        
        return $gString;
    }
}

class VietnamNet extends Total 
{
    
    public $search1 = 'class="title f-22 c-3e">';
    public $search2 = '<div class="inner-article"';
    public $search3 = '</h1>';

    public function deleteGarbage() {
        
        $b = parent::takeCodeWebsite();
        // xóa đoạn code bên trên tiêu đề
        $c = parent::deleteBefore($this->search1, $b);
        // xóa đoạn code bên dưới nội dung
        $c = parent::deleteAfter($this->search2, $c);
        // Lấy tiêu đề
        return $c;
    }

    public function takeTitle()
    {
        $f = parent::deleteAfter($this->search3, $this->deleteGarbage());
        return $f;
    }

    public function takeContent()
    {
        $gString = str_replace( $this->takeTitle(),' ', $this->deleteGarbage());
        return $gString;
    }

}

// $a = new VietnamNet();
// $a->url = 'https://vietnamnet.vn/vn/thoi-su/chinh-tri/cong-an-phai-luon-giu-minh-trong-sach-vung-vang-khong-bi-sa-nga-499400.html';
// echo $a->takeTitle();
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