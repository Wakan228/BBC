<?php 
echo  "1";
$messege = "Name : ".$_POST["name"]."\n Surname : ".$_POST["surename"]."\n Email : ".$_POST["email"]."\n Phone : ".$_POST["phone"];
mail("cmetanactborogom2281337@gmail.com", "@#BBC", $messege);

header('Location: http://zadanie1/index.php');
 ?>