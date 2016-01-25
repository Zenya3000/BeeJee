<?php

namespace components\view;

use system\View;

class Main extends View{
    public function MainPage($comments, $modalComment = "")
    {

        $this->loadHead();
        $this->loadMenu();
        include_once "pages/comment.php";
        $this->loadFooter();
    }
}
