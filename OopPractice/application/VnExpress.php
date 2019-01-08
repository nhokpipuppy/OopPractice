<?php
include('BaseCrawler.php');
class VnExpress extends BaseCrawler
{
    private $__search1 = 'class="title_news_detail';
    private $__search2 = 'style="text-align:right;"';
    private $__search3 = '>';
    private $__search4 = '<article class="content_detail fck_detail width_common block_ads_connect">';
    
    private function __deleteGarbage() {
        $b = parent::takeCodeWebsite();
        // xóa đoạn code bên trên tiêu đề
        $b = parent::deleteBefore($this->__search1, $b);
        $b = parent::deleteAfter($this->__search2, $b);
        return $b;
    }
    public function takeTitle()
    {
        $f = parent::deleteBefore($this->__search3, $this->__deleteGarbage());
        // echo $f;
        return strip_tags($f);
        // return $f;
    }

    public function takeContent()
    {
        // $g = explode($this->__search4,$this->__deleteGarbage());
        // // bỏ phần chú thíc giữa nội dung và tiêu đề
        // unset($g[0]);
        // $gString = implode(' ',$g);
        $g = str_replace($this->takeTitle(), ' ', $this->__deleteGarbage());
        // var_dump(htmlentities($g));
        $g = explode('>',$g,2);
        // print_r($y[1]);
        // var_dump($y);
        // // // var_dump($g[0]);
        // $z = $y[0].'>';
        // var_dump($z);
        // $count = 1;
        // $g = str_replace($z,' ', $g);
        // // echo $g;
        // echo $g[1];
        // // // $g = implode('',$g);
        return strip_tags($g[1]);
    }
}
?>