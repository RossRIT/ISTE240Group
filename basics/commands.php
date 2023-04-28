<?php
    $title = "Commands";
    $path = "./";
    $css = "assets/css/styles.css";

    include("assets/php/headnav.php");
?>

<h1 class="title">Basic Commands</h1>

    In Getting Started, we discussed some starter commands, now let’s take a look at some more.
    User Commands
    You can also see the users on the computer with the command “users” and “who” for more information. To change your password, type the command “passwd”, the current password, and the new password plus its verification.
    File Operations
    Unix’s file system is a logical method of organizing and storing information in a way that is easy to manage. Everything is organized in files and related directories.
    Here are a few helpful commands:
    ls - lists all the files and directories in selected directory
    rm - lets you delete a file or directory by passing its name
    mv - used to move files and directories
    chmod - used to change the access permissions of file system objects
    Some more in relation to directory management:
    cd - changing directories
    mkdir - making a new directory

<?php
	include("assets/php/footer.php");
?>