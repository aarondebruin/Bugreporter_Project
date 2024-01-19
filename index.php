<?php

include_once('dbconnection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bugreporter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product name</th>
                    <th scope="col">Version</th>
                    <th scope="col">Hardware Type</th>
                    <th scope="col">OS</th>
                    <th scope="col">Frequency</th>
                    <th scope="col">Solution</th>
                    <th scope="col">Edit link</th>

                </tr>
            </thead>
            <tbody>
                <?php
function generateTableRows($data) {
    foreach ($data as $row) {
        echo '<tr>';
        echo '<th scope="row">' . $row['id'] . '</th>';
        echo '<td>' . $row['Productname'] . '</td>';
        echo '<td>' . $row['Hardwaretype'] . '</td>';
        echo '<td>' . $row['OS'] . '</td>';
        echo '<td>' . $row['frequency'] . '</td>';
        echo '<td>' . $row['solution'] . '</td>';
        echo '<td><a class="btn btn-primary" href="edit.php?id=' . $row['id'] . '" role="button">Edit</a></td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}


generateTableRows($results);
?>

                <a class="btn btn-primary" href="add.php" role="button">Add bug</a>

            </tbody>
        </table>
    </div>

</body>

</html>