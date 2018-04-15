<?php
	
	//enable display of all errors for debuging purposes
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
	
	//Connect to the database
	if(!isset($con)){
		require_once('dbconnect.php');
	}

	$disater_type = $_REQUEST['disastertype'];
	
	$query = "SELECT * FROM mytable WHERE incidentType='$disater_type'";
	$results = mysqli_query($con, $query);
	$row_count = mysqli_num_rows($results);
	
	$query = "SELECT * FROM mytable WHERE incidentType='$disater_type' and state='AL'";
	$results = mysqli_query($con, $query);
	$row_countAlabama = mysqli_num_rows($results);
	
	$query = "SELECT * FROM mytable WHERE incidentType='$disater_type' and state='AK'";
	$results = mysqli_query($con, $query);
	$row_countAlaska = mysqli_num_rows($results);
	
	$query = "SELECT * FROM mytable WHERE incidentType='$disater_type' and state='AZ'";
	$results = mysqli_query($con, $query);
	$row_countArizona = mysqli_num_rows($results);
	
	
	echo "<h1>Number of $disater_type"."s = ".$row_count."<br>Alabama = $row_countAlabama<br>Alaska = $row_countAlaska<br>Arizona = $row_countArizona</h1>";
	
	
?>