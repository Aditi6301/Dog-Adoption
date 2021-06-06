<?php
include('addDayCare.php');
if ( isset($_SESSION['mailsuccess']) && $_SESSION['mailsuccess'] == 1 )
{
  unset($_SESSION['mailsuccess']);
?>
<div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>The DayCare will contact you soon!</strong>
    </div>
<?php
}
if ( isset($_SESSION['mailsuccess']) && $_SESSION['mailsuccess'] == 0 )
{
  unset($_SESSION['mailsuccess']);
?>
<div class="alert alert-danger" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Error occured.Please try again.</strong>
    </div>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <dcnkde></dcnkde>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DogeCare</title>


  <link href="css/agency.min.css" rel="stylesheet">
  <link href="css/adoptioncss.css" rel="stylesheet">


  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/agency.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <!-- <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
  <link rel="shortcut icon" href="https://image.shutterstock.com/image-vector/paw-prints-logo-vector-illustration-260nw-363492644.jpg" type="image/x-icon">
<link rel="icon" href="https://image.shutterstock.com/image-vector/paw-prints-logo-vector-illustration-260nw-363492644.jpg" type="image/x-icon">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-dark bg-white topbar mb-4 static-top shadow">
		<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="index.html"><img src="img/final_woof.png" style="width: 150px; height:100px; padding-top:10px"></a>


		</div>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars" style="color:#fed136"></i>
          </button>
          <ul class="navbar-nav ml-auto">
  <!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["user_name"]?></span>
      <img class="img-profile rounded-circle" src="img/dp.png">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="UserProfile.php">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Profile
      </a>
      <div class="dropdown-divider"></div>
      <!-- <a  href="logout.php" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a> -->
      <a href="adoption.php" class="dropdown-item"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Adoption</a>
      <!-- <div class="dropdown-divider"></div> -->
      <!-- <a  href="logout.php" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a> -->
      <!-- <a href="tables.php" class="dropdown-item"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Brand Records</a> -->
    
      <div class="dropdown-divider"></div>
      <!-- <a  href="logout.php" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a> -->
      <!-- <a href="login.php" class="dropdown-item"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Admin</a> -->
      <!-- <a  href="logout.php" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a> -->
      <a href="logout.php" class="dropdown-item"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
</div>
    
  </li>

</ul>



        </nav>
        <p class="mb-4"><a class="btn btn-primary btn-icon-split btn-sm" data-toggle="modal" href="#AddNewModal"> <span class="text">Add Your DayCare</span></a></p>
        <form method="post" enctype="multipart/form-data">
    <div class="portfolio-modal-lg modal fade" id="AddNewModal" tabindex="-1" role="dialog" aria-hidden="true">
 
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
        <center>
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <div class="modal-body">
               

                <ul class="list-inline">
                    
                    <div class="form-group">
                      <input type="text" name="Name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <textarea type="text" name="Description" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                    <textarea name="Address" class="form-control form-control-user" rows="4" cols="50" placeholder="Enter your address here"></textarea>

                    </div>
                    
                    
                    <div class="form-group">
                      <input type="email" name="Email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="number" name="Number" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Contact Number">
                    </div>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="customFile" data-toggle="tooltip" data-placement="top">
                        <label align="left" class="custom-file-label" for="customFile">DayCare Image</label>
                     </div>
                
                	
                	
                    
                    </ul>
                
                
                    
                <button name="Add_DayCare" class="btn btn-primary" type="submit">Add DayCare</button>   
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

       
<div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Available DayCares for your Dogs
    
      </h1>

<!-- Page Heading -->
<?php
$data = $conn->query("SELECT * FROM daycare")->fetchAll();
                    foreach ($data as $row) 
                    {
                      $daycare_id=$row['daycare_id']; ?>
      <!-- Project Four -->
      <div class="row">

        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-1 mb-md-0" src="./uploads/<?php echo $row['image']?>" alt="" style="width:300px; height:200px;">
          </a>
        </div>
        <div class="col-md-4" style="width:300px;" >
          <h3><?php echo $row['name']?></h3>
          <div><?php echo $row['description']?></div><br>
          <h6>Address: <?php echo $row['address']?></h5>
          <h6>Email: <?php echo $row['email']?></h6>
          <h6>Contact No: <?php echo $row['phone_no']?></h6>
          
          <a class="btn btn-primary" href="./mail/daycare_mail.php?daycare_id=<?php echo $daycare_id ?>">Contact Us</a>
        </div>
      </div>
      <hr>
      <!-- /.row -->
      <?php } ?>

      <hr>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

      
    </div>
 
                
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; DogeCare 2021</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
