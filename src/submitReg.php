<?php 

    include './header.php';
    require_once './db-connection.php';
    // include './header.php';
    // require_once './db-connection.php';
    $query = "SELECT ID FROM USERS";
    $result = mysqli_query($conn, $query);

    if(empty($result)) {
        $query = "CREATE TABLE Users (
              id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
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
              natural bit,
              insured bit,
              employer bit,
              -- reg_date TIMESTAMP
              )";
        $result = mysqli_query($conn, $query);
    }
    $email = $_POST["fname"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $surname = $_POST["surname"];
    $city = $_POST["city"];
    $street = $_POST["street"];
    $number = $_POST["number"];
    $city = $_POST["surname"];
    $province = $_POST["province"];
    $postcode = $_POST["postcode"];
    $telephone = $_POST["telephone"];
    $natural = $_POST["natural"];
    $insured = $_POST["insured"];
    $employer = $_POST["employer"];
    $afm = $_POST["afm"];
    $idnum = $_POST["idnum"];
    $ama = $_POST["ama"];
    $ame = $_POST["ame"];
    $busname = $_POST["business-name"];
    $doy = $_POST["doy"];
    echo $_POST["name"];
    echo($email . $name . $surname . $username . $password . $surname . $city . $street . $number . $city . $province . $postcode . $telephone . $natural . $insured);

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
      $insuredBool = 0;
    }
    else{
      $insuredBool = 1;
    }

    if($employer == null){
      $employerBool = 0;
    }
    else{
      $employerBool = 1;
    }
    $sql = "INSERT INTO `Users` (id, email, password, firstname, username, lastname, idnum, afm, ame, ama, doy, busname, city, street, numadr, postcode, province, tel, natural, insured, employer)
      VALUES ("", $email, $password, $name, $username, $surname, $idnum, $afm, $ame, $ama, $doy, $busname, $city, $street, $number, $postcode, $province, $telephone, $naturalBool, $insuredBool, $employerBool)";

      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }


?>

<?php include 'footer.php';?>
