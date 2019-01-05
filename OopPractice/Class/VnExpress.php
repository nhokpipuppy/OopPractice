<?php
include('TakeCode.php');
class VnExpress extends TakeCode
{
    private $search1 = 'class="title_news_detail mb10"';
    private $search2 = '</article>';
    private $search3 = '>';
    private $search4 = '<p class="Normal">';
    private $search5 = '<table';
    private $search6 = '/table>';
    
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
        return strip_tags($f);
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
            return strip_tags($gString);
        }
        return strip_tags($gString);
    }
}
?>