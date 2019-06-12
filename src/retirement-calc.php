<?php include './header.php';?>

<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><small class="br-small">Αρχική</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ενδιαφερόμενοι</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ασφαλισμένοι</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Συνταξιοδότηση</small></li>
  </ol>
</nav>

<h3 id="heading">Συνταξιοδοτικό Δικαίωμα</h3>


<div class="container" id="ret-calculator">	
<form id="ret-calc">
  <div class="form-group">
    <label id="my-label" for="exampleSelect1">Φορέας</label>
    <select class="form-control" id="type">
      <option>ΙΚΑ-ΕΤΑΜ</option>
      <option>ΕΤΕΑΜ</option>
    </select>
  </div>
  <div class="form-group">
    <label id="my-label" for="exampleSelect1">Κατηγορία</label>
    <select class="form-control" id="category">
      <option id="age" value="age">Γήρατος</option>
      <option id="disability" value="disability">Αναπηρίας</option>
    </select>
  </div>
  <!-- SHOULD BE DISABLED -->
  <div id="disabilityDiv">
    <div class="form-group"> 
    <label id="my-label" for="exampleSelect1">Αιτία Αναπηρίας</label>
    <select class="form-control" id="cause">
      <option>Νόσος</option>
      <option>Εργατικό Ατύχημα</option>
    </select>
  </div>
  </div>
  <fieldset id="gender" class="form-group">
    <div class="row">
      <div class="col-md-1">
        <label id="my-label" for="exampleSelect1">Φύλο:</label> 
      </div>
      <div class="col-md-11">
         <div class="row">
          <div class="radio-group">
              <span class="radio-choice">
                  <input class="radio-b" type="radio" name="sex" value="male"> Άντρας
              </span>
              <span class="radio-choice">
                  <input class="radio-b" id="not-natural" type="radio" name="sex" value="female"> Γυναίκα
              </span>
          </div>
      </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group">
    <label id="my-label" for="exampleSelect1">Ημέρες Ασφάλισης</label>
    <select class="form-control" id="days">
      <option>5000</option>
      <option>8000</option>
      <option>12000</option>
    </select>
  </div>
  <div class="form-group row">
	  <label id="my-label" for="example-date-input">Έτος συμπλήρωσης ημερών</label>
	  <div class="col-12">
	    <input class="form-control" type="year" id="year">
	  </div>
  </div>
 
  <div class="form-check">
    <label id="my-label" class="form-check-label">
      <input type="checkbox" class="form-check-input" id="reduced">
      Μειωμένη
    </label>
  </div>
  <!-- <input type="button" onClick="calculate()" Value="Υποβολή" /> -->
   <!-- <button type="submit" class="btn btn-primary" onclick="calculate()">Υποβολή</button> -->
<!-- <p>Αποτέλεσμα : <br> -->
<br />

<!-- Button trigger modal -->
<button type="button" id="sub-button" onClick="load()" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
  Υποβολή
</button>


<!-- Modal -->
<div class="modal fade"  id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" onClick="calculate()">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<span aria-hidden="true">&times;</span>
        </button>        
      </div>
      <div>
        <h5 class="modal-title" id="myModalLabel">Επιλογές Σύνταξης</h5>
      </div>
      <hr>

      <div class="modal-body" id="modal-body">
         <div id="list"></div>
        <br />
	    <input type="button" class="btn btn-primary btn-sm" id="first" onclick="firstPage()" value="Πρώτο" />
	    <input type="button" class="btn btn-primary btn-sm" id="previous" onclick="previousPage()" value="Προηγούμενο" />
	    <input type="button" class="btn btn-primary btn-sm" id="next" onclick="nextPage()" value="Επόμενο" />
	    <input type="button" class="btn btn-primary btn-sm" id="last" onclick="lastPage()" value="Τελευταίο" />
		<br />
		<br />
	   
      </div>
  </div>
</div>

</div>
</p>

</form>

</div>

<script type="text/javascript" src="./scripts/retirement-calc.js"></script>

 <?php include './footer.php';?>
