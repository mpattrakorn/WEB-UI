<?php

    $templeName = $_POST["nameTemple"];
	$phone = $_POST["phone"];
    $city = $_POST["city"];
    $item1 = $_POST["item1"];
    $item2 = $_POST["item2"];
    $noitem1 = $_POST["noitem1"];
    $noitem2 = $_POST["noitem2"];

	require_once("mysql.php");

    $check = $mysqli->
        	 query("SELECT * FROM temple where name = '$templeName'");
    
    if ($check->num_rows < 1){

			$result = $mysqli->query("INSERT INTO `temple`(`name`, `tel`,`city`) 
                                    VALUES ('$templeName', '$phone', '$city')");

			echo "<script>alert('add successfully!');</script>";

	} else {
		echo "<script>alert('The temple's name already exists!');</script>";
	}

	echo "<script>location.href='../Monk.php'</script>"

?>