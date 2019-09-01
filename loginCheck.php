<?php
$title="PHP opdrachten - Inloggen";
include "system/header.php";
include "system/mijnFuncties.php";

if(!empty($_GET['gebruikersnaam']) && !empty($_GET['wachtwoord']))
{
		
		$gebruikersnaam = trim($_GET['gebruikersnaam']);
		$wachtwoord = trim($_GET['wachtwoord']);
		if(chk_login($gebruikersnaam, $wachtwoord))
			{
				display_melding(2, "gegevens zijn juist<br> Je bent ingelogd");

			} else {display_melding(1, "Sorry!! Gegevens zijn onjuist ");}
	
}else
		{
			//header("Location: inloggen.php");
			echo "niets ingevuld";
		}

?>

<?php include "system/footer.php";?>