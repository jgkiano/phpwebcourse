<?php
if(isset($_POST['create_user'])) {

    $username = $_POST["username"];
    $user_password = $_POST["user_password"];
    $user_firstname = $_POST["user_firstname"];
    $user_lastname = $_POST["user_lastname"];
    $user_email = $_POST["user_email"];
    $user_role = $_POST["user_role"];

    $user_image = $_FILES['user_image']['name'];
    $user_image_temp = $_FILES['user_image']['tmp_name'];

    move_uploaded_file($user_image_temp,"../images/$user_image");

    $query = "INSERT INTO users(username, user_password, user_firstname, user_lastname, user_email, user_image, user_role, randSalt) ";

    $query .="VALUES ('{$username}','{$user_password}','{$user_firstname}','{$user_lastname}','{$user_email}','{$user_image}','{$user_role}', '') ";

    echo $query;

    $result = mysqli_query($connection, $query);

    confirm($result);


}
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="form-group">
        <label for="user_password">Password</label>
        <input type="password" class="form-control" name="user_password">
    </div>

    <div class="form-group">
        <label for="user_firstname">First Name</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>

    <div class="form-group">
        <label for="user_lastname">Last Name</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>

    <div class="form-group">
        <label for="user_email">Email</label>
        <input type="email" class="form-control" name="user_email">
    </div>

    <div class="form-group">
        <label for="user_image">Profile Picture</label>
        <input type="file"  name="user_image">
    </div>

    <div class="form-group">
        <label for="user_role">Category</label>
        <select name="user_role" id="">
            <option value="subscriber">subscriber</option>
            <option value="admin">administrator</option>
        </select>
    </div>

    <div class="form-group">
        <button type="submit" name="create_user" class="btn btn-primary">Add User</button>
    </div>

</form>
