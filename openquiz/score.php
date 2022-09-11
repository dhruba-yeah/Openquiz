<?php

  $name=$_POST["username"];
  $score=$_POST["marks"];
  

 
   include "database_connect.php";
   
  $query="INSERT INTO `quiz` (`name`,`score`) VALUES(
  '$name','$score')";

  mysqli_query($link,$query);
 
 echo '<script type="text/javascript">
           window.location = "https://openquiz.000webhostapp.com/highscores.php"
      </script>';
     

?>
   
    