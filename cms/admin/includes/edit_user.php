<?php
    if(isset($_GET['u_id'])) {

        $user_id = $_GET['u_id'];

        $query = "SELECT * FROM users WHERE user_id = {$user_id}";

        $result_users = mysqli_query($connection,$query);

        while ($row = mysqli_fetch_assoc($result_users)) {
            $username = $row["username"];
            $user_password = $row["user_password"];
            $user_firstname = $row["user_firstname"];
            $user_lastname = $row["user_lastname"];
            $user_email = $row["user_email"];
            $user_role = $row["user_role"];

        }
    }

    if(isset($_POST['update_user'])) {

        $username = $_POST["username"];
        $user_password = $_POST["user_password"];
        $user_firstname = $_POST["user_firstname"];
        $user_lastname = $_POST["user_lastname"];
        $user_email = $_POST["user_email"];
        $user_role = $_POST["user_role"];

        $user_image = $_FILES['user_image']['name'];

        $user_image_temp = $_FILES['user_image']['tmp_name'];

        move_uploaded_file($post_image_temp,"../images/$post_image");

        if(empty($user_image)) {
            $image_query = "SELECT * FROM users WHERE user_id = $user_id";
            $image_result = mysqli_query($connection, $image_query);
            confirm($image_result);
            while ($row = mysqli_fetch_assoc($image_result)) {
                $user_image = $row['user_image'];
            }
        }

        $query = "UPDATE users SET ";
        $query .= "username = '{$username}', ";
        $query .= "user_password = '{$user_password}', ";
        $query .= "user_firstname = '{$user_firstname}', ";
        $query .= "user_lastname = '{$user_lastname}', ";
        $query .= "user_email = '{$user_email}', ";
        $query .= "user_image = '{$user_image}', ";
        $query .= "user_role = '{$user_role}' ";
        $query .= "WHERE user_id = {$user_id} ";

        echo $query;
        if(empty($user_image)) {
            echo "user image empty";
        } else {
            $result = mysqli_query($connection, $query);
            confirm($result);
        }
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo $username;?>">
    </div>

    <div class="form-group">
        <label for="user_password">Password</label>
        <input type="password" class="form-control" name="user_password" value="<?php echo $user_password;?>">
    </div>

    <div class="form-group">
        <label for="user_firstname">First Name</label>
        <input type="text" class="form-control" name="user_firstname" value="<?php echo $user_firstname;?>">
    </div>

    <div class="form-group">
        <label for="user_lastname">Last Name</label>
        <input type="text" class="form-control" name="user_lastname" value="<?php echo $user_lastname;?>">
    </div>

    <div class="form-group">
        <label for="user_email">Email</label>
        <input type="email" class="form-control" name="user_email" value="<?php echo $user_email;?>">
    </div>

    <div class="form-group">
        <label for="user_image">Profile Picture</label>
        <input type="file"  name="user_image">
    </div>

    <div class="form-group">
        <label for="user_role">Category</label>
        <select name="user_role" id="">
            <?php if ($user_role == "subscriber") { ?>
            <option value="subscriber" selected>subscriber</option>
            <option value="admin">administrator</option>
            <?php } else { ?>
             <option value="subscriber">subscriber</option>
            <option value="admin" selected>administrator</option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
    </div>

</form>
