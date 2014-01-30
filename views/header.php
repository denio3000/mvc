<?
 Session::init();
?>

<!doctype html>
<html>
 <head>
     <link rel="stylesheet" href="<? echo URL;?>public/css/style.css" />
     <script src="<? echo URL;?>public/js/jquery.js" type="text/javascript"></script>
     <script>
         $=jQuery;
         $(document).ready(function(){
             //alert('a');
         })
     </script>
 </head>
<body>
<div id="wrapper">
    <div id="logo">MVC</div>
    <div id="header">
        <a href="<? echo URL;?>/index">Home</a>
        <a href="<? echo URL;?>/about">About</a>
        <?php
            if (Session::get('loggedIn') == true){ ?>
                <a href="<? echo URL;?>dashboard/logout">Logout</a>
        <?  }else{ ?>
                 <a href="<? echo URL;?>/login">Login</a> <?
            }
        ?>

    </div>
    <hr/>
