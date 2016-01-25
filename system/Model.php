<?php


namespace system;


abstract class Model {

    public $db;
    function __construct(){

        $this->db = Connect::getInstance();
    }
    public function getComments(){

    }
}