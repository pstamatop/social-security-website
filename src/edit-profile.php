<?php
	include 'header.php';
    require_once './db-connection.php';

    $username = "";
    $name = "";
    $email = "";
    $surname ="";
    $number = "";
    $street = "";
    $city = "";
    $province = "";
    $postcode = "";
    $afm = "";
    $ama = "";
    $ame = "";
    $idnum = "";
    $natural = "";
    $insured = "";
    $employer = "";
    $tel = "";
    $doy = "";
    $busname = "";


	$query = "SELECT * FROM Users
    	WHERE id = " . $_SESSION["user-id"] . ";";

   	 $result = $conn->query($query);

    if ($result->num_rows > 0) {
   	 // output data of each row
	    while($row = $result->fetch_assoc()) {
	        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	        $name = $row["firstname"];
	        $surname = $row["lastname"];
	        $number = $row["bday"];
	        $month = $row["bmonth"];
	        $year = $row["byear"];
	        $username = $row["username"];
		    $name = $row["firstname"];
		    $number = $row["numadr"];
		    $street = $row["street"];
		    $city = $row["city"];
		    $province = $row["province"];
		    $postcode = $row["postcode"];
		    $tel = $row["tel"];
    	}
    }

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userid = $_SESSION["user-id"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $afm = $_POST["afm"];
        $ame = $_POST["ama"];

        $sql = "UPDATE Users
				SET firstname = '$name', lastname = '$surname', numadr = '$number', street = '$street', city = '$city', province = '$province', postcode = '$postcode', tel = '$tel'
				WHERE id = " . $_SESSION["user-id"] . " ;";

          if ($conn->query($sql) === TRUE) {
              echo "<script>
              window.location = 'http://localhost:8000/profile.php';
            </script>";
          } 
          // else {
          //  echo "Error: " . $query . "<br>" . $conn->error;
          // }
    }

?>

<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/profile.php"><small class="br-small">Προφίλ</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Επεξεργασία Προφίλ</small></li>
  </ol>
</nav>
<div class="container edit-cont">
	<div class="row">
		<div class="col-md-5">
			<h5 class="prof-header">Προφίλ Χρήστη <i class="fa fa-user"></i></h5>
		</div>
		<!-- <div class="col-md-5">
			<a style="float:left;" href="/edit-profile.php" type="button" id="warning-anchor" class="btn btn-outline-warning"><i></i>Επεξεργασία Προφίλ</a>
		</div> -->
	<hr class="my-hr"/>
	</div>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<div class="row">
	<div class="col-md-6">
			<div class="row edit-row">
				<div class="col-md-2">
					<p class="prof-p">'Ονομα:</p>
				</div>
				<div class="col-md-8">
                       <input class="form-control" type="text" name="name" value="<?php echo $name;?>"/>
				</div>
			</div>
			<div class="row edit-row">
				<div class="col-md-2">
					<p class="prof-p">Αριθμός</p>
				</div>
				<div class="col-md-8">
                       <input class="form-control" type="number" step="1" min="0" name="number" value="<?php echo $number;?>"/>
				</div>
			</div>
			<div class="row edit-row">
				<div class="col-md-2">
					<p class="prof-p">Πόλη</p>
				</div>
				<div class="col-md-8">
                       <input class="form-control" type="text" name="city" value="<?php echo $city;?>"/>
				</div>
			</div>
			<div class="row edit-row">
				<div class="col-md-2">
					<p class="prof-p">Ταχυδρομικός Κώδικας:</p>
				</div>
				<div class="col-md-1">

				</div>
				<div class="col-md-7">
                     <input style="float:right;" class="form-control" type="text" name="postcode" value="<?php echo $postcode;?>"/>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row edit-row">
				<div class="col-md-2">
					<p class="prof-p">Επίθετο:</p>
				</div>
				<div class="col-md-8">
                       <input class="form-control" type="text" name="surname" value="<?php echo $surname;?>"/>
				</div>
			</div>
			<div class="row edit-row">
				<div class="col-md-2">
					<p class="prof-p">Οδός:</p>
				</div>
				<div class="col-md-8">
                       <input class="form-control" type="text" name="street" value="<?php echo $street;?>"/>
				</div>
			</div>
			<div class="row edit-row">
				<div class="col-md-2">
					<p class="prof-p">Νομός:</p>
				</div>
				<div class="col-md-8">
					<select class="form-control" name="province">
                                  <option value="Αττικής" <?php
                                if ($province == "Αττικής") { echo " selected"; }
                                ?>>Αττικής</option>
                                  <option value="Θεσσαλονίκης" <?php
                                if ($province == "Θεσσαλονίκης") { echo " selected"; }
                                ?>>Θεσσαλονίκης</option>
                                  <option value="Ιωαννίνων" <?php
                                if ($province == "Ιωαννίνων") { echo " selected"; }
                                ?>>Ιωαννίνων</option>
                                  <option value="Ηρακλείου" <?php
                                if ($province == "Ηρακλείου") { echo " selected"; }
                                ?>>Ηρακλείου</option>
                                  <option value="Χανίων" <?php $province== "Χανίων" ? ' selected="selected"' : ''?>>Χανίων</option>
                            </select>
				</div>
			</div>
			<div class="row edit-row">
				<div class="col-md-2">
					<p class="prof-p">Τηλέφωνο:</p>
				</div>
				<div class="col-md-8">
                      <input class="form-control" type="text" name="tel" value="<?php echo $tel;?>"/>
				</div>
			</div>
		</div>
	</div>
	<button style="float:right; margin-right: 80px;" href="/edit-profile.php" type="submit" id="primary-anchor" class="btn btn-outline-primary"><i></i>Αποθήκευση Αλλαγών</button>
</form>
</div>

<?php include './footer.php' ?>