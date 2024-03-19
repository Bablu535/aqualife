<?php
    setcookie("username",$username, time()-3600,"/","",0);
    header("Location: index.html");
    
?>
