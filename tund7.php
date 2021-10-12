<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8">
	<title>Lisett-Marleen Tänav, veebiprogrammeerimine</title>
</head>
<body>
	<h1>Lisett-Marleen Tänav, veebiprogrammeerimine</h1>
	<p>See leht on valminud õppetöö raames ja ei sisalda mingit tõsiseltvõetavat sisu!</p>
	<p>Õppetöö toimub <a href="https://www.tlu.ee/dt">Tallinna Ülikooli Digitehnoloogiate instituudis</a>.</p>
	<p>Õppetöö toimus 2021 sügisel.</p>
	<hr>
    <form method="POST" action="/~rinde/vp2021/Ryhm-1/07_tund/page.php">
        <input type="email" name="email_input" placeholder="email ehk kasutajatunnus" value="">
        <input type="password" name="password_input" placeholder="salasõna">
        <input type="submit" name="login_submit" value="Logi sisse">
		<span></span>
    </form>
    <p>Loo endale <a href="add_user.php">kasutaja</a>!</p>
    <hr>
	<!--ekraanivorm-->
	<form method="POST">
		<input type="text" name="todays_adjective_input" placeholder="tänase päeva ilma omadus" value="">
		<input type="submit" name="submit_todays_adjective" value="Saada ära">
		<span></span>
	</form>
		<hr>
	
	<form method="POST">
		<select name="photo_select">
<option value="0">tlu_astra_600x400_1.jpg</option> 
<option value="1">tlu_astra_600x400_2.jpg</option> 
<option value="2">tlu_hoov_600x400_1.jpg</option> 
<option value="3">tlu_mare_600x400_1.jpg</option> 
<option value="4">tlu_mare_600x400_2.jpg</option> 
<option value="5">tlu_terra_600x400_1.jpg</option> 
<option value="6">tlu_terra_600x400_2.jpg</option> 
<option value="7" selected>tlu_terra_600x400_3.jpg</option> 
</select> 
        <input type="submit" name="photo_select_submit" value="Näita valitud fotot">
	</form>
	
	<img src="../photos/tlu_terra_600x400_3.jpg" alt="Tallinna Ülikool">
 <p>tlu_terra_600x400_3.jpg</p> 
<hr> 

 <ul> 
<li>tlu_astra_600x400_1.jpg</li> 
<li>tlu_astra_600x400_2.jpg</li> 
<li>tlu_hoov_600x400_1.jpg</li> 
<li>tlu_mare_600x400_1.jpg</li> 
<li>tlu_mare_600x400_2.jpg</li> 
<li>tlu_terra_600x400_1.jpg</li> 
<li>tlu_terra_600x400_2.jpg</li> 
<li>tlu_terra_600x400_3.jpg</li> 
</ul> 
</body>
</html>