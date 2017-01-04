<?php
include "db.php";
include "functions.php";
createUser();
?>
<?php
    include "includes/header.php";
?>

        <div class="container">
            <div class="col-md-6">
                <h1 class="text-center">Create</h1>
                <form action="login_create.php" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="CREATE" name="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
<?php
    include "includes/footer.php";
?>
