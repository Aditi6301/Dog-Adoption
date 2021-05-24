<?php 
include('../LoginProcess.php');
echo 'DayCare Mail';

$user_id=$_SESSION['user_id'];
$daycare_id=$_GET['daycare_id'];

$sql=$conn->prepare("SELECT email,name from daycare where daycare_id='$daycare_id'");
$sql->execute();

if($sql->rowCount()>0)  //email found
{
   while($DaycareInfo = $sql->fetch())
   {
      $daycare_email=$DaycareInfo['email'];
      $daycare_name=$DaycareInfo['name'];

  }
}

$sql=$conn->prepare("SELECT * from users where user_id='$user_id'");
$sql->execute();

if($sql->rowCount()>0)  //email found
{
   while($UserInfo = $sql->fetch())
   {
      $user_fname=$UserInfo['first_name'];
      $user_lname=$UserInfo['last_name'];
      $user_email=$UserInfo['email'];
      $user_mobile=$UserInfo['mobile'];
  }
}
$UserName=$user_fname.' '.$user_lname;

   $to =$daycare_email; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
   $email_subject = "Details of interested customer:";

   $email_body = " $UserName is interested in your Daycare!\n\n"."You may contact using the details given below to take care of their furball:\n\nName: $UserName\n\nEmail: $user_email\n\nPhone: $user_mobile\n\n"."You can contact this customer directly by replying back to this email!";
   $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
   $headers .= "Reply-To:$user_email\n"; //reply to customer
   if(mail($to,$email_subject,$email_body,$headers))
   {
      $_SESSION['mailsuccess']=1;
      Header('Location: ../daycare.php' );
   }
   else
   {
      $_SESSION['mailsuccess']=0;
      Header('Location: ../daycare.php' );
   }
   echo " hi there";


   return true;







?>