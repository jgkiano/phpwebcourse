<form action="" method="post">
    <div class="form-group">
        <label for="cat_title">Edit Category Title</label>

        <?php
            if(isset($_GET['edit'])) {
                $cat_id = $_GET['edit'];
                $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
                $result_category = mysqli_query($connection,$query);
                while ($row = mysqli_fetch_assoc($result_category)) {
                    $cat_id = $row["cat_id"];
                    $cat_title = $row["cat_title"];
                ?>
                <input type="text" name="cat_title" class="form-control" value ="<?php if(isset($cat_title)) { echo $cat_title; }?>" placeholder="Category Title">
        <?php }
            }
        ?>
        <?php
            if(isset($_POST['update_category'])) {
                $cat_title = $_POST['cat_title'];
                $query = "UPDATE categories SET cat_title = '{$cat_title}' WHERE cat_id = '{$cat_id}'";
                $result = mysqli_query($connection, $query);
                if(!$result) {
                    echo "something went wrong" . mysqli_error($connection);
                }
                header("Location: categories.php");
            }
        ?>
    </div>
    <div class="form-group">
        <input type="submit" name="update_category" class="btn btn-primary" value="Update">
    </div>
</form>
