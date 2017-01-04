<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">



	<?php

	/*  Create a link saying Click Here, and set
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	session_start();
	$_SESSION["user"] = "Julius Kiano";
	if(isset($_SESSION["user"])) {
		echo $_SESSION["user"];
	}
	if(isset($_GET["name"])) {
		echo $_GET["name"];
	}

	$name = "cookiemonster";
	$value = "givemecookies";
	$expire = time() + (60 * 60 * 24 * 7);
	setcookie($name,$value,$expire);

	if(isset($_COOKIE["cookiemonster"])) {
		echo "<br>The cookie monster says ".$_COOKIE["cookiemonster"];
	}

	?>

	<a href="9.php?name=Julius">Click here</a>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
