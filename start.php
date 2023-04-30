<?php
    $title = "Start";
    $path = "./";
    $css = "assets/css/styles.css";

    include("assets/php/headnav.php");
?>

<div class="content-container">

    <div class="sidebar">
    <a href="#" class="sidebar_link">Link 1</a>
    <a href="#" class="sidebar_link">Link 2</a>
    <a href="#" class="sidebar_link">Link 3</a>
    </div>

    <div>
        <h1 class="title">Getting Started</h1>

        <h2>What exactly is UNIX?</h2>
            <p>
                Unix essentially is a multiuser computer operating system. With multiuser capabilities, libraries of software, and a 
                hierarchical file system; Unix was first developed by AT&T Corportation’s Bell Laboratories in the late 1960s, then 
                developed to be adapted for more computers and versions. 
            </p>
        <h3>Unix Architecture</h3>
            <p>Here’s a basic block diagram of the unix architecture:</p>

            <img src="https://www.urbanpro.com/unix-shell-scripting-training/free-session-on-shell-scripting-for-1-day-9632101509" alt="unix diagram">
            <p>
                The goal of this website is to learn the basics of Unix to understand functionality and be able to utilize the system. 
                In addition to giving an overview of content.
                (kernel, shell, commands and utilities, files and directories)
            </p>

        <h3>login + logout</h3>
            <p>
                When you first connect to a unix system, it will typically ask for a login like such
                “login:” By entering in the correct userid and password, you will be allowed to enter into the system. 
                To logout, simply type in “logout.” 
            </p>
            </br>
            <p>
                Looking at files and directories, One of the more common uses for Unix is for file management. All data in Unix is organized in files, 
                which in turn are organized in directories. 
                Directories are organized into a tree-like structure called the filesystem. 
                Using the command “ls” you can list all the files or directories available in a directory structure.
            </p>
    </div>

<div style="margin-left:25%">
    <h1 class="title">Getting Started</h1>

    <h2>What exactly is UNIX?</h2>
        <p>
            Unix essentially is a multiuser computer operating system. With multiuser capabilities, libraries of software, and a 
            hierarchical file system; Unix was first developed by AT&T Corportation’s Bell Laboratories in the late 1960s, then 
            developed to be adapted for more computers and versions. 
        </p>
    <h3>Unix Architecture</h3>
        Here’s a basic block diagram of the unix architecture:

        <img src="https://www.tutorialspoint.com/unix/images/unix_architecture.jpg" alt="unix diagram">
        The goal of this website is to learn the basics of Unix to understand functionality and be able to utilize the system. 
        In addition to giving an overview of content.
        (kernel, shell, commands and utilities, files and directories)

    <h2>login + logout</h2>
        When you first connect to a unix system, it will typically ask for a login like such
        “login:” By entering in the correct userid and password, you will be allowed to enter into the system. 
        To logout, simply type in “logout.” 
        </br>
    
    looking at files and directories
        One of the more common uses for Unix is for file management. All data in Unix is organized in files, 
        which in turn are organized in directories. 
        Directories are organized into a tree-like structure called the filesystem. 
        Using the command “ls” you can list all the files or directories available in a directory structure.
</div>

<?php
	include("assets/php/footer.php");
?>