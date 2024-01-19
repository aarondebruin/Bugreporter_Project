<?php

include_once('dbconnection.php');

function generateEditForm($id) {
    global $pdo; // Assuming $pdo is your PDO connection variable

    // Fetch the data for the specified ID from the database
    $stmt = $pdo->prepare("SELECT * FROM Products WHERE id = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        echo 'Item not found';
        return;
    }

    // Display the edit form
    echo '<form method="post" action="update.php">';
    echo '<div class="form-group">';

    echo '<label for="id">ID</label>';
    echo '<input type="text" class="form-control" id="id" name="id" value="' . $row['id'] . '" readonly>';

    echo '<label for="productname">Product Name</label>';
    echo '<input type="text" class="form-control" id="productname" name="productname" value="' . $row['Productname'] . '">';

    echo '<label for="hardwaretype">Hardware Type</label>';
    echo '<input type="text" class="form-control" id="hardwaretype" name="hardwaretype" value="' . $row['Hardwaretype'] . '">';

    echo '<label for="os">OS</label>';
    echo '<input type="text" class="form-control" id="os" name="os" value="' . $row['OS'] . '">';

    echo '<label for="frequency">Frequency</label>';
    echo '<input type="text" class="form-control" id="frequency" name="frequency" value="' . $row['frequency'] . '">';

    echo '<label for="solution">Solution</label>';
    echo '<input type="text" class="form-control" id="solution" name="solution" value="' . $row['solution'] . '">';

    // Add a submit button
    echo '<button type="submit" class="btn btn-primary">Update</button>';

    echo '</div>';
    echo '</form>';
}

// Get the id from the URL parameter
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    generateEditForm($id);
} else {
    echo 'ID not provided';
}
?>