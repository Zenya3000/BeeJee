<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 06.12.15
 * Time: 23:34
 */




namespace components\view;


use system\View;

class Users extends View {
    public function successComment()
    {

        $this->loadHead();
        $this->loadMenu();
        include_once "pages/successComment.php";
        $this->loadFooter();
    }
} 