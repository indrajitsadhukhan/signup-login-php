<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['mobilenumber'])&& isset($_POST['address'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("users", $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['mobilenumber'], $_POST['address'])) {
            echo "Sign Up Success";
        } else echo "Email/Mobile Number is already registered.";
    } else echo "Error: Database connection";
} else echo "All fields are required";

