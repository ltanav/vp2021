<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8">
	<title>Veebiprogrammeerimine-eksam</title>
</head>
<body>
	<h1> Veebiprogrammeerimine-eksam</h1>
	<p>See leht on valminud õppetöö raames ja ei sisalda mingit tõsiseltvõetavat sisu!</p>
	<p>Õppetöö toimub <a href="https://www.tlu.ee/dt">Tallinna Ülikooli Digitehnoloogiate instituudis</a>.</p>
	<hr>
	<h2>Viljavedu </h2>
	<form method = "POST">
		<lable for= "auto_registreerimis_number_input">Auto registreerimisnumber: </lable>
		<input type= "text" name="auto_registreerimis_number_input" id="auto_registreerimis_number_input" placeholder="numbrimärk">
		<br>
		<label for= "lattu_sisenemismass_input">Lattu sisenemismass: </label>
		<input type="number" name= "lattu_sisenemismass_input" id= "lattu_sisenemismass_input"> 
		<br>
		<label for= "laost_väljumismass_input">Laost väljumismass: </label>
		<input type="number" name= "laost_väljumismass_input" id= "laost_väljumismass_input"> 	
		<br>
		<input type="submit" name="vili_submit" value="Salvesta">
	</form>
</body>
</html>