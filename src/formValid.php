<?php

    require_once './db-connection.php';


    $query = "SELECT ID FROM Users";
    // $query = "DROP TABLE Users";
    $result = mysqli_query($conn, $query);


    if(empty($result)) {
        $query = "CREATE TABLE Users (
              id int(11) AUTO_INCREMENT PRIMARY KEY,
              email varchar(255) NOT NULL,
              password varchar(255) NOT NULL,
              firstname varchar(255),
              username varchar(255),
              lastname varchar(255),
              idnum varchar(255),
              afm varchar(255),
              ame varchar(255),
              ama varchar(255),
              doy varchar(255),
              busname varchar(255),
              city varchar(255),
              street varchar(255),
              numadr varchar(255),
              postcode varchar(255),
              province varchar(255),
              tel varchar(255),
              naturalPers varchar(255),
              insured varchar(255),
              employer varchar(255),
              bday varchar(255), 
              bmonth varchar(255),
              byear varchar(255),
              reg_date TIMESTAMP
              )";
        // $result = mysqli_query($conn, $query);

     if ($conn->query($query) === TRUE) {
    // echo "New record created successfully";
     	
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}
}

    $email = "";
    $key = "";
    $name = ""; 
    $surname = "";
    $username = "";
    $password = "";
    $surname = "";
    $city = "";
    $street = "";
    $number = "";
    $city = "";
    $province = "";
    $postcode = "";
    $telephone = "";
    $natural = "";
    $insured = "";
    $employer = "";
    $afm = "";
    $idnum = "";
    $ama = "";
    $ame = "";
    $busname = "";
    $doy = "";
    $conpas = "";
    $day = "";
    $year = "";
    $month = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $emailErr = "";
		$nameErr = "";
		$surnameErr = "";
		$usernameErr = "";
		$passErr = "";
		$conpassErr = "";
		$cityErr = "";
		$streetErr = "";
		$numErr = "";
		$postErr = "";
		$provErr = "";
		$telErr = "";
		$afmErr = "";
		$idErr = "";
		$bErr = "";
		$err = false;
		$naturalBool = 0;
		$insuredBool = 0;
		$employerBool = 0;
	  $err = false;
	  if (empty($_POST["fname"])) {
	    $emailErr = "Το email είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
    	 $email = $_POST["fname"];
	  }

	  if (empty($_POST["name"])) {
	    $nameErr = "Το Όνομα είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	  	$name = $_POST["name"];
	  }

	  if (empty($_POST["surname"])) {
		  $surnameErr = "Το Επώνυμο είναι υποχρεωτικό πεδίο";
		  $err = true;
	  } else {
	      $surname = $_POST["surname"];
	  }

	  if (empty($_POST["username"])) {
	    $usernameErr = "Το Όνομα Χρήστη είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $username = $_POST["username"];
	  }

	  if (empty($_POST["password"])) {
	    $passErr = "Το Συνθηματικό είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $password = $_POST["password"];
	  }

	  if (empty($_POST["confirm_password"])) {
	    $conpassErr = "Το Συνθηματικό είναι υποχρεωτικό πεδίο";
	    $err = true;
	  }
	  else{
	  	$conpass = $_POST["confirm_password"];
	  }

	  if($_POST["password"] != $_POST["confirm_password"]){
	  	$passErr = "Τα συνθηματικά διαφέρουν";
	  	$err = true;
	  } else {
	    $password = $_POST["password"];
	  }

	  if (empty($_POST["city"])) {
	    $cityErr = "Η Πόλη είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $city = $_POST["city"];
	  }

	  if (empty($_POST["street"])) {
	    $streetErr = "Η Οδός είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $street = $_POST["street"];
	  }

	  if (empty($_POST["number"])) {
	    $numErr = "Ο Αριθμός είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $number = $_POST["number"];
	  }

	  if (empty($_POST["postcode"])) {
	    $postErr = "Ο Αριθμός είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $postcode = $_POST["postcode"];
	  }

	  if (empty($_POST["province"])) {
	    $provErr = "Ο Νομός είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $province = $_POST["province"];
	  }

	  if (empty($_POST["province"])) {
	    $provErr = "Ο Νομός είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $province = $_POST["province"];
	  }

	  if (empty($_POST["telephone"])) {
	    $telErr = "To Τηλέφωνο είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $telephone = $_POST["telephone"];
	  }

	  if (empty($_POST["afm"])) {
	    $afmErr = "To Α.Φ.Μ είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $afm = $_POST["afm"];
	  }

	  if (empty($_POST["idnum"])) {
	    $idErr = "Ο Αριθμός Ταυτότητας είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $idnum = $_POST["idnum"];
	  }

	  if (empty($_POST["bday"])) {
	    $bErr = "Η Ημερομηνία Γέννησης είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $day= $_POST["bday"];
	  }

	   if (empty($_POST["bmonth"])) {
	    $bErr = "Η Ημερομηνία Γέννησης είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $month = $_POST["bmonth"];
	  }

	   if (empty($_POST["byear"])) {
	    $bErr = "Η Ημερομηνία Γέννησης είναι υποχρεωτικό πεδίο";
	    $err = true;
	  } else {
	    $year = $_POST["byear"];
	  }

	  	$key = $_POST["key"];
	  	$natural = $_POST["natural"];
	    $insured = $_POST["insured"];
	    $employer = $_POST["employer"];
	    $ama = $_POST["ama"];
	    $ame = $_POST["ame"];
	    $busname = $_POST["business-name"];
	    $doy = $_POST["doy"];

	  if($err == false){
	    $naturalBool = null;
	    $insuredBool = null;
	    $employerBool = null;

	    if($natural == null){
	      $naturalBool = 0;
	    }
	    else{
	      $naturalBool = 1;
	    }

	    if($insured == null){
	      $insuredBool = '0';
	    }
	    else{
	      $insuredBool = '1';
	    }

	    if($employer == null){
	      $employerBool = '0';
	    }
	    else{
	      $employerBool = '1';
	    }
	    $sql = "INSERT INTO Users (email, password, firstname, username, lastname, idnum, afm, ame, ama, doy, busname, city, street, numadr, postcode, province, tel, naturalPers, insured, employer, bday, bmonth, byear)
	      VALUES ('$email', '$password', '$name',  '$username', '$surname', '$idnum', '$afm', '$ame', '$ama', '$doy', '$busname', '$city', '$street', '$number', '$postcode', '$province', '$telephone', '$naturalBool', '$insuredBool', '$employerBool', '$day', '$month', '$year');";

	      if ($conn->query($sql) === TRUE) {
	      	  $_SESSION["user"] = true;
	      	  $_SESSION["username"] = $username;
	      	  $_SESSION["user-id"] = $conn->insert_id;
	          // echo "New record created successfully " .  $conn->insert_id;

	   //        $query = "SELECT * FROM Users
    // 	WHERE id = " . $_SESSION["user-id"] . "; ";

   	//  $result = $conn->query($query);

   	//  if($result !== TRUE){
   	//  	  echo "Error: " . $query . "<br>" . $conn->error;
   	//  }else{
   	//  	echo "ok";
   	//  }
   	//  if ($result->num_rows > 0) {
	   //  while($row = $result->fetch_assoc()) {
	   //      echo $row["firstname"];
	        
    // 	}
    // }
	          echo "<script>
			  window.location = 'http://localhost:8000/';
			</script>";
	      } 
	      else {
	          echo "Error: " . $sql . "<br>" . $conn->error;
	      }
	      // header("Location: \\");
			// die();
		}

	}

 ?>