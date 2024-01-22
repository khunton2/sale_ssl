<?php

// Assuming you have a database connection already established

require_once 'connectDB/connectDB.php';



// Get the id from the AJAX request
$id = isset($_POST['id']) ? $_POST['id'] : null;

if ($id) {
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT tbl_listcompane.id,tbl_has_file.path, tbl_has_file.name_of_file 
    FROM tbl_listcompane 
    JOIN tbl_quotation ON tbl_listcompane.id = tbl_quotation.listcompane 
    JOIN tbl_has_file ON tbl_quotation.id = tbl_has_file.quotation
    WHERE tbl_listcompane.id = :id");




    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Fetch the row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Return the result (you can customize this based on your needs)
    echo json_encode($row);
} else {
    // Handle the case where id is not provided
    echo "No id provided.";
}
