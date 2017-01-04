<?php
include "db.php";
include "functions.php"
?>
<?php
    include "includes/header.php";
?>

        <div class="container">
            <div class="col-md-6">
                <pre>
                    <?php
                        readUsers();
                    ?>/op
                </pre>
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
