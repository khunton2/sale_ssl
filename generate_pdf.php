<?php
require_once 'vendor/autoload.php';

// Create instance of TCPDF
$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
define('THSarabun', TCPDF_FONTS::addTTFfont(dirname(__FILE__) . '\fonts\THSarabun.ttf', 'TrueTypeUnicode'));

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Company Name');
$pdf->SetTitle('Quotation');
$pdf->SetSubject('Quotation');
$pdf->SetKeywords('Quotation, Invoice');
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
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
$pdf->SetFont(THSarabun, '', 14);

// HTML content for the table with separate CSS style block
$html = '
<head>
    <style>
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
    </style>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th colspan="6">QUOTATION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Company:</td>
                    <td colspan="3">Fake Company Inc.</td>
                    <td>Ref No:</td>
                    <td>Q123456</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td colspan="3">123 Main Street, Cityville</td>
                    <td>Date:</td>
                    <td>2024-01-21</td>
                </tr>
                <tr>
                    <td>Attention:</td>
                    <td colspan="3">John Doe</td>
                </tr>
                <tr>
                    <td>Tel:</td>
                    <td colspan="3">(555) 123-4567</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td colspan="3">john.doe@ครับ.com</td>
                </tr>
                <!-- Additional rows for quotation details can be added here -->
            </tbody>
        </table>
    </div>
</body>
';

// Write HTML content to PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF as a string
$Output = $pdf->Output('', 'S');

// Embed the PDF using an <iframe>
echo '<iframe width="100%" height="500px" src="data:application/pdf;base64,' . base64_encode($Output) . '"></iframe>';

// Close the PDF
$pdf->Close();
?>
