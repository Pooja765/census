<html>
<head>
  <title>Census Form</title>
  <style>
p.two {
  border-width:5px;
     border-bottom-style:groove;
}
</style>
<body>
           <p class="two">
           <h1><center>Details of Citizen</center></h1>
<?php
$n1=$_GET['name'];
$a1=$_GET["age"];
$q1=$_GET["qualification"];
$o1=$_GET["occupation"];
$num=$_GET["people"];
$q=$_GET["area"];
$c=$_GET["city"];
$p=$_GET["pincode"];
$n2=$_GET["name1"];
$a2=$_GET["age1"];
$q2=$_GET["qualification1"];
$o2=$_GET["occupation1"];
$n3=$_GET["name2"];
$a3=$_GET["age2"];
$q3=$_GET["qualification2"];
$o3=$_GET["occupation2"];
$n4=$_GET["name3"];
$a4=$_GET["age3"];
$q4=$_GET["qualification3"];
$o4=$_GET["occupation3"];
echo"<br>";
echo "$n1";
echo"<br>";
echo "$a1";
echo"<br>";
echo "$q1";
echo"<br>";
echo "$o1";
echo"<br><br><hr>";
echo "$num";
echo"<br>";
echo "$q";
echo"<br>";
echo "$c";
echo"<br>";
echo "$p";
echo"<br><br><hr>";
echo "$n2";
echo"<br>";
echo "$a2";
echo"<br>";
echo "$q2";
echo"<br>";
echo "$o2";
echo"<br><br><hr>";
echo "$n3";
echo"<br>";
echo "$a3";
echo"<br>";
echo "$q3";
echo"<br>";
echo "$o3";
echo"<br><br><hr>";
echo "$n4";
echo"<br>";
echo "$a4";
echo"<br>";
echo "$q4";
echo"<br>";
echo "$o4";
 ?>
 </p>
</div>
</div>
</div>

</body>
</html>
