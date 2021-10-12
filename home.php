<?php
    //alustame sessiooni
    session_start();
    //kas on sisselogitud
    if(!isset($_SESSION["user_id"])){
        header("Location: page.php");
    }
    //väljalogimine
    if(isset($_GET["logout"])){
        session_destroy();
        header("Location: page.php");
    }

?>
<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8">
	<title><?php echo $_SESSION["first_name"] ." " .$_SESSION["last_name"]; ?>, veebiprogrammeerimine</title>
</head>
<body>
	<h1><?php echo $_SESSION["first_name"] ." " .$_SESSION["last_name"]; ?>, veebiprogrammeerimine</h1>
	<p>See leht on valminud õppetöö raames ja ei sisalda mingit tõsiseltvõetavat sisu!</p>
	<p>Õppetöö toimub <a href="https://www.tlu.ee/dt">Tallinna Ülikooli Digitehnoloogiate instituudis</a>.</p>
	<p>Õppetöö toimus 2021 sügisel.</p>
	<hr>
    <ul>
        <li><a href="?logout=1">Logi välja</a></li>
		<li><a href="home.php">avaleht</a></li>
	</ul>
	<hr>
	<h2>Filmi info seostamine</h2>
	<h3>Film, inimene ja tema roll</h3>
		
		<label from="person_select">Isik: </label>
		<select name="person_select" id="person_select">
			<option value="" selected disabled>Vali isik</option>
			<?php echo read_all_person_for_option();
		</select>
		<input type="submit" name="profile_submit" value="salvesta">
<?php
	$satabase="if21_lisett_ta";
	
		<li><a href="list_films.php">Filmide nimekirja vaatamine</a> versioon 1</li>
		<li><a href="add_films.php">Filmide lisamine andmebaasi</a> versioon 1</li>
		<lin><a href= "user_profile.php">kasutajaprofiil</a></li>
		
    </ul>
</body>
</html>