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
    <th style="width:50%">Img</th>
    <th>Name</th>
    <th>Price</th>
  </tr>
  <?php
   include 'con1.php';
      $id= $_REQUEST['search'];
      $sel_query="Select * from product Where name or price like ('%$id%') or name like ('%$id') or name like ('$id%')";
      $check=mysqli_query($con,$sel_query);
      while ($row=mysqli_fetch_assoc($check))
         {
?>  
  <tr>
    <td><img src="<?php echo $row['img'];?>" style="width: 50px; height: 50px;"></td>
    <td><?php echo $row['name'];?></td>
    <td>Price: <?php echo $row['price'];?>Rs</td>
    <td><button id="<?php echo $row['product_Id']?>" onclick="location.href='detail.php?id='+this.id">Detail</button></p></td>
  </tr>
<?php
}?>
</table>
</body>
</html>