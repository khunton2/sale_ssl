<?php
date_default_timezone_set('Asia/Bangkok');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'ssl_seller');
        $mysqli->begin_transaction();
        $commodity = $_POST['commodity'];
        $volumn = $_POST['volumn'];
        $term = $_POST['term'];
        $weight = $_POST['weight'];
        $listcompane = $_POST["listcompane"];
        if (isset($_POST["pol"])) {
            // เพิ่มข้อมูลที่เกี่ยวข้องเพิ่มเติมลงในข้อความแจ้ง
            $quotation_number = date("YmdHis");
            echo "ใบเสนอราคาเลขที่ $quotation_number ได้รับการส่งแล้ว";
            $pols = $_POST["pol"];
            $pods = $_POST["pod"];
            $lcls = $_POST["lcl"];
            $twentys = $_POST["twenty"];
            $forties = $_POST["forty"];
            $fortyhcs = $_POST["fortyhc"];
            $tts = $_POST["tt"];
            $vias = $_POST["via"];
            $etds = $_POST["etd"];
            $carriers = $_POST["carrier"];
            // Variables for tbl_has_sea_customs
            $clearanceTypes = $_POST['clearance'];
            $lclValues = $_POST['clearance_lcl'];
            $inch20Values = $_POST['clearance_20_inch'];
            $inch40Values = $_POST['clearance_40_inch'];
            $inch40HcValues = $_POST['clearance_40__hc_inch'];
            // Assuming you have a database connection established
            // Replace 'your_host', 'your_username', 'your_password', and 'your_database' with your actual database credentials
            // Check the connection
            if ($mysqli->connect_error) {
                die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
            }
            // Set fake data for quotation
            $sqlQuotation = "INSERT INTO tbl_quotation (commodity, volumn, term, weight, created_at, listcompane) VALUES (?, ?, ?, ?, NOW(), ?)";
            $stmtQuotation = $mysqli->prepare($sqlQuotation);
            if ($stmtQuotation) {
                // Bind parameters and execute the statement for creating a quotation
                $stmtQuotation->bind_param("ssssi", $commodity, $volumn, $term, $weight, $listcompane);
                // Execute the statement for creating a quotation
                $stmtQuotation->execute();
                // Get the ID of the newly created quotation
                $quotationId = $stmtQuotation->insert_id;
                // Close the statement for creating a quotation
                $stmtQuotation->close();
                $variablesHasSea = ["pol", "pod", "lcl", "twenty", "forty", "fortyhc", "tt", "via", "etd", "carrier"];
                $sqlHasSea = "INSERT INTO tbl_has_sea (pol, pod, lcl, 20_inch, 40_inch, 40_inch_hc, tt, via, etd, carrier, quotation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmtHasSea = $mysqli->prepare($sqlHasSea);
                $clearanceTypes = ["LCL", "First Container", "2nd - up"];
                $sqlHasSeaCustoms = "INSERT INTO tbl_has_sea_customs 
                (customs_clearance, lcl, 20_inch, 40_inch, 40_inch_hc, quotation) VALUES (?, ?, ?, ?, ?, ?)";
                $stmtHasSeaCustoms = $mysqli->prepare($sqlHasSeaCustoms);
                $variablesAdditionalCharges = ["service", "type", "currency", "des", "usd", "thb", "unit"];
                $sqlAdditionalCharges = "INSERT INTO tbl_additional_charges (service, type, currentcy, des, usd, thb, unit, quotation) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmtAdditionalCharges = $mysqli->prepare($sqlAdditionalCharges);
                if ($stmtHasSea) {
                    // Bind parameters for inserting into tbl_has_sea
                    $stmtHasSea->bind_param("ssiiisssssi", $pol, $pod, $lcl, $twenty, $forty, $fortyhc, $tt, $via, $etd, $carrier, $quotationId);
                    // Loop through the variables and insert row by row
                    foreach ($_POST["pol"] as $index => $pol) {
                        $pod = $_POST["pod"][$index];
                        $lcl = $_POST["lcl"][$index];
                        $twenty = $_POST["twenty"][$index];
                        $forty = $_POST["forty"][$index];
                        $fortyhc = $_POST["fortyhc"][$index];
                        $tt = $_POST["tt"][$index];
                        $via = $_POST["via"][$index];
                        $etd = $_POST["etd"][$index];
                        $carrier = $_POST["carrier"][$index];
                        // Execute the statement for inserting into tbl_has_sea
                        $stmtHasSea->execute();
                    }
                    $seaId = $stmtHasSea->insert_id;
                    // Close the statement for inserting into tbl_has_sea
                    $stmtHasSea->close();
                }
                if ($stmtHasSeaCustoms) {
                    // Bind parameters for inserting into tbl_has_sea_customs
                    $stmtHasSeaCustoms->bind_param("sssssi", $clearanceType, $lcl, $inch20, $inch40, $inch40Hc, $quotationId);
                    // Loop through the clearance types and insert row by row
                    for ($i = 0; $i < count($clearanceTypes); $i++) {
                        $clearanceType = $clearanceTypes[$i];
                        $lcl = $_POST['clearance_lcl'][$i];
                        $inch20 = $_POST['clearance_20_inch'][$i];
                        $inch40 = $_POST['clearance_40_inch'][$i];
                        $inch40Hc = $_POST['clearance_40__hc_inch'][$i];
                        // Execute the statement for inserting into tbl_has_sea_customs
                        $stmtHasSeaCustoms->execute();
                    }
                    // Close the statement for inserting into tbl_has_sea_customs
                    $stmtHasSeaCustoms->close();
                }
                if ($stmtAdditionalCharges) {
                    // Iterate through each index of the arrays and insert one row at a time
                    $serviceArray = $_POST['service'] ?? [];
                    $typeArray = $_POST['type'] ?? [];
                    $currencyArray = $_POST['currency'] ?? [];
                    $desArray = $_POST['des'] ?? [];
                    $usdArray = $_POST['usd'] ?? [];
                    $thbArray = $_POST['thb'] ?? [];
                    $unitArray = $_POST['unit'] ?? [];
                    $count = max(
                        count($serviceArray),
                        count($typeArray),
                        count($currencyArray),
                        count($desArray),
                        count($usdArray),
                        count($thbArray),
                        count($unitArray)
                    );
                    for ($i = 0; $i < $count; $i++) {
                        // Check if array key exists for the current index
                        if (
                            isset($serviceArray[$i]) &&
                            isset($typeArray[$i]) &&
                            isset($currencyArray[$i]) &&
                            isset($desArray[$i]) &&
                            isset($usdArray[$i]) &&
                            isset($thbArray[$i]) &&
                            isset($unitArray[$i])
                        ) {
                            // Bind parameters for the current index and execute the statement
                            $stmtAdditionalCharges->bind_param(
                                "ssssdids",
                                $serviceArray[$i],
                                $typeArray[$i],
                                $currencyArray[$i],
                                $desArray[$i],
                                $usdArray[$i],
                                $thbArray[$i],
                                $unitArray[$i],
                                $quotationId
                            );
                            $stmtAdditionalCharges->execute();
                        } else {
                            // Handle the case where one or more array keys are empty or undefined
                            // You can log an error, display a message, or take appropriate action.
                            // For now, we'll just print a message.
                            echo "Skipping empty or undefined array key at index $i.";
                        }
                    }
                    // Close the statement for inserting into tbl_additional_charges
                    $stmtAdditionalCharges->close();
                }
            }
            $mysqli->commit();
            echo "<script>console.log('inside')</script>";
            gen_mpdf($listcompane, $commodity, $volumn, $term, $weight,
            $pols, $pods, $lcls, $twentys, $forties, $fortyhcs, $tts, $vias, $etds, $carriers);
            // header("Location: saler_port.php");
            // exit;
        } else {
            if ($mysqli->connect_error) {
                die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
            }
            // Set fake data for quotation
            $commodity = "Electronics";
            $volumn = "1000 units";
            $term = "FOB";
            $weight = "500 kg";
            $listcompane = $_POST["listcompane"];
            $sqlQuotation = "INSERT INTO tbl_quotation (commodity, volumn, term, weight, created_at, listcompane) VALUES (?, ?, ?, ?, NOW(), ?)";
            $stmtQuotation = $mysqli->prepare($sqlQuotation);
            if ($stmtQuotation) {
                $stmtQuotation->bind_param("ssssi", $commodity, $volumn, $term, $weight, $listcompane);
                $stmtQuotation->execute();
                $quotationId = $stmtQuotation->insert_id;
                $stmtQuotation->close();
            }
            $variablesHasTransport = ["cy", "loading", "return", "distance", "fourWeek", "sixWeek", "tenWeek", "twentyTrans", "fortyTrans"];
            $sqlHasTransport = "INSERT INTO tbl_has_transport (cy, loading, return_data, distance, 4_w, 6_w, 10_w, 20_inch, 40_inch, quotation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmtHasTransport = $mysqli->prepare($sqlHasTransport);
            $variablesAdditionalCharges = ["service", "type", "currency", "des", "usd", "thb", "unit"];
            $sqlAdditionalCharges = "INSERT INTO tbl_additional_charges (service, type, currentcy, des, usd, thb, unit, quotation) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmtAdditionalCharges = $mysqli->prepare($sqlAdditionalCharges);
            if ($stmtHasTransport) {
                // Iterate through the arrays and insert row by row
                for ($i = 0; $i < count($_POST['cy']); $i++) {
                    foreach ($variablesHasTransport as $variable) {
                        if (isset($_POST[$variable][$i])) {
                            ${$variable} = $_POST[$variable][$i];
                        }
                    }
                    // Bind parameters and execute the statement for inserting into tbl_has_transport
                    $stmtHasTransport->bind_param("sssssssssi", $cy, $loading, $return, $distance, $fourWeek, $sixWeek, $tenWeek, $twentyTrans, $fortyTrans, $quotationId);
                    // Execute the statement for inserting into tbl_has_transport
                    $stmtHasTransport->execute();
                }
                // Close the statement for inserting into tbl_has_transport
                $stmtHasTransport->close();
                // If everything is successful, commit the transaction
            }
            if ($stmtAdditionalCharges) {
                // Iterate through each index of the arrays and insert one row at a time
                $serviceArray = $_POST['service'] ?? [];
                $typeArray = $_POST['type'] ?? [];
                $currencyArray = $_POST['currency'] ?? [];
                $desArray = $_POST['des'] ?? [];
                $usdArray = $_POST['usd'] ?? [];
                $thbArray = $_POST['thb'] ?? [];
                $unitArray = $_POST['unit'] ?? [];
                $count = max(
                    count($serviceArray),
                    count($typeArray),
                    count($currencyArray),
                    count($desArray),
                    count($usdArray),
                    count($thbArray),
                    count($unitArray)
                );
                for ($i = 0; $i < $count; $i++) {
                    // Check if array key exists for the current index
                    if (
                        isset($serviceArray[$i]) &&
                        isset($typeArray[$i]) &&
                        isset($currencyArray[$i]) &&
                        isset($desArray[$i]) &&
                        isset($usdArray[$i]) &&
                        isset($thbArray[$i]) &&
                        isset($unitArray[$i])
                    ) {
                        // Bind parameters for the current index and execute the statement
                        $stmtAdditionalCharges->bind_param(
                            "ssssdids",
                            $serviceArray[$i],
                            $typeArray[$i],
                            $currencyArray[$i],
                            $desArray[$i],
                            $usdArray[$i],
                            $thbArray[$i],
                            $unitArray[$i],
                            $quotationId
                        );
                        $stmtAdditionalCharges->execute();
                    } else {
                        // Handle the case where one or more array keys are empty or undefined
                        // You can log an error, display a message, or take appropriate action.
                        // For now, we'll just print a message.
                        echo "Skipping empty or undefined array key at index $i.";
                    }
                }
                // Close the statement for inserting into tbl_additional_charges
                $stmtAdditionalCharges->close();
            }
            $mysqli->commit();
            // gen_mpdf($listcompane, $commodity, $volumn, $term, $weight,$_POST["pod"]);
            // header("Location: saler_port.php");
            // exit;
        }
    } catch (\Throwable $e) {
        $mysqli->rollback();
        echo "Transaction failed: " . $e->getMessage();
    }
    $mysqli->close();
}
//----------------⚡⚡⚡⚡  G E N E R A T E ___ P D F ⚡⚡⚡⚡----------------//
function gen_sea_table(){
    $sea_table = "";
foreach ($_POST["pol"] as $index => $pol) {
    $pod = $_POST["pod"][$index];
    $lcl = $_POST["lcl"][$index];
    $twenty = $_POST["twenty"][$index];
    $forty = $_POST["forty"][$index];
    $fortyhc = $_POST["fortyhc"][$index];
    $tt = $_POST["tt"][$index];
    $via = $_POST["via"][$index];
    $etd = $_POST["etd"][$index];
    $carrier = $_POST["carrier"][$index];
    $sea_table .= '<tr>';
    $sea_table .= '<td>' . htmlspecialchars($pol) . '</td>';
    $sea_table .= '<td>' . htmlspecialchars($pod) . '</td>';
    $sea_table .= '<td>' . htmlspecialchars($lcl) . '</td>';
    $sea_table .= '<td>' . htmlspecialchars($twenty) . '</td>';
    $sea_table .= '<td>' . htmlspecialchars($forty) . '</td>';
    $sea_table .= '<td>' . htmlspecialchars($fortyhc) . '</td>';
    $sea_table .= '<td>' . htmlspecialchars($tt) . '</td>';
    $sea_table .= '<td>' . htmlspecialchars($via) . '</td>';
    $sea_table .= '<td>' . htmlspecialchars($etd) . '</td>';
    $sea_table .= '<td>' . htmlspecialchars($carrier) . '</td>';
    $sea_table .= '</tr>';
}
    return $sea_table;
}
function       gen_mpdf($listcompane, $commodity, $volumn, $term, $weight,
$pols, $pods, $lcls, $twentys, $forties, $fortyhcs, $tts, $vias, $etds, $carriers)
{
    require_once 'connectDB/connectDB.php';
    require_once 'vendor/autoload.php';
    $query =   "SELECT  Company_name,address,email,phone,open_time,id  
  FROM tbl_listcompane
  WHERE id = $listcompane";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();
    extract($result);
    // Create instance of TCPDF
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    define('THSarabun', TCPDF_FONTS::addTTFfont(dirname(__FILE__) . '\fonts\THSarabun.ttf', 'TrueTypeUnicode'));
    $logo_path = '/img/SSL_LOGO.png';
    $address_header = "1/9 Soi Supapong 1 , Srinakarin Road, Nhongbon, Prawet, Bkk 10250, Thailand\nTel: 662-330-9312, Fax: 662-330-9748 www.ssllogistics.co.th\nเลขประจำตัวผู้เสียภาษี 0-10555-001500-4";
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Company Name');
    $pdf->SetTitle('Quotation');
    $pdf->SetSubject('Quotation');
    $pdf->SetKeywords('Quotation, Invoice');
    $pdf->SetHeaderData(
        $logo_path,
        PDF_HEADER_LOGO_WIDTH,
        "SSL Logistics Co., Ltd",
        $address_header
    );
    $pdf->setHeaderFont(array(THSarabun, '', 10));
    $pdf->setFooterFont(array(THSarabun, '', 10));
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    // Add a page
    $pdf->AddPage();
    // set JPEG quality
    $pdf->setJPEGQuality(75);
    // Set custom font
    $pdf->SetFont(THSarabun, '', 12);
    // HTML content for the table with separate CSS style block
    $html = '
    <head>
        <style>
        .cus-sign {
            text-align:right;
          }
            .container {
                width: 100%;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                border: 1px solid black;
            }
            th, td {
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
            }
            .text-right {
                text-align: right;
              }
              .text-left{
                text-align: left;
              }
              .w-50{
                width: 50%;
              }
              .w-75{
                width: 75%;
              }
              .w-100{
                width:100%;
              }
              .mt-1{
                margin-top:10px ;
              }
              .remark-title {
                font-weight: 900;
              }
              .marginless{
                margin:0px;
              }
        </style>
    </head>
    <body>
    <div> </div>
            <table>
                <thead>
                    <tr>
                        <th colspan="6">QUOTATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Company:</td>
                        <td colspan="3">' . $Company_name . '</td>
                        <td>Ref No:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td colspan="3">' . $address . '</td>
                        <td>Date:</td>
                        <td>' . date('d-m-Y', strtotime($open_time)) . '</td>
                    </tr>
                    <tr>
                        <td>Attention:</td>
                        <td colspan="3"> </td>
                    </tr>
                    <tr>
                        <td>Tel:</td>
                        <td colspan="3">' . $phone . '</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td colspan="3">' . $email . '</td>
                    </tr>
                    <!-- Additional rows for quotation details can be added here -->
                </tbody>
            </table>
            <div>
            <br>
            We are pleased to submit the quotation for your consideration as per belows details:-
            </div>
        <table class="w-75">
        <tr>
          <th class="text-right">Commodity</th>
          <th> '.$commodity.'</th>
          <th class="text-right">Term</th>
          <th>'.$term.'</th>
        </tr>
        <tr>
          <td class="text-right">Volume</td>
          <td>'.$volumn.'</td>
          <td class="text-right">Weight</td>
          <td>'.$weight.'</td>
        </tr>
      </table>
<div>
</div>
      <table class=" mt-1">
      <thead>
          <tr class="vegetable-color">
              <th colspan="10">SEA-EXPORT</th>
          </tr>
          <tr class="sky-color">
              <th>POL</th>
              <th>POD</th>
              <th>LCL</th>
              <th>20\'</th>
              <th>40\'</th>
              <th>40\'HC</th>
              <th>T/T</th>
              <th>Via</th>
              <th>ETD</th>
              <th>Carrier</th>
          </tr>
      </thead>
      <tbody>';
$html .= gen_sea_table();
      $html .= '</tbody>
  </table>
<div></div>
   <table  class="">
                                    <thead>
                                        <tr class="vegetable-color">
                                            <th>Sea - Export Customs <br> Clearance</th>
                                            <th>LCL <br> per shipment</th>
                                            <th>20\' <br> Per cont\'</th>
                                            <th>40\' <br> Per cont\'</th>
                                            <th>40\'HC <br> Per cont\'</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" 
                                                    class="form-control  form-control-sm text-center" readonly
                                                    value="LCL">LCL</td>
                                            <td><input type="number"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" 
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" 
                                                    class="form-control  form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" 
                                                    class="form-control  form-control-sm text-center" readonly
                                                    value="First Container">First Container</td>
                                            <td><input type="number"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" 
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" 
                                                    class="form-control  form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" 
                                                    class="form-control  form-control-sm text-center" readonly
                                                    value="2nd - up">2nd - up</td>
                                            <td><input type="number"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" 
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number"
                                                    class="form-control  form-control-sm"></td>
                                            <td><input type="number" 
                                                    class="form-control  form-control-sm"></td>
                                        </tr>
                                    </tbody>
                                </table>
                           <br>
                                <div>Additional Charges</div>
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
                            <div class="remark-title">
                            Remark:
                            <br>• 1 Tax : Above amount is excluded VAT 7%
                            <br>• 2 Payment : Credit 15 Days
                            <br>• 3 Insurance    : Above amount is excluded
                   </div>
    </body>
    ';
    // Write HTML content to PDF
    $pdf->writeHTML($html, true, false, true, false, '');
        // Text on the left
    // Set fixed widths for the text blocks
    $leftBlockWidth = 80; // Adjust as needed
    $rightBlockWidth = 70; // Adjust as needed
    $pdf->Cell($leftBlockWidth, 0, 'Quoted by:', 0, 0, 'L');
    $pdf->Cell($rightBlockWidth, 0, 'Customer Acceptance:', 0, 1, 'L');
    $pdf->Cell($leftBlockWidth, 0, '', 0, 0, 'L');
    $pdf->Cell($leftBlockWidth, 0, 'By signing and returning the quotation, you confirm.123', 0, 1, 'L');
    $pdf->Cell($leftBlockWidth, 0, '', 0, 0, 'L');
    $pdf->Cell($leftBlockWidth, 0, 'your order to acquire the listed of services in accordance', 0, 1, 'L');
    $pdf->Cell($leftBlockWidth, 0, '(Jesada Taveesupapong)', 0, 0, 'L');
    $pdf->Cell($leftBlockWidth, 0, 'with the provisions of this quotation and the applicable terms', 0, 1, 'L');
    $pdf->Cell($leftBlockWidth, 0, 'Import & Export Executive', 0, 0, 'L');
    $pdf->Cell($leftBlockWidth, 0, '', 0, 1, 'L');
    $pdf->Cell($leftBlockWidth, 0, 'Tel.662-330-9312-13', 0, 0, 'L');
    $pdf->Cell($leftBlockWidth, 0, 'Company Name:', 0, 1, 'L');
    $pdf->Cell($leftBlockWidth, 0, 'Fax.662-330-9748', 0, 0, 'L');
    $pdf->Cell($leftBlockWidth, 0, 'Authorized Signature:', 0, 1, 'L');
    $pdf->Cell($leftBlockWidth, 0, 'Moblie: 081-8336011', 0, 1, 'L');
    $pdf->Cell($leftBlockWidth, 0, ' ', 0, 0, 'L');
    $pdf->Cell($leftBlockWidth, 0, '(............................................................................)', 0, 1, 'L');
    $pdf->Cell($leftBlockWidth, 0, ' ', 0, 0, 'L');
    $pdf->Cell($leftBlockWidth, 0, 'Title', 0, 1, 'L');
    $pdf->Cell($leftBlockWidth, 0, ' ', 0, 0, 'L');
    $pdf->Cell($leftBlockWidth, 0, 'Date:', 0, 0, 'L');
    $Output = $pdf->Output('', 'S');
    // Embed the PDF using an <iframe>
    echo '<iframe width="100%" height="100%" src="data:application/pdf;base64,' . base64_encode($Output) . '"></iframe>';
    // Close the PDF
    $pdf->Close();
}