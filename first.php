<!DOCTYPE html>
<html>
<head>
	<title> page de test</title>
</head>
<body>
		<h1>Ceci est un formulaire</h1>
		 NOM :<input type="text" name="name"> 
		<br />
		<?php
			echo date;
		?>
</body>
</html>
//get visible par tous et est limite
///<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
/*<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
*/