<?php 

class ViewPosts extends Posts {

    
            public function displayPosts(){
                $posts = $this->getAllPosts();

                foreach($posts as $post){
                   
                    echo "<h1>".$post['title'] . "</h1> <br/>";
                    echo $post['body'] . "<br/>";
                }
            }

}