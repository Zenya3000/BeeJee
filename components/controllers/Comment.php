<?php

namespace components\controllers;

use system\Controller;

class Comment extends Controller{

    public function index(){

    }
    public function addComment()
{

    $this->model = new \components\model\Comment();
    $lastMessage = $this->model->addComment($_POST);

    $this->view = new \components\view\Main();
    $this->view->MainPage($lastMessage);

}

    public function ModalComment(){
        $this->model = new \components\model\Comment();
        $ModalMessage = $this->model->modalComment($_POST);

        $this->view = new \components\view\Main();
        $this->view->MainPage($ModalMessage);
    }

    public function sortComment(){
        $this->model = new \components\model\Comment();
        $sortComment = $this->model->sortComment($_POST);

        $this->view = new \components\view\Main();
        $this->view->MainPage($sortComment);
    }
}