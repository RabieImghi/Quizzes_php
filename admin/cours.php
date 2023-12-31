<?php 
require_once "../connection.php";
if(!isset($_SESSION['id_user'])){
  header('location: ../admin/login.php'); 
}else if($_SESSION['roleUser']=="etudiants"){
  header('location: ../user/index.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Statistiques  </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="cours.php">
          <i class="bi bi-grid"></i>
          <span>Gestion des Cours</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="QuesRepo.php">
          <i class="bi bi-grid"></i>
          <span>Questions & Réponses </span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed" href="utlisateurs.php">
          <i class="bi bi-grid"></i>
          <span>Gestion des Utilisateurs </span>
        </a>
      </li>
    </ul>

  </aside>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Accueil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <li class="breadcrumb-item active">Gestion Cours</li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
<!--Content  ------------------------------------------------>
    <button type="submit"  class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCours" >
      Ajoute une cours
    </button>
    <div class="modal fade" id="addCours" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Vertically Centered</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="card">
                      <div class="card-body">
                      <h5 class="card-title">Cours Information</h5>
                      <!-- Floating Labels Form -->
                      <form class="row g-3" method="post" action='scripte.php'>
                          <div class="col-md-12">
                          <div class="form-floating">
                              <input type="text" name="cours" class="form-control" id="floatingName" placeholder="Your Name">
                              <label for="floatingName">Cours Name</label>
                          </div>
                          </div>
                          <div class="col-12">
                          <div class="form-floating">
                              <textarea  name="description"  class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                              <label for="floatingTextarea">Cours Description</label>
                          </div>
                          </div>
                          <div class="text-center">
                          <button type="submit" name="addCours" class="btn btn-primary">Ajoute</button>
                          <button type="reset" class="btn btn-secondary">Reset</button>
                          </div>
                      </form><!-- End floating Labels Form -->
              
                      </div>
                  </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="allCours d-flex gap-5" style="flex-wrap: wrap;">
      <?php
        $select_cours = "SELECT * FROM course";
        $cours=$conn->query($select_cours);
        while($cour=$cours->fetch_assoc()){
      ?>
      <div class="card " style="max-width: 45%; min-width: 45%;">
          <div class="card-header"><?=$cour["courseName"]?></div>
          <div class="card-body">
          <textarea class="textDown" style='display:none;'><?=$cour["courseDescription"]?></textarea>
          <p class='decriptionContent'> </p>
          </div>
          <div class="card-footer">
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateCours<?=$cour["courseID"]?>" >
                Mettre a jour
              </button>
              <div class="modal fade" id="updateCours<?=$cour["courseID"]?>" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title">Mettre a jour cours</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Cours Information</h5>
                        
                                <!-- Floating Labels Form -->
                                <form class="row g-3"  method="post" action='scripte.php'>
                                    <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" name="cours" value='<?=$cour["courseName"]?>' class="form-control" value="Card with header and footer" id="floatingName" placeholder="Your Name">
                                        <label for="floatingName">Cours Name</label>
                                    </div>
                                    </div>
                                    <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="description" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"><?=$cour["courseDescription"]?> 
                                        </textarea>
                                        <label for="floatingTextarea">Cours Description</label>
                                    </div>
                                    </div>
                                    <div class="text-center">
                                      <input type="hidden" value='<?=$cour["courseID"]?>' name='idCours'>
                                    <button type="submit" name="updateCours" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form><!-- End floating Labels Form -->
                        
                                </div>
                            </div> 
                          </div>
                      </div>
                  </div>
              </div>
              <a class="btn btn-danger" href="scripte.php?supreme_cours_id=<?=$cour["courseID"]?>">supreme</a>

          </div>
      </div>
      <?php
        }
      ?>  
    </div>

    </section>
  </main>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>
  <!-- Vendor JS Files -->
  <div class="script">
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>  
  </div>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    var fullText=document.querySelectorAll('.textDown'); 
    var newTewt =document.querySelectorAll('.decriptionContent');
    var i=0;
    fullText.forEach(text => {
        const lines = text.value.split('\n').slice(0, 1);
        const truncatedText = lines.join('<br>');
        newTewt[i].innerHTML = truncatedText +" ...";
        i++;
    });
  </script>

</body>

</html>