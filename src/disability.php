<?php include './header.php';

$amka = "";
$afm = "";
$fname = "";
$sname = "";
$topothesia = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amkaErr = "";
    $afmErr = "";
    $fnameErr = "";
    $snameErr = "";

    if (empty($_POST["amka"])) {
        $amkaErr = "Το ΑΜΚΑ είναι υποχρεωτικό πεδίο";
    } else {
        $amka = $_POST["amka"];
    }

    if (empty($_POST["afm"])) {
        $afmErr = "Το ΑΦΜ είναι υποχρεωτικό πεδίο";
    } else {
        $afm = $_POST["afm"];
    }
    if (empty($_POST["fname"])) {
        $fnameErr = "To όνομα είναι υποχρεωτικό πεδίο";
    } else {
        $fname = $_POST["fname"];
    }
    if (empty($_POST["sname"])) {
        $snameErr = "To επώνυμο είναι υποχρεωτικό πεδίο";
    } else {
        $sname = $_POST["sname"];
    }

    $topothesia = $_POST["topothesia"];   

}

?>


<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><small class="br-small">Αρχική</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ενδιαφερόμενοι</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Κέντρο Πιστοποίησης Αναπηρίας</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Αίτηση Αξιολόγησης Αναπηρίας</small></li>
  </ol>
</nav>


<div class="container" >
    <form id="msform-disability" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <fieldset >
            <h2 class="fs-title">Αιτηση Αξιολογησης Αναπηριας</h2>
            <br/>
            <!-- <div class="form-group"> -->
            <div><label id="my-label">Κατηγορία Αιτήματος</label></div>
            <div class="row">
                    <!-- <div><label id="my-label">Κατηγορία Αιτήματος</label></div>                 -->
                    <span id="aitima" class="switch-group">
                    <label class="custom-control custom-radio">
                      <input id="radio1" name="radio" type="radio" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Σύνταξη Αναπηρίας</span>
                    </label>
                    <label class="custom-control custom-radio">
                      <input id="radio2" name="radio" type="radio" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Επίδομα Αναπηρίας</span>
                    </label>
                    <label class="custom-control custom-radio">
                      <input id="radio2" name="radio" type="radio" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Λοιπές κοινωνικές Παροχές</span>
                    </label>
                </span>

            </div>
            <br/>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <input class="form-control" type="text" name="amka" value="<?php echo $amka;?>" placeholder="ΑΜΚΑ" />
                    <div><small>Αριθμός Μητρώου Κοινωνικής Ασφάλισης : XXX-XXX </small></div>  
                    <small class="error"> <?php echo $amkaErr;?></small>
                     </div> 
                 </div>
                 <!-- <div class="col-md-1"></div> -->
                <div class="col-md-7">
                    <div class="form-group">
                        <input class="form-control" type="text" name="afm" placeholder="ΑΦΜ" value="<?php echo $afm;?>"/>
                        <div><small>Αριθμός Φορολογικού Μητρώου : XXX-XXX </small></div>  
                        <small class="error"> <?php echo $afmErr;?></small>
                    </div> 
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <input class="form-control" type="text" name="fname" value="<?php echo $fname;?>" placeholder="Όνομα" />
                    <small class="error"> <?php echo $fnameErr;?></small>
                     </div> 
                 </div>
                 <!-- <div class="col-md-1"></div> -->
                <div class="col-md-7">
                    <div class="form-group">
                        <input class="form-control" type="text" name="sname" placeholder="Επώνυμο" value="<?php echo $sname;?>"/> 
                        <small class="error"> <?php echo $snameErr;?></small>
                    </div> 
                </div>
            </div>
            <br/>
            <div class="row">
                    <div class="form-group col-sm-6 myselect">
                    <select class = "form-control"  required>
                        <option value="" selected hidden>Φορέας Ασφάλισης</option>
                        <option value="1">ΙΚΑ</option>
                        <option value="2">ΕΤΑΜ</option>
                        <option value="3">Ανασφάλιστος/η</option>
                    </select>
                    </div>
                    <div class="form-group col-sm-6 myselect">
                    <select class = "form-control"  required>
                        <option value="" selected hidden>Οικογενειακή Κατάσταση</option>
                        <option value="1">Άγαμος/η</option>
                        <option value="2">Έγγαμος/η</option>
                        <option value="3">Χήρος/α</option>
                        <option value="4">Διαζευγμένος/η</option>
                    </select>
                    </div>
            </div>
            <br/>
            <div class="row">
                <span id="metakinisi" class="switch-group">
                    <label class="switch">
                        <input id="metakin" type="checkbox" name="metakin" value="yes">
                            <span class="slider round"></span>
                    </label>
                    <label >Αδυναμία Μετακίνησης</label>
                </span>
            </div>
            
            <br/>
            <div id="metakin-fields">
                <div class="form-group">
                    <input class="form-control" type="text" name="topothesia" placeholder="Διεύθυνση Εξέτασης" value="<?php echo $topothesia;?>"/>
                </div>

            </div>
           
            <!-- Button trigger modal -->
            <button type="button" id="sub-button-empl" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal1">
              Υποβολή
            </button>
        </fieldset>
    </form>

    <!-- Modal -->
    <div class="modal fade"  id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>        
          </div>
          <div>
            <h5 class="modal-title" id="myModalLabel">Αξιολόγηση Αναπηρίας</h5>
          </div>
          <hr>

          <div class="modal-body" id="modal-body">
             <div id="success"> Η αίτηση σας καταχωρήθηκε με επιτυχία</div>
            <br />
            <br />
          </div>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript" src="./scripts/disability.js"></script>


<?php include 'footer.php';?>
