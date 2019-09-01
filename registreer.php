<?php
$title="PHP opdrachten - registreren";
include "system/header.php";
include "system/mijnFuncties.php";

if (isset($_GET["Submit"])){
	$gebruikersnaam = trim($_GET['gebruikersnaam']);
	$wachtwoord = trim($_GET['wachtwoord']);
	$email = trim($_GET['email']);
		//print_r($_GET);
		
		$sql = "insert into gebruikers values (NULL, '$gebruikersnaam','$email','$wachtwoord') ";
		if ($conn->query($sql) === TRUE ) 
		{
				display_melding(2, "Gegevens zijn ingevoerd");
			
		} else {display_melding(1, "Er is iets misgegaan!");}
}
else //het HTML gedeelte 
{
echo <<<_STR1
<div class='container bg-info'>

<div class="row bg-white" style='border:solid 1px; padding:15px;'>
	<form method="get" action="registreer.php">
		<label>Gebruikersnaam</label>
		<input type="text" name="gebruikersnaam" class="form-control" style="width:90%;" /><br />
		<label>Wachtwoord</label>
		<input type="password" name="wachtwoord" class="form-control" style="width:90%" /><br />
		<label>Email</label>
		<input type="email" name="email" class="form-control" style="width:100%" /><br />
		<input type="submit" name="Submit" value='Verzenden'/>
	</form>
  
</div>

</div><!--end Container-->

_STR1;
}

include "system/footer.php";

?>

