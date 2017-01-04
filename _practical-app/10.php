<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">


	<?php

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll




	*/
	class Dog {
		public $name = "Rusty";
		public $eyeColor = "Hazel";
		public $nose = "Wet";
		public $furColor = "Brown";

		function showAll() {
			echo $this->name . "<br>" . $this->eyeColor . "<br>" . $this->nose . "<br>" . $this->furColor;
		}
	}
	$dog = new Dog();
	$dog -> showAll();



	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
