<?php
include 'con1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
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
      <form method="post">
<select name="t">
	<a><option value="<?php echo $num[0]?>">Neekles</option></a>
	<a><option value="<?php echo $num[1]?>">Ring</option></a>
	<a><option value="<?php echo $num[2]?>">Bangles</option></a>
	<a><option value="<?php echo $num[3]?>">Earing</option></a>
</select>
<input type="submit" name="b1" value="ok">
</form>
<?php
if (isset($_POST["b1"])) {
    $is=$_POST['t'];
    $i = array($is);
    foreach ($i as $key => $value)
    {
    $sel="Select * from product where Category_id='$value'";
    $ch=mysqli_query($con,$sel);
    while($r=mysqli_fetch_assoc($ch))
        {?>
            <table border="2">
                <tr>
                    <td><?php echo $r['name']?></td>
                    <td><?php echo $r['price']?></td>
                    <td><?php echo $r['detail']?></td>
                </tr>
            </table>
            <?php
    }    }
}
?>
</body>
</html>