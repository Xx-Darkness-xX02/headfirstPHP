<?php
$from = 'kjellroelofs12@gmail.com';
$subject = $_POST['subject'];
$text = $_POST['elvismail'];

$dbc = mysqli_connect('localhost', 'root', '', 'elvis_store')
or die ('error connecting to MySQL');

$query = "SELECT * FROM email_list";
$result = mysqli_query($dbc, $query) or die ('error querying');

while($row = mysqli_fetch_array($result)){
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
}

$msg = "Dear $first_name $last_name, \n  $text";
$to = $row['email'];
mail($to, $subject, $msg, 'from'. $from );

echo 'email sent to:' . $to . '<br />';

mysqli_close($dbc);