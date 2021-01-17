<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - Beranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url();?>/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/typography.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/default-css.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?= base_url();?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

<!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
    
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="container">
                <div class="row">

                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Jadwal Kebersihan</h4>
                                    
                                    <!-- <input class="form-control pr-4" type="month" > -->
                                </div>
                                <div class="market-status-table">
                                    <div class="table-responsive">
                                        <table class="dbkit-table text-center">
                                            <tr class="heading-td">
                                                <td class="mv-icon">Waktu</td>
                                                <td class="coin-name">Asrama</td>
                                                <td class="buy">Jenis</td>
                                                <td class="sell">Status</td>
                                            </tr>
                                            <?php foreach ($jadwal as $row): ?>
                                                <tr>
                                                    <td><?= $row['waktu'];?></td>
                                                    <td><?= $row['asrama'];?></td>
                                                    <td><?= $row['jenis'];?></td>
                                                    <?php 
                                                    if ($row['status'] == 'success') {
                                                        $badge = 'success';
                                                    }elseif ($row['status'] == 'prosess') {
                                                        $badge = 'warning';
                                                    }else{
                                                        $badge = 'primary';
                                                    }
                                                 ?>  
                                                 <td><span class="badge badge-<?= $badge; ?>"><?= $row['status']; ?></span></td>   
                                                </tr>
                                            <?php endforeach;?>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-4 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Timeline</h4>
                                <div class="timeline-area">
                                    <div class="timeline-task">
                                        <div class="icon bg1">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="tm-title">
                                            <h4>Rashed sent you an email</h4>
                                            <span class="time"><i class="ti-time"></i>09:35</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                                        </p>
                                    </div>
                                    <div class="timeline-task">
                                        <div class="icon bg2">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </div>
                                        <div class="tm-title">
                                            <h4>Rashed sent you an email</h4>
                                            <span class="time"><i class="ti-time"></i>09:35</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                                        </p>
                                    </div>
                                    <div class="timeline-task">
                                        <div class="icon bg2">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </div>
                                        <div class="tm-title">
                                            <h4>Rashed sent you an email</h4>
                                            <span class="time"><i class="ti-time"></i>09:35</span>
                                        </div>
                                    </div>
                                    <div class="timeline-task">
                                        <div class="icon bg3">
                                            <i class="fa fa-bomb"></i>
                                        </div>
                                        <div class="tm-title">
                                            <h4>Rashed sent you an email</h4>
                                            <span class="time"><i class="ti-time"></i>09:35</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                                        </p>
                                    </div>
                                    <div class="timeline-task">
                                        <div class="icon bg3">
                                            <i class="ti-signal"></i>
                                        </div>
                                        <div class="tm-title">
                                            <h4>Rashed sent you an email</h4>
                                            <span class="time"><i class="ti-time"></i>09:35</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>

               </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- main wrapper start -->
    
    <!-- jquery latest version -->
    <script src="<?= base_url();?>/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url();?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>/assets/js/metisMenu.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="<?= base_url();?>/assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="<?= base_url();?>/assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="<?= base_url();?>/assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="<?= base_url();?>/assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="<?= base_url();?>/assets/js/plugins.js"></script>
    <script src="<?= base_url();?>/assets/js/scripts.js"></script>
</body>

</html>
