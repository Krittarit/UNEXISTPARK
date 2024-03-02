<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unexist_park";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected Success";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--ใส่ import กราฟ!-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="stylecircle.css" rel="stylesheet" type="text/css">
    <link href="styleline.css" rel="stylesheet" type="text/css">


    <script src="highcharts/highcharts.js"></script>
    <script src="highcharts/modules/series-label.js"></script>
    <script src="highcharts/modules/exporting.js"></script>
    <script src="highcharts/modules/export-data.js"></script>
    <script src="highcharts/modules/accessibility.js"></script>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon"  href="../image/logo.png" type="image/x-icon" >

    <title>UNEXIST-CEO</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">



</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-database-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223Z" />
                        <path
                            d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z" />
                        <path
                            d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z" />
                        <path
                            d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z" />
                    </svg>
                </div>
                <div class="sidebar-brand-text mx-3">UNEXIST CEO </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">All Tables:</h6>
                        <a class="collapse-item" href="employee.php">employee</a>
                        <a class="collapse-item" href="ticket.php">ticket</a>
                        <a class="collapse-item" href="rides.php">rides</a>
                        <a class="collapse-item" href="customer.php">customer</a>
                        <a class="collapse-item" href="sellticket.php">Sellticket</a>
                    </div>
                </div>
            </li>
            
             <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->




                            <!-- Nav Item - Messages -->

                            <!-- Dropdown - Messages -->

                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">CEO UNEXIST PARK</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../index_back.html">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    home
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../form_login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- Content Row -->
                    <div class="row">

                        <!-- จำนวนผู้ใช้งาน -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Users</div>
                                            <?php
                                            $sql = "SELECT COUNT(*) as users FROM customer";
                                            $query = $conn->prepare($sql);
                                            $query->execute();
                                            $fetch = $query->fetch();
                                            ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $fetch['users'] ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Employee</div>
                                            <?php
                                            $sql2 = "SELECT COUNT(*) as employees FROM employee";
                                            $query = $conn->prepare($sql2);
                                            $query->execute();
                                            $fetch = $query->fetch();
                                            ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $fetch['employees'] ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">EARNING
                                            </div>
                                           
                                           <?php
                                            $sql3 = "SELECT SUM(price) as price FROM sellticket";
                                            $query = $conn->prepare($sql3);
                                            $query->execute();
                                            $fetch = $query->fetch();
                                            ?>
                                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $fetch['price'] ?>
                                            </div>
                                           
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Rides</div>
                                                <?php
                                            $sql3 = "SELECT COUNT(*) as ride FROM rides";
                                            $query = $conn->prepare($sql3);
                                            $query->execute();
                                            $fetch = $query->fetch();
                                            ?>
                                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $fetch['ride'] ?>
                                            </div>
                                                
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">ไดอะเเกรมเส้น</h6>
                                    <div class="dropdown no-arrow">
                                        
                                       
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!-- พื้นที่ใส่เส้น !-->


                                    <figure class="highcharts-figureLINE">
                                        <div id="containerLINE"> </div>
                                    </figure>
                                    <?php
                                    //เชื่อมต่อฐานข้อมูล
                                    $con1 = mysqli_connect("localhost", "root", "", "unexist_park");
                                    //ให้แสดงผลภาษาไทยได้ โดยกำหนด charset เป็น utf-8
                                    mysqli_set_charset($con1, "utf8");

                                    $sql = "SELECT MONTH(date_buy) AS month, COUNT(*) AS customer_count
                                    FROM customer
                                    GROUP BY MONTH(date_buy)
                                    ORDER BY MONTH(date_buy);";

                                    $result = mysqli_query($con1, $sql);

                                    $permonth = array();
                                    $customer = array();
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $permonth[] = $row['month'];
                                        $customer[] = $row['customer_count'];
                                    }
                                    ?>
                                    <script>
                                        Highcharts.chart('containerLINE', {
                                            chart: {
                                                type: 'line'
                                            },
                                            title: {
                                                text: 'จำนวนลูกค้าต่อเดือนประจำปี 2565'
                                            },

                                            subtitle: {
                                                text: 'by เเมวเบ้า'
                                            },

                                            yAxis: {
                                                title: {
                                                    text: 'จำนวนลูกค้า'
                                                }
                                            },

                                            xAxis: {
                                                categories: [<?php echo "'" . implode("','", $permonth) . "'"; ?>]
                                            },

                                            legend: {
                                                layout: 'vertical',
                                                align: 'right',
                                                verticalAlign: 'middle'
                                            },



                                            series: [{
                                                name: 'จำนวนลูกค้า(คน)',
                                                data: [<?php echo implode(",", $customer); ?>]
                                            }],

                                            responsive: {
                                                rules: [{
                                                    condition: {
                                                        maxWidth: 500
                                                    },
                                                    chartOptions: {
                                                        legend: {
                                                            layout: 'horizontal',
                                                            align: 'center',
                                                            verticalAlign: 'bottom'
                                                        }
                                                    }
                                                }]
                                            }

                                        });
                                    </script>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">ไออะเเกรมวงกลม</h6>
                                    <div class="dropdown no-arrow">
                                        
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!-- พื้นที่ใส่วงกลม !-->
                                    <script src="highcharts/highcharts.js"></script>
                                    <script src="highcharts/modules/series-label.js"></script>
                                    <script src="highcharts/modules/exporting.js"></script>
                                    <script src="highcharts/modules/export-data.js"></script>
                                    <script src="highcharts/modules/accessibility.js"></script>



                                    <figure class="highcharts-figureCIRCLE">
                                        <div id="containerCIRCLE"> </div>

                                    </figure>

                                    <?php
                                    //เชื่อมต่อฐานข้อมูล
                                    $con2 = mysqli_connect("localhost", "root", "", "unexist_park");
                                    //ให้แสดงผลภาษาไทยได้ โดยกำหนด charset เป็น utf-8
                                    mysqli_set_charset($con2, "utf8");

                                    $sql = "SELECT age, COUNT(*) AS customer_count1
                                    FROM customer
                                    GROUP BY age
                                    ORDER BY age";

                                    $result = mysqli_query($con2, $sql);
                                    $datan = array();
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        extract($row);
                                        $datan[] = array($row['age'], intval($row['customer_count1']));
                                        $data2 = json_encode($datan);
                                    }
                                    ?>

                                    <script>
                                        var container_chartCorrectiveAction = new Highcharts.chart('containerCIRCLE', {
                                            chart: {
                                                plotBackgroundColor: null,
                                                plotBorderWidth: null,
                                                plotShadow: false,
                                                type: 'pie'
                                            },
                                            title: {
                                                text: 'จำนวนผู้ใช้บริการต่ออายุ(ปี)'
                                            },

                                            accessibility: {
                                                point: {
                                                    // valueSuffix: '%'
                                                }
                                            },
                                            plotOptions: {
                                                pie: {
                                                    allowPointSelect: true,
                                                    cursor: 'pointer',
                                                    dataLabels: {
                                                        enabled: true,
                                                        // format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                                                    }
                                                }
                                            },
                                            series: [{
                                                name: 'อายุ',
                                                colorByPoint: true,
                                                data: <?php echo $data2; ?>
                                            }]
                                        });
                                    </script>



                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->

                            <!-- Color System -->



                            <!-- Approach -->


                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; เเมวเบ้า 2077</span>
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

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="../form_login.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>