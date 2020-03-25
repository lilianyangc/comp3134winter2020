<?php
session_start();

//takes the value of confirmation session
$sessionVariable = $_SESSION['confirmation'];
console.log($sessionVariable);

//takes the post value
if(isset($_POST['confirmation'])){
        $postVariable = $_POST['confirmation'];
console.log($_POST['confirmation']);
};

if($sessionVariable == $postVariable){

        if(isset($_POST['username'])){

                if($_POST['username']== 'host' && $_POST['password'] == 'pass'){

                echo "<div>Successully logged in user!</div><br />";

                }elseif($_POST['username'] != 'host' && $_POST['password'] != 'pass'){

                echo "<div>Login attempt was unsuccessful!</div><br />";
                }

        }

}

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



?>
