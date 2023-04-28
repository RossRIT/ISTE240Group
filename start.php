<?php
    $title = "Start";
    $path = "./";
    $css = "assets/css/styles.css";

    include("assets/php/headnav.php");
?>

<h1 class="title">Getting Started</h1>

<h2>What exactly is UNIX?</h2>
    Unix essentially is a multiuser computer operating system. With multiuser capabilities, libraries of software, and a hierarchical file system; Unix was first developed by AT&T Corportation’s Bell Laboratories in the late 1960s, then developed to be adapted for more computers and versions.
    Here’s a basic block diagram of the unix architecture:

    https://www.urbanpro.com/unix-shell-scripting-training/free-session-on-shell-scripting-for-1-day-9632101509 
    The goal of this website is to learn the basics of Unix to understand functionality and be able to utilize the system. In addition to giving an overview of content.
    (kernel, shell, commands and utilities, files and directories)

<h2>login + logout</h2>
    When you first connect to a unix system, it will typically ask for a login like such
    “login:” By entering in the correct userid and password, you will be allowed to enter into the system. To logout, simply type in “logout.” 
    looking at files and directories
    One of the more common uses for Unix is for file management. All data in Unix is organized in files, which in turn are organized in directories. Directories are organized into a tree-like structure called the filesystem. Using the command “ls” you can list all the files or directories available in a directory structure.

<?php
	include("assets/php/footer.php");
?>