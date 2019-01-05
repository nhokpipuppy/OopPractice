<?php
include('TakeCode.php');
class VnExpress extends TakeCode
{
    private $__search1 = 'class="title_news_detail mb10"';
    private $__search2 = '</article>';
    private $__search3 = '>';
    private $__search4 = '<p class="Normal">';
    
    private function __deleteGarbage() {
        $b = parent::takeCodeWebsite();
        // xóa đoạn code bên trên tiêu đề
        $c = parent::deleteBefore($this->__search1, $b);
        // xóa đoạn code bên dưới nội dung
        $e = parent::deleteAfter($this->__search2, $c);
        return $e;
    }

    public function takeTitle()
    {
        $f = parent::deleteBefore($this->__search3, $this->__deleteGarbage());
        return strip_tags($f);
    }

    public function takeContent()
    {
        $g = explode($this->__search4,$this->__deleteGarbage());
        // bỏ phần chú thíc giữa nội dung và tiêu đề
        unset($g[0]);
        $gString = implode(' ',$g);
        return strip_tags($gString);
    }
}
?>