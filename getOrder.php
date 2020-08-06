<?php
require("connection.php");
	$sql = "SELECT item_id, item_name FROM order_items, items where items.item_id=order_items.item_id";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["item_id"]. " - Name: " . $row["item_name"]. "<br>";
  }
} else {
  echo "0 results";
}
?>
