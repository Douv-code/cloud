<?php
    $path = __DIR__;
    $pattern = "/^\/home\/([^\/]+)\/site$/";

    if (preg_match($pattern, $path, $matches)) {
        $userName = $matches[1];
    } else {
        $pattern = "/^\/home\/([^\/]+)\/site$/";
        preg_match($pattern, $path, $matches);
        $userName = $matches[1];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hosting Platform Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <h2 class="text-white ml-3">Hosting Platform</h2>
        <a href="/">Dashboard</a>
        <a href="passwordChange.php">change Password</a>
        <a href="MyStorage.php">My Storage</a>
        <a href="AccountSettings.php">Account Settings</a>
    </div>