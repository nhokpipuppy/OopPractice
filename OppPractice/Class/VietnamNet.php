<?php
include('Total.php');
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
        $gString = parent::deleteBefore('class="ArticleContent">', $gString);
        return $gString;
    }
}
?>