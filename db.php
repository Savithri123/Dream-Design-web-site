

<?php


    $host = "localhost";// if the port is changed 3306
    $db_name = "interior";
    $user = "root";
    $pass = "";
    
    $con = mysql_connect($host, $user, $pass);
    if(!$con){
        die("Unable to connect to DB ".mysql_error());
    }
    
    if(!mysql_select_db($db_name)){
        die("Unable to select DB ".mysql_error());
    }
?>