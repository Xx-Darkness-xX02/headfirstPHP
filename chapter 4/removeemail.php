<?php
$dbc = mysqli_connect('localhost', 'root', '', 'elvis_store');

$email = $_POST['email'];

$query = "DELETE FROM email_list WHERE email = '$email'";
mysqli_query($dbc, $query);

echo 'your email:' . $email . 'has been removed';

mysqli_close($dbc);