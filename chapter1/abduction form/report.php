<?php
$when_it_happend = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$alien_description = $_POST['aliendescription'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];

echo 'thanks for submitting the form<br />';
echo 'you were abducted ' . $when_it_happend;
echo ' and you were gone for ' . $how_long . '<br />';
echo 'Describe them: ' . $alien_description . '<br />';
echo 'Was Fang there? ' . $fang_spotted . '<br />';
echo 'your email addres is ' . $email;

?>