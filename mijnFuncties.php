<?php
session_start();
require  "system/connect.php";

function display_melding($error, $displayString){
switch ($error) {
			case '1':
				echo "<div class='alert alert-danger alert-dismissable fade show' role='alert'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
		  		$displayString
				</div>";
				break;

				case '2':
				echo "<div class='alert alert-success alert-dismissable fade show' role='alert'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
		  		$displayString
				</div>";
				break;
			default:
				//# code...
			echo "Geen Melding";
				break;
			}
}

function chk_login($inlognaam, $wachtwoord)
{
	global $conn;
	$output=false;
	$sql = "SELECT * FROM gebruikers WHERE naam = '$inlognaam' AND wachtwoord= '$wachtwoord'";
		
		$result = $conn->query($sql);			
		if ($result->num_rows > 0) 
		{
			$row = $result->fetch_assoc();
			if ($row["naam"]==$inlognaam && $row["wachtwoord"]==$wachtwoord)
			{
				$output=true;
			}
		} 
		$conn->close();
		return $output;
}


function display_gebruikers()
{
	global $conn;
		$sql = "SELECT * FROM gebruikers ";
		
		$result = $conn->query($sql);	
			
		if ($result->num_rows > 0) 
		{
    // Data output - 
		echo "<table class='table table-striped'>".
			"<thead><tr><th>Naam</th><th>Email</th><th>Wachtwoord</th></tr></thead><tbody>";
   		 while($row = $result->fetch_assoc()) {
       	 echo "<tr><td>" . $row["naam"]. "</td><td> " . $row["email"]. "</td><td>" . $row["wachtwoord"]. "</td></tr>"; }
        echo "</tbody></table>";
		} else {echo "0 results";}

	$conn->close();
}




?>