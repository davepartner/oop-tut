<?php 

class Posts extends Connection{

    protected function getAllPosts(){
        $sqlQuery = "SELECT * FROM posts";
        $result = $this->connect()->query($sqlQuery);

        //check if there were any records returned
        if($result->num_rows > 0){
             while($row = $result->fetch_assoc() ){
                $data[] = $row;
             }

             return $data;

        }
    }

    protected function createPost(){
       //
    }

}