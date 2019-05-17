<?php
setcookie ("id",$id,time()-3600);
session_start();
session_destroy();
header("location: /mini-facebook/index.php")
?>