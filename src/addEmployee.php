<?php 
    include './header.php';
    require_once './db-connection.php';

    $name = "";
    $surname = "";
    $afm = "";
    $ama = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userid = $_SESSION["user-id"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $afm = $_POST["afm"];
        $ama = $_POST["ama"];

        $sql = "INSERT INTO Employees(employer_id, firstname, lastname, idnum, afm, ama)
          VALUES ('$userid', '$name', '$surname', '', '$afm', '$ama');";

          if ($conn->query($sql) === TRUE) {

              echo "<script>
              window.location = 'http://localhost:8000/apd.php';
            </script>";
          } 
          // else {
          //  echo "Error: " . $query . "<br>" . $conn->error;
          // }
    }

?>

<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><small class="br-small">Αρχική</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ενδιαφερόμενοι</small></a></li>
    <li class="breadcrumb-item"><a href="/employersMenu.php"><small class="br-small">Εργοδότες</small></a></li>
    <li class="breadcrumb-item"><a href="/apd.php"><small class="br-small">Αναλυτική Περιοδική Δήλωση</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Προσθήκη Εργαζομένου</small></li>
  </ol>
</nav>

<div class="container" id="add-emp">
	<form id="msform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<fieldset>     
            <h2 class="fs-title">Προσθηκη Εργαζομενου</h2>
            <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="'Ονομα Εργαζομένου"/>
            </div>
            <div class="form-group">
            <input class="form-control" type="text" name="surname" placeholder="Επώνυμο Εργαζομένου" />
            </div>
            <div class="form-group">
            <input class="form-control" type="text" name="afm" placeholder="A.Φ.Μ Εργαζομένου" />
            <div><small>Αριθμός Φορολογικού Μητρώου : XXX-XXX </small></div>  
            </div>
            <div class="form-group">
            <input class="form-control" type="text" name="ama" placeholder="A.M.A Εργαζομένου" />
            <small>Αριθμός Μητρώου Ασφαλισμένου : XXX-XXX </small>
            </div>
            <input id="btnSubmit" type="submit" name="submit" class="btn btn-primary action-button" value="Submit"/>
		</fieldset>
	</form>

</div>





<?php include 'footer.php';?>



