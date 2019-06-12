<?php
    include 'header.php';
	$_SESSION["user"] = false;
	$_SESSION["username"] = "";
	$_SESSION["user-id"] = "";
	$_SESSION["name"] = $name;
    $_SESSION["surname"] = "";
    $_SESSION["number"] = "";
    $_SESSION["month"] = "";
    $_SESSION["year"] = "";
    $_SESSION["ame"] = "";
    $_SESSION["idnum"] = "";
	echo "<script>
	  window.location = 'http://localhost:8000/';
	</script>";
?>