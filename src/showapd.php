<?php 
    include 'header.php';
    require_once './db-connection.php';
    require_once './class.html2text.inc';

     $query = "SELECT * FROM Employees
        WHERE employer_id = " . $_SESSION["user-id"] . "; ";

    $result1 = $conn->query($query);
    $result = $result1;
    $empl = "";
    $emplNum = 1;
    $html = '
<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><small class="br-small">Αρχική</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ενδιαφερόμενοι</small></a></li>
    <li class="breadcrumb-item"><a href="/employersMenu.php"><small class="br-small">Εργοδότες</small></a></li>
    <li class="breadcrumb-item"><a href="/apd.php"><small class="br-small">Αναλυτική Περιοδική Δήλωση</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Προβολή</small></li>
  </ol>
</nav>

<div class="container show-apd-cont">
	<div class="row">
		<div class="col-md-9">
			<h5 class="prof-header">Αναλυτική Περιοδική Δήλωση <i class="fa fa-file-text" aria-hidden="true"></i>
			</h5>
		</div>
	</div>
	<hr class="my-hr"/>
	<h6 style="padding-bottom: 20px;">Στοιχεία Εργοδότη <i class="fa fa-user" aria-hidden="true"></i></h6>
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
					' . $_SESSION["day"] . ' / ' . $_SESSION["month"] . ' / ' . $_SESSION["year"] . '
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
					<p class="prof-p">A.M.E:</p>
				</div>
				<div class="col-md-8">
					' . $_SESSION["ame"] . '
				</div>
			</div>
             <div style="float: left; text-align: left; padding: 0;"><small>Αριθμός Μητρώου Εργοδότη</small></div>
		</div>
	</div>';

	if ($result1->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
      	$empl .= '
		<h6 style="padding-bottom: 20px; padding-top: 10px;">Στοιχεία Εργαζόμενου ' . $emplNum . ' <i class="fa fa-user" aria-hidden="true"></i></h6>
      	<div class="row prof-row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-2">
					<p class="prof-p">\'Ονομα:</p>
				</div>
				<div class="col-md-8">
					' . $row["firstname"] . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<p class="prof-p">A.M.A.:</p>
				</div>
				<div class="col-md-8">
					' . $row["ama"] . '
				</div>
			</div>
             <div style="float: left; text-align: left; padding: 0;"><small>Αριθμός Μητρώου Ασφαλισμένου</small></div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-2">
					<p class="prof-p">Επίθετο:</p>
				</div>
				<div class="col-md-8">
					' . $row["lastname"] . '
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<p class="prof-p">A.Φ.Μ.:</p>
				</div>
				<div class="col-md-8">
					' . $row["afm"] . '
				</div>
			</div>
             <div style="float: left; text-align: left; padding: 0;"><small>Αριθμός Φορολογικού Μητρώου</small></div>
		</div>
	</div>';
	$html .= $empl;
	;


		$emplNum = $emplNum + 1;
      }
  	}

  	$html .= '

	</div>';
    $show = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	$class = "html2text";
    	$h2t = new $class($html);
 		$text = $h2t->get_text();
 		// echo "llok " . $html;
 		$myfile = fopen("./ΑναλυτικήΠεριοδικήΔήλωση.txt", "w") or die("Unable to open file!");

 		fwrite($myfile, $text);

 		fclose($myfile);
    }

echo '
<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><small class="br-small">Αρχική</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ενδιαφερόμενοι</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Εργοδότες</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Αναλυτική Περιοδική Δήλωση</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Προβολή</small></li>
  </ol>
</nav>

<div class="container ">
	<div class="row">
		<div class="col-md-9">
			<h5 class="prof-header">Αναλυτική Περιοδική Δήλωση <i class="fa fa-file-text" aria-hidden="true"></i>
			</h5>
		</div>
	</div>
	<hr class="my-hr"/>
	<h6 style="padding-bottom: 20px;">Στοιχεία Εργοδότη <i class="fa fa-user" aria-hidden="true"></i></h6>
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
					' . $_SESSION["day"] . ' / ' . $_SESSION["month"] . ' / ' . $_SESSION["year"] . '
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
					<p class="prof-p">A.M.E:</p>
				</div>
				<div class="col-md-8">
					' . $_SESSION["ame"] . '
				</div>
			</div>
             <div style="float: left; text-align: left; padding: 0;"><small>Αριθμός Μητρώου Εργοδότη</small></div>
		</div>
	</div>';

	echo $empl;


echo'
	<div class="row prof-row">
		<div class="col-md-6">
		</div>
		<div class="col-md-6">
		<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST">
			<button style="float:left; margin-top:20px;" href="/edit-profile.php" type="submit" id="primary-anchor" class="btn btn-outline-primary"><i></i>Κατέβασμα Δήλωσης</button>
			</button>
		</form>
		</div>
	</div>

</div>';



	include './footer.php';
?>
