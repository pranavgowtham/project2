<!DOCTYPE html>
<html>
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
?>

<?php
echo "<h2>Your profile is:</h2>";
echo $Name;
echo "<br>";
echo $Rollnumber;
echo "<br>";
echo $Email address;
echo "<br>";
echo $Department;
echo "<br>";
echo $Physical address;
echo "<br>";
echo $About me;
?>
</body>
</html>
