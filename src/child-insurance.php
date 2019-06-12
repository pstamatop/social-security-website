<?php include './header.php';

$amka = "";
$liksiar = "";
$vevspoud = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amkaErr = "";
    $liksiarErr = "";
    $err = false;
 

    if (empty($_POST["amka"])) {
        $err = true;
        $amkaErr = "Το ΑΜΚΑ είναι υποχρεωτικό πεδίο";
    } else {
        $amka = $_POST["amka"];
    }
    
    if (empty($_POST["liksiar"])) {
        $err = true;
        $liksiarErr = "Ο κωδικός της Ληξιαρχικής Πράξης είναι υποχρεωτικό πεδίο";
    } else {
        $liksiar = $_POST["liksiar"];
    }
    $vevspoud = $_POST["vevspoud"]; 
}
?>


<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><small class="br-small">Αρχική</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ενδιαφερόμενοι</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ασφαλισμένοι</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Έμμεσα Ασφαλισμένοι</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Αίτηση Ασφάλισης Τέκνου</small></li>
  </ol>
</nav>


<div class="container" >
    <form id="msform-child" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <fieldset >
            <h2 class="fs-title">Αιτηση Ασφαλισης Τεκνου</h2>
            <br/>
            <!-- <div class="form-group"> -->
                
            <div class="row">
                <span id="spoudastis" class="switch-group">
                    <label class="switch">
                        <input id="spoud" type="checkbox" name="spoud" value="yes">
                            <span class="slider round"></span>
                    </label>
                    <label >Σπουδαστής/Σπουδάστρια</label>
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
                        <input class="form-control" type="text" name="liksiar" placeholder=" Κωδικός Ληξιαρχικής Πράξης Γέννησης" value="<?php echo $liksiar;?>"/>
                        <div><small>XXX-XXX </small></div>  
                        <small class="error"> <?php echo $liksiarErr;?></small>
                    </div> 
                </div>
            </div>
             
            <div id="spoud-fields">
                <div class="form-group">
                    <input class="form-control" type="text" name="vevspoud" placeholder="Κωδικός Βεβαίωσης Σπουδών" value="<?php echo $vevspoud;?>"/>
                    <small>XXX-XXX </small>
                </div> 
            </div>
            
         
            <!-- </div>   -->
           
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
        <h5 class="modal-title" id="myModalLabel">Ασφάλιση Τέκνου</h5>
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
<script type="text/javascript" src="./scripts/child-insurance.js"></script>


<?php include 'footer.php';?>
