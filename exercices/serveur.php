<<?php  
$prenom=$nom=$email=$login=$password=$password2="";
if (isset($_POST['envoyer'])) {
	$prenom=set_filter($_POST["name"], FILTER_SANITIZE_STRING);
	$nom=set_filter($_POST["secondName"], FILTER_SANITIZE_STRING);
	$email=set_filter($_POST["email"], FILTER_VALIDATE_EMAIL);
	$login=set_filter($_POST["login"], FILTER_SANITIZE_STRING);
	$password=set_filter($_POST["password"], FILTER_SANITIZE_STRING);
	$password2=set_filter($_POST["password2"], FILTER_SANITIZE_STRING);
	if ($password == $password2) {
		echo "inscription reussie";
	}
	else() {
		echo "mots de passe differents";
	}
}





?>
