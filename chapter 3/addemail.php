<?php

$dbc = mysqli_connect('Localhost', 'root', '', 'elvis_store');

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];

$query = "INSERT INTO email_list(first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

mysqli_query($dbc, $query) or die('error querying');

echo "customer added '<a href='addemail.html'>home</a>";

mysqli_close($dbc);