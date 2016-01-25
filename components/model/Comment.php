<?php

namespace components\model;

use system\Model;

class Comment extends Model{
    public  function getAllComments($id = "s_date"){

        $sql = "SELECT * FROM `comments`";
        if($id){
            if($id == "s_name"){
                $sql.= " ORDER BY `comments`.`name`";
            } else if ($id == "s_email"){
                $sql.= " ORDER BY `comments`.`email`";
            } else if ($id == "s_date"){
                $sql.= " ORDER BY `comments`.`date`";
            }
        }
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        while($row = $query->fetch(\PDO::FETCH_ASSOC)){
            $comments[] = $row;
        };


        return $comments;
    }
    public function addComment(){
        if(empty ($_POST['name']) or empty($_POST['email']) or empty($_POST['message'])){
            die();
        } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $date = $_POST['date'];


        $sql = "INSERT INTO `beejee`.`comments` (`id`, `name`, `email`, `date`, `message`) VALUES (NULL, :name, :email, :date, :message)";
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(":name", $name);
        $query->bindParam(":email", $email);
        $query->bindParam(":date", $date);
        $query->bindParam(":message", $message);
        $query->execute();
        }

    }

    public function modalComment(){

    }
    public function sortComment() {
        if($_POST['sort_id']){
            $id = strip_tags($_POST['sort_id']);

            $sql = "SELECT * FROM `comments`";

                if($id == "s_name"){
                    $sql.= " ORDER BY `comments`.`name`";
                } else if ($id == "s_email"){
                    $sql.= " ORDER BY `comments`.`email`";
                } else if ($id == "s_date"){
                    $sql.= " ORDER BY `comments`.`date`";
                }

            $query = $this->db->pdo->prepare($sql);
            $query->execute();
            while($row = $query->fetch(\PDO::FETCH_ASSOC)){
                $sortComment[] = $row;


            };



            foreach ($sortComment as $row){

                printf('<div class="box_comment"><li><strong>%s</strong></li>
                        <li>%s</li>
                        <li>%s</li>
                        <li class="hidden">%s</li>
                        <p>%s</p></div>',
                    $row['name'], $row['email'], $row['date'], $row['id'], $row['message']);

            }

        } else {
            echo 'goodbye';
            exit;
        }

        exit();
    }
}