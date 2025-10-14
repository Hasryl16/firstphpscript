<?php
session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['username'] == 'reza' && $_POST['password'] == 'reza'){
        // sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'reza';
        header('Location: user.php');
    }
    else if ($_POST['username'] == 'hasryl' && $_POST['password'] == '1234'){
        // sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'reza';
        header('Location: admin.php');
        // $role = $_POST['role'];
        // switch ($role) {
        //     case 'user':
        //         header('Location: user.php');
        //         exit;
        //     case 'admin':
        //         header('Location: admin.php');
        //         exit;
        //     case 'super admin':
        //         header('Location: superAdmin.php');
        //         exit;
        //     default:
        //         echo "<h2>Invalid role selected</h2>";
        //         exit;
        // }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Selection</title>
</head>
<body>
    <h1>Select Your Role</h1>
    <form method="POST" action="">
        <!-- <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="">--Select Role--</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="super admin">Super Admin</option>
        </select> -->
           <label>Username :
        <input type="text" name="username">
    </label>
    <br/>
    <label>Password :
        <input type="password" name="password">
    </label>
    <br/>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
