<?php
 		include 'con1.php';
 		$id= $_REQUEST['id'];
        $sel_query="Select * from product where Category_id='$id'";
        $check=mysqli_query($con,$sel_query);

?>
<!DOCTYPE html>
<html>
<head>
  
  </style>
<link rel="icon" type="image/png" href="img\89.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Jewels Shop</title>
<link rel="stylesheet" type="text/css" href="index1.css">
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
    <form action="search.php" method="get">
      <input type="text" placeholder="Search.." name="search">
      
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="slider">
  
</div>
<h1 class="h1"><b>Jewels Shop</b></h1>
<br>
<br>

<div class="grand_parents">
  <div class="img_" id="img_">
    <?php 
    while($row=mysqli_fetch_assoc($check))
       { ?>
    <div class="childs_">
      <a href="<?php echo $row['img']?>"><img src="<?php echo $row['img']?>"></a>
      <p id="Prod_0"><?php echo $row['name']?>
       <br><span id="Pri_1">Price: <?php echo $row['price']?>Rs</span></p>
       <a id="<?php echo $row['product_Id']?>" onclick="location.href='detail.php?id='+this.id"><p><i class="fa fa-caret-square-o-right" style="font-size:26px;float:right;margin-right: 25px; color: black;margin-top: -5px;" title="Product Details"></i></p></a>
    </div>
    <?php
  }
?>
  </div>
</div>

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
<a href="index2.php" class="instagram">
    add to card<i class="fa fa-cart-arrow-down" style="color:black; font-size: 40px"></i>
</a>
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