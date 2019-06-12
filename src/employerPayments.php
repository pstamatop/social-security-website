<?php include './header.php';?>

<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><small class="br-small">Αρχική</small></a></li>
    <li class="breadcrumb-item"><a href="#"><small class="br-small">Ενδιαφερόμενοι</small></a></li>
    <li class="breadcrumb-item"><a href="/employersMenu.php"><small class="br-small">Εργοδότες</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Εισφορές Εργοδότη</small></li>
  </ol>
</nav>

<h3 id="heading">Εισφορές Εργοδότη</h3>

<br />

<div class="container">
    <table id="myTable" class="table order-list">
    <thead id="thead-empl">
        <tr id="tr-empl">
            <td id="td1">Όνομα</td>
            <td id="td2">Επώνυμο</td>
            <td id="td3">Αριθμός Μητρώου Ασφαλισμένου (ΑΜΑ)</td>
            <td id="td4">Μισθός</td>
            <td></td>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-sm-3">
                <input type="text" name="fname" class="form-control" />
            </td>
            <td class="col-sm-3">
                <input type="text" name="sname"  class="form-control"/>
            </td>
            <td class="col-sm-3">
                <input type="text" name="ama" class="form-control">
            </td>
            <td class="col-sm-2">
                <input type="text" name="salary" class="form-control">
            </td>
            <td class="col-sm-1"><a class="deleteRow"></a>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" id="add-empl-but" >
                <input type="button" class="btn btn-md btn-block " id="addrow" value="Προσθήκη Εργαζομένου" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>
<!-- Button trigger modal -->
<button type="button" id="sub-button-empl" onClick="calculatePayments()" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal1">
  Υπολογισμός
</button>

<!-- Modal -->
<div class="modal fade"  id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" onClick="calculatePayments()">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
      </div>
      <div>
        <h5 class="modal-title" id="myModalLabel">Πόσο εργοδοτικών εισφορών με κρατήσεις 15%</h5>
      </div>
      <hr>

      <div class="modal-body" id="modal-body">
         <div id="total"></div>
        <br />
        <br />
      </div>
    </div>
  </div>
</div>

</div>

<script type="text/javascript" src="./scripts/employerPayments.js"></script>
<?php include './footer.php';?>
