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
}



class VnExpress extends Total
{
    public $search1 = 'class="title_news_detail mb10"';
    public $search2 = '</article>';
    public $search3 = '>';
    public $search4 = '<p class="Normal">';
    public $search5 = '<table';
    public $search6 = '/table>';
    
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
    public function deleteGarbage() {
        
        $b = parent::takeCodeWebsite();
        // xóa đoạn code bên trên tiêu đề
        $c = $this->deleteBefore($this->search1, $b);
        // xóa đoạn code bên dưới nội dung
        $e = $this->deleteAfter($this->search2, $c);
        // Lấy tiêu đề
        return $e;
    }

    public function takeTitle()
    {
        $f = $this->deleteBefore($this->search3, $this->deleteGarbage());
        return $f;
    }

    public function takeContent()
    {
        $g = explode($this->search4,$this->deleteGarbage());
        // bỏ phần chú thíc giữa nội dung và tiêu đề
        unset($g[0]);
        $gString = implode(' ',$g);
        // Xóa ảnh trong phần nội dung
        $h = $this->deleteBefore($this->search5, $gString);
        $h = $this->deleteAfter($this->search6,$h);
        // xóa 1 vài chi tiết phụ 
        $gString = str_replace( $h,' ', $gString);
        return $gString;
    }
}
$a = new VnExpress();
$a->url = 'https://vnexpress.net/thoi-su/bo-quoc-phong-sap-xep-lai-hang-loat-don-vi-3863006.html';
echo $a->takeTitle();
echo $a->takeContent();
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
// var_dump($gString) ;
?>