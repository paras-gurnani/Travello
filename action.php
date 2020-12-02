<?php

if(isset($_GET['action'])){
    $action = $_GET['action'];
    if($action == "login")
    {
        echo 1;
    }
    elseif($action == "signup")
    {
        echo 0;
    }
}



?>