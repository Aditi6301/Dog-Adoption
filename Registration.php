<?php
include('dbConn.php');



if(isset($_POST['RegisterUser']))
{
    echo "heyy!";
    $Firstname=$_POST['FirstName'];
    $Lastname=$_POST['LastName'];
    $Email=$_POST['Email'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $Phone=$_POST['Phone'];
    
    $checkIfUnique=$conn->prepare("SELECT email FROM users WHERE Email= ?");
    $checkIfUnique->bindValue(1,$Email);
    $checkIfUnique->execute();
    if($checkIfUnique->rowCount()>0)  //similar email found
    {
        //$_SESSION['existinguser']=1;
        Header( 'Location: register.php?existing_user=1');
        
    }
    else
    {
        if ($_POST['password1']!=$_POST['password2'])
        {
            //$_SESSION['passwordmismatch']=1;
            Header( 'Location: register.php?passwordmismatch=1');
        }
        else
        {
            $hashed_password = password_hash($password1, PASSWORD_DEFAULT);
        
            $sql=$conn->prepare("INSERT INTO `users`(`first_name`,`last_name`,`email`,`password`,`mobile`) VALUES ('$Firstname','$Lastname','$Email','$hashed_password',$Phone)");
            $result=$sql->execute() or die($conn->error);
            if($result)
                {
                    //$_SESSION['accountsuccess']=1;
                    Header( 'Location: register.php?accountsuccess=1');
                }
                else
                {
                    //$_SESSION['accountsuccess']=0;
                    Header( 'Location: admin_register.php?accountsuccess=0');
                }
        }
    }
    
    



}

?>
