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


        $sql = "SELECT * FROM users where firstname=? AND active = '1'";
	$stmt= $conn->prepare($sql);
	$stmt->bind_param("s",$text);
	$stmt->execute();
	$result = $stmt->get_result();

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }

        } else {
                echo "0 results";
        }


}else{


        echo "Could not connect";
        }


?>

