<?php
    $title = "DirnFile";
    $path = "../";
    $css = $path . "assets/css/styles.css";

    include($path . "assets/php/headnav.php");
?>
<div class="content-container">
    <div class="sidebar" style="width:25%">
        <a href="#" class="sidebar_link">Link 1</a>
        <a href="#" class="sidebar_link">Link 2</a>
        <a href="#" class="sidebar_link">Link 3</a>
    </div>

    <div style="margin-left:25%">
        <h1 class="title">Directory and File Management</h1>
            <img src="https://www.ibm.com/support/knowledgecenter/SSQ2R2_14.1.0/com.ibm.guide.hostconfig.reference.doc/images/drawing_-_directory_structure.jpg"
                alt="directories">
            In junction to the beginner commands, here are some more in relation to directory management: </br>
                <ul>
                    <li>cd – change directory</li>
                    <li>pwd – confirm current directory</li>
                    <li>ln – make links and symlinks to files and directories</li>
                    <li>mkdir – make new directory</li>
                    <li>rmdir – remove directories in Unix</li>
                </ul>

            For remote access , the SSH, or Secure Shell, tool allows you to securely log in and run commands onto remote systems. </br>
                <strong>ssh [hostname]</strong> </br>
            On the same note here are a few more file transfer commands in Unix: </br>
                <ul>
                    <li>ftp - File Transfer Protocol is standard network protocol, used to transfer files to and from a remote network. 
                        It also allows the user to work with files on a remote machine. </li>
                    <li>sftp - Secure File Transfer Protocol is a secure file protocol that is used to access, manage, and transfer files over an 
                        encrypted SSH transport. It is more secure compared to FTP and works on a client-server model. </li>
                    <li>scp - securely copies files and directories between remote hosts without starting a FTP session or logging into remote systems. 
                        Allowed from local system to remote system, vice versa, as well as between two remote systems from the local system. </li>
                    <li>wget - non-interactive network downloader which is used to download files from the server even when the user has not logged on 
                        to the system. </li>
                </ul>
    </div>
</div>
<?php
	include($path . "assets/php/footer.php");
?>