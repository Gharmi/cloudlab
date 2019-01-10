
<html>
<body>


<form action="" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" name="submit"><br>
</form>




</body>
</html>

<?php
if(isset($_POST['submit'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="mydb";

	echo "string";

	$conn = new mysqli($servername, $username, $password,$db);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 


	
	$name=$_POST["name"];
	$email=$_POST["email"];

	$sql = "INSERT INTO MyGuests (fullname,email)
	VALUES ('$name','$email')";
	if($conn->query($sql))
	{
		echo "sucessfully inserted";
	}
	else
	{
		echo "failed";
	}
	
}

?>