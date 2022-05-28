<html>
<head>
</head>
<body>
<?php
$email = isset($_POST["email"])? $_POST["email"] : "";
$password =  isset($_POST["password"])? $_POST["password"] : "";
function verificarCliente($login, $password) {

        $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
        if(($rs=$this->bd->executarSQL($sql))){
            if(mysql_fetch_row($rs)==false) {
                return false;
            } else {
                session_start();
                $the_username = //grab the username from your results set  
                $_SESSION['username'] = $the_username; 

                //put other things in the session if you like
                echo "<br><b> <a>Bem-Vindo <font size=2>" .mysql_result($rs,0,"login")."</font></b></a><br><br><br>";     

                return true;

            }
        }
        else {
            return false;
        }
    }
$erreur = "";
if ($email == "") {
$erreur .= "Le champ email est vide. <br>";
}
if ($password == "") {
$erreur .= "Le champ password est vide. <br>";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "email pas valide".<br>;
	}
$database = "scolarite";
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
	verificarCliente($email, $password)
}
else {
 echo "Database not found";
}
mysqli_close($db_handle);
?>
</body>
</html>