<?php

include_once('dbconnection.php');

function generateAddForm() {
    echo '<form method="post" action="insert.php">'; // Assuming you're submitting the form to insert.php
    echo '<div class="form-group">';

    // No need for a loop in add.php since we are not pre-filling values
    echo '<label for="productname">Product Name</label>';
    echo '<input type="text" class="form-control" id="productname" name="productname" required>';

    echo '<label for="hardwaretype">Hardware Type</label>';
    echo '<input type="text" class="form-control" id="hardwaretype" name="hardwaretype" required>';

    echo '<label for="os">OS</label>';
    echo '<input type="text" class="form-control" id="os" name="os" required>';

    echo '<label for="frequency">Frequency</label>';
    echo '<input type="text" class="form-control" id="frequency" name="frequency" required>';

    echo '<label for="solution">Solution</label>';
    echo '<input type="text" class="form-control" id="solution" name="solution" required>';

    // Add a submit button
    echo '<button type="submit" class="btn btn-primary">Add</button>';

    echo '</div>';
    echo '</form>';
}

generateAddForm();
?>