<?php
    $title = "DirnFile";
    $path = "./";
    $css = "assets/css/styles.css";

    include("assets/php/headnav.php");
?>

<h1 class="title">Directory and File Management</h1>

    In junction to the beginner commands, here are some more in relation to directory management:
        cd – change directory
        pwd – confirm current directory
        ln – make links and symlinks to files and directories
        mkdir – make new directory
        rmdir – remove directories in Unix

    For remote access , the SSH, or Secure Shell, tool allows you to securely log in and run commands onto remote systems.
        ssh [hostname]
    On the same note here are a few more file transfer commands in Unix:
    ftp - File Transfer Protocol is standard network protocol, used to transfer files to and from a remote network. It also allows the user to work with files on a remote machine.
    sftp - Secure File Transfer Protocol is a secure file protocol that is used to access, manage, and transfer files over an encrypted SSH transport. It is more secure compared to FTP and works on a client-server model.
    scp - securely copies files and directories between remote hosts without starting a FTP session or logging into remote systems. Allowed from local system to remote system, vice versa, as well as between two remote systems from the local system.
    wget - non-interactive network downloader which is used to download files from the server even when the user has not logged on to the system.

<?php
	include("assets/php/footer.php");
?>