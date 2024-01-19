<?php
include_once('dbconnection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your form fields are named productname, hardwaretype, os, frequency, solution
    $productname = $_POST['productname'];
    $hardwaretype = $_POST['hardwaretype'];
    $os = $_POST['os'];
    $frequency = $_POST['frequency'];
    $solution = $_POST['solution'];

    try {
        // Prepare the SQL insert statement
        $stmt = $pdo->prepare("INSERT INTO Products (Productname, Hardwaretype, OS, frequency, solution) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$productname, $hardwaretype, $os, $frequency, $solution]);

        // Redirect to index.php after successful insert
        header('Location: index.php');
        exit(); // Ensure that no code is executed after the header() function
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>