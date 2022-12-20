<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $yearErr = $passwordErr = $mobilenumberErr="";
$name = $email = $gender = $comment = $website = $year = $password = $mobilenumbe= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["year"])) {
    $yearErr = "Year is required";
  } else {
    $gender = test_input($_POST["year"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  }

  if (empty($_POST["mobilenumber"])) {
    $mobilenumberErr = "mobilenumber is required";
  } else {
    $mobilenumber =$_POST["mobilenumber"];
  }

  
  if($_POST["name1"]) {
    $name1 = $_POST["name1"];
  }
  if($_POST["name2"]) {
    $name2 = $_POST["name2"];
  }
  if($_POST["name3"]) {
    $name3 = $_POST["name3"];
  }
  if($_POST["name4"]) {
    $name4 = $_POST["name4"];
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Year:
  <select name="year" id="">
    <option value="">Select Year</option>
    <option value="2022">2022</option>
    <option value="2022">2021</option>
    <option value="2022">2020</option>
    <option value="2022">2019</option>
    <option value="2022">2018</option>
  </select><br><br>
  <span class="error">* <?php echo $yearErr;?></span>
  Select name(s):
  <input type="checkbox" name="name1" value="Sultana">
  <input type="checkbox" name="name2" value="Sharmin">
  <input type="checkbox" name="name3" value="Sohana">
  <input type="checkbox" name="name4" value="Ruma"><br><br>
  Password:
  <input type="password" name="password" placeholder="Type your password" required>
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>

  Mobile Number:
  <input type="number" name="mobilenumber" placeholder="Type your number">
  <span class="error">* <?php echo $mobilenumberErr;?></span>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $year;
echo "<br>";
echo $name1;
echo "<br>";
echo $name2;
echo "<br>";
echo $name3;
echo "<br>";
echo $name4;
echo "<br>";
echo $mobilenumber;
echo "<br>";

?>

</body>
</html>