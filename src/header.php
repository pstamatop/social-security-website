<?php 
  session_start();
  require_once './db-connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>IKA</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="./stylesheets/main.css">
  <link rel="stylesheet" href="./stylesheets/login.css">
  <link rel="stylesheet" href="./stylesheets/employerPayments.css">
  <link rel="stylesheet" href="./stylesheets/employersMenu.css">
  <link rel="stylesheet" href="./stylesheets/child-insurance.css">
  <link rel="stylesheet" href="./stylesheets/disability.css">

   <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700&amp;subset=greek" rel="stylesheet">
  <meta charset="UTF-8">
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
 <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="./scripts/multistep-modal.js"></script> -->


</head>


<body>

<?php 
  require_once './db-connection.php';

echo '
<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/">IKA</a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Αρχική <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-hover" href="http://example.com" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
          Ενδιαφερόμενοι
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li class="dropdown-submenu"><a class="dropdown-item" data-toggle="dropdown" href="/employersMenu.php">Εργοδότες</a>
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="/apd.php">Αναλυτική Περιοδική Δήλωση</a>
              <a class="dropdown-item" href="/employerPayments.php">Οικονομική Καρτέλα Εργοδότη</a>
              <a class="dropdown-item" href="#">Ταυτοποίηση Ασφαλισμένων</a>
              <a class="dropdown-item" href="#">Βεβαίωση Ασφαλιστικής Ενημερότητας</a>
              <a class="dropdown-item" href="#">Ατομικός Λογαριασμός Ασφάλισης</a>
              <a class="dropdown-item" href="#">Πληροφορίες-Βοήθεια</a>
            </ul>
          </li>
          <li class="dropdown-submenu"><a class="dropdown-item" data-toggle="dropdown" href="#">Ασφαλισμένοι</a>
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="/amacertificate.php">Πιστοποίηση Ασφαλισμένου</a>
              <a class="dropdown-item" href="#">Παροχές Ασθενείας</a>
              <a class="dropdown-item" href="#">Ασφαλιστική Ικανότητα</a>
              <a class="dropdown-item" href="/retirement-calc.php">Συνταξιοδότηση</a>
              <a class="dropdown-item" href="/child-insurance.php">Έμμεσα Ασφαλισμένοι</a>
              <a class="dropdown-item" href="#">Ατομικός Λογαριασμός Ασφάλισης</a>
              <a class="dropdown-item" href="#">Πληροφορίες-Βοήθεια</a>

            </ul>
          </li>
          <li class="dropdown-submenu"><a class="dropdown-item" data-toggle="dropdown" href="#">Συνταξιούχοι</a>
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="#">Βεβαίωση Συντάξεων</a>
              <a class="dropdown-item" href="#">Ενημερωτικό Σημείωμα Συντάξεων</a>
              <a class="dropdown-item" href="#">Πρόγραμμα Κατ\'Οίκον Φροντίδας</a>
              <a class="dropdown-item" href="#">Συνταξιούχοι Εξωτερικού</a>
              <a class="dropdown-item" href="#">Πληροφορίες-Βοήθεια</a>
            </ul>
          </li>
          <li class="dropdown-submenu"><a class="dropdown-item" data-toggle="dropdown" href="#">Πιστοποιημένοι Φορείς</a>
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="#">Πιστοποίηση Φορέων</a>
              <a class="dropdown-item" href="#">Ασφαλιστική Ενημερότητα</a>
              <a class="dropdown-item" href="#">Πληροφορίες-Βοήθεια</a>
            </ul>
          </li>
          <li class="dropdown-submenu"><a class="dropdown-item" data-toggle="dropdown" href="#">Οφειλέτες</a>
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="#">Πιστοποίηση Οφειλετών</a>
              <a class="dropdown-item" href="#">Ηλεκτρονική Καρτέλα Οφειλέτη</a>
              <a class="dropdown-item" href="#">Υπολογισμός Δόσεων Ρύθμισης</a>
              <a class="dropdown-item" href="#">Πληροφορίες-Βοήθεια</a>
            </ul>
          </li>
          <li>
            <a class="dropdown-item" href="/disability.php">Κέντρο Πιστοποιήσης Αναπηρίας</a>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-hover" href="http://example.com" id="news" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Νέα
        </a>
        <ul class="dropdown-menu" aria-labelledby="news">
          <li><a class="dropdown-item" href="#">Ανακοινώσεις</a></li>
          <li><a class="dropdown-item" href="#">Δελτία Τύπου</a></li>
          <li><a class="dropdown-item" href="#">Εγκύκλιοι</a></li>            
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-hover" href="http://example.com" id="contact" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Επικοινωνία
        </a>
        <ul class="dropdown-menu" aria-labelledby="contact">
          <li><a class="dropdown-item" href="#">Γραφεία/Υποκαταστήματα</a></li>
          <li><a class="dropdown-item" href="#">Υποβολή Ερωτήσεων</a></li>      
        </ul>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li id="searchLi">
         <form id="navSearch" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button id="searchButton" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
        </button>
     </form>
      </li>

      <li>';
      if($_SESSION["user"] == false){
        echo'
          <a class="dropdown-item" data-toggle="modal" data-target="#myModal">
            Log In
          </a>';
      }
      else{
        echo '<a id="signUp" class="dropdown-item" href="http://localhost:8000/profile.php">' . $_SESSION["username"] . '</a>';
      }
      echo'
      </li>
      <li>';
      if($_SESSION["user"] == false){
        echo '<a id="signUp" class="dropdown-item" href="http://localhost:8000/register.php">Sign Up</a>';
      }
      else{
        echo '<a id="signUp" class="dropdown-item" href="http://localhost:8000/logout.php">Log Out</a>';
      }
      echo '
      </li>

      <!-- <div class="modal fade register-md" id="log-in" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
      </div> -->

    </ul>
  </div>
</nav>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">';
        include './login.php';
echo '
      </div>
    </div>
  </div>
</div>';

?>