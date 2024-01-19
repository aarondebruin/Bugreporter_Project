<?php
include_once('dbconnection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your form fields are named id, productname, hardwaretype, os, frequency, solution
    $id = $_POST['id'];
    $productname = $_POST['productname'];
    $hardwaretype = $_POST['hardwaretype'];
    $os = $_POST['os'];
    $frequency = $_POST['frequency'];
    $solution = $_POST['solution'];

    try {
        // Prepare the SQL update statement
        $stmt = $pdo->prepare("UPDATE Products SET Productname = ?, Hardwaretype = ?, OS = ?, frequency = ?, solution = ? WHERE id = ?");
        $stmt->execute([$productname, $hardwaretype, $os, $frequency, $solution, $id]);

        // Redirect to index.php after successful update
        header('Location: index.php');
        exit(); // Ensure that no code is executed after the header() function
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>