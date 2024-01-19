<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SSL Sale</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- sweet alert  -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <!-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div> -->
    <div class="sidebar-brand-text mx-3">SSL Sale </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Adddata
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">

        <i class="fa-solid fa-image-portrait"></i>
        <span>port</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">port:</h6>
            <!-- <a class="collapse-item" href="add.php" >addata</a> -->
            <a class="collapse-item" href="saler_port.php">portlist</a>




        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
        aria-expanded="true" aria-controls="collapsePages">

        <i class="fa-solid fa-video"></i>
        <span>script</span>
    </a>
    <div id="collapsePages1" class="collapse" aria-labelledby="headingPages"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

            <h6 class="collapse-header">script:</h6>
            <a class="collapse-item" href="script_text.php">view script</a>
            <a class="collapse-item" href="add_script.php">add script</a>

        </div>
    </div>
</li>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
        aria-expanded="true" aria-controls="collapsePages">

        <i class="fa-solid fa-money-check-dollar"></i>
        <span>avg_price</span>
    </a>
    <div id="collapsePages2" class="collapse" aria-labelledby="headingPages"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">avg_price:</h6>
            <!-- <a class="collapse-item" href="add.php" >addata</a> -->
            <a class="collapse-item" href="add_avg_price.php">avg price</a>
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

      
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

    
            </li>

           

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                จำนวนงานทั้งหมด</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
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
                                                งานที่สำเร็จ</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">900</div>
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
                                                กำลังรอ..</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">90</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                ยกเลิก</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">table work</h6>

                            <button class="btn btn-primary" data-toggle="modal" data-target="#addexcel"><i
                                    class="fa-solid fa-plus"></i></button>
                        </div>
                        <div class="card-body">
                            <div class="table table-striped">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th>จุดรับ</th>
                                            <th>จุดส่ง</th>
                                            <th>ราคา</th>


                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            //คิวรี่ข้อมูลมาแสดงในตาราง
                                            require_once 'connectDB/connectDB.php';
                                            $stmt = $conn->prepare("SELECT * FROM `tbl_avg_price` JOIN tbl_car_type ON tbl_avg_price.car_type = tbl_car_type.id");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            foreach ($result as $k) {
                                            ?>

                                        <tr>

                                            <td><?= $k['start'];?></td>
                                            <td><?= $k['last'];?></td>
                                            <td><?= $k['price'];?></td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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
                        <span>Copyright &copy; Your Website 2020</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">คุณต้องการที่จะออกจากระบบ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">กดปุ่มยืนยัน เพื่อออกจากระบบ</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- add Modal-->
    <div class="modal fade" id="addexcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">เพิ่มเส้นทาง</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form class="" action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputstart" class="col-sm-2 col-form-label">จุดเริ่ม</label>
                            <div class="col-sm-10">
                                <input id="start" name="start" class="form-control" placeholder="จุดเริ่ม"
                                    aria-label="Disabled input example">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputlast" class="col-sm-2 col-form-label">จุดส่งสินค้า</label>
                            <div class="col-sm-10">
                                <input id="last" name="last" class="form-control" placeholder="จุดส่งสินค้า"
                                    aria-label="Disabled input example">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputprice" class="col-sm-2 col-form-label">ราคา</label>
                            <div class="col-sm-10">
                                <input id="price" name="price" class="form-control" placeholder="ปริมาณงานต่อเดือน"
                                    aria-label="Disabled input example">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputtype" class="col-sm-2 col-form-label">ประเภทรถ</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="car_type"
                                    id="car_type">
                                    <option selected value="0">เลือกประเภทรถ</option>
                                    <?php
                                            //คิวรี่ข้อมูลมาแสดงในตาราง
                                            require_once 'connectDB/connectDB.php';
                                            $stmt = $conn->prepare("SELECT * FROM tbl_car_type");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            foreach ($result as $k) {
                                            ?>
                                    <option value="<?= $k['id'];?>"><?= $k['type_name'];?></option>

                                    <?php }?>
                                </select>

                            </div>
                        </div>



                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" name="import">import</button>
                </div>
                </form>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>


<?php
//เช็คหน่อยว่ามีส่ง input อะไรมาบ้าง
//     echo '<pre>';
//         print_r($_POST);
//   echo '</pre>';
//   exit();
 
  //ตรวจสอบตัวแปรที่ส่งมาจากฟอร์ม
  if (isset($_POST['start']) && isset($_POST['last']) && isset($_POST['price']) && isset($_POST['car_type'])) {
  //ไฟล์เชื่อมต่อฐานข้อมูล
  require_once 'connectDB/connectDB.php';
      //sql insert
      $stmt = $conn->prepare("INSERT INTO tbl_avg_price(id,start,last,price,car_type)
      VALUES
      (null,:start,:last,:price,:car_type)
      ");

      //bindParam data type
      $stmt->bindParam(':start', $_POST['start'], PDO::PARAM_STR);
      $stmt->bindParam(':last', $_POST['last'], PDO::PARAM_STR);
      $stmt->bindParam(':price', $_POST['price'], PDO::PARAM_STR);
      $stmt->bindParam(':car_type', $_POST['car_type'], PDO::PARAM_STR);
      $result = $stmt->execute();
      $conn = null; //close connect db
  //เงื่อนไขตรวจสอบการเพิ่มข้อมูล
  if($result){
  echo '<script>
      setTimeout(function() {
      swal({
      title: "เพิ่มข้อมูลสำเร็จ",
      type: "success"
      }, function() {
      window.location = "add_avg_price.php"; //หน้าที่ต้องการให้กระโดดไป
      });
    }, 1000);
  </script>';
  }else{
  echo '<script>
    setTimeout(function() {
      swal({
      title: "เกิดข้อผิดพลาด",
      type: "error"
      }, function() {
      window.location = "add_avg_price.php"; //หน้าที่ต้องการให้กระโดดไป
      });
    }, 1000);
  </script>';
  } //else ของ if result
   
  } //isset
 

  ?>