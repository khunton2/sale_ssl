<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <style>
        body {
            font-size: 12px;
        }

        /* @font-face {
            font-family: 'THSarabun';
        src: url('fonts/THSarabun.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        } */
        /* .thai {
            font-family: 'THSarabun', sans-serif;
            font-size: 18px;
        } */
        .base-white {
            background-color: #f4f5f8;
        }

        .egg-color {
            background-color: #fcd5b4;
        }

        .vegetable-color {
            background-color: #00d661;
        }

        .sky-color {
            background-color: #b7dee8;
        }

        /* .container {
            width: 100%;
        } */
        /*
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }
        th,
        td {
            text-align: center;
            border: 1px solid black;
        }
        th {
            font-weight: bold;
            font-size: 16pt;
        }
        td {
            font-weight: bold;
            font-size: 14pt;
        }*/
    </style>
</head>

<body>
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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
                    <div class="container text-center">
                        <div class="m-3">
                            <img src="/img/SSL_LOGO.png" alt="logo" class="rounded float-start m-2 ">
                            <h5 class="text-start">
                                S S L Logistics Co., Ltd
                            </h5>
                            <p class="text-start">
                                1/9 Soi Supapong 1 , Srinakarin Road, Nhongbon, Prawet, Bkk 10250, Thailand
                                <br>Tel: 662-330-9312, Fax: 662-330-9748 www.ssllogistics.co.th
                                <br>เลขประจำตัวผู้เสียภาษี 0-10555-001500-4
                            </p>
                        </div>
                        <table class="table table-sm ">
                            <thead>
                                <tr class="bg-success">
                                    <th colspan="6">
                                        <h5 class="fw-bold">QUOTATION</5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
if (isset($_GET["compane"])) {
    $company_id = $_GET["compane"];

    // Check if the value is empty or not numeric
    if (empty($company_id) || !is_numeric($company_id)) {
        // Handle the case when the value is empty or not numeric
        echo '
        <script type="text/javascript">
            window.location="saler_port.php";
        </script>';
    } else {
        // Proceed with the valid $company_id
        // Your existing code or additional logic goes here
    }
} else {
    echo '
    <script type="text/javascript">
        window.location="saler_port.php";
    </script>';
}

              $query =   "SELECT  Company_name,address,email,phone,open_time,id  
              FROM tbl_listcompane
              WHERE id = $company_id";
                require_once 'connectDB/connectDB.php';
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();
        extract($result);
             ?>
                                <tr>
                                    <td class="fw-bold">Company:</td>
                                    <td class="text-start" colspan="3"><?php echo $Company_name; ?></td>
                                    <td class="fw-bold">Ref No:</td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Address:</td>
                                    <td class="text-start" colspan="3"><?php echo $address; ?></td>
                                    <td class="fw-bold">Date:</td>
                                    <td class="text-start"> <?php echo $open_time; ?></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Attention:</td>
                                    <td class="text-start" colspan="3"> </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Tel:</td>
                                    <td class="text-start" colspan="3"> <?php echo $phone; ?></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Email:</td>
                                    <td class="text-start" colspan="3"> <?php echo $email; ?></td>
                                </tr>
                                <!-- Additional rows for quotation details can be added here -->
                            </tbody>
                        </table>
                        <form action="quotation_add.php" method="post">
                            <input type="number" name="listcompane" hidden readonly value="<?php if (isset($_GET["compane"])) {
                echo $_GET["compane"];} ?>">
                            <select class="form-select form-select-sm w-25 my-2" aria-label=".form-select-sm example"
                                id="quotationSelect" required>
                                <option value="">โปรดเลือกรูปแบบ</option>
                                <option value="sea">Quotaion for Sea Export</option>
                                <option value="transport">Quotation for Transportation Export</option>
                            </select>
                            <p class="m-0 text-start">
                                We are pleased to submit the quotation for your consideration as per belows details:-
                            </p>
                            <div class="d-flex flex-column gap-1 mt-1">
                                <div class="text-end d-flex flex-row w-100 mb-2 gap-1">
                                    <p class="w-25 fw-bold m-0">Commodity : </p>
                                    <input required class="w-100 form-control form-control-sm" type="text"
                                        name="commodity">
                                    <p class="w-25 fw-bold m-0  ms-4">Term :</p>
                                    <input required class="w-100 form-control form-control-sm" type="text" name="term">
                                </div>
                                <div class="text-end d-flex flex-row w-100  gap-1">
                                    <p class="w-25 fw-bold m-0">Volumn :</p>
                                    <input required class="w-100 form-control form-control-sm" type="text"
                                        name="volumn">
                                    <p class="w-25 fw-bold m-0 ms-4">Weight :</p>
                                    <input required class="w-100 form-control form-control-sm" type="text"
                                        name="weight">
                                </div>
                            </div>
                            <div id="divSeaTable" class="mt-2">
                                <table id="seaTable" class="table table-sm table-bordered m-0">
                                    <thead>
                                        <tr class="vegetable-color">
                                            <th colspan="10">SEA-EXPORT</th>
                                        </tr>
                                        <tr class="sky-color">
                                            <th>POL</th>
                                            <th>POD</th>
                                            <th>LCL</th>
                                            <th>20'</th>
                                            <th>40'</th>
                                            <th>40'HC</th>
                                            <th>T/T</th>
                                            <th>Via</th>
                                            <th>ETD</th>
                                            <th>Carrier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                <input type="button" value="เพิ่มรายการ" class="btn base-white btn-sm w-100"
                                    onclick="addRow('seaTable')">
                            </div>
                            <br>
                            <div id="divSeaTableCustoms">
                                <table id="seaTableCustoms" border="1" class="table table-bordered m-0 table-sm w-50">
                                    <thead>
                                        <tr class="vegetable-color">
                                            <th>Sea - Export Customs <br> Clearance</th>
                                            <th>LCL <br> per shipment</th>
                                            <th>20' <br> Per cont'</th>
                                            <th>40' <br> Per cont'</th>
                                            <th>40'HC <br> Per cont'</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="clearance[]"
                                                    class="form-control  form-control-sm text-center" readonly
                                                    value="LCL"></td>
                                            <td><input type="number" name="clearance_lcl[]"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" name="clearance_20_inch[]"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" name="clearance_40_inch[]"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" name="clearance_40__hc_inch[]"
                                                    class="form-control  form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="clearance[]"
                                                    class="form-control  form-control-sm text-center" readonly
                                                    value="First Container"></td>
                                            <td><input type="number" name="clearance_lcl[]"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" name="clearance_20_inch[]"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" name="clearance_40_inch[]"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" name="clearance_40__hc_inch[]"
                                                    class="form-control  form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="clearance[]"
                                                    class="form-control  form-control-sm text-center" readonly
                                                    value="2nd - up"></td>
                                            <td><input type="number" name="clearance_lcl[]"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" name="clearance_20_inch[]"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" name="clearance_40_inch[]"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" name="clearance_40__hc_inch[]"
                                                    class="form-control  form-control-sm"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="divTransportationTable">
                                <table id="transportationTable" class="table table-bordered m-0 table-sm">
                                    <thead>
                                        <tr class="egg-color">
                                            <th colspan="10">Transportation - Export</th>
                                        </tr>
                                        <tr>
                                            <th>CY</th>
                                            <th>Loading</th>
                                            <th>Return</th>
                                            <th>Distance</th>
                                            <th>4W</th>
                                            <th>6W</th>
                                            <th>10W</th>
                                            <th>20'</th>
                                            <th>40'</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                <input type="button" value="เพิ่มรายการ" class="btn base-white btn-sm w-100"
                                    onclick="addRow('transportationTable')">
                            </div>
                            <hr>
                            <h5 class="mt-2 text-start">Additional Charges</h5>
                            <table id="additionalTable" class="table table-bordered m-0 table-sm ">
                                <thead>
                                    <tr>
                                        <th rowspan="2">Service</th>
                                        <th rowspan="2">Type</th>
                                        <th rowspan="2">Currency</th>
                                        <th rowspan="2">Charge Detail and Description</th>
                                        <th colspan="3">Charges Rate</th>
                                    </tr>
                                    <tr>
                                        <th>USD</th>
                                        <th>THB</th>
                                        <th>Unit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <input type="button" value="เพิ่มรายการ" class="btn base-white btn-sm w-100"
                                onclick="addRow('additionalTable')">
                            <input type="submit" value="บันทึก" class="btn btn-success btn-sm m-4 ">
                        </form>
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
    <script>
        $(document).ready(function () {
            $('#divSeaTable,#divSeaTableCustoms,#divTransportationTable').css('display', 'none');
            // Add change event listener to the dropdown
            $('#quotationSelect').change(function () {
                // Get the selected option value
                var selectedOption = $(this).val();
                // Check if the selected option is "clear"
                if (selectedOption === '') {
                    // Hide all tables using inline style
                    $('#divSeaTable,#divSeaTableCustoms,#divTransportationTable').css('display',
                    'none');
                    console.log("clear all");
                } else {
                    // Hide all tables except the selected one
                    $('#divSeaTable,#divSeaTableCustoms,#divTransportationTable').css('display',
                    'none');
                    // Show the selected table based on the dropdown value
                    if (selectedOption === 'sea') {
                        // Display the seaTable as a table
                        $('#divSeaTable').css('display', 'block');
                        $('#divSeaTableCustoms').css('display', 'block');
                    } else if (selectedOption === 'transport') {
                        // Display the divTransportationTable as a table
                        $('#divTransportationTable').css('display', 'block');
                    }
                }
            });
        });
    </script>
    <script>
        function addRow(tableId) {
            var table = document.getElementById(tableId);
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);
            if (tableId == "seaTable") {
                var cell8 = row.insertCell(7);
                var cell9 = row.insertCell(8);
                var cell10 = row.insertCell(9);
                cell1.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='pol[]' placeholder='ท่าเรือต้นทาง'>";
                cell2.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='pod[]' placeholder='ท่าเรือปลายทาง'>";
                cell3.innerHTML =
                    "<input type='number' class='form-control  form-control-sm' name='lcl[]' placeholder='ราคา LCL'>";
                cell4.innerHTML =
                    "<input type='number' class='form-control  form-control-sm' name='twenty[]' placeholder='ราคา 20'>";
                cell5.innerHTML =
                    "<input type='number' class='form-control  form-control-sm' name='forty[]' placeholder='ราคา 40'>";
                cell6.innerHTML =
                    "<input type='number' class='form-control  form-control-sm' name='fortyhc[]' placeholder='ราคา 40'HC'>";
                cell7.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='tt[]' placeholder='เงื่อนไขการค้า'>";
                cell8.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='via[]' placeholder='สายเรือ'>";
                cell9.innerHTML =
                    "<input type='date' class='form-control  form-control-sm' name='etd[]' placeholder='เวลาออกเดินทางโดยประมาณ'>";
                cell10.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='carrier[]' placeholder='ผู้ให้บริการ'>";
            } else if (tableId == "transportationTable") {
                var cell8 = row.insertCell(7);
                var cell9 = row.insertCell(8);
                cell1.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='cy[]' placeholder='...'>";
                cell2.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='loading[]' placeholder='...'>";
                cell3.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='return[]' placeholder='...'>";
                cell4.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='distance[]' placeholder='...'>";
                cell5.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='fourWeek[]' placeholder='...'>";
                cell6.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='sixWeek[]' placeholder='...'>";
                cell7.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='tenWeek[]' placeholder='...'>";
                cell8.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='twentyTrans[]' placeholder='...'>";
                cell9.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='fortyTrans[]' placeholder='...'>";
            } else if (tableId == "additionalTable") {
                cell1.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='service[]' placeholder='...'>";
                cell2.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='type[]' placeholder='...'>";
                cell3.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='currency[]' placeholder='...'>";
                cell4.innerHTML =
                    "<input type='text' class='form-control  form-control-sm' name='des[]' placeholder='...'>";
                cell5.innerHTML =
                    "<input type='number' class='form-control  form-control-sm' name='usd[]' placeholder='...'>";
                cell6.innerHTML =
                    "<input type='number' class='form-control  form-control-sm' name='thb[]' placeholder='...'>";
                cell7.innerHTML =
                    "<input type='number' class='form-control  form-control-sm' name='unit[]' placeholder='...'>";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
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
</body>

</html>

