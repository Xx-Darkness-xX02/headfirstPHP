<?php
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$how_many = $_POST['howmany'];
$when_it_happend = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$alien_description = $_POST['aliendescription'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$what_they_did = $_POST['whattheydid'];
$other = $_POST['other'];

$dbc = mysqli_connect('localhost', 'root', '', 'aliendatabase') or die('error connecting to MySQL server');

$query = "INSERT INTO aliens_abduction(first_name, last_name, when_it_happend, how_long, 
how_many, alien_description, what_they_did, fang_spotted, other, email)
values ('$first_name', '$last_name', '$when_it_happend', '$how_long', '$how_many', '$alien_description', '$what_they_did', '$fang_spotted',
'$other', '$email')";

$result = mysqli_query($dbc, $query)
or die('error querying');
mysqli_close($dbc);

echo 'thanks for submitting the form<br />';
echo 'you were abducted ' . $when_it_happend;
echo ' and you were gone for ' . $how_long . '<br />';
echo 'Number of aliens ' . $how_many . '<br />';
echo 'Describe them: ' . $alien_description . '<br />';
echo 'The aliens did this: ' . $what_they_did . '<br />';
echo 'Was Fang there? ' . $fang_spotted . '<br />';
echo 'other comments: ' . $other . '<br />';
echo 'your email addres is ' . $email;


?>