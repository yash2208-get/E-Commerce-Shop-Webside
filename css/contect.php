<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="img\89.png">
  <title>Jewels Shop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="cont.css">
<link rel="preconnect" href="https://fonts.gstatic.com">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="my()">
  <div id ="loaging">  
  </div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="#">Jewels Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="products.html">Products</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about_us.html">Abuot Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="main">
<div class="main_map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3573.187695422818!2d74.63234211450988!3d26.417418887596735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be123423f1ded%3A0xced3aaf5165f63a8!2syash%20maheshwari!5e0!3m2!1sen!2sin!4v1608212178786!5m2!1sen!2sin" width="400" height="400" frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
<div class="form_cont">
  <h4>Contact</h4>
<form method="post">
        <div class="inputbox">
          <input type="text" name="user_name" autocomplete="off" required id="user_name" >
          <label>User Name</label>
        </div>
        <div class="inputbox">
          <input type="text" name="content" autocomplete="off" required id="content">
          <label>Content Number</label>
        </div>
        <div class="inputbox">
          <input type="text" name="e-mail" autocomplete="off" required id="e-mail">
          <label>E-mail id</label>
        </div>
        <div class="inputbox">
          <textarea placeholder="Comments"></textarea>
        </div>
        <span id="p2"></span>
        <input type="submit" name="b1" value="Sign up" onclick="login1();">
      </form>
      </div>
      </div>
</div>
<br>
<br>
<div class="main_E_mail" id="main_E_mail">

   <div class="input_Email_2" >
    Jewels Shop
    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="basic-addon2" style="background:transparent; color: #fff">
  <div class="input-group-append">
    <button class="input-group-text" id="basic-addon2" style="background-color: red; color: black">Go</button>
  </div>
  </div>
  <div id="radio_button">
    <input type="radio" name="na" style="margin:5px ">Subscribe
    <input type="radio" name="na" style="margin:5px">Unsubscribe
  </div>
</div>
</div>
<div class="icon-bar">
    <a href="https://www.facebook.com/" class="facebook">
    Click here to visit<i class="fa fa-facebook-square" target='_blank'></i>
</a>
    <a href="https://www.instagram.com/" class="instagram">
    Click here to visit<i class="fa fa-instagram" style="color: #fff"></i>
</a>
<a href="https://youtube.com/channel/UCc8RPv1pEo84YFP_yQHJmsA" class="instagram">
    Click here to visit<i class="fa fa-youtube-square" style="color:red"></i>
</a>
</div>
<script>
  var b=10000;
  function my()
    {
      var a=document.getElementById('loaging')
      a.style.display='none';
    }
   </script>
</body>
</html>