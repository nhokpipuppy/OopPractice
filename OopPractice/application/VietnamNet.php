<?php
include('BaseCrawler.php');
class VietnamNet extends BaseCrawler
{
    private $__search1 = 'class="title f-22 c-3e">';
    // private $__search2 = '<div class="inner-article"';
    private $__search2 = 'class="m-t-10 ArticleDateTime clearfix"';
    private $__search3 = '</h1>';

    private function __deleteGarbage() {
        $b = parent::takeCodeWebsite();
        // xóa đoạn code bên trên tiêu đề
        $b = parent::deleteBefore($this->__search1, $b);
        // if ($b == 'Error') {
        //     echo '<p class="error_link">Add data false. Url phải là link 1 bài báo trong 2 trang yêu cầu </p>';
        //     echo '<div class="back" style="text-align:center">
        //               <a href="index.php">Quay lại trang chủ</a>
        //           </div>';
        //     die();
        //     // header('location:Action/Error.php');
        // }
        // xóa đoạn code bên dưới nội dung
        $b = parent::deleteAfter($this->__search2, $b);
        // if ($b == 'Error') {
        //     echo '<p class="error_link">Add data false. Url phải là link 1 bài báo trong 2 trang yêu cầu </p>';
        //     echo '<div class="back" style="text-align:center">
        //               <a href="index.php">Quay lại trang chủ</a>
        //           </div>';
        //     die();
        //     // header('location:Action/Error.php');
        // }
        return $b;
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