<?php
session_start();

if (($_GET['reset'] ?? false) == true) {
    session_destroy();
    header('Location: index.php');
} else {
    $num_visits = $_SESSION['num_visits'] ?? 1;
    $_SESSION['num_visits'] = $num_visits + 1;
}
?>

<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>

<?php 
    if ($num_visits == 5 && $num_visits < 10) {
        echo "<p>Thank you for visiting the page a lot.</p>";
    } else if ($num_visits == 10) {
        header('Location: congratulations.php');
    } 
?>

