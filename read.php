<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM teacher" )
		or die("Can not execute query");

    /*while( $rows = mysqli_fetch_array( $results ) ) {
        extract( $rows );
        echo "$dep";
        echo "\n";
    }*/

	echo "<table border> \n";
	echo "<th>id</th>
          <th>dep</th> 
          <th>name</th>
          <th>nid</th> 
          <th>birth</th>
          <th>address</th> 
          <th>Delete</th>
          <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $id </td>";
		echo "<td> $dep </td>";
        echo "<td> $name </td>";
		echo "<td> $nid </td>";
        echo "<td> $birth </td>";
		echo "<td> $address </td>";
		echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>";
		echo "<td> <a href = 'update.php?id=$id&dep=$dep&name=$name&nid=$nid&birth=$birth&address=$address'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_teach.php>CREATE a new record</a>";
?>