<?php

echo "<h1>Mysql</h1>";
echo "<form method='get'>";
echo "<label>Text</label>";
echo " <input type='text' name='text'>";
echo "<br />";
echo "<input type='submit' name='submitBtn'>";
echo "</form>";


	$host = 'localhost';
	$user = 'lilian';
	$pass = 'lilian';
	$db = 'my_schema';

	$conn = mysqli_connect($host, $user, $pass, $db);

        $text = isset($_GET['text'])? $_GET['text']: '';

if($_GET['submitBtn']){


	$sql = "SELECT * FROM users where (firstname like '%$text%') AND active = '1'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] ."  Username: " . $row["username"]. " -| Name: " . $row["firstname"]. " Lastname:" . $row["lastname"].  "| Email:" . $row["email"]. "<br>";
    	}

	} else {
    		echo "0 results";
	}


}else{


	echo "Could not connect";
	}


?>


