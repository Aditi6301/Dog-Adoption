<?php
include('dbConn.php');
$email="";
$password="";
session_start();
if(isset($_POST['LoginUser']))
{

    $email=$_POST['Email'];
    $password=$_POST['password'];
    $getPassword=$conn->prepare("SELECT * FROM users  WHERE Email= ? LIMIT 1");
    $getPassword->bindValue(1,$email);
    $getPassword->execute();
    if($getPassword->rowCount()>0)  //email found
    {

        
        while($row = $getPassword->fetch())
        {
           
             if(password_verify($password,$row['password']))
            {
                
                $_SESSION["loggedin"] = true;
                $_SESSION["user_id"] = $row['user_id'];
                $_SESSION["email"] = $email;
                echo $_SESSION["user_id"];
            
                //on session creation
                $_SESSION['timestamp']=time();
                 Header('Location: index.html' );
                
            }
            else
            {
                // $_SESSION['loginsuccess']=0;
                Header('Location: login.php?loginsuccess=0' );
            }
        }
        
    }
    else
    {
        Header('Location: login.php?nouser=1');
    }
    

}

?>