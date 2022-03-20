<?php
  include 'con1.php';
   $num1=0;
    session_start();
  if(isset($_SESSION['sign'])) 
  {
    $num1=1;
  }
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    .card {
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  position: relative;
  box-shadow: 10px 20px 20px 5px #867979;
  border-radius: 3px;
}

.price {
  color: grey;
  font-size: 22px;
}
.card button {
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

.card button:hover {
  opacity: 0.7;
}
.ma
{
  position: absolute;
  width: 100vw;
  height: 100vh;
  margin-top: 85vh;
  justify-content: center;
  align-items: center;
}
.card .button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  width: 200px;
  cursor: pointer;
  font-size: 18px;
  margin:5px;
  border-radius: 7px;
}

.card .button:hover {
  opacity: 0.7;
}
.ma
{
  position: absolute;
  width: 100vw;
  height: 100vh;
  margin-top: 85vh;
  justify-content: center;
  align-items: center;
}
.input1
{
  width: 60px;
}
  </style>
<link rel="icon" type="image/png" href="img\89.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Jewels Shop</title>
<link rel="stylesheet" type="text/css" href="index1.css">
<link rel="stylesheet" type="text/css" href="detail.css">
<link rel="stylesheet" type="text/css" href="products.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Shadows+Into+Light&display=swap" rel="stylesheet">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="my()">
  <div id ="loaging">
  </div>
<div class="topnav" id="myTopnav">
  <a href="" class="active"><img src="img\89.png" style="width: 70px; height: 30px;"></a>
  <a href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Products 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <?php
        $i=0;
        $sel_query1="Select * from category";
        $check1=mysqli_query($con,$sel_query1);
        $num = array();
         while ($row1=mysqli_fetch_assoc($check1))
         {
            $num[$i]=$row1["id"];
            $i++;
         } 
      ?>
      <a id="<?php echo $num[0]?>" onclick="location.href='main_use.php?id='+this.id" name="Neekles">Neekles</a>
      <a  id="<?php echo $num[1]?>" onclick="location.href='main_use.php?id='+this.id" name="Ring" >Ring</a>
      <a  id="<?php echo $num[2]?>" onclick="location.href='main_use.php?id='+this.id" name="Bangles" >Bangles</a>
      <a  id="<?php echo $num[3]?>" onclick="location.href='main_use.php?id='+this.id" name="Earing" >Earing</a>
    </div>
  </div>
  <a href="about_us.php">About us</a> 
  <a href="contect.php">Contact</a>
  <div class="search-container">
    <form action="search.php" method="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

</div>

<div class="slider">
</div>
<h1 class="h1"><b>Jewels Shop</b></h1>
<div class="icon-bar">
    <a href="https://www.facebook.com/" class="facebook">
    Click here to visit<i class="fa fa-facebook-square" target='_blank'></i>
</a>
    <a href="https://www.instagram.com/" class="instagram">
    Click here to visit<i class="fa fa-instagram" style="color: #fff"></i>
</a>
<a href="" class="instagram">
    Click here to visit<i class="fa fa-youtube-square" style="color:red"></i>
</a>
<a href="cart.php" class="instagram">
    add to card<i class="fa fa-cart-arrow-down" style="color:black; font-size: 40px"></i>
</a>
<a href="sel.php" class="instagram">
    Your Purchased Item<i class="fa fa-truck" style="color:black; font-size: 40px"></i>
</a>
</div>

<div class="ma">
  <?php


$id= $_REQUEST['id'];
$query="Select * from product where product_Id='".$id."'"; 
 $check=mysqli_query($con,$query);
 while($row=mysqli_fetch_assoc($check))
    { 
      
?>
<div class="card">
  <img src="<?php echo $row['img'];?>" alt="Denim Jeans" style="width:100%">
  <h3><?php echo $row['name']?></h3>
  <p class="price">Price :<?php echo $row['price'];?>₹</p>
  <p class="price"><?php echo $row['size'];?></p>
  <p><?php echo $row['detail'];?></p>
  <p>Dispatch : 3-5 Days</p>
  <p><i class="fa fa-truck" style="font-size:36px;"></i> 8 Days Easy Return</p>
  <form method="post" action="index2.php?action=add&code=<?php echo $row["product_Id"]; ?>">
    <p><input type="number" name="quantity" placeholder="quantity" class="input1" min="1" max="5" required></p>
  
  <p>
    <input type="button" value="Add to Cart" class="button" class="btnAddAction" id="add" >
  </p>
  </form>
  <p><a id="b" href="login.php"><button>Buy now</button></a></p>

</div>
<?php
        $img=$row['img'];
        $name=$row['name'];
        $price=$row['price'];
        $cart = array($img,$name,$price);
    $_SESSION["cart"] = $cart;
}
?>  
</div>
<script>
  function my()
    {
      var a=document.getElementById('loaging')
      a.style.display='none';
    }
  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>
<!--<?php //echo $row['sort'];?>
-->
<script>
  var a='<?= $num1?>';
  alert(a);
  if (a==1) {
    document.getElementById('b').href='order.php';
    document.getElementById('add').type='submit';
  }
</script>