<?php

$password = isset($_POST['password'])? $_POST['password']: '';
$name = isset($_POST['username'])? $_POST['username']: '';
$submit = isset($_POST['submit']);

$approvedPass = ($password === "pass") ? true: false;
$approvedUser = ($name === "host") ? true : false ;

echo "<br>";

if ($submit && $password != '' && $name != ''){


        if($approvedPass && $approvedUser ){

        echo "<br />Successfully logged in ". $name;

        }

        if(!$approvedPass){

        echo "<br />Incorrect password";

        }

         if(!$approvedUser){

        echo "<br />Incorrect username";

        }

echo "<br />username = ". $name;
echo "<br />password = ".$password;

}else{

echo "<h2>Login Page</h2><br />";
echo "Please enter credentials to login";
echo "<form method='post'>";
echo "<label>Username: </label>";
echo " <input type='text' name='username'><br />";
echo "<label>Password</label>";
echo " <input type='password' name='password'>";
echo "<br />";
echo "<input type='submit' name='submit'>";
echo "</form>";


}


?>
