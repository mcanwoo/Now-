<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="#">salaav</a>

</body>
</html>

<pre>


<?php  
//echo "<a href='yeni.php'></a>";
//echo "Hoş geldin";
require(__DIR__.'/ayar.php');
$hello="boşgittin";

echo $hello;
z(6,"users");
echo strlen($hello);
 //$_Firma =z(1, ['ad'=>'ayb'], 'ad,telno');
//$_Firma=z(1,"WHERE 1",'ad');
 //print_r($_Firma);
$poet=$_GET["uid"];
$name=$_GET["name"];
$poem=$_GET["upass"];
 // z(2,'email',$poet);
 //  z(2,'name',$name);
 //   z(2,'password',$poem);


   z(2,Array('email'=>$poet,'name'=>$name,'password' => $poem, 'pic'=> 'default.png', 'Location' => 'Planet Earth'));
   header("Location: index.php?result=success");
die();

 //echo $_Firma[1];
//z(2,["ad"=>"netadım","telno"=>"05552221100"]);
//_z(1);


 //_z(3,2,Array('ad'=>'ayb','telno'=>'053322211122')); 




?>



