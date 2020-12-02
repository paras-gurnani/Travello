<?php
include("header.php");
if(isset($_GET["page"]))
{
    $page = $_GET["page"];
    if($page=="home")
    {
        include("index1.php");
    }
    elseif($page=="about")
    {
        include("about.php");
    }
    elseif($page=="contacts")
    {
        include("contact.php");
    }
    elseif($page=="about")
    {
        include("about.php");
    }
}
else{
    include("index1.php");
}

include("footer.php");



?>