<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="icon" href="/assets/images/profile/profile4.gif">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php?page=home" class="<?php $current_page == 'home' ? 'active' : '' ?>">Home</a></li>
            <li><a href="index.php?page=skills" class="<?php $current_page == 'skills' ? 'active' : '' ?>">Skills</a></li>
            <li><a href="index.php?page=projects" class="<?php $current_page == 'projects' ? 'active' : '' ?> ">Projects</a></li>
            <li><a href="index.php?page=about" class="<?php $current_page == 'about' ? 'active' : '' ?> ">About me</a></li>
            <li><a href="index.php?page=contact" class="<?php $current_page == 'contact' ? 'active' : '' ?>">Contact</a></li>
        </ul>
    </nav>
</header>