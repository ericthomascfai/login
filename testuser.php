<?php
require "User.php";
$user=new User();
$user->test($_POST["login"],$_POST["password"]);

?>