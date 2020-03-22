<?php
$passwords = array("123456","123456789","qwerty","password","111111","12345678","abc123","1234567","password1","1234");
$password = isset($_POST['password'])? $_POST['password']: '';
$name = $_POST['custName'];

echo "<br>";
if (in_array($password, $passwords)){
        echo "Welcome back " . $name . " to your portal!";
}else{

echo "<h1>Weak Password</h1>";
echo "<form method='post'>";
echo "<label>Password</label>";
echo " <input type='password' name='password'>";
echo " <input type='hidden' name='custName' value='New_User'>";
echo "<br />";
echo "<input type='submit'>";
echo "</form>";

}

?>
