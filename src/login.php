<?php
    require_once './db-connection.php';
    // echo $_SESSION["user-id"];

    $userErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // if($_POST){
		$email = $_POST["email"];
		$pass = $_POST["password"];
	    $query = "SELECT * FROM Users WHERE email='". $email . "' AND password='" . $pass . "';";
	    		// echo '<script>console.log("'. $query . '")</script>';
	    $result = mysqli_query($conn, $query);
	    	if ($result->num_rows > 0) {
	    		while($row = $result->fetch_assoc()) {
	    			echo $row["username"];
		    		echo '<script>console.log("'. $row["username"] . '")</script>';
		    		$_SESSION["user"] = true;
	 				$_SESSION["user-id"] = $row["id"];
	 				$_SESSION["username"] = $row["username"];
	 				echo "<script>
					  window.location = 'http://localhost:8000/';
					</script>";
    			}
			}
			else{
		    	$userErr = "Λανθασμένο όνομα ή κωδικός χρήστη." ;
	    	}
	}

?>

<div class="container-fluid">
  <div class="row">
    <div class="form-container">
		<form id="form-log" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="form-group">
                <small class="error"> <?php echo $userErr;?></small>
				<div class="input-group">
					<input class="form-control f-icon" type="email" name="email" placeholder="Email Address" value="<?php echo $email?>" required/>
					<span class="input-group-addon">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</span>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<input class = "form-control f-icon" type="password" name="password" value="<?php echo $pass?>" placeholder="Password" required/>
					<span class="input-group-addon">
						<i class="fa fa-lock fa-lg" aria-hidden="true"></i>
					</span>
				</div>
			</div>
			<button id="#submit" type="submit" name="login" class="btn btn-primary btn-block">Login</button>
		</form>
	 </div>

	</div>
</div>
