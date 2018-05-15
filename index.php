<?php 
  include 'includes/Connection.inc.php';
  include 'includes/Posts.inc.php';
  include 'includes/ViewPosts.inc.php';

?>
<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>

<h1> Mini Calculator </h1>
            <form action="processing/process.php" method="POST">
                <input type="text" name="first_number" placeholder="First number"/> 
                <br/>
                <br/>
                <input type="text" name="second_number" placeholder="Second number" /> 
                <br/>
                <br/>
                <select name="operation">
                      <option value="add">Add </option>
                      <option value="subtract">Subtract </option>
                      <option value="multiply">Multiply </option>
                      <option value="divide">Divide </option>
                </select>
                <br/>
                <br/>
                <input type="submit" value="Calculate" name="submit" />

  
            </form> 

<?php 

    $posts = new ViewPosts;

    $posts->displayPosts();

?>


    <body>

    </html>