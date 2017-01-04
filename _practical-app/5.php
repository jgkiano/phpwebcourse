<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

 echo abs(-4.3);
 echo "<br>";
 echo addcslashes("This is like super cool","l");
 $arr = [32,52,75,96,74,52];
 echo "<br>";
 echo $arr[array_rand($arr,1)];




?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
