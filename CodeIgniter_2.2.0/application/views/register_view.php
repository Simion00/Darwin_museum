<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Darwin Museum Register</title>
	</head>
	<body>
		<h1>Register</h1>
		<?php echo validation_errors(); ?>
		<?php echo form_open('verifyregister'); ?>
			<label for="voornaam">Voornaam:</label>
			<input type="text" size="20" id="voornaam" name="voornaam"/>
			<br/>
			<label for="tussenvoegsel">Tussenvoegsel:</label>
			<input type="text" size="20" id="tussenvoegsel" name="tussenvoegsel"/>
			<br/>
			<label for="achternaam">Achternaam:</label>
			<input type="text" size="20" id="achternaam" name="achternaam"/>
			<br/>
			<label for="e_mailadres">E-mailadres:</label>
			<input type="text" size="20" id="e_mailadres" name="e_mailadres"/>
			<br/>
			<label for="wachtwoord">Wachtwoord:</label>
			<input type="password" size="20" id="wachtwoord" name="wachtwoord"/>
			<br/>
			<label for="gebruikers_rol">Gebruikers_rol:</label>
			<input type="text" size="20" id="gebruikers_rol" name="gebruikers_rol"/>
			<br/>
			<input type="submit" value="Register"/>
		</form>
	</body>
</html>