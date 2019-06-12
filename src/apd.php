<?php 
    include 'header.php';
	$query = "SELECT * FROM Users
    	WHERE id = " . $_SESSION["user-id"] . ";";

   	 $result = $conn->query($query);

   	 $name = "";
   	 $surname = "";
   	 $month = "";
   	 $day = "";
   	 $year = "";
   	 $ame = "";

   	 // if($result !== TRUE){
   	 // 	  echo "Error: " . $query . "<br>" . $conn->error;
   	 // }

    if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	        $name = $row["firstname"];
	        $surname = $row["lastname"];
	        $number = $row["bday"];
	        $month = $row["bmonth"];
	        $year = $row["byear"];
	        $ame = $row["ame"];

	        $_SESSION["name"] = $name;
	        $_SESSION["surname"] = $surname;
	        $_SESSION["number"] = $number;
            $_SESSION["month"] = $month;
	        $_SESSION["year"] = $year;
	        $_SESSION["ame"] = $ame;
    	}
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	$name = $_POST["name"];
        $surname = $_POST["surname"];
        $number = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $ame = $_POST["ame"];

        $_SESSION["name"] = $name;
        $_SESSION["surname"] = $surname;
        $_SESSION["number"] = $number;
        $_SESSION["year"] = $year;
        $_SESSION["ame"] = $ame;
    }
?>

<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><small class="br-small">Αρχική</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ενδιαφερόμενοι</small></a></li>
    <li class="breadcrumb-item"><a href="/employersMenu.php"><small class="br-small">Εργοδότες</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Αναλυτική Περιοδική Δήλωση</small></li>
  </ol>
</nav>

<!-- <div class="container"> -->
	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Υποβολή</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Παλαιότερες Α.Π.Δ.</a>
	  </li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	  	
	  	<div class="container apd-cont">
	  		<div><p>Στοιχεια Εργοδότη:</p></div>
	  		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

	  		<div class="row">
	  			<div class="col-md-6">
	  				<div class="form-group">
	  					<!-- <label></label> -->
	  					<div class="form-group">
	  						<input class="form-control" type="text" name="name" value="<?php echo $name;?>" placeholder="Όνομα">
	  					</div>
	  				</div>
                        <div id="date-header"><small>Ημερομηνία Γέννησης:</small></div>
	  					<div class="row">
	  						<div class="form-group col-md-4">
	  							<select class="form-control" name="day">
                                            <option value="" selected <?php
                                if ($day == "") { echo " selected"; }
                                ?> hidden>Ημέρα</option>
                                            <option value="1" selected <?php
                                if ($day == "1") { echo " selected"; }
                                ?> >1</option>
                                            <option value="2" selected <?php
                                if ($day == "2") { echo " selected"; }
                                ?> >2</option>
                                            <option value="3" selected <?php
                                if ($day == "3") { echo " selected"; }
                                ?> >3</option>
                                            <option value="4" selected <?php
                                if ($day == "4") { echo " selected"; }
                                ?> >4</option>
                                            <option value="5" selected <?php
                                if ($day == "5") { echo " selected"; }
                                ?> >5</option>
                                            <option value="6" selected <?php
                                if ($day == "6") { echo " selected"; }
                                ?> >6</option>
                                            <option value="7" selected <?php
                                if ($day == "7") { echo " selected"; }
                                ?> >7</option>
                                            <option value="8" selected <?php
                                if ($day == "8") { echo " selected"; }
                                ?> >8</option>
                                            <option value="9" selected <?php
                                if ($day == "9") { echo " selected"; }
                                ?> >9</option>
                                            <option value="10" selected <?php
                                if ($day == "10") { echo " selected"; }
                                ?> >10</option>
                                            <option value="11" selected <?php
                                if ($day == "11") { echo " selected"; }
                                ?> >11</option>
                                            <option value="12" selected <?php
                                if ($day == "12") { echo " selected"; }
                                ?> >12</option>
                                            <option value="13" selected <?php
                                if ($day == "13") { echo " selected"; }
                                ?> >13</option>
                                            <option value="14" selected <?php
                                if ($day == "14") { echo " selected"; }
                                ?> >14</option>
                                            <option value="15" selected <?php
                                if ($day == "15") { echo " selected"; }
                                ?> >15</option>
                                            <option value="16" selected <?php
                                if ($day == "16") { echo " selected"; }
                                ?> >16</option>
                                            <option value="17" selected <?php
                                if ($day == "17") { echo " selected"; }
                                ?> >17</option>
                                            <option value="18" selected <?php
                                if ($day == "18") { echo " selected"; }
                                ?> >18</option>
                                            <option value="19" selected <?php
                                if ($day == "19") { echo " selected"; }
                                ?> >19</option>
                                            <option value="20" selected <?php
                                if ($day == "20") { echo " selected"; }
                                ?> >20</option>
                                            <option value="21" selected <?php
                                if ($day == "21") { echo " selected"; }
                                ?> >21</option>
                                            <option value="22" selected <?php
                                if ($day == "22") { echo " selected"; }
                                ?> >22</option>
                                            <option value="23" selected <?php
                                if ($day == "23") { echo " selected"; }
                                ?> >23</option>
                                            <option value="24" selected <?php
                                if ($day == "24") { echo " selected"; }
                                ?> >24</option>
                                            <option value="25" selected <?php
                                if ($day == "25") { echo " selected"; }
                                ?> >25</option>
                                            <option value="26" selected <?php
                                if ($day == "26") { echo " selected"; }
                                ?> >26</option>
                                            <option value="27" selected <?php
                                if ($day == "27") { echo " selected"; }
                                ?> >27</option>
                                            <option value="28" selected <?php
                                if ($day == "28") { echo " selected"; }
                                ?> >28</option>
                                            <option value="29" selected <?php
                                if ($day == "29") { echo " selected"; }
                                ?> >29</option>
                                            <option value="30" selected <?php
                                if ($day == "30") { echo " selected"; }
                                ?> >30</option>
                                            <option value="31" selected <?php
                                if ($day == "31") { echo " selected"; }
                                ?> >31</option>
                                        </select>
                                    </div>
	  						<div class="form-group col-md-4">
	  							<select class = "form-control" name="month"required>
                                            <option value="" hidden selected <?php
                                if ($month == "") { echo " selected"; }
                                ?> >Mήνας</option>
                                            <option value="1" selected <?php
                                if ($month == "1") { echo " selected"; }
                                ?> >Ιανουάριος</option>
                                            <option value="2" selected <?php
                                if ($month == "2") { echo " selected"; }
                                ?> >Φεβρουάριος</option>
                                            <option value="3" selected <?php
                                if ($month == "3") { echo " selected"; }
                                ?> >Μάρτιος</option>
                                            <option value="4" selected <?php
                                if ($month == "4") { echo " selected"; }
                                ?> >Απρίλης</option>
                                            <option value="5" selected <?php
                                if ($month == "5") { echo " selected"; }
                                ?> >Μάιος</option>
                                            <option value="6" selected <?php
                                if ($month == "6") { echo " selected"; }
                                ?> >Ιούνιος</option>
                                            <option value="7" selected <?php
                                if ($month == "7") { echo " selected"; }
                                ?> >Ιούλιος</option>
                                            <option value="8" selected <?php
                                if ($month == "8") { echo " selected"; }
                                ?> >Αύγουστος</option>
                                            <option value="9" selected <?php
                                if ($month == "9") { echo " selected"; }
                                ?> >Σεπτέμβριος</option>
                                            <option value="10" selected <?php
                                if ($month == "10") { echo " selected"; }
                                ?> >Οκτώβριος</option>
                                            <option value="11" selected <?php
                                if ($month == "11") { echo " selected"; }
                                ?> >Νοέμβριος</option>
                                            <option value="12" selected <?php
                                if ($month == "12") { echo " selected"; }
                                ?> >Δεκέμβριος</option>
                                        </select>
	  						</div>
	  						<div class="form-group col-md-4">
	  							<select class = "form-control" name="year">
						                    <option value="" <?php
                                if ($year == "") { echo " selected"; }
                                ?> hidden>Έτος</option>
                                <option value="1995" <?php
                                if ($year == "1995") { echo " selected"; }
                                ?>>1995</option>
                                <option value="1994" <?php
                                if ($year == "1994") { echo " selected"; }
                                ?>>1994</option>
                                <option value="1993" <?php
                                if ($year == "1993") { echo " selected"; }
                                ?>>1993</option>
                                <option value="1992" <?php
                                if ($year == "1992") { echo " selected"; }
                                ?>>1992</option>
                                <option value="1991" <?php
                                if ($year == "1991") { echo " selected"; }
                                ?>>1991</option>
                                <option value="1990" <?php
                                if ($year == "1990") { echo " selected"; }
                                ?>>1990</option>
                                <option value="1989" <?php
                                if ($year == "1989") { echo " selected"; }
                                ?>>1989</option>
                                <option value="1988" <?php
                                if ($year == "1988") { echo " selected"; }
                                ?>>1988</option>
                                <option value="1987" <?php
                                if ($year == "1987") { echo " selected"; }
                                ?>>1987</option>
                                <option value="1986" <?php
                                if ($year == "1986") { echo " selected"; }
                                ?>>1986</option>
                                <option value="1985" <?php
                                if ($year == "1985") { echo " selected"; }
                                ?>>1985</option>
						                  </select>
						              </div>
						         </div>
	  			</div>
	  			<div class="col-md-6">
	  				<div class="form-group">
	  					<!-- <label></label> -->
	  					<div class="form-group">
	  						<input class="form-control" type="text" name="surname" value="<?php echo $surname;?>" placeholder="Επώνυμο">
	  					</div>
	  				</div>
                    <div id="date-header"><small><br></small></div>
	  				<div class="form-group">
	  					<!-- <label></label> -->
	  					<div class="form-group">
	  						<input class="form-control" type="text" name="ame" value="<?php echo $ame;?>" placeholder="A.M.E.">
	  					</div>
	  				</div>
	  			<input style="float:right" type="submit" class="btn btn-outline-primary" value="Αλλαγή">
	  			</div>

	  		</div>
	  	</form>
	  			<?php include './employees.php' ?>


	  		<hr>
	  		<a id="primary-anchor" href="/addEmployee.php" type="button" class="btn btn-outline-primary"><i class="fa fa-user-plus" aria-="true"></i>
			Προσθήκη Εργαζομένου</a>
			<br>
			<br>

			<a id="warning-anchor" href="/showapd.php" type="button" class="btn btn-outline-warning"><i class="fa fa-eye" aria-="true"></i>
			Προβολή Α.Π.Δ.</a>
			<button id="success-anchor" type="button" class="btn btn-outline-success"><i class="fa fa-print" aria-="true"></i>

			Εκτύπωση Α.Π.Δ</button>
	  	</div>	
	  <!-- </form> -->






	 </div>


	  </div>
	  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
	</div>
<!-- </div> -->




<?php include 'footer.php';?>
