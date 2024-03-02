<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon"  href="../../image/logo.png" type="image/x-icon" >

    <title>UNEXIST-ADMIN-sellticket table</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- อย่าลืมใส่เข้ามาด้วยตารางจะได้ไม่เอ๋อ!-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
  
     <!-- จบส่วนการ import เพิ่ม!-->
</head>

<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../index.php">UNEXIST ADMIN</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto aria-expanded me-4">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../../index_back.html">Home</a></li>
                     
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../../form_login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <div class="sb-sidenav-menu-heading">table for admin</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Table
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                   
                                    <a class="nav-link" href="../employee/table_employee.php">employee</a>
                                    <a class="nav-link" href="../ticket/table_ticket.php">ticket</a>
                                    <a class="nav-link" href="../rides/table_ride.php">rides</a>
                                    <a class="nav-link" href="../customer/table_customer.php">customer</a>
                                    <a class="nav-link" href="../Sellticket/table_Sellticket.php">Sellticket</a>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    
                </nav>
            </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Selltickets</h1>
                    
                    <div class="card mb-4">
                        
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                           sellticket table
                        </div>
                        <a href="fr_Sellticket.php" class="btn btn-success mb-2 float-end">Add</a>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ticketID</th>
                                        <th>customerID</th>
                                        <th>tickettype</th>
                                        <th>datebuy</th>
                                        <th>price</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ticketID</th>
                                        <th>customerID</th>
                                        <th>tickettype</th>
                                        <th>datebuy</th>
                                        <th>price</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM sellticket";

                                    $result = mysqli_query($conn, $sql); //เชื่อมต่อฐานข้อมูลจากหน้า condb
                                    
                                    while ($row = mysqli_fetch_array($result)) //เอาตัวเเปรด้านบนมาใส่เป็นข้อมูล
                                    { //เริ่มการทำงานเเสดงผลคอลัมน์
                                        ?>

                                        <tr>
                                            <td>
                                                <?= $row["Sell_id"] ?>
                                            </td>
                                            <td>
                                                <?= $row["cust_id"] ?>
                                            </td>
                                            <td>
                                                <?= $row["ticket_type"] ?>
                                            </td>
                                            <td>
                                                <?= $row["date_buy"] ?>
                                            </td>
                                            <td>
                                                <?= $row["price"] ?>
                                            </td>

                                            <td><a href="edit_Sellticket.php?Sell_id=<?= $row["Sell_id"] ?>"
                                                    class="btn btn-warning mb-4">Edit</a></td>
                                            <td><a href="delete_Sellticket.php?Sell_id=<?= $row["Sell_id"] ?>"
                                                    class="btn btn-danger" mb-4
                                                    onclick="Del(this.href);return false;">Delete</a></td>
                                        </tr>
                                        <?php
                                    } //จบการทำงานเเสดงผลคอลัมน์
                                    mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>