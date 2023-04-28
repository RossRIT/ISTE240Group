<?php
    $title = "Permissions";
    $path = "./";
    $css = "assets/css/styles.css";

    include("assets/php/headnav.php");
?>

<h1 class="title">Permissions</h1>

    read permission (r) - can read the contents of file or directory
    write permission (w) - can modify or remove content of the file / add or delete files in a directory
    execute permission(x) - can run a file as a program / can traverse a directory

    understanding ex: drwxr-xr-x 7 user staff 224 Jun 21 15:26 
        first group - file owner’s permissions
        second group - group permissions
        last group - others
        what does changing file permissions do to the underlined portion
    user - user account, login on system
    group - user group with multiple users assigned
    others - everyone else, all other users

<?php
	include("assets/php/footer.php");
?>