<!DOCTYPE html>
<html>
<head>
  <title>PHP Form</title>
</head>
<body>

<?php
$name = $email = $gender = $degree = $dob =$bg= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["bday"])) {
 
    $dob = test_input($_POST["bday"]);
  }

  if (empty($_POST["gender"])) {
  
    $gender = test_input($_POST["gender"]);
  }


  if (empty($_POST["deg"])) {
   
    $degree = test_input($_POST["deg"]);
  }


  if (empty($_POST["blood"])) {

    $bg = test_input($_POST["blood"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <fieldset>
    <legend>INFORMATION</legend>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  Name:
  <input type="text" name="name"><br><br>
  Email:
  <input type="email" name="email"><br><br>
  Date Of Birth:
  <input type="date" name="bday"><br><br>
  Gender:
  <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other<br><br>
  Degree:
  <input type="checkbox" name="deg" value="ssc"> SSC
  <input type="checkbox" name="deg" value="hsc">HSC
  <input type="checkbox" name="deg" value="bsc">BSc
  <input type="checkbox" name="deg" value="msc">MSc<br><br>
  Blood Group:
  <select name="blood">
  <option value="b+">B+</option>
  <option value="a+">A+</option>
  <option value="ab+">AB+</option>
  <option value="o+">O+</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
  </fieldset>
</form>

<?php
echo "<h3>Your Input</h3>";
echo $name;
echo "<br>";
echo $email; 
echo "<br>";
echo $dob; 
echo "<br>";
echo $gender; 
echo "<br>";
echo $degree; 
echo "<br>";
echo $bg; 
echo "<br>";
?>


</body>
</html>