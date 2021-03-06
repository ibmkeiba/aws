<!DOCTYPE html>
<html lang="ja">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

    <!-- Custom fonts for this template-->
        <link href="https://ibmkeiba.github.io/webdesign/all.min.css" rel="stylesheet" type="text/css">
        <link
                href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                rel="stylesheet">

    <!-- Custom styles for this template-->
        <link href="https://ibmkeiba.github.io/webdesign/sb-admin-2.max.css" rel="stylesheet">

    <!-- FontAwesomeの読み込み -->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- Tempus Dominus CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0/css/tempusdominus-bootstrap-4.min.css" />

    <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8C6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!-- bootstrap-datepickerを読み込む -->
        <link rel="stylesheet" href="https://ibmkeiba.github.io/webdesign/bootstrap-datepicker.min.css">

	<!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIからの提案</title>
    
</head>

<body id="page-top">
	
	<?php # $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf88', 'root', 'root');
    ?>
    <?php require '/var/www/.dbinfo.php'; ?>
    <?php $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC)); ?>
	
    <!-- Page Wrapper -->
        <div id="wrapper">

    <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        style="background-image: linear-gradient(180deg,#268300 10%,#26color: #268300; background-size: cover"  id="accordionSidebar">

    <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://ai-keiba-newhier.link/simple/date/option1.php">
        <div class="sidebar-brand-icon rotate-n-15">

           <i class="fas fa-horse"></i>
        </div>

        <div class="sidebar-brand-text mx-3">AIしか勝たん</div>
        </a>

        <!-- Divider --!>
         <hr class="sidebar-divider my-0" >
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
                <a class="nav-link" href="https://ai-keiba-newhier.link/simple/date/option1.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
        参考サイト
        </div>

        <!-- Nav Item - JRA Collapse Menu -->
        <li class="nav-item">
                <a class="nav-link collapsed" href="https://www.jra.go.jp/" target="_blank">
                        <i class="fas fa-horse"></i>
                        <span>JRA日本中央競馬会</span>
                </a>
        </li>

        <!-- Nav Item - netkeiba.com Collapse Menu -->
        <li class="nav-item">
                <a class="nav-link collapsed" href="https://www.netkeiba.com/?rf=navi" target="_blank">
                <i class="fas fa-calendar-alt"></i>
                        <span>netkeiba.com</span>
                </a>
                </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        </ul>

        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content --!>
        <div id="content">
        <ul style="background-image: linear-gradient(180deg,#525252 10%,#525252 100%); backgroud-color: #525252; background-size: cover">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <script async src="https://cse.google.com/cse.js?cx=94934b40bcb5c0707"></script>
                        <div class="gcse-searchbox-only">
                        </div>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        </ul>

                </nav>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-white">Dashboard</h1>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
 

                                <!-- input Card  -->
                                <div class="col-xl-12 col-md-12 mb-5">
                                        <div class="card border-left-primary shadow h-100 w-100 py-2">
                                                <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                        <div class="h5 mb-0 font-weight-bold text-primary text-uppercase mb-3">
                                                                        AIからの提案
                                                                        </div>

                                                                        <label class="form-check-label font-weight-bold text-gray-800" for="flexRadioDefault1">提案する馬券</label>
                                                                        <div class="container">
                                                                                <div class="input-group mb-3 col-9">
																			        <?php $race_id = strval($_GET['race_id']) ?>
																			        <?php $budget = strval($_GET['budget']) ?>
																			        <?php $risk = strval($_GET['risk']) ?>

																			        <?php # echo $race_id, ' ', $budget, ' ', $risk, '<br>' ?>

																			        <?php
																			        # $command = 'python3 ../python/sample_test.py 202106040803 2000 2';
																			        # $command = 'python3 ../python/sample_test.py '. $race_id. ' '. $budget. ' '. $risk;
																			        # $command = '/var/www/.venv/test/bin/python ../python/sample.py 202106040803 2000 2';
																			        $command = '/var/www/.venv/test/bin/python ../python/sendtest/sample.py '. $race_id. ' '. $budget. ' '. $risk;

																			        exec($command, $output);

																			        #echo '実行したコマンド：', $command, '<br>';
																			        echo '提案結果： ', $output[0];
																			        ?>
                                                                                </div>
                                                                        </div>

                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>

                <!-- /.container-fluid -->
        </div>

        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2021</span>
                        </div>
                </div>
        </footer>

        <!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->

        </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button--!>
                <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                </a>
        <!-- Bootstrap core JavaScript-->
        <script src="https://ibmkeiba.github.io/webdesign/jquery.min.js"></script>
        <script src="https://ibmkeiba.github.io/webdesign/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="https://ibmkeiba.github.io/webdesign/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="https://ibmkeiba.github.io/webdesign/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="https://ibmkeiba.github.io/webdesign/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="https://ibmkeiba.github.io/webdesign/chart-area-demo.js"></script>
        <script src="https://ibmkeiba.github.io/webdesign/chart-pie-demo.js"></script>

        <!-- Tempus Dominus Script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/locale/ja.min.js" integrity="sha512-rElveAU5iG1CzHqi7KbG1T4DQIUCqhitISZ9nqJ2Z4TP0z4Aba64xYhwcBhHQMddRq27/OKbzEFZLOJarNStLg==" crossorigin="anonymous"></script>
        
                <!-- Moment.js -->
        <script tycript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- bootstrap-datepickerのjavascriptコード -->
        <script src="https://ibmkeiba.github.io/webdesign/bootstrap-datepicker.min.js"></script>
        <script src="https://ibmkeiba.github.io/webdesign/bootstrap-datepicker.ja.min.js"></script>
        <script>
                $('#sample1').datepicker();
        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
