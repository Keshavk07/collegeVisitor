<?php include("db_connect_Login.php"); session_start(); $_SESSION["loggedIn"] =0; ?>

<?php
	
	$error=$uname=$pass=""; $count = 0;
	


if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty($_POST["username"]) || empty($_POST["pass"])){
		$error = "Please Enter All the Fields !";}
	
	
	else{
		$pass = $_POST["pass"];
		$uname =$_POST["username"];
	
	
	$sql = "SELECT userName FROM login_info WHERE userName = 'shreya' AND pass= 'shreya' ";
	$match = mysqli_query($link, $sql);
	$count = mysqli_num_rows($match);
	
	if($count == 1){
		$_SESSION["user"] = $_POST["username"];
		$_SESSION["loggedIn"] = 1;
		header("location: front.php");
	}
	
		else
		$error = "Invalid Password or Username";
}
}

function lr($lrsrt){

	return strtolower($lrsrt);
}


?>
<!DOCTYPE HTML5>
<hlml><head>
<link rel = "stylesheet" href= "BootStrap/css/bootstrap.min.css">
<style>
		
		#img{	
			position: relative;
			left: 25%;
			height: 30%;

				

	}

	
	#login{     

			position: relative;
			left: 35%;
			text-align: center; 
			width: 40%;
			height: 50%;
			padding-top: 25px;
	
			background: unset;
				

			}

	#submitBtn{

				width: 100px;
	}	
	#head{
		position: relative;
		font-size: large;
		text-align: left;
	}	
	#form{
			position: absolute;
			padding-top: 40px;
			padding-bottom: 40px;
			padding-left: 45px;
			padding-right: 45px;
border: 5px solid #747474;
  border-radius: 10px;
	}	

	#error{
		font-size: 14px;
		color : #FF0000;
		padding-bottom: 2px;

	}

.group        { 
  position:relative; 
  margin-bottom:35px; 
}
input         {
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
  border-bottom:solid 2.5px #757575;
}
input:focus     { outline:none; }

label          {
  color:#999; 
  padding-top:5px;
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all; 
}

input:focus ~ label, input:valid ~ label     {
  top:-25px;
  font-size:14px;
  color:#5264AE;
}

.bar  { position:relative; display:block; width:300px; }
.bar:before, .bar:after   {
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#5264AE; 
  transition:0.2s ease all; 
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}




</style>
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <!-- custom css file link  -->
 <link rel="stylesheet" href="css/style.css">
</head>


<!-- header section starts  -->

<header class="header">

    <a href="index.html" class="logo"> <i class="fas fa-graduation-cap"></i> Collage Visitors Mangement </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="index.html">home</a></li>
            <li><a href="about.html">about</a></li>
            <li><a href="#">Services +</a>
                <ul>
                    <li><a href="index.php">Guest Room</a></li>
                    <li><a href="course-2.html">Foods</a></li>
                    <li><a href="cab/index.php">Cab</a></li>
                    <li><a href="course-3.html">Bill & Charges</a></li>
                </ul>
            </li>
            <li><a href="#">pages +</a>
                <ul>
                    <li><a href="teachers.html">Our Staffs</a></li>
                    <li><a href="blog.html">blogs</a></li>
                </ul>
            </li>
            <li><a href="contact.html">contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->





<body>



<?php echo $error;?>



<div id = "login" >

<div id = "head">
<h2> LOGIN HERE</h2>
</div>
<div id = "form">

<p id = "error" ><?php echo $error ;?></p>
<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"  method = "POST">
		
    
  <div class="group">      
    <input autocomplete="off" type="text" name="username" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Username</label>
  </div>
    
  <div class="group">      
    <input autocomplete="off" type="password" name="pass" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Password</label>
  </div>
    
    <button style="float:left; width:90px" class= "btn btn-large btn-success" type = "submit">Login</button>
	
	</form>
	</div>
</div>	
</body>
	
	</html>