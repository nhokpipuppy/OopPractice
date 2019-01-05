<?php
include('TakeCode.php');
class VietnamNet extends TakeCode
{
    private $__search1 = 'class="title f-22 c-3e">';
    private $__search2 = '<div class="inner-article"';
    private $__search3 = '</h1>';

    private function __deleteGarbage() {
        $b = parent::takeCodeWebsite();
        // xóa đoạn code bên trên tiêu đề
        $c = parent::deleteBefore($this->__search1, $b);
        // xóa đoạn code bên dưới nội dung
        $c = parent::deleteAfter($this->__search2, $c);
        return $c;
    }

    public function takeTitle()
    {
        $f = parent::deleteAfter($this->__search3, $this->__deleteGarbage());
        return strip_tags($f);
    }

    public function takeContent()
    {   
        $gString = str_replace( $this->takeTitle(),' ', $this->__deleteGarbage());
        $gString = parent::deleteBefore('class="ArticleContent">', $gString);
        return strip_tags($gString);
    }
}
?>