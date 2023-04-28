<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href=<?php echo $css?>>
</head>
<body>
<nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./start.php">Getting Started</a></li>
            <li class="dropdown">
                <a class="dropbtn">Basics</a>
                <div class="dropdown-content">
                    <a href="./basics/commands.php">Beginner Commands</a>
                    <a href="./basics/dirnfile.php">Directory and File Management</a>
                    <a href="./basics/permissions.php">Permissions</a>
                </div>
            </li>
            <li class="dropdown">
                <a class="dropbtn">Texts</a>
                <div class="dropdown-content">
                    <a href="./texts/pipenfilter.php">Piping and Filters</a>
                    <a href="./texts/editors.php">Text Editors</a>
                </div>
            </li>
            <li class="dropdown">
                <a class="dropbtn">References</a>
                <div class="dropdown-content">
                    <a href="./quizzes/">Quizzes</a>
                    <a href="#">Index</a>
                    <a href="#">About the Team</a>
                </div>
            </li>
        </ul>
    </nav>