<?php
	$author_name = "Lisett-Marleen Tänav";
	//vaatan, mida POST meetodil saadeti
	//var_dump($_POST);
	
	$today_html=null;
	$todays_adjective_error = null;
	$todays_adjective= null;
	//kontrollin, kas klikiti submit
	if(isset($_POST["submit_todays_adjective"])){
		//echo "klikiti nuppu";
		if(!empty($_post["todays_adjective_input"])){
			$today_html = "<p> Tänane päev on" .$_POST["todays_adjective_input"].
			.</p>; 
		}else (
			$todays_adjective_error="Palun kirjutage tänase ilma kohta"
		}		
	}
	
		
	//echo $author_name; // print
	// vaatatn praegust ajahetke
	$full_time_now = date("d.m.Y H:i:s");
	// vaatan nädala päeva
	$weekday_now = date("N");
	//echo $weekday_now;
	$weekday_names_et =["esmaspäev", "teisipäev", "kolmapäev", "neljapäev", "reede", "laupäev","pühapäev"];
	//echo $weekday_names_et[$weekday_now-1];
	//küsime ainult tunde
	$hour_now =("H");
	$day_category = "tavaline päev";
	if($weekday_now <=5){ $day_category = "koolipäev";} else {$day_category = "puhkepäev";}
	//lisan lehele juhusliku foto
	$photo_dir = "photos/";
	//loen kataloogisisu
	//$all_files= scandir ($photo_dir); 
	$all_files= array_slice (scandir ($photo_dir), 2);
	//echo $all_files ;
	// var_dump( $all_fails);
	
	//Kontrollin ja võtan ainult fotod
	
	$alloed_photo_types=["image/jpeg", " image/png"];
	$all_photos=[];
	foreach($all_files as $file) {
		$file_info = getimagesize ($photo_dir. $file); 
	if(isset ($file_info ["mime"])){
		if (in_array($file_info ["mime"], $alloed_photo_types){
		array_push ($all_photos, $file);
	}//if in_array lõppeb	
	} // if isset lõppeb
	} // foreach lõppeb
	
	$file_count= count($all_photos); 
	$photo_num= mt_rand(0,$file_count-1);
	//echo $photo_num;
	//<img src="photos/pilt.jpg" alt "Tallinna Ülikool">
	$photo_html= `<img src="` .$photo_dir. $all_photos[$photo_num]. `"alt" tallinna Ülikool">`;
	$phot_list_html= "<ul>";
	// if($hours_now>=8 and $hour_now <=18
	
	//if
	
	//tsükkel
	//for(si=algväärtus;si<piirväärtus; si muutumine)(..)
	// ul
	//<li>pildifailn.jpg</>
	for($i=0; $i<$file_count; $i ++) {
		$phot_list_html= "<li>". $all_photos[$i] ."</li> \n";
		
	}
	$photo_list_html. = </ul> \n";
	
	$photo_select_html= "<select names="photo_select">"."\n";
	for($i=0; $i <$file_count; $i ++){
		$phot_list_html.= "<option_value>"
	}
	
	
	
?>
<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8">
	<title><?php echo $uthor_name; ?>, veebiprogrammeerimine</title>
</head>
<body>
	<h1><?php echo$author_name; ?>, veebiprogrammeerimine</h1>
	<p>See leht on valminud õppetöö raames ja ei sisalda mingit tõsiseltvõetavat sisu!</p>
	<p>Õppetöö toimub <a href="https://www.tlu.ee/dt">Tallinna Ülikooli Digitehnoloogiate instituudis</a>.</p>
	<img src="3700x1100_pildivalik181.jpg" alt="Tallinna Ülikkoli Mare hoone peauks" width="600">
	<p>Õppetöö toimus 2021 sügisel. </p>
	<hr>
	
	<!--ekraanivorm-->
	<form method= POST>
		<input type="text" name="todays_adjective_input" placeholder="tänase päeva ilma omadus" value=>
		<input type="submit">" name="submit_todays_adjective" value= "saada ära">
		<span><?php echo $todays_adjective_error; ?> <php>
	</form>
	<?php echo$today_html;?>
	<p>Lehe avamise hetk:<span><?php echo $weekday_names_et[$weekday_now-1].",". $day_category  $full_time_now .", on ". $day_category; ?></span>./<p>
	<?php
	echo $photo_html;
	echo$
	
</body>
</html>