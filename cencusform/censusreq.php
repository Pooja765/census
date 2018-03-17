
<html>
<head>
  <title>Census Form</title>
  <style>
p.two {
    border-style: solid;
    border-width: medium;
}
</style>
<body>
    <div class="container">
      <div class="panel panel-default">
       <div class="panel-body">
         <div class="row">
           <p class="two">
           <h1><center>Details of Citizen</center></h1>
         </div>
       </div>
     </div>
   </div>

<?php
$n1=$_REQUEST["name"];
$a1=$_REQUEST["age"];
$q1=$_REQUEST["qualification"];
$o1=$_REQUEST["occupation"];
$num=$_REQUEST["people"];
$q=$_REQUEST["area"];
$c=$_REQUEST["city"];
$p=$_REQUEST["pincode"];
$n2=$_REQUEST["name1"];
$a2=$_REQUEST["age1"];
$q2=$_REQUEST["qualification1"];
$o2=$_REQUEST["occupation1"];
$n3=$_REQUEST["name2"];
$a3=$_REQUEST["age2"];
$q3=$_REQUEST["qualification2"];
$o3=$_REQUEST["occupation2"];
$n4=$_REQUEST["name3"];
$a4=$_REQUEST["age3"];
$q4=$_REQUEST["qualification3"];
$o4=$_REQUEST["occupation3"];
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
</body>
</html>
