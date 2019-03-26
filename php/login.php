<?php
echo "<br>login start<br>";
require_once('config.php');

$email = $_POST['sing_in_email'];
$password = $_POST['sing_in_password'];

echo "<br>email: ".$email ."		password: ".$password."<br>";

$sql="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password' ";
$result = $conn->query($sql);

if($result === false)
{
   user_error("Query failed: ".$conn->error."<br />$sql");
   echo "false";
}
if($result->num_rows == 0)
{
   echo "null";
}
else
{
    	echo "<table>";
			while($row = $result->fetch_array()){
	    echo "<tr>";
	        echo '<td>'.$row['Users_id'].'</td>
	              <td>'.$row['firstName'].'</td>
	              <td>'.$row['lastName'].'</td>
	              <td>'.$row['email'].'</td>
	              <td>'.$row['birthday'].'</td>
	              <td>'.$row['password'].'</td></tr>';
	    }
	    echo "</table>";
}

$conn->close();
?>
