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
    <link href="css/script.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>



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

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <div class="card shadow mb-4">
                        <center>
                            <div class="card-body">
                                <!-- manu-->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#video" type="button" role="tab"
                                            aria-controls="home-tab-pane" aria-selected="true">video</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#text" type="button" role="tab"
                                            aria-controls="profile-tab-pane" aria-selected="false">text</button>
                                    </li>


                                </ul>

                                <!--body video-->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="video" role="tabpanel"
                                        aria-labelledby="home-tab" tabindex="0">
                                        <br>
                                        <h1>ตัวอย่างการเปิดลูกค้า</h1>
                                        <br>
                                        <div class="row">
                                            <?php
                                            //คิวรี่ข้อมูลมาแสดงในตาราง
                                            require_once 'connectDB/connectDB.php';
                                            $stmt = $conn->prepare("SELECT * FROM tbl_script where script_status=1");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            foreach ($result as $k) {
                                            ?>


                                            <div class="col-sm-3">
                                                <div class="card">
                                                    <iframe src="<?= $k['script_youtube'];?>"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen>
                                                    </iframe>
                                                    <div class="card-body">
                                                        <div style="display: flex; justify-content: space-between;">
                                                            <p style="margin: 0;">test</p>
                                                            <a href="<?= $k['script_youtube'];?>" class="card-text"
                                                                target="_blank">link to youtube</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } ?>
                                        </div>
                                    </div>

                                    </div>
                                    <div class="tab-pane fade" id="text" role="tabpanel" aria-labelledby="profile-tab"
                                        tabindex="0">
                                        <h1>ตัวอย่างการสนทนากับลูกค้า</h1>
                                        <div class="chat">
                                            <div class="mine messages">
                                                <div class="message last">
                                                    สวัสดีครับติดต่อจากบริษัท ssl logistics เรามาขอเสนอบริการขนส่ง (4
                                                    ล้อ 6 ล้อ 10 ล้อ รถหัวลาก)
                                                    สำหรับงานนำเข้า-ส่งออกและงานกระจายสินค้าในประเทศง

                                                </div>
                                            </div>
                                            <div class="yours messages">
                                                <div class="message">
                                                    ครับสนใจครับ มิทราบว่าทางบริษัท มีรถอยู่กี่คันครับ
                                                </div>

                                            </div>

                                            <div class="mine messages">
                                                <div class="message">
                                                    ทางเรามีรถประจำอยู่ที่แหลมฉบัง 10คัน และลาดกระบัง 10คัน ครับ
                                                </div>
                                                <div class="message">
                                                    คุณลูกค้าต้องการใช้รถประเภทไหนในการขนส่งครับ (ให้สอบถาม สถาที่ต้นทาง
                                                    ปลายทาง ที่โหลดของ ประเภทสินค้า ปริมาณงานต่อ(ว/ด/ป/) ขนาดตู้ที่ใช้ )
                                                </div>
                                            </div>
                                                
                                            <div class="yours messages">
                                                <div class="message">
                                                    ทางเราใช้ตู้ 40 HQ และ 20 HQ รับตู้คืนที่แหลม
                                                    มาโหลดขอที่โรงงาน(หาที่อยู่โรงงานตามหน้าเว็บ/สอบถามที่อยู่โรงงานจากจนท.)
                                                    คืนตู้ที่แหลมครับ
                                                </div>

                                            </div>
                                            <div class="mine messages">
                                                <div class="message">
                                                    (ได้ข้อมูลมาครบ) ทางเราขออีเมล์ไว้จัดส่งใบเสนอราคาและcompanyprofile
                                                    ไปให้เพื่อเสนอให้ทางบริษัทพิจารณา

                                                </div>
                                            </div>
                                            <div class="yours messages">
                                                <div class="message">
                                                    อีเมล์นะครับ(ลูกค้าจะบอกเองหรือไม่ให้หาตามหน้าเว็ปโรงงาน)
                                                </div>
                                            </div>
                                            <div class="mine messages">
                                                <div class="message">
                                                    ขอบคุณมากครับ (วางสาย)
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