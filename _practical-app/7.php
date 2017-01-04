<?php include "functions.php"; ?>
<?php include "includes/header.php";?>


	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">



	<?php

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
    $connect = mysqli_connect("localhost","root","","section_7db");
    if(!$connect) {
        die("database connection failed");
    }
    $query = "SELECT * FROM quotes";
    $result = mysqli_query($connect, $query);
    if(!$result) {
        die("Query failed " . mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["quote"];
    }

	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
