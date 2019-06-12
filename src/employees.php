
<?php 
    require_once './db-connection.php';
    
?>

<div class="row">
<div class="col-md-12" id="empl-col">
<div id="accordion" role="tablist" class="employees-acc">

<?php

    $query = "SELECT * FROM Employees
        WHERE employer_id = " . $_SESSION["user-id"] . "; ";

    $result = $conn->query($query);
    $emplNum = 1;
    $show = "";
     //   if($result !== TRUE){
     //     echo "Error: " . $query . "<br>" . $conn->error;
     // }else{
     //   echo "ok";
     // }
     

    if ($result->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
          if($emplNum == 1){
            $show = "show";
          }
          else{
            $show = "";
          }
          echo '
          <div class="card">
            <div class="card-header" role="tab" id="heading' . $emplNum . '">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapse' . $emplNum . '" role="button" aria-expanded="true" aria-controls="collapse' . $emplNum . '">
                  Εργαζόμενος ' . $emplNum . '
                </a>
              </h5>
            </div>

            <div id="collapse' . $emplNum . '" class="collapse ' . $show . '" role="tabpanel" aria-labelledby="heading' . $emplNum . '" data-parent="#accordion">
              <div class="card-body">
                <div class="row my-row">
  <div class="col-md-6">
      <div class="row">
         <div class="col-md-6">
            <p class="my-title">\'Oνομα Εργαζόμενου:</p>
         </div>
         <div class="col-md-6">
                  ' . $row["firstname"] .'
         </div>
      </div>
      <div class="row">
        <div class="col-md-6">
            <p class="my-title">A.M.A Εργαζόμενου: </p>
        </div>
        <div class="col-md-6">
            '. $row["ama"] . '
        </div>
      </div>
      <div class="row">
          <div class="col-md-12"><small>Αριθμός Μητρώου Ασφαλισμένου</small></div>
      </div>
  </div>
  <div class="col-md-6">
      <div class="row">
         <div class="col-md-6">
            <p class="my-title">Επώνυμο Εργαζόμενου: </p>
          </div>
          <div class="col-md-6">
                    ' . $row["lastname"] . '
          </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p class="my-title">Α.Φ.Μ Εργαζόμενου: </p>
          </div>
        <div class="col-md-6">
            ' . $row["afm"] . '
        </div>
      </div>
      <div class="row">
          <div><small>Αριθμός Φορολογικού Μητρώου</small></div>
      </div>
    </div>
  </div>
</div>
</div>
</div>         

          ';
          $emplNum = $emplNum + 1;
      }
    }

?>

</div>
</div>
</div>



  <!-- <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>

  </div>

</div>
</div>
</div> -->