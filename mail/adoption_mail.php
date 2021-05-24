<?php

include('../LoginProcess.php');
echo "Mail";

$pup_id=$_GET['pup_id'];
$tosend_user_id=$_SESSION["user_id"];
$tosend_email=$_SESSION["email"];
$nm=$conn->prepare("SELECT first_name,last_name from users where user_id='$tosend_user_id'");
$nm->execute();

if($nm->rowCount()>0)  //email found
{
   while($Username = $nm->fetch())
   {
      $first_name=$Username['first_name'];
      $last_name=$Username['last_name'];

  }
}
$sql=$conn->prepare("SELECT user_id,name from adoptionpup where pup_id='$pup_id'");
// $sql=$conn->prepare("SELECT users.user_id,users.first_name, users.mobile, users.email, adoptionpup.pup_id FROM users INNER JOIN adoptionpup ON adoptionpup.user_id=users.user_id ");

$sql->execute();

if($sql->rowCount()>0)  //email found
{
   while($UserInfo = $sql->fetch())
   {
      $user_id=$UserInfo['user_id'];
      $pupName=$UserInfo['name'];

  }
}

echo $user_id;
echo $pup_id;
$getEmail=$conn->prepare("SELECT * FROM users  WHERE user_id= ?");
$getEmail->bindValue(1,$user_id);
$getEmail->execute();
if($getEmail->rowCount()>0)  //email found
{
   while($UserEmail = $getEmail->fetch())
   {
      $Email=$UserEmail['email'];
      $firstName=$UserEmail['first_name'];
      $lastName=$UserEmail['last_name'];
      $mobile=$UserEmail['mobile'];

  }
   $Name=$firstName.' '.$lastName;
   // $Message="./SetPassword.php?Email=$Email";



   // $Message =" $Name is interested in adopting $name and is requesting for more details";
   $to =$tosend_email; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
   $email_subject = "Adoption Details:";
   $email_body = "Thank you, $first_name $last_name for showing interest in adopting $pupName\n\n"."You may contact on the details given below for adopting this furball:\n\nName: $firstName\n\nEmail: $Email\n\nPhone: $mobile\n\n";
   $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
   $headers .= "Reply-To:$Email \n";
   if(mail($to,$email_subject,$email_body,$headers))
   {
      $_SESSION['mailsuccess']=1;
      Header('Location: ../adoption.php' );
   }
   else
   {
      $_SESSION['mailsuccess']=0;
      Header('Location: ../adoption.php' );
   }
   echo " hi there";


   return true;
}

?>
