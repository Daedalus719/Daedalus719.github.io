<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "witryna";
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

		$imie =  $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
    //    $gender =  $_REQUEST['gender'];
        $email = $_POST['email'];
         
        $sql = "INSERT INTO dane_osobowe (imie, nazwisko, email)  VALUES ('$imie',
            '$nazwisko', '$email')";
         

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

        mysqli_close($mysqlconnection);  // zamykamy połączenie
        ?>
    </body>
</html>