<?php
include('LoginProcess.php');
if ( isset($_GET['loginfirst']) && $_GET['loginfirst'] == 1 )
{
  unset($_GET['mailsuccess']);
?>
<div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Please login first!</strong>
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



        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->



    <div class="container">

   <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->

             <center>
              <div class="col-lg-6">

                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="email" name="Email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password"class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>

                    <div class="form-group">
 <button type="submit" name="LoginUser" value="LoginUser" class="btn btn-primary btn-block" id="submit">Login
                  </button>
                </div>

                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgotpassword.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <p class="small">Create an account: <a href="register.php">Register</a>
                  </div>


              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
















      <!-- Footer -->
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
