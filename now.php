
<!DOCTYPE HTML>
<!--
	Visualize by TEMPLATED
	Released for free under the Creative Commons Attribution 3.0 license (license.txt)
-->
<html id="html">
	<head>
		<link rel="stylesheet" type="text/css" href="login_style.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="login_effect.js"></script>
		<link rel="icon"
		      type="image/ico"
		      href="favicon.ico">

		<title>Now</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

<?php  
session_start();



if (isset($_SESSION['uname'])) {
	# code...
echo '<a style="margin-top:4%;" href="signout.php">Sign Out</a>';

}
else
{
	echo '
<div id="navbar" style="width: 100%;height: 40%; background-color: transparent; position: fixed; margin-top: 2%; " >

<button onclick="login()" style="color: white;">LOG IN</button>
<button onclick="register()" style="color: white; margin-left: auto;">SIGN UP</button>
</div>';
}
?>


<div id="alert" style="text-align: center;  border-width: 2px; border-color: 	white; border-style: 	solid;		 border-radius: 9px; margin-top: 5%; border: 2%; background-color: #84bd00; color:pink; opacity:.9; 	 position: fixed; width: 30%; z-index: 2;  margin-left: 25%; display: none; ">
	<h2>Your Now  been created successfully!</h2>

</div>












<div style="text-align: center;  border-width: 2px; border-color: 	white; border-style: 	solid;		 border-radius: 9px; margin-top: 12%; border: 2%; background-color: #3b3b3b; color:pink; opacity:.9; 	 position: fixed; width: 30%; z-index: 2;  margin-left: 25%; display: none;"  id="login">
	<form id="forum"  method = "get" action = "yeni.php">

   
   <input style="border-radius: 9px; text-align: center ; font-size: 120%;" type = "text" id = "login" placeholder = "Email Id" name = "uid">
   <input style="display: none; border-radius: 9px; text-align: center ; font-size: 120%;" type = "text" id = "register" placeholder = "Name" name = "name">
   <input style="border-radius: 0px; color: white ;text-align: center;" type = "password" id = "password" name = "upass" placeholder = "***">
   <input style=" margin-top: 7%; border-radius: 4px; margin-left: auto; margin-right: auto;" type = "submit" id = "dologin" value = "Login">
  

  </form>

</div>

<div style="text-align: center;  border-width: 2px; border-color: 	white; border-style: 	solid;		 border-radius: 9px; margin-top: 12%; border: 2%; background-color: #3b3b3b; color:pink; opacity:.9; 	 position: fixed; width: 30%; z-index: 2;  margin-left: 25%; display: none; " class="file-upload" id="wpost">
	<form id="wposta"  method = "get" action = "post.php">

   
    <input style="margin-top: 4%; " class="file-upload__input" id="upload" type="file" name="pic" accept="image/*">
   <input style="border-radius: 0px; color: white ;text-align: center;" type = "text" id = "act" name = "activity" placeholder = "Current Activity">
   <input style=" margin-top: 7%; border-radius: 4px; margin-left: auto; margin-right: auto;" type = "submit" id = "dologin" value = "Post">
  

  </form>

</div>



<script type="text/javascript">
	function register() {

		login();
    var y = document.getElementById("register");
    if (y.style.display === "none") {
        y.style.display = "block";
 document.getElementById("dologin").value="Register";
 
 //document.getElementById("header").style.filter= "blur(5px)";
  //x.style.filter="blur(0px)";


    } else {
    	//document.getElementById("header").style.filter= "blur(0px)";
        y.style.display = "none";
    }
}

</script>
<script type="text/javascript">
	function login() {
    var x = document.getElementById("login");
    if (x.style.display === "none") {
        x.style.display = "block";
 document.getElementById("dologin").value="LOG IN";
 document.getElementById("forum").action="check.php";
 
 document.getElementById("header").style.filter= "blur(5px)";
  //x.style.filter="blur(0px)";


    } else {
    	document.getElementById("header").style.filter= "blur(0px)";
        x.style.display = "none";
    }
}
</script>


<img style="margin-left:80%; margin-top: 2%; " src="adas.png">
				<!-- Header -->
					<header id="header">
						<span class="avatar"><img src="https://avatars0.githubusercontent.com/u/9204365?v=3&s=460" alt="" /></span>
						<h1> <strong>
							<?php session_start();
//require(__DIR__.'/ayar.php');
//z(6,"firma");

echo $_SESSION['name'];


							 ?></strong>  <a href="http://templated.co"></a><br />is<br />

							<section class="nobrainer">


						<strong style="display:none;" id="sho">




						</strong>


								<div id="mydiv">
						 	 <span class="editableDiv"  style=" :focus {outline: 0px solid transparent; } " contenteditable="true"><strong><?php 
require(__DIR__.'/ayar.php');

z(6,"aktivite");

echo z(1,"WHERE Owner_id='".$_SESSION["id"]."'ORDER BY id DESC",'ac_name')[0];

 ?>
</strong></span>
<button onclick="post()" style="	color:white; width:15px;  "><</button>

<script type="text/javascript">
	
function post() {


var u = document.getElementById("wpost");

 // document.getElementById("dologin").value="LOG IN";
 // document.getElementById("forum").action="check.php";

  u.style.display = "block";

}


</script>


						</div><button  style="margin-bottom:1%;	color:white; width:5%; display:none;  ">+</button></section> Now.</h1><img src="http://www.musawa.ps/assets/images/location_icon.png" alt=""><p style="color:white">Denizli, Turkey</p>
						<ul class="icons">
							<script type="text/javascript">
							document.onclick=check;
							function check(e){
							var target = (e && e.target) || (event && event.srcElement);
								var obj = document.getElementById('mydiv');
							var obj2 = document.getElementById('sho');

						checkParent(target)?obj.style.display='none':null;
						checkParent(target)?obj2.style.display='Grid':null;



						target==obj2?obj.style.display='block':null;
						target==obj2?obj2.style.display='none':null;
							}
							function checkParent(t){
							while(t.parentNode){
							if(t==document.getElementById('mydiv')){
							return false
							}
							t=t.parentNode
							}
							return true
							}
							</script>




							<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
							<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
						</ul><h1 style="text-align:center;"> <strong>Old Activity</strong>

					</header>
				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">


<?php
//require(__DIR__.'/ayar.php');
z(6,"aktivite");

$Olds= z(1,"WHERE Owner_id='".$_SESSION["id"]."'ORDER BY id DESC",'ac_name');

$Times= z(1,"WHERE Owner_id='".$_SESSION["id"]."'ORDER BY id DESC",'datetime');


echo '<div>';


for ($i=0; $i <count($Olds) ; $i++) { 
	# code...
if ($i%3==0) {echo '<a href="images/fulls/trip.gif">';
echo '<img src="#" alt="" />';
echo '<h3>'; echo $Olds[$i];
	# code...



echo '</h3>';
echo '';
echo '<div class="memoli">';
echo '';
echo '</div>';
echo '';
echo $Times[$i];
echo '';
echo '</a>';
echo '';
echo '';
}}
echo '</div>';



echo '<div>';


for ($i=0; $i <count($Olds) ; $i++) { 
	# code...
if ($i%3==1) {echo '<a href="images/fulls/trip.gif">';
echo '<img src="#" alt="" />';
echo '<h3>'; echo $Olds[$i];
	# code...

echo '</h3>';
echo '';
echo '<div class="memoli">';
echo '';
echo '</div>';
echo '';
echo $Times[$i];
echo '';
echo '</a>';}

}
echo '';
echo '';
echo '</div>';


echo '<div>';


for ($i=0; $i <count($Olds) ; $i++) { 
	# code...
if ($i%3==2) {echo '<a href="images/fulls/trip.gif">';
echo '<img src="#" alt="" />';
echo '<h3>'; echo $Olds[$i];
	# code...

echo '</h3>';
echo '';
echo '<div class="memoli">';
echo '';
echo '</div>';
echo '';
echo $Times[$i];
echo '';
echo '</a>';
}

}
echo '';
echo '';
echo '</div>';

  ?>



								<!-- <div>
									<a
										<h3>Swimming</h3><br/>
<div class="memoli">

</div>

											 Yesterday 16.45</h3>
									</a>
									<a href="images/fulls/paris.jpg">
										<img src="images/thumbs/paris.jpg" alt="" />
										<h3>Happy</h3>

										<div class="memoli">

										</div>

																					Monday 12.33

									</a>
								</div>

								<div>
									<a href="images/fulls/trip.gif">
										<img src="images/thumbs/trip.gif" alt="" />
										<h3>Tripping</h3>

										<div class="memoli">

										</div>

																					06.06.2017 04:20

									</a>


								</div>

								<div>
									<a href="images/fulls/book.jpg">
										<img src="images/thumbs/book.jpg" alt="" />
										<h3>Reading</h3>

										<div class="memoli">

										</div>

																					10.02.2017 00:00

									</a>

								</div> -->

							</section>

					</section>

				<!-- Footer -->
					<footer id="footer">
						<p> Now app is now Available at Apple Store <a href="#">Download</a> From Here .</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>

<script type="text/javascript">
$(document).ready(function () { var z = document.getElementById("alert");
    if(window.location.href.indexOf("success") > -1) {
      z.style.display="block";
      setTimeout(function(){ z.style.display="none" }, 3000);
    }
    if(window.location.href.indexOf("failed") > -1) {
    z.style.background="red"; z.innerHTML="Email or Password is incorrect";  z.style.display="block"; 
      setTimeout(function(){ z.style.display="none" }, 3000);
    }
    if(window.location.href.indexOf("signed") > -1) {
     z.innerHTML="You've successfully signed in";  z.style.color="white"; z.style.display="block";
      setTimeout(function(){ z.style.display="none" }, 3000);
    }




});
</script>

</html>
<?php  

//require(__DIR__.'/ayar.php');
//echo "Hoş geldin";

$hello="hoşgeldin";

echo $hello;
z(6,"firma");
echo strlen($hello);
 //$_Firma =z(1, ['ad'=>'ayb'], 'ad,telno');
 $_Firma=z(1,"WHERE 1",'ad');
 //print_r($_Firma);


echo isset($_SESSION['uname']);

 //echo $_Firma[1];
//z(2,["ad"=>"netadım","telno"=>"05552221100"]);
//_z(1);


 //_z(3,2,Array('ad'=>'ayb','telno'=>'053322211122')); 



die();
?>
