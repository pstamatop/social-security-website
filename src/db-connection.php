<?php
 

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "dieam123";
 $db = "sdi1300093";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
// if(!mysqli_connect_errno()){
	// echo "Hello";
 //    echo mysqli_connect_error();
    // $query = "CREATE DATABASE IF NOT EXISTS " . $db . ";";
    // if(mysqli_query($conn, $query)){
    //     echo "Success";
    // } else {
    //     // echo "Failure";
    // }
// }
mysqli_select_db($conn, $db);

$query = "SELECT ID FROM USERS";
$result = mysqli_query($conn, $query);

 if(empty($result)) {
    	// echo "Here";
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
}

$query = "SELECT ID FROM Employees";
$result = mysqli_query($conn, $query);

if(empty($result)) {
    $query = "CREATE TABLE Employees(
      id int(11) AUTO_INCREMENT PRIMARY KEY,
      employer_id int(11),
      firstname varchar(255),
      lastname varchar(255),
      idnum varchar(255),
      afm varchar(255),
      ama varchar(255)
      )";
    $result = mysqli_query($conn, $query);
}
 
// function CloseCon($conn)
//  {
//  $conn -> close();
//  }
   
?>