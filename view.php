<!DOCTYPE html>
<html>
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
?>

<?php
echo "<h2>Your profile is:</h2>";
echo $Name;
echo "<br>";
echo $Rollnumber;
echo "<br>";
echo $Emailaddress;
echo "<br>";
echo $Department;
echo "<br>";
echo $Physicaladdress;
echo "<br>";
echo $Aboutme;
?>
</body>
</html>
