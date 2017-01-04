<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
 if (true) {
 	echo "I love php";
} elseif (true) {
	echo " love";
} else {
	echo " php";
}

for ($i=0; $i <= 10 ; $i++) {
	echo $i;
}
$num = 3;
switch ($num) {
	case 1:
		echo "true";
		break;
	case 2:
		echo "true";
		break;
	case 3:
		echo "true";
		break;
	case 4:
		echo "true";
		break;
	case 5:
		echo "true";
		break;

	default:
		echo "false";
		break;
}


?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
