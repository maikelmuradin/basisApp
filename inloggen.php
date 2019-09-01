<?php
$title="PHP opdrachten - Inloggen";
include "system/header.php";
include "system/mijnFuncties.php";
?>

<div class="container">
<div class="row bg-white" style="border:solid 1px; padding: 10px;">
  <div class="col"></div>
  <div class="col bg-primary" style="border: solid 1px; padding:5px; border-radius: 15px;">
    <form method="get" action="loginCheck.php" >
	   <label>Gebruikersnaam</label>
	   <input type="text" name="gebruikersnaam" class="form-control" style="width:90%;" /><br />
	   <label>Wachtwoord</label>
	   <input type="password" name="wachtwoord" class="form-control" style="width:90%" /><br />
	   <input type="submit" name="submit" />
    </form>
  </div>
  <div class="col"></div> 
</div>
</div> <!--end container-->

<?php include "system/footer.php";?>










