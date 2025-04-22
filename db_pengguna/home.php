<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right,rgb(137, 57, 212),rgb(255, 255, 255));
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgb(255, 255, 255);
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
            max-width: 400px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background-color:rgb(90, 65, 202);
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color:rgb(137, 57, 212);
        }

        .welcome-icon {
            font-size: 60px;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-icon"><i class="fas fa-cat"></i></div>
        <h1>Selamat Datang <strong><?php echo $_SESSION['user']; ?></strong>!</h1>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</body>
</html>

