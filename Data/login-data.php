<?php

include ("../Connection/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_tbl ut INNER JOIN user_role_tbl urt ON (ut.user_role_id = urt.user_role_id) WHERE ut.email=?";
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
                $_SESSION['user_role'] = $row['user_role'];
                header("location: ../Pages/SuperUser/SuperUser.php");
            } else {
                // invalid password
                $em = "Invalid Password";
                header("Location: ../login.php?error=$em");
                exit();
            }
        }
    } else {
        // no user found
        $em = "Invalid Password";
        header("Location: ../login.php?error=$em");
        exit();
    }
}

$conn->close();