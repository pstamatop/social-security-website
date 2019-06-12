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
	        $email = $row["email"];
	        $name = $row["firstname"];
	        $surname = $row["lastname"];
	        $number = $row["bday"];
	        $month = $row["bmonth"];
	        $year = $row["byear"];
	        $username = $row["username"];
		    $number = $row["numadr"];
		    $street = $row["street"];
		    $city = $row["city"];
		    $province = $row["province"];
		    $postcode = $row["postcode"];
		    $afm = $row["afm"];
		    $ama = $row["ama"];
		    $ame = $row["ame"];
		    $doy = $row["doy"];
		    $natural = $row["naturalPers"];
		    // $ = $row["naturalPers"];
		    $idnum = $row["idnum"];
		    $insured = $row["insured"];
		    $employer = $row["employer"];
		    $tel = $row["tel"];
		    $busname = $row["busname"];
    	}
    }

echo'
<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Προφίλ</small></li>
  </ol>
</nav>
<div class="container prof-cont">
	<div class="row">
		<div class="col-md-9">
			<h5 class="prof-header">Προφίλ Χρήστη <i class="fa fa-user"></i></h5>
		</div>
		<div class="col-md-3">
			<a style="float:left;" href="/edit-profile.php" type="button" id="warning-anchor" class="btn btn-outline-warning"><i></i>Επεξεργασία Προφίλ</a>
		</div>
	</div>
	<hr class="my-hr"/>
	<div class="row prof-row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<p class="prof-p">\'Ονομα:</p>
				</div>
				<div class="col-md-6">
					' . $name . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="prof-p">\'Ονομα Χρήστη:</p>
				</div>
				<div class="col-md-6">
					' . $username . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="prof-p">Διεύθυνση:</p>
				</div>
				<div class="col-md-6">
					' . $street . ' ' . $number . ' ' . $city . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="prof-p">Ταχυδρομικός Κώδικας:</p>
				</div>
				<div class="col-md-6">
					' . $postcode . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="prof-p">Α.Φ.Μ:</p>
				</div>
				<div class="col-md-6">
					' . $afm . '
				</div>
			</div>';
			if($employer == '1'){
				echo '<div class="row">
				<div class="col-md-6">
					<p class="prof-p">Α.Μ.E:</p>
				</div>
				<div class="col-md-6">
					' . $ame . '
				</div>
			</div>';
			}
			if($insured == '1'){
				echo '<div class="row">
				<div class="col-md-6">
					<p class="prof-p">Α.Μ.A:</p>
				</div>
				<div class="col-md-6">
					' . $ama . '
				</div>
			</div>';
			}	
	echo '
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<p class="prof-p">Επίθετο:</p>
				</div>
				<div class="col-md-6">
					' . $surname . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="prof-p">E-mail:</p>
				</div>
				<div class="col-md-6">
					' . $email . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="prof-p">Νομός:</p>
				</div>
				<div class="col-md-6">
					' . $province . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="prof-p">Τηλέφωνο:</p>
				</div>
				<div class="col-md-6">
					' . $tel . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="prof-p">Αριθμός Δελτίου Ταυτότητας:</p>
				</div>
				<div class="col-md-6">
					' . $idnum . '
				</div>
			</div>';
			echo '
		</div>
	</div>
</div>

'
;


include './footer.php';
?>