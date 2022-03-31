<?php

	$id = $_GET["id"];

	$dep = $_GET["dep"];

    $name = $_GET["name"];

	$nid = $_GET["nid"];

    $birth = $_GET["birth"];

	$address = $_GET["address"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO teacher VALUES ( '$id', '$dep', '$name','$nid','$birth','$address' )" )

		or die("Can not execute query");



	echo "Record inserted";



	echo "<p><a href=read.php>READ all records</a>";

?>