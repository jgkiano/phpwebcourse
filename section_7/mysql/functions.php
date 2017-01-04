<?php
include "db.php";

function createUser() {
    global $connect;
    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        //sanitize inputs
        $username = mysqli_real_escape_string($connect,$username);
        $password = mysqli_real_escape_string($connect,$password);
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hashF_and_salt);
        if ($username && $password) {
            $query = "INSERT INTO users(username,password)";
            $query .= "VALUES ('$username','$password')";
            $result = mysqli_query($connect, $query);
            if(!$result) {
                die("Query failed");
            } else {
                echo "Inserted";
            }
        }
    }
}
function readUsers() {
    global $connect;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connect, $query);
    if(!$result) {
        die("Query failed " . mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}
function showAllData() {
    global $connect;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connect, $query);
    if(!$result) {
        die("Query failed " . mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        echo "<option value='$id'>$id</option>";
    }
}

function updateUser() {
    if(isset($_POST["submit"])) {
        global $connect;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";
        $result = mysqli_query($connect, $query);
        if(!$result) {
            die("Update failed ".mysqli_error($connect));
        } else {
            echo "Record updated";
        }
    }
}
function deleteUser() {
    global $connect;
    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";
        $result = mysqli_query($connect, $query);
        if(!$result) {
            die("Update failed ".mysqli_error($connect));
        } else {
            echo "Record deleted";
        }
    }
}
?>
