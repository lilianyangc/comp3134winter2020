<h1>Weak Password</h1>
<form method="post">
 <label>Password</label>
 <input type="password" name="password">
 <input type="hidden" name="custName" value="User">
 <br/>
 <input type="submit">
</form>

<?php
$passwords = array("123456","123456789","qwerty","password","111111","12345678","abc123","1234567","password1",$
$password = isset($_POST['password'])? $_POST['password']: '';
echo $_POST['password'];
echo "<br>";
$name = $_POST['custName'];
echo "<br>";
$userPass = in_array($password, $passwords)? true : false;

echo "<br>";

if($name && $userPass){
  echo "Welcome " . $name . " to your portal!";
}


?>

