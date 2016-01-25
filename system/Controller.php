<?php


namespace system;



abstract class Controller{
    protected  $model;
    protected  $view;

    abstract function index();
} 