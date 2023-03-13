<?php

if(isset($_GET["logout"])) {
    setcookie("name",$_SESSION['user'], time() - 3600, "/", "", 0);
    session_destroy();
    header("Location:index.php");
  
}
