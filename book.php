<?php
  include 'con1.php';
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: center;
  padding: 16px;
}

th:first-child, td:first-child {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}

.fa-check {
  color: green;
}

.fa-remove {
  color: red;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>
<table>
    <?php
      $order=$_SESSION["order"];
      $cart= $_SESSION["cart"];
      $c=$order[3]*$cart[2];
      $_SESSION["total"]=$c;
      error_reporting(1);
    $num=1;
    $n="Select * from customer";
    $a=mysqli_query($con,$n);
    while ($row1=mysqli_fetch_assoc($a))
    {
      if ($num<$row1['Id']) 
      {
        $num=$row1['Id'];
      }
    }
    
  ?>
  <tr>
    <th>Image</th>
    <th>Products Name</th>
    <th>Customer Name</th>
    <th>Address</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total amount</th>
  </tr>
  <tr>
    <td> <img src="<?php echo $cart[0];?>" style="width: 150px; height: 150px;"></td>
    <td><?php echo $cart[1];?></td>
    <td><?php echo $order[1];?></td>
    <td><?php echo $order[2];?></td>
    <td><?php echo $order[3];?></td>
    <td><?php echo $cart[2];?>₹</td>
    <td><?php echo $c;?>₹</td>
  </tr>
</table>
    <center><a href="wel.php"><button class="button">Cash on Delivery</button>
    <a href="online.php"><button class="button">Online Payment</button></a></center>
</body>
</html>
<?php
  $img=$cart[0];
  $name=$order[1];
  $address=$order[2];
  $qut=$order[3];
  $price=$cart[2];
  $sql="INSERT INTO orders(cus_id, name, price, amount, qu, orders_address, img) VALUES ('$num','$name','$price','$c','$qut','$address','$img')";
  $check1=mysqli_query($con,$sql);
?>