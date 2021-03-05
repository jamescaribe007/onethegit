<?php
session_start();
if($_SESSION['username'])
{
?>
<h1><?php  echo "Logged: ".$_SESSION['username']; ?></h1>
<?php
}
else{
    header("HTTP/1.0 404 Not Found");
}
session_unset();
session_destroy();
?>