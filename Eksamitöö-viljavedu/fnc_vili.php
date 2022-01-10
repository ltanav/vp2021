<?php
    $database = "if21_lisett_ta";
	
	function read_all_Viljavedu(){
       
        $conn = new mysqli($GLOBALS["server_host"], $GLOBALS["server_user_name"], $GLOBALS["server_password"], $GLOBALS["database"]);
        $conn->set_charset("utf8");
		$stmt = $conn->prepare("SELECT * FROM Viljavedu");
        echo $conn->error;
        $stmt->bind_result($auto_registreerimis_number_from_db, $lattu_sisenemismass_from_db, $laost_väljumismass_from_db,;
        //täidan käsu
        $vili_html = null;
        $stmt->execute();
        //võtan kirjeid kuni jätkub
        while($stmt->fetch()){
            
            $viljavedu_html .= "\n <h3>" .viljavedu ."</h3> \n";
            $viljavedu_html .= "<ul> \n";
            $film_html .= "<li>Auto registrinumber: " .$auto_registreerimis_number_from_db ."</li> \n";
            $film_html .= "<li>Lattu sisenemismass: " .$lattu_sisenemismass_from_db ."</li> \n";
            $film_html .= "<li>Laost väljumismass: " .$laost_väljumismass_from_db ."</li> \n";
            
            $film_html .= "</ul> \n";
        }
        //sulgen käsu
        $stmt->close();
        //sulgeme andmebaasiühenduse
        $conn->close();
        return $film_html;
    }
    
    function store_film($title_input, $year_input, $duration_input, $genre_input, $studio_input, $director_input){
        $conn = new mysqli($GLOBALS["server_host"], $GLOBALS["server_user_name"], $GLOBALS["server_password"], $GLOBALS["database"]);
        $conn->set_charset("utf8");
        //SQL: INSERT INTO film (pealkiri, aasta, kestus, zanr, tootja, lavastaja) VALUES("Suvi", 1976, 83, "Tallinnfilm", "Arvo Kruusement")
        $stmt = $conn->prepare("INSERT INTO film (pealkiri, aasta, kestus, zanr, tootja, lavastaja) VALUES(?,?,?,?,?,?)");
        echo $conn->error;
        //seome SQL käsuga päris andmed
        //i - integer, d - decimal, s - string
        $stmt->bind_param("siisss", $title_input, $year_input, $duration_input, $genre_input, $studio_input, $director_input);
        //käsu täitmine
        $success = null;
        if($stmt->execute()){
            $success = "Salvestamine õnnestus!";
        } else {
            $success = "Salvestamisel tekkis viga: " .$stmt->error;
        }
        
        $stmt->close();
        $conn->close();
        return $success;
    }
