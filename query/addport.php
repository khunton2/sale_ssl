<?php
header('Content-Type: text/html; charset=UTF-8');

?>


<?php 
if(isset($_GET['id'])){
require_once '../connectDB/connectDB.php';
//ประกาศตัวแปรรับค่าจาก param method get
$id = $_GET['id'];
$session = 4;
$stmt = $conn->prepare('UPDATE `tbl_listcompane` SET `open` = :session WHERE id=:id');
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->bindParam(':session' ,$session,PDO::PARAM_INT);
$stmt->execute();

//  sweet alert 
echo ' 
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

  if($stmt->rowCount() ==1){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "เพิ่มข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "../index.php"; //หน้าที่ต้องการให้กระโดดไป
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
                  window.location = "../index.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
$conn = null;
} //isset
?>