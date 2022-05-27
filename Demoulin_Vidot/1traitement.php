<?php
    $name = isset($_POST["name"])? $_POST["name"] : "";
    $tel = isset($_POST["tel"])? $_POST["tel"] : "";
    $choix = isset($_POST["choix"])? $_POST["choix"] : "";
    $arrivee = isset($_POST["arrivee"])? $_POST["arrivee"] : "";
    $depart = isset($_POST["depart"])? $_POST["depart"] : "";
    $enfants = isset($_POST["enfants"])? $_POST["enfants"] : "";
    $adultes = isset($_POST["adultes"])? $_POST["adultes"] : "";
    $hebergement = isset($_POST["hebergement"])? $_POST["hebergement"] : "";
    $dej = isset($_POST["dej"])? $_POST["dej"] : "";
    $depart = isset($_POST["depart"])? $_POST["depart"] : "";
    $erreur = "";
    if ($name == "") {
        $erreur .= "Le champ Nom est vide. <br>";
    }
    if ($tel == "") {
        $erreur .= "Le champ Telephone est vide. <br>";
    }
    if ($choix == "") {
        $erreur .= "Le champ Nombre de jours de visite est vide. <br>";
    }
    if ($arrivee == "") {
        $erreur .= "Le champ Date d'arivée est vide. <br>";
    }
    if ($depart == "") {
        $erreur .= "Le champ Date de départ est vide. <br>";
    } 
    if ($enfants == "") {
        $erreur .= "Le champ Nombre de billets enfants est vide. <br>";
    }
    if ($adultes == "") {
        $erreur .= "Le champ nombre de billets adultes est vide. <br>";
    }
    if ($hebergement == "") {
        $erreur .= "Le champ hebergement est vide. <br>";
    }
     if ($dej == "") {
        $erreur .= "Le champ Petit déjeuner est vide. <br>";
    }
    if ($depart<$arrivee){
        $erreur .= "La date de départ ne peut pas etre inférieure à celle d'arrivée. <br/>";
    }
    if ($erreur != "") {
        echo "Erreur: <br>" . $erreur;
    } else {
    //Calcul
    
        switch ($choix) {
            case 1 : $price = 81*$adultes+0.9*81*$enfants;
                break;
            case 2 : $price = 2*(71* $adultes+0.9*71*$enfants);
                break;
            case 3 : $price = 3*(67* $adultes+0.9*67*$enfants);
                break;
            case 4 : $price =4*( 59* $adultes+0.9*59*$enfants);
                break;
        }
        
        switch($hebergement){
            case 1 : $cout=60;
                if ($adultes>1){
                    $cout+=30*($adultes-1);
                }
                if ($enfants!=0){
                    $cout+=40;
                }
                if ($enfants>1){
                    $cout+=20*($enfants-1);
                }
                $cout= $choix*$cout; //nombre de jours * prix de l'hebergement pour un jour
                break;
            case 2 : $cout=100;
                if ($adultes>1){
                    $cout+=75*($adultes-1);
                }
                if ($enfants!=0){
                    $cout+=80;
                }
                if ($enfants>1){
                    $cout+=50*($enfants-1);
                }
                $cout= $choix*$cout;
                break;
        }
        
        switch ($dej){
            case 1 : $montant=($adultes*15+$enfants*10)*$choix;
                break;
            case 2 : break;
        }
        
    $tot = ($cout+$montant+$price);
         
    echo "Voici votre reçu: <br>";
    echo
    '<table border="1">
    <tr>
    <td> Nom </td>
    <td>' . "$name" . '</td>' .
    '</tr>' .
    '<tr>
    <td> Durée séjour </td>
    <td>' . "$choix jours" . '</td>' .
    '</tr>' .
    '<tr>
    <td> Nombre de tickets adultes ' . "$adultes" . '</td>
    <td> Nombre de tickets enfants ' . "$enfants" . '</td>' .
    '</tr>' .
    '<tr>
     <th colspan="2" align="center">Montant total billeterie :'. " $price". "€" .'</th>'.
    '</tr>' .
    '<tr>
    <td> Hebergement </td>
    <td> Montant total hebergement :' . "$cout" . " €" . '</td>' .
    '</tr>' .
    '<tr>
    <td> Petit Déjeuner </td>
    <td> Supplément total restauration : ' . "$cout" . " €" . '</td>' .
    '</tr>' .
     '<tr>
    <th colspan="2" align="center">Montant total billeterie :'. " $tot". "€" .'</th>'.
    '</tr>' .   
    '</table>';
    echo "Nous sommes heureux de vous voir au plus vite au par DisneyLand ! Merci.<br>";
    }
?>