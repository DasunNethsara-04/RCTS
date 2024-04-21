<?php

function containsScript($input)
{
    // Check if the input contains script tags or potentially harmful content
    $pattern = "/<script|<\/script|<\?php|<\?|eval\(|system\(|exec\(|passthru\(|shell_exec\(|popen\(|proc_open\(/i";
    return preg_match($pattern, $input);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include ('../Connection/db.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_role_id = $_POST['user_role_id'] ? $_POST['user_role_id'] : "2";

    // user inputs validating and sanitizing
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if ($name != $_POST['name']) {
        $error_message = "Invalid characters in the Name field";
        header("Location: ../Pages/SuperUser/SuperUser.php?page=add-user&error=$error_message");
        exit();
    }
    if ($email != $_POST['email']) {
        $error_message = "Invalid characters in the Email field";
        header("Location: ../Pages/SuperUser/SuperUser.php?page=add-user&error=$error_message");
        exit();
    }
    // Check if the password contains script tags or potentially harmful content
    if (containsScript($password)) {
        // Handle input with script tags
        $error_message = "Invalid characters in password";
        header("Location: ../Pages/SuperUser/SuperUser.php?page=add-user&error=$error_message");
    }

    // Hashing the password securely
    $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);

    // checking the user is already exists in the database
    $sql = "SELECT * FROM user_tbl WHERE email =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error_message = "User already exists";
        header("Location: ../Pages/SuperUser/SuperUser.php?page=add-user&error=$error_message");
    } else {
        // inserting the user into the database
        $current_date = date("Y-m-d");
        $status = 1;
        $sql = "INSERT INTO user_tbl (name, email, password, user_role_id, date_added, status) VALUES (?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $name, $email, $hashed_pwd, $user_role_id, $current_date, $status);
        $stmt->execute();
        $success_message = "User added successfully";
        header("Location: ../Pages/SuperUser/SuperUser.php?page=add-user&success=$success_message");
        $conn->close();
    }


    $conn->close();
}