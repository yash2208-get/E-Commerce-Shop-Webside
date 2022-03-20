<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="img\89.png">
	<title>Jewels Shop</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <a class="nav-link" href="">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="products.html">Products</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about_us.html">Abuot Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contect.html">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="3.png" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="h1_line">

	<div class="child1_div"></div>
		<center><h3>SHOP BY COLLECTION</h3></center>
		<div class="h1_line_2nd"></div>
</div>
<br>
<br>

<div class="grand_parent">
  <div class="parents">
    <div class="child">
    </div>
    <div class="child">
    </div>
    <div class="child">
    </div>
  </div>
  <div class="parents1">
    <div class="child1">
    </div>
    <div class="child1">
      
    </div>
    <div class="child1">
      
    </div>
  </div>
</div>
<br>
<section class="Email_main" id="Email_main">
  <div class="input_Email" >
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
</section>
<div class=line></div>
<div class="center">
    <div class="wave"><b>A</b></div>
    <div class="wave"><b>R</b></div>
    <div class="wave"><b>T</b></div>
    <div class="wave"><b>I</b></div>
    <div class="wave"><b>F</b></div>
    <div class="wave"><b>I</b></div>
    <div class="wave"><b>C</b></div>
    <div class="wave"><b>I</b></div>
    <div class="wave"><b>A</b></div>
    <div class="wave"><b>L</b></div>
  </div>
  <br>
  <br>
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