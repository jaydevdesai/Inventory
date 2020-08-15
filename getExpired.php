<?php
require("connection.php");
if(isset($_POST['submit']))
{
	$sql = "INSERT INTO expired_items SELECT * FROM current_items where item_exp_date<='.date("yyyy-mm-dd").'";

	if ($conn->query($sql) === TRUE) {
	  echo "Success.";
	  $sql = "DELETE FROM current_items WHERE item_exp_date<='.date("yyyy-mm-dd");"
	  if ($conn->query($sql) === TRUE) {
		echo "Success.";
	  }
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	  
	}
}
	sql = "SELECT item_id, item_name, item_exp_date FROM expired_items, items where items.item_id=order_items.item_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["item_id"]. " - Name: " . $row["item_name"]. " - Exp Date: " . $row["item_exp_date"]."<br>";
  }
} else {
  echo "0 results";
}

?>

<form id="form1" action="getExpired.php" method="post">
	<input type="submit" name="submit" value="Refresh Expiry"/>
</form>