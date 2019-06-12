<?php 
    include './header.php';
    // require_once './db-connection.php';
    include './formValid.php';

    // $query = "SELECT ID FROM USERS";
    // $result = mysqli_query($conn, $query);

    // if(empty($result)) {
    //     $query = "CREATE TABLE USERS (
    //           ID int(11) AUTO_INCREMENT,
    //           EMAIL varchar(255) NOT NULL,
    //           PASSWORD varchar(255) NOT NULL,
    //           FIRSTNAME varchar(255),
    //           USERNAME varchar(255),
    //           LASTNAME varchar(255),
    //           IDNUM varchar(255),
    //           AFM varchar(255),
    //           AME varchar(255),
    //           ΑΜΑ varchar(255),
    //           DOY varchar(255),
    //           BUSNAME varchar(255),
    //           CITY varchar(255),
    //           STREET varchar(255),
    //           NUMADR varchar(255),
    //           POSTCODE varchar(255),
    //           PROVINCE varchar(255),
    //           TEL varchar(255),
    //           NATURAL bit,
    //           INSURED varchar(255),
    //           EMPLOYER varchar(255)
    //           PRIMARY KEY  (ID)
    //           )";
    //     $result = mysqli_query($conn, $query);
    // }

    // include './formValid.php';






    //
    // $email = "";
    // $name = ""; 
    // $surname = "";
    // $username = "";
    // $password = "";
    // $surname = "";
    // $city = "";
    // $street = "";
    // $number = "";
    // $city = "";
    // $province = "";
    // $postcode = "";
    // $telephone = "";
    // $natural = "";
    // $insured = "";
    // $employer = "";
    // $afm = "";
    // $idnum = "";
    // $ama = "";
    // $ame = "";
    // $busname = "";
    // $doy = "";

?>

<!-- MultiStep Form -->
<nav aria-label="breadcrumb" class="my-breadcrumbs">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><small class="br-small">Εγγραφή</small></li>
  </ol>
</nav>

<div class="container" id="regCont">
            <form id="msform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Ταυτοποιηση μεσω e-mail</li>
                    <li>Προσωπικες Πληροφοριες</li>
                    <li>Στοιχεια Επικοινωνιας</li>
                    <li>Ολοκληρωση Εγγραφης</li>
                </ul>
                <!-- fieldsets -->
                    <fieldset>                        
                        <h2 class="fs-title">Ταυτοποιηση μεσω e-mail</h2>
                        <div class="form-group">
                        <input class="form-control" type="text" name="fname" placeholder="e-mail" value="<?php echo $email;?>" />
                        <small class="error"> <?php echo $emailErr;?></small>
                        </div>
                        <div class="form-group">
                        <input class="form-control" type="password" name="key" placeholder="Κωδικός Ταυτοποίησης" value="<?php echo $key;?>"/>
                        </div>
                        <input type="button" name="next" class="btn btn-primary next action-button" value="Επόμενο"/>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Προσωπικες Πληροφοριες</h2>
                        <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Όνομα" value="<?php echo $name;?>"/>
                        <small class="error"> <?php echo $nameErr;?></small>
                        </div>
                        <div class="form-group">
                        <input class="form-control" type="text" name="surname" placeholder="Επώνυμο" value="<?php echo $surname;?>"/>
                        <small class="error"> <?php echo $surnameErr;?></small>
                        </div>
                        <div><label id="my-label">Ημερομηνία Γέννησης</label></div>
                        <div class="row">
                        	<div class="form-group col-sm-4 myselect">
			                <select class = "form-control" name="bday"  required>
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
			            <div class="form-group col-sm-4 myselect">
			                <select class = "form-control" name="bmonth" required>
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
                                ?>>Δεκέμβριος</option>
			                </select>
			            </div>
			            <div class="form-group col-sm-4 myselect">
			                <select class = "form-control" name="byear">
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
			                <small class="error"> <?php echo $bErr;?></small>
			            </div>
                        <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="Όνομα Χρήστη" value="<?php echo $username;?>" />
                        <small class="error"> <?php echo $usernameErr;?></small>
                        </div>
                        <div class="form-group">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Συνθηματικό" value="<?php echo $password;?>"  data-toggle="popover" title="Password Strength" data-content="Enter Password..." />
                        <small class="error"> <?php echo $passErr;?></small>
                        </div>
                        
                        <div class="form-group">
                        <input class="form-control" id="confirm_password" type="password" name="confirm_password" data="popover2" data-content="Password don't match." placeholder="Επιβεβαίωση Συνθηματικού" value="<?php echo $conpass;?>" />
                        <small class="error"> <?php echo $conpassErr;?></small>
                        </div>
                        <input type="button" name="previous" class="btn btn-primary previous action-button-previous" value="Προηγ."/>
                        <input type="button" id="submitPass" name="next" id="btnSubmit" class=" btn btn-primary next action-button" value="Επόμενο" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Στοιχεια Επικοινωνιας</h2>
                            <div class="form-group">
                                <input class="form-control" type="text" name="city" placeholder="Πόλη" value="<?php echo $city;?>"/>
                                <small class="error"> <?php echo $cityErr;?></small>
                            </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="street" placeholder="Οδός" value="<?php echo $street;?>"/>
                                    <small class="error"> <?php echo $streetErr;?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" type="number" step="1" min="0" name="number" placeholder="Αριθμός" value="<?php echo $number;?>"/>
                                    <small class="error"> <?php echo $numErr;?></small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <input class="form-control" type="text" name="postcode" placeholder="Ταχυδρομικός Κώδικας" value="<?php echo $postcode;?>"/>
                        <small class="error"> <?php echo $postErr;?></small>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="province">
                                  <option value="" <?php
                                if ($province == "") { echo " selected"; }
                                ?> hidden><span>Νομός</span></option>
                                  <option value="Αττικής" <?php
                                if ($province == "Αττικής") { echo " selected"; }
                                ?>>Αττικής</option>
                                  <option value="Θεσσαλονίκης" <?php
                                if ($province == "Θεσσαλονίκης") { echo " selected"; }
                                ?>>Θεσσαλονίκης</option>
                                  <option value="Ιωαννίνων" <?php
                                if ($province == "Ιωαννίνων") { echo " selected"; }
                                ?>>Ιωαννίνων</option>
                                  <option value="Ηρακλείου" <?php
                                if ($province == "Ηρακλείου") { echo " selected"; }
                                ?>>Ηρακλείου</option>
                                  <option value="Χανίων" <?php $province== "Χανίων" ? ' selected="selected"' : ''?>>Χανίων</option>
                            </select>
                        <small class="error"> <?php echo $provErr;?></small>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="telephone" placeholder="Τηλέφωνο" value="<?php echo $telephone;?>"/>
                            <small class="error"> <?php echo $telErr;?></small>
                        </div>
                        <input type="button" name="previous" class="btn btn-primary previous action-button-previous" value="Προηγ."/>
                        <input type="button" id="submitPass" name="next" id="btnSubmit" class=" btn btn-primary next action-button" value="Επόμενο" />
                    </fieldset>
                    <fieldset >
                        <h2 class="fs-title">Ολοκληρωση Εγγραφης</h2>
                        <!-- <div class="form-group"> -->
                            <div class="row">
                                <div class="radio-group">
                                    <span class="radio-choice">
                                        <input class="radio-b" type="radio" name="natural" value="yes"  <?php if (isset($natural) && $natural=="yes") echo "checked";?> > Φυσικό Πρόσωπο
                                    </span>
                                    <span class="radio-choice">
                                        <input class="radio-b" id="not-natural" type="radio" name="natural" value="no" <?php if (isset($natural) && $natural=="no") echo "checked";?>> Μη Φυσικό Πρόσωπο
                                    </span>
                                </div>
                            </div>

                        <div class="row">
                            <span class="switch-group">
                                <label class="switch">
                                    <input id="insured" type="checkbox" name="insured" value="yes" <?php if (isset($insured) && $natural=="yes") echo "checked";?>>
                                        <span class="slider round"></span>
                                </label>
                                 <label>Ασφαλισμένος</label>
                            </span>

                            <span class="switch-group2">
                                <label class="switch">
                                <input id="employer" type="checkbox" name="employer" value="employer" <?php if (isset($employer) && $employer=="yes") echo "checked";?>>
                                    <span class="slider round"></span>
                                </label>
                                <label>Εργοδότης</label>
                            </span>
                        </div>
                         
                        <div id="not-natural-fields">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="business-name" placeholder="Όνομα Εταιρείας"/>
                                 </div> 
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="afm" value="<?php echo $afm;?>" placeholder="Α.Φ.Μ" />
                                <div><small>Αριθμός Φορολογικού Μητρώου : XXX-XXX </small></div>  
                                <small class="error"> <?php echo $afmErr;?></small>
                                 </div> 
                             </div>
                             <!-- <div class="col-md-1"></div> -->
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="idnum" placeholder=" Αριθμός Ταυτότητας" value="<?php echo $idnum;?>"/>
                                    <div><small>XXX-XXX </small></div>  
                                    <small class="error"> <?php echo $idErr;?></small>
                                </div> 
                            </div>
                        </div>
                         
                        <div id="insured-fields">
                            <div class="form-group">
                                <input class="form-control" type="text" name="ama" placeholder="Α.Μ.A" value="<?php echo $ama;?>"/>
                                <small>Αριθμός Μητρώου Ασφαλισμένου : XXX-XXX </small>
                            </div> 
                        </div>
                        
                        <div id="employer-fields">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="ame" placeholder="Α.Μ.Ε" value="<?php echo $ame;?>"/>
                                        <small>Αριθμός Μητρώου Εργοδότη : XXX-XXX </small>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <select class="form-control" name="doy">
                                          <option value="" <?php
                                if ($doy == "") { echo " selected"; }
                                ?> hidden><span>Δ.Ο.Υ</span></option>
                                          <option value="Αττικής" <<?php
                                if ($doy == "Αττικής") { echo " selected"; }
                                ?>>Αττικής</option>
                                          <option value="Θεσσαλονίκης" <?php
                                if ($doy == "Θεσσαλονίκης") { echo " selected"; }
                                ?>>Θεσσαλονίκης</option>
                                          <option value="Ιωαννίνων" <?php
                                if ($doy == "Ιωαννίνων") { echo " selected"; }
                                ?>>Ιωαννίνων</option>
                                          <option value="Ηρακλείου" <?php
                                if ($doy == "Ηρακλείου") { echo " selected"; }
                                ?>>Ηρακλείου</option>
                                          <option value="Χανίων" <?php
                                if ($doy == "Χανίων") { echo " selected"; }
                                ?>>Χανίων</option>
                                    </select>
                                        <div><small>Δημόσια Οικονομική Υπηρεσία </small></div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                         
                     
                        <!-- </div>   -->
                       
                        <input type="button" name="previous" class="btn btn-primary previous action-button-previous" value="Προηγ."/>
                        <input id="btnSubmit" type="submit" name="submit" class="btn btn-primary action-button" value="Submit"/>
                    </fieldset>
            </form>
</div>

<script type="text/javascript" src="./scripts/register.js"></script>

<!-- /.MultiStep Form -->

<!-- <script type="text/javascript" src="./scripts/register.js"></script> -->

<?php include 'footer.php';?>

