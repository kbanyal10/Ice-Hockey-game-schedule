<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

<h1> Ice Hockey </h1>




<?php

// connect
$db = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200395834', 'gc200395834', 'RfOMQChbzO');

// set up query
$sql = "SELECT * FROM teams";
// execute & store the result
$cmd = $db->prepare($sql);
$cmd->execute();
$teams = $cmd->fetchAll();
// start the table
echo '<table class="table table-striped table-hover"><thead><th>City</th><th>Nick Name</th><th>Division</th></thead>';
// loop through the data & show each restaurant on a new row
foreach ($teams as $r) {
    echo '<tr><td>' . $r['city'] .
        '</td><td>' . $r['nickname'] .
        '</td><td>' . $r['division'] . '</td></tr>';
}
// close the table
echo '</table>';
// disconnect
$db = null;

?>

</body>
</html>
