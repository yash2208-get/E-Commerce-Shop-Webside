<?php
include 'con1.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  width: 200px;
  font-size: 18px;
  margin:5px;
  border-radius: 7px;
}
 button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<table>
  <tr>
    <th>Image</th>
    <th>Name</th>
    <th>Price</th>
    <th>Total amount</th>
    <th>Quantity</th>
    <th>Address</th>
  </tr>
    <?php
    $m="SELECT * FROM orders";
    $check=mysqli_query($con,$m);
    while($row=mysqli_fetch_assoc($check))
    {  
    ?>
  <tr>
    <td><img src="<?php echo $row['img'];?>" style="width: 150px; height: 150px;"></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['price']; ?>₹</td>
    <td><?php echo $row['amount']; ?>₹</td>
    <td><?php echo $row['qu']; ?></td>
    <td><?php echo $row['orders_address'];?></td>
    <td><button>Return</button></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>