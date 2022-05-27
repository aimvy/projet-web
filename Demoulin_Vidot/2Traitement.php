<html>
<head>
</head>
<body>
<?php
echo "<meta charset=\"utf-8\">";
//identifier votre BDD
$database = "union";
//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$choice = isset($_POST["choix"])? $_POST["choix"] : "";
if (empty($choice)) {
$choice = 0;
}
$choice = (int)$choice;
$sql = "";
//Si la BDD existe
if ($db_found) {
//code MySQL. $sql est basé sur le choix de l’utilisateur
switch ($choice) {
case 1:
	$sql = "DELETE FROM `unioneuropeenne` WHERE `ID`='25'";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}

	break;
case 2:
	$sql = "SELECT DISTINCT *,MIN(`DateAdhesion`) FROM `unioneuropeenne`";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}

	break;
case 3:
	$sql = "SELECT * FROM `unioneuropeenne` ORDER BY `Superficie` ASC ";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}

	break;
case 4:
	$sql = "SELECT * FROM `unioneuropeenne` ORDER BY `PIB` DESC ";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}
	break;
case 5:
	$sql = "SELECT *,MAX(`TauxChomage`) FROM `unioneuropeenne`";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}
	$sql = "SELECT *,MIN(`TauxChomage`) FROM `unioneuropeenne`";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}
	break;
case 6:
	$sql = "DELETE FROM `unioneuropeenne` WHERE `ID`='25'";
		$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}
	$sql ="SELECT SUM(`PIB`)FROM `unioneuropeenne`";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}
	$sql ="SELECT `Pays`,MAX(`PIB`)FROM `unioneuropeenne`";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}
	
	break;
case 7:
	$sql = "DELETE FROM `unioneuropeenne` WHERE `ID`='25'";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}
	$sql ="SELECT `Devise`,COUNT(`Devise`) FROM `unioneuropeenne` GROUP BY `Devise`";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}
	break;
case 8:
	$sql = "SELECT * FROM `unioneuropeenne`  WHERE `Devise`='euro'";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}
	$sql = "SELECT COUNT(`Devise`) FROM `unioneuropeenne` WHERE `Devise`='euro'";
				$result = mysqli_query($db_handle, $sql);
	while ($data = mysqli_fetch_assoc($result)) {
	 echo "ID: " . $data['ID'] . '<br>';
	 echo "Pays:" . $data['Pays'] . '<br>';
	 echo "Capitale: " . $data['Capitale'] . '<br>';
	 echo "Superficie : " . $data['Superficie'] . '<br>';
	 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
	 echo "Population : " . $data['Population'] . '<br>';
	 echo "Devise : " . $data['Devise'] . '<br>';
	 echo "PIB : " . $data['PIB'] . '<br>';
	 echo "TauxChomage : " . $data['TauxChomage'] . '<br>';
	 echo "Drapeau : " . $data['Drapeau'] . '<br>';
	}
	break;
}

}//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
mysqli_close($db_handle);
?>
</body>
</html>