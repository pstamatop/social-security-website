<?php
	include './header.php';
    require_once './db-connection.php';

	

	// $_SESSION["name"]
 //    $_SESSION["surname"] 
 //    $_SESSION["number"] 
 //    $_SESSION["year"]
 //    $_SESSION["idnum"]

    $query = " SELECT * FROM Users
        WHERE firstname = '" . $_SESSION["name"] . "' AND lastname = '" . $_SESSION["surname"]  . "' AND idnum = '" . $_SESSION["idnum"] . "' ; ";


   	$result = $conn->query($query);
   	$ama = "";
   	if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $ama = $row["ama"];
    	}
    }
    else{
    	 echo "Error: " . $sql . "<br>" . $conn->error;
    }


echo'
<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><small class="br-small">Αρχική</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ενδιαφερόμενοι</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ασφαλισμένοι</small></a></li>
    <li class="breadcrumb-item"><a href="/amacertificate.php"><small class="br-small">Πιστοποίηση Ασφαλισμένου</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Αριθμός Μητρώου Ασφαλισμένου</small></li>
  </ol>
</nav>

<div class="container show-apd-cont">
	<div class="row">
		<div class="col-md-9">
			<h5 class="prof-header">Αριθμός Μητρώου Ασφαλισμένου <i class="fa fa-file-text" aria-hidden="true"></i>
			</h5>
		</div>
	</div>
	<hr class="my-hr"/>
	<h6 style="padding-bottom: 20px;">Στοιχεία Ασφαλισμένου: <i class="fa fa-user" aria-hidden="true"></i></h6>
	<div class="row prof-row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-2">
					<p class="prof-p">\'Ονομα:</p>
				</div>
				<div class="col-md-8">
					' . $_SESSION["name"] . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<p class="prof-p">Ημερομηνία Γέννησης:</p>
				</div>
				<div class="col-md-8">
					' . $_SESSION["number"] . ' / ' . $_SESSION["month"] . ' / ' . $_SESSION["year"] . '
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-2">
					<p class="prof-p">Επίθετο:</p>
				</div>
				<div class="col-md-8">
					' . $_SESSION["surname"] . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<p class="prof-p">A.M.A:</p>
				</div>
				<div class="col-md-8">
					' . $ama . '
				</div>
			</div>
             <div style="float: left; text-align: left; padding: 0;"><small>Αριθμός Μητρώου Ασφαλισμένου</small></div>
		</div></div></div>';



	include './footer.php';
?>