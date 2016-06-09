<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$Name = $Rollnumber = $Department = $Email address = $Physical address = $About me = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Name = test_input($_POST["Name"]);
  $Rollnumber = test_input($_POST["Rollnumber"]);
  $Department = test_input($_POST["Department"]);
  $Email address = test_input($_POST["Email address"]);
  $Physical address = test_input($_POST["Physical address"]);
  $About me = test_input($_POST["About me"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
?>


<?php $password = random_password(8);
echo $password;
?>



</body>
</html>