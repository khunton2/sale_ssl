<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SSL logistic</title>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</head>
<body>


<?php
 
// print_r($_POST); //ตรวจสอบมี input อะไรบ้าง และส่งอะไรมาบ้าง 
//ถ้ามีค่าส่งมาจากฟอร์ม
   if(isset($_POST['username']) && isset($_POST['password']) ){
   // sweet alert 


   //ไฟล์เชื่อมต่อฐานข้อมูล
   require_once 'connectDB/connectDB.php';
   //ประกาศตัวแปรรับค่าจากฟอร์ม
   $username = $_POST['username'];
   $password = $_POST['password']; 

   

   //check username  & password
     $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE username = :username AND password = :password");
     $stmt->bindParam(':username', $username , PDO::PARAM_STR);
     $stmt->bindParam(':password', $password , PDO::PARAM_STR);
     $stmt->execute();

     //กรอก username & password ถูกต้อง
     if($stmt->rowCount() == 1){
       //fetch เพื่อเรียกคอลัมภ์ที่ต้องการไปสร้างตัวแปร session
       $row = $stmt->fetch(PDO::FETCH_ASSOC);
       //สร้างตัวแปร session
       $_SESSION['id'] = $row['id'];
       $_SESSION['name'] = $row['name'];
       $_SESSION['surname'] = $row['surname'];
       $_SESSION['userlevel'] = $row['userlevel'];

       //เช็คว่ามีตัวแปร session อะไรบ้าง
        // print_r($_SESSION);

        // exit();
      if($_SESSION["userlevel"]=="admin"){ 
        echo '<script>window.location = "ad_index.php"; </script>';
      }else if ($_SESSION["userlevel"]=="sale"){ 
        echo '<script>window.location = "index.php"; </script>';
      }else if($_SESSION["userlevel"]=="manager"){
        echo '<script>window.location = "manager_index.php"; </script>';

      }else{ //ไม่พบข้อมูล
        // echo 'not found 1';
        echo '<script>
                    
                     swal({
                         title: "เกิดข้อผิดพลาด",
                          text: " ไม่พบข้อมูล ลองใหม่อีกครั้ง1",
                         type: "warning"
                     }, function() {
                         window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                     });
                   
               </script>';
      }
    }else{ // password ไม่ถูกต้อง
      // echo 'not found 2';
      echo '<script>
                    
                     swal({
                         title: "เกิดข้อผิดพลาด",
                          text: " Password ไม่ถูกต้อง ลองใหม่อีกครั้ง",
                         type: "warning"
                     }, function() {
                         window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                     });
                   
               </script>';
         //  $conn = null; //close connect db
         } //else
   }else{
    // echo 'not found 3';
    // not found
    echo '<script>
                   
                     swal({
                         title: "เกิดข้อผิดพลาด",
                          text: "ไม่พบ username หรือ email โปรกลองใหม่อีกครั้ง",
                         type: "warning"
                     }, function() {
                         window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                     });
          
               </script>';
   }
   ?>

</body>
</html>
