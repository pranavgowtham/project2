<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$Name = $Rollnumber = $Department = $Emailaddress = $Physicaladdress = $Aboutme = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Name = test_input($_POST["Name"]);
  $Rollnumber = test_input($_POST["Rollnumber"]);
  $Department = test_input($_POST["Department"]);
  $Emailaddress = test_input($_POST["Emailaddress"]);
  $Physicaladdress = test_input($_POST["Physicaladdress"]);
  $Aboutme = test_input($_POST["Aboutme"]);
 
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