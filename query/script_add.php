
<?php
echo' 
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
//เช็คหน่อยว่ามีส่ง input อะไรมาบ้าง
//     echo '<pre>';
//         print_r($_POST);
//   echo '</pre>';
//   exit();
 
  //ตรวจสอบตัวแปรที่ส่งมาจากฟอร์ม
  if (isset($_POST['name']) && isset($_POST['script_youtube']) && isset($_POST['user'])) {
  //ไฟล์เชื่อมต่อฐานข้อมูล
  require_once '../connectDB/connectDB.php';
      //sql insert
      $stmt = $conn->prepare("INSERT INTO tbl_script(id,name,script_youtube,user)
      VALUES
      (null,:name,:script_youtube,:user)
      ");

      //bindParam data type
      $stmt->bindParam(':name',$_POST['name'],PDO::PARAM_STR);
      $stmt->bindParam(':script_youtube', $_POST['script_youtube'], PDO::PARAM_STR);
      $stmt->bindParam('user', $_POST['user'], PDO:: PARAM_STR);
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
      window.location = "../add_script.php"; //หน้าที่ต้องการให้กระโดดไป
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
      window.location = "../add_script.php"; //หน้าที่ต้องการให้กระโดดไป
      });
    }, 1000);
  </script>';
  } //else ของ if result
   
  } //isset
 

  ?>