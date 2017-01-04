<?php
include "db.php";
include "functions.php";
updateUser();
?>
<?php
    include "includes/header.php";
?>

        <div class="container">
            <div class="col-md-6">
                <h1>Update</h1>
                <form action="login_update.php" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="id">User Id: </label>
                        <select class="form-control" name="id">
                            <?php showAllData(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <?php
            include "includes/footer.php";
        ?>
