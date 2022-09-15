<?php
include 'includes/DB_connect.php';
global $db;
if(isset($_POST['supprimer'])){
    $del = $db->prepare("DELETE FROM users WHERE email = :email");
    $del->execute(['email' => $_SESSION['email']]);
    echo "<p> le compte à bien été supprimé </p>";

    session_unset();
			 header("location:test.php");
}