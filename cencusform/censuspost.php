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
  <form method="GET" action="cenus.php">
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
         </body>
         </html>
<?php
$n1=$_POST['name'];
$a1=$_POST["age"];
$q1=$_POST["qualification"];
$o1=$_POST["occupation"];
$num=$_POST["people"];
$q=$_POST["area"];
$c=$_POST["city"];
$p=$_POST["pincode"];
$n2=$_POST["name1"];
$a2=$_POST["age1"];
$q2=$_POST["qualification1"];
$o2=$_POST["occupation1"];
$n3=$_POST["name2"];
$a3=$_POST["age2"];
$q3=$_POST["qualification2"];
$o3=$_POST["occupation2"];
$n4=$_POST["name3"];
$a4=$_POST["age3"];
$q4=$_POST["qualification3"];
$o4=$_POST["occupation3"];
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
