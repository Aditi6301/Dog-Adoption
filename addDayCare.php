<?php
include('LoginProcess.php');
if(isset($_POST['Add_DayCare']))
{
    // echo "hello";
    $user_id= $_SESSION["user_id"];
    $Name=$_POST['Name'];
    $description=$_POST['Description'];
    $address=$_POST['Address'];
    $email=$_POST['Email'];
    $phone_no=$_POST['Number'];
    $folder ="uploads/"; 

    $uploads_dir = "uploads/";

    // echo $_FILES["image"]["name"]; 
    // echo $_FILES["image"]["size"];
    // echo $_FILES["image"]["type"];
    $pname = $_FILES["image"]["name"]; 
    $tname=$_FILES["image"]["tmp_name"];
    $allowed=array('jpeg','png' ,'jpg',NULL);
    $name = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
  
     $increment = 0; 
     $pname = $name . '.' . $extension;
     if(!in_array($extension,$allowed) ) 
    
     { 
        $_SESSION['invalidImage']=1;
        Header( 'Location: daycare.php');
    //   echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
     
     }
     else{
        //  move_uploaded_file( $_FILES['image'] ['tmp_name'], $path); 
        while(is_file($uploads_dir.'/'.$pname)) {
        $increment++;
        $pname = $name . $increment . '.' . $extension;
     }
     move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    $sql=$conn->prepare("INSERT INTO `daycare`(`daycare_id`, `user_id`, `name`, `description`, `address`, `email`, `phone_no`, `image`)  VALUES (NULL,'$user_id','$Name','$description','$address','$email','$phone_no','$pname')");
    $result=$sql->execute() or die($conn->error);
    if($result)
    {
        // $_SESSION['titlesuccess']=1;
         Header( 'Location: daycare.php?daycare=1');
    }
    else
    {
        // $_SESSION['titlesuccess']=0;
         Header( 'Location: daycare.php?daycare=0');
    }
    

}

       
}





?>