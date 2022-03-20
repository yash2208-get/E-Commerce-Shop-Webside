<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

  <script type="text/javascript">
    
  </script>
  <div class="container text-center">
    <div class="row" id="product">
      
    </div>
  </div>


        
<?php
    include 'con1.php';
      $seclectquery="select * from product";
      $query=mysqli_query($con,$seclectquery);
      $nums=mysqli_num_rows($query);
      while ($res=mysqli_fetch_array($query))
      {
        ?>
          <script type="text/javascript">
          var a=document.getElementById("product");

          var e1=document.createElement('div');//col
          e1.classList.add("col-lg-4");
          e1.classList.add("col-md-6");
          e1.classList.add("col-sm-6");
          e1.classList.add("col-12");
          e1.classList.add("mb-2");

          var e2=document.createElement('a');//hypey link
          e2.classList.add("text-secondary");
          e2.href="#";

          var e3=document.createElement('div'); // card
          e3.classList.add("card");

          var e4=document.createElement('img'); 
          e4.classList.add("card-img-top");
          e4.classList.add("img-fluid");
          e4.src="2.jpg";

          var e5=document.createElement('div');
          e5.classList.add("card-body");

          var e6=document.createElement('h5');
          e6.classList.add("card-title");
          var t1=document.createTextNode('<?php echo $res['name']; ?>');
          e6.appendChild(t1);

          var e7=document.createElement('p');
          e7.classList.add("card-text");
          var t2=document.createTextNode('<?php echo $res['detail']; ?>');
          e7.appendChild(t2);

          var e8=document.createElement('h6');
          e8.classList.add("card-text");
          var t3=document.createTextNode('Rs. <?php echo $res['price']; ?>');
          e8.appendChild(t3);



          e5.appendChild(e6);
          e5.appendChild(e7);
          e5.appendChild(e8);


          e3.appendChild(e4);
          e3.appendChild(e5);


          e2.appendChild(e3);


          e1.appendChild(e2);
          a.appendChild(e1);
        </script>
        <?php
      }
?>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>
