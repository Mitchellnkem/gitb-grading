<?php
session_Start();
if(session_destroy()){
	// header("");
	include 'db.php';
	mysqli_query($conn, "INSERT INTO history_log (transaction,user_id,date_added)Values('logged out', '".$_SESSION['ID']."',NOW()");
	header("Location: login.php");
}
?>