<?php
require("connection.php");
if(isset($_POST['submit']))
{
	$sql = "INSERT INTO items (item_id, item_name, item_price, item_company)
	VALUES ('$_POST['upc'])', '$_POST['name'])', '$_POST['price'])' )";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$sql = "INSERT INTO curr_items (item_id, item_name, item_quantity, item_manu_date, item_exp_date)
	VALUES ('$_POST['upc'])', '$_POST['name'])', '$_POST['price'])', '$_POST['quantity'])', '$_POST['manu_date'])', '$_POST['exp_date'])' )";
	
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

}
?>
<form id="form1" action="" method="post">
    <h1>Add Items to Inventory</h1>
    Item UPC: 
	<input name="upc" id="upc" type="number" size="12"><br><br>
	Item Name:
	<input name="name" id="name" type="text"><br><br>
	Item Price: 
	<input name="price" id="price" type="number" size="12"><br><br>
	Item Manufacturing Date:
	<input name="manu_date" id="manu_date" type="date"><br><br>
	Item Expire Date:
	<input name="exp_date" id="exp_date" type="date"><br><br>
	Item Quantity:
	<input name="quantity" id="quantity" type="number"><br><br>
	
    <input type="submit" name="submit" value="Add"/>
	
</form>