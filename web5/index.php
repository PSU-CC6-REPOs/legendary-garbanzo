<?php
session_start(); 
if(!isset($_SESSION['visits'])) {
  $_SESSION['visits'] = 0; 
}
$_SESSION['visits']++; 
if($_SESSION['visits'] == 5) {
  echo "Thank you for visiting the page a lot.";
}
if($_SESSION['visits'] == 10) {
  header('Location: congratulations.php'); 
  exit();
}
echo "Number of visits: " . $_SESSION['visits']; 
?>


<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>
