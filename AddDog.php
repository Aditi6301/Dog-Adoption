<?php
include('LoginProcess.php');
echo $_SESSION["user_id"];

if(isset($_POST['Add_title']))
{
    echo "hello";
    $user_id= $_SESSION["user_id"];
    echo  $user_id; 
    $name=$_POST['name'];
    $age=$_POST['age'];
    $description=$_POST['description'];
    $breed=$_POST['breed'];
    $folder ="uploads/"; 

    $uploads_dir = "uploads/";

    echo $_FILES["image"]["name"]; 
    echo $_FILES["image"]["size"];
    echo $_FILES["image"]["type"];
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
        Header( 'Location: adoption.php');
    //   echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
     
     }
     else{
        //  move_uploaded_file( $_FILES['image'] ['tmp_name'], $path); 
        while(is_file($uploads_dir.'/'.$pname)) {
        $increment++;
        $pname = $name . $increment . '.' . $extension;
     }
     move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    $sql=$conn->prepare("INSERT INTO `adoptionpup`(`user_id`,`pup_id`,`name`,`age`,`description`,`image`,`breed`) VALUES ('$user_id',NULL,'$name','$age','$description','$pname','$breed')");
    $result=$sql->execute() or die($conn->error);
    if($result)
    {
        // $_SESSION['titlesuccess']=1;
        // Header( 'Location: adoption.php');
    }
    else
    {
        // $_SESSION['titlesuccess']=0;
        // Header( 'Location: adoption.php');
    }
    

}

       
}





?>