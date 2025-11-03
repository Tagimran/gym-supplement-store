<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Arial", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #141E30, #243B55);
        }

        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 350px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
            position: relative;
        }

        .input-group label {
            font-size: 14px;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 12px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            outline: none;
            transition: 0.3s;
        }

        .input-group input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .input-group input:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: #0056b3;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #ddd;
            font-size: 14px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .logo {
            width: 100px;
            height: auto;
            margin-bottom: 15px;
        }

    </style>
</head>
<body>

    <div class="login-container">
        <form method="POST">
            
            <h2>Admin Login</h2>

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="t1" placeholder="Enter your username" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="t2" placeholder="Enter your password" required>
            </div>

            <button type="submit" name="t3" class="login-btn">Login</button>
           
        </form>
    </div>

</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if (isset($_POST['t3'])) {
    $u = isset($_POST["t1"]) ? trim($_POST["t1"]) : "";
    $p = isset($_POST["t2"]) ? trim($_POST["t2"]) : "";

    // Admin credentials (Change as needed)
    $admin_user = "Ashu";
    $admin_pass = "1234";

    if ($u === $admin_user && $p === $admin_pass) {
        $_SESSION["admin"] = $u;
        echo "<script>window.location.href='admin.php';</script>";
        exit(); 
    } else {
        echo "<script>alert('Incorrect Username or Password');</script>";
    }
}
?>
