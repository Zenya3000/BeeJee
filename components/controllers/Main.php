<?php

namespace components\controllers;


use system\Controller;

class Main extends Controller{
    public function index(){

        $this->model = new \components\model\Comment();
        $comments = $this->model->getAllComments();

        $this->view = new \components\view\Main();
        $this->view->MainPage($comments);
    }

} 