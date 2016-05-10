 <?php
        include 'db.php';
        
           if(isset($_POST["customer_name"])){
                $name = $_POST["customer_name"];
                 $email= $_POST["email"];
				 $requirement= $_POST["requirement"];
                $add= $_POST["add"];
                
                $q = "INSERT INTO customer (name,email,requirement, `add`) 
            VALUES('{$name}', '{$email}', '{$requirement}','{$add}')";
                if(mysql_query($q)){
                    header("Location: contact.php?save=success");
                }else{
					echo mysql_error();
                     //header("Location: contact.php?save=Fail");
                }
            }
            
            
        ?>