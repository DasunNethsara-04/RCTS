<?php

include ("../Connection/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_tbl WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];
                header("location: ../Pages/SuperUser/SuperUser.php");
            } else {
                // invalid password
                $em = "Invalid Password";
                header("Location: ../login.php?error=$em");
            }
        }
    } else {
        // no user found
        $em = "Invalid Password";
        header("Location: ../login.php?error=$em");
    }
}