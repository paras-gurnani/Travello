

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to BDTTMS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>

    <!--Google fronts-->
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">

    <!--Google fronts End-->
    <!--Date picker Start-->
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css"/>
    <!--Date picker End-->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link href="resources/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="resources/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="resources/css/contact.css" rel="stylesheet" type="text/css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script src="js/bootstrap.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.shuffle-images.js"></script>


    <script>
        $(function () {
            $('#from_city').autocomplete({
                source: 'includes/info.php'
            });
        });
        $(function () {
            $('#to_city').autocomplete({
                source: 'includes/info.php'
            });
        });
    </script>
</head>
<body style="background-color:white">

<?php
include("includes/login.php");
?>

<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
<!--            <a class="navbar-brand" href="index.php"><img src="Images1/Bees.png" style="margin-top: -5px;"></a>-->
            <a class="navbar-brand" href="?page=home">TRAVELLO</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="?page=home" style="color:#5ABAC6; ">Home</a></li>
                
                <li><a href="?page=contacts" >Contacts</a></li>
                
                <li><a href="?page=about">About</a></li>

                <li><a href="#" data-toggle="modal" data-target="#myLogin">Login</a></li>


                

               
            </ul>
            <!-- Modal -->
        </div>
        </div>
        </div>
        </div>
    </div><!-- /.navbar-collapse -->
</nav>
