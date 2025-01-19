<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <center>

    <?php
    require_once('../../connection.php');

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the accounts table
    $query = "SELECT * FROM account WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $status = $row['status'];

        // Start session and set session variables
        session_start();
        $_SESSION['email'] = $email;

        if ($status === 'user') {
            header("Location: ../index.php");
        } elseif ($status === 'admin') {
            header("Location: /virtual-try-on/adminVirtual/admin/index.php");
        }
        exit();
    } else {
        // Invalid credentials, display an error message
        echo '<script>alert("Invalid email or password!"); window.location.href = "login.html";</script>';
    }
    ?>

    </center>
</body>
</html>