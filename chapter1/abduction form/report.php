<?php
$name = $_POST['firstname'] . '' .  $_POST['lastname'];
$how_many = $_POST['howmany'];
$when_it_happend = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$alien_description = $_POST['aliendescription'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$what_they_did = $_POST['whattheydid'];
$other = $_POST['other'];

$to = 'kjellroelofs12@gmail.com';
$subject = 'Aliens abducted me - abduction report';
$msg = "$name was abducted $when_it_happend and was gone for $how_long. \n" .
    "Number of aliens: $how_many\n" .
    "alien description $alien_description\n" .
    "What they did $what_they_did\n" .
    "Fang spotted $fang_spotted\n" .
    "other comments $other";
mail($to, $subject, $msg, 'from' . $email);

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