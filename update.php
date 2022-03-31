<?php

	$id = $_GET["id"];

	$dep = $_GET["dep"];

	$name = $_GET["name"];

    $nid = $_GET["nid"];

	$birth = $_GET["birth"];

	$address = $_GET["address"];

?>



<h1>Update Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	dept: <input type=text name=dep value='<?php echo $dep; ?>'> <br>

	<p>
	name: <input type=text name=name value='<?php echo $name; ?>'> <br>

	<p>

	nid: <input type=text name=nid value='<?php echo $nid; ?>'> <br>

	<p>
	
	birth:<input type="date" name="birth" value='<?php echo $birth; ?>'><br>
	<p>

	address: <input type=text name=address value='<?php echo $address; ?>'> <br>

    <p>

	<input type=submit value=Update>

</form>