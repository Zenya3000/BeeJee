<?php


namespace system;


class View {
    public function loadHead()
    {

        include_once "pages/head.php";
    }

    public function loadMenu()
    {
        include_once "pages/menu.php";
    }

    public function loadFooter()
    {
        include_once "pages/footer.php";
    }
} 