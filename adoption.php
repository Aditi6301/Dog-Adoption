<?php
include('AddDog.php');

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



        </nav>
        <p class="mb-4"><a class="btn btn-primary btn-icon-split btn-sm" data-toggle="modal" href="#AddNewModal"> <span class="text">Add New Title</span></a></p>
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
                      <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="text" name="age" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Age">
                    </div>
                    <div class="form-group">
                      <textarea type="text" name="description" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="text" name="breed" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Breed">
                    </div>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="customFile" data-toggle="tooltip" data-placement="top">
                        <label align="left" class="custom-file-label" for="customFile">Dog Image</label>
                     </div>
                
                	
                	
                    
                    </ul>
                
                
                    
                <button name="Add_title" class="btn btn-primary" type="submit">Add New Doggo</button>   
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
<div class="section">
    <div class="container">
        <h2></h2>
        <div class="image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                <ul class="slides image-box hotel listing-style1" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-300px, 0px, 0px);">
                
                    <li style="width: 270px; float: left; display: block;">
                        <article class="box">
                            <figure> <a href="#" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="https://i.imgur.com/JN2wkb6.jpg" draggable="false"></a> </figure>
                            <div class="details"> <span class="price"><small>Breed</small>Indie</span>
                                <h4 class="box-title">Hotel Taj<small>Mumbai</small></h4>
                                <div class="feedback">
                                    <div data-placement="bottom" data-toggle="tooltip" class="fa fa-star" title="" data-original-title="4 stars"><span style="width: 80%;" class=""></span></div> <span class="review">75 reviews</span>
                                </div>
                                <p class="description">For what reason would it be advisable for me to think about business content?</p>
                                <div class="action"> <a class="button btn-small" href="#">BOOK</a> <a class="button btn-small yellow popup-map" href="#" data-box="40.705631, -73.978003">VIEW ON MAP</a> </div>
                            </div>
                        </article>
                    </li>
                    <li style="width: 270px; float: left; display: block;">
                        <article class="box">
                            <figure> <a href="#" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="data:image/jpeg;base64,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" draggable="false"></a> </figure>
                            <div class="details"> <span class="price"> <small>Breed</small>Indie</span>
                                <h4 class="box-title">Dexter<small>Bangalore</small></h4>
                                <!-- <div class="feedback">
                                    <div data-placement="bottom" data-toggle="tooltip" class="fa fa-star" title="" data-original-title=""><span style="width: 80%;" class=""></span></div> <span class="review">270 reviews</span>
                                </div> -->
                                <p class="description">Cute playful pupper! Very friendly</p>
                                <div class="form-group">
                                    <button type="submit" name="interested" value="LoginUser" class="btn btn-primary btn-block" id="submit">I'm Interested
                                    </button>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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
