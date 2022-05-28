
<?php
$email = isset($_POST["mail"])? $_POST["mail"] : "";
$password =  isset($_POST["pass"])? $_POST["pass"] : "";
$nom =   isset($_POST["nom"])? $_POST["nom"] : "";
$prenom =   isset($_POST["prenom"])? $_POST["prenom"] : "";
$adrL1 =   isset($_POST["adresse"])? $_POST["adresse"] : "";
$adrL2 =   isset($_POST["adresse2"])? $_POST["adresse2"] : "";
$ville =   isset($_POST["ville"])? $_POST["ville"] : "";
$codeP =    isset($_POST["cp"])? $_POST["cp"] : "";
$Ncarte =    isset($_POST["netu"])? $_POST["netu"] : "";
//$numtel =	isset($_POST["numtel"])? $_POST["numtel"] : "";
//$pays =	isset($_POST["pays"])? $_POST["pays"] : "";
$erreur = "";
if ($email == "") {
$erreur .= "Le champ 1 est vide. <br>";
}
if ($password == "") {
$erreur .= "Le champ 2 est vide. <br>";
}
if ($nom == "") {
$erreur .= "Le champ 3 est vide. <br>";
}
if ($prenom == "") {
$erreur .= "Le champ 4 est vide. <br>";
}
if ($adrL1 == "") {
$erreur .= "Le champ 5 est vide. <br>";
}
if ($ville == "") {
$erreur .= "Le champ 6 est vide. <br>";
}
if ($codeP == "") {
$erreur .= "Le champ 7 est vide. <br>";
}
if ($Ncarte == "") {
$erreur .= "Le champ 8 est vide. <br>";
}
if ($erreur!=""){
    echo "erreurs : <br/>". $erreur;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "email pas valide".<br>;
	}
$database = "scolarite";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
	$sql = "INSERT INTO `client`(`Nom`, `Prénom`, `Adresse ligne 1`, `Adresse ligne 2`, `Ville`, `Code postal`, `Carte étudiant`, `email`, `password`) VALUES ('".$nom ."','".$prenom."','".$adrL1."','".$adrL2."','".$ville."','".$codeP."','".$Ncarte."','".$email."','".$password."')";
	$sql = "INSERT INTO `login`(`email-log`, `password`, `niv-utilisateur`) VALUES ('".$email."','".$password."', '1' )";
    if(mysqli_query($db_handle, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_handle);
        }   
}
	else {
 echo "Database not found";
}
mysqli_close($db_handle);}
?>