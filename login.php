<?php
if(isset($_POST)) {
    $email=$_POST['email'];
    $password=$_POST['pass'];
}
else {
    $email=$_GET['email'];
    $password=$_GET['pass'];
}
echo'this is a email $email or $password' .$email." ".$password;
?>