<?php
    $host = "localhost";
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
<html>
    
    <body>
        <?php
             if(isset($_POST["customer_name"])){
                $name = $_POST["customer_name"];
                 $email= $_POST["email"];
				 $requirement= $_POST["requirement"];
                $add= $_POST["add"];
                
                $q = "INSERT INTO student(name,email,requirement, `add`) 
            VALUES('{$name}', '{$email}','{$requirement}', '{$add}')";
                if(mysql_query($q)){
                    echo "Data saved!";
                }else{
                    echo "Data not saved! ".mysql_error();
                }
            }
            
            
        ?>