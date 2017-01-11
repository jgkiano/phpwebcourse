<table class="table table-hover">
    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Username
            </th>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                Email
            </th>
            <th>
                Role
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM users";
        $result_users = mysqli_query($connection,$query);

        while ($row = mysqli_fetch_assoc($result_users)) {

            $user_id = $row["user_id"];
            $username = $row["username"];
            $user_password = $row["user_password"];
            $user_firstname = $row["user_firstname"];
            $user_lastname = $row["user_lastname"];
            $user_email = $row["user_email"];
            $user_image = $row["user_image"];
            $user_role = $row["user_role"];

            echo "<tr>";
            echo "<td>{$user_id}</td>";
            echo "<td><a href ='users.php?source=edit_user&u_id={$user_id}'>{$username}</a></td>";
            echo "<td>{$user_firstname}</td>";
            echo "<td>{$user_lastname}</td>";
            echo "<td>{$user_email}</td>";
            echo "<td>{$user_role}</td>";

         
            echo "<td><a href='users.php?u_id={$user_id}&role={$user_role}'>Change Role</a></td>";

            echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
            echo "</tr>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<?php


if(isset($_GET['role'])){
    $user_role = $_GET['role'];
    $user_id = $_GET['u_id'];

    if($user_role == "admin") {
        $user_role = "subscriber";
    } else {
        $user_role = "admin";
    }
    $query = "UPDATE users SET user_role = '{$user_role}' WHERE user_id = '{$user_id}'";
    $result = mysqli_query($connection, $query);
    if(!confirm($result)) {
        header("Location: users.php");
    }
}

if(isset($_GET['delete'])){
    $user_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = {$user_id}";
    $result = mysqli_query($connection, $query);
    if(!confirm($result)) {
        header("Location: users.php");
    }
}
?>
