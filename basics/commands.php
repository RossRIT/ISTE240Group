<?php
    $title = "Commands";
    $path = "../";
    $css = $path . "assets/css/styles.css";

    include($path . "assets/php/headnav.php");
?>
<div class="sidebar" style="width:25%">
  <a href="#" class="sidebar_link">Link 1</a>
  <a href="#" class="sidebar_link">Link 2</a>
  <a href="#" class="sidebar_link">Link 3</a>
</div>

<div style="margin-left:25%">
    <h1 class="title">Beginner Commands</h1>

        In Getting Started, we discussed some starter commands, now let’s take a look at some more.
        <p>
            <h2>User Commands</h2>
            You can also see the users on the computer with the command “users” and “who” for more information. </br>
            To change your password, type the command “passwd”, the current password, and the new password plus its verification.
        </p>
        <p>
            <img src="http://learn.openwaterfoundation.org/owf-learn-linux-shell/introduction/images/linux-shell-prompt1.png"
                alt="unix command line">
            <h2>File Operations</h2>
            Unix’s file system is a logical method of organizing and storing information in a way that is easy to manage. 
            Everything is organized in files and related directories. </br>
            Here are a few helpful commands: </br>
                <ul>
                    <li>ls - lists all the files and directories in selected directory</li>
                    <li>rm - lets you delete a file or directory by passing its name</li>
                    <li>mv - used to move files and directories</li>
                    <li>chmod - used to change the access permissions of file system objects</li>
                </ul>
        </p>
        <p>
            <h2>Unix Shell Commands</h2>
                clear – clear screen </br>
                history – show history of previous commands
        </p>
</div>
<?php
	include($path . "assets/php/footer.php");
?>