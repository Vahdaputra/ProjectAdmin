<?php

$koneksi = new mysqli("localhost", "root", "", "pemukuan");


?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PT.SAMASUKSES</a>
</div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li>
                        <a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="index.php?page=masuk"><i class="glyphicon glyphicon-arrow-down"></i> Uang Masuk</a>
                    </li>

                    <li>
                        <a href="index.php?page=keluar"><i class="glyphicon glyphicon-arrow-up"></i> Pengeluaran</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                        <?php

                        $page = null;
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        }

                        $aksi = null;
                        if (isset($_GET['aksi'])) {
                            $aksi = $_GET['aksi'];
                        }

                        switch ($page) {
                            case 'masuk':
                                include "page/kas_masuk/masuk.php";
                                break;
                            case 'keluar':
                                include "page/kas_keluar/keluar.php";
                                break;
                            case '':
                                include "home.php";
                                break;
                            default:
                                # Code goes here...
                                break;
                        }

                        // if($page == "masuk"){
                        // }elseif($page == "keluar"){
                        //     if($aksi == ""){
                        //         include "page/kas_keluar/keluar.php";
                        //     }
                        // }elseif($page == "rekap"){
                        //     if($aksi == ""){
                        //         include "page/kas_rekap/rekap.php";
                        //     }
                        // }elseif($page == "user"){
                        //     if($aksi == ""){
                        //         include "page/user/user.php";
                        //     }
                        // }


                        ?>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>