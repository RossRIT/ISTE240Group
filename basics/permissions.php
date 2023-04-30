<?php
    $title = "Permissions";
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
    <h1 class="title">Permissions</h1>
        <p>
            <strong>read permission (r)</strong> - can read the contents of file or directory </br>
            <strong>write permission (w)</strong> - can modify or remove content of the file / add or delete files in a directory </br>
            <strong>execute permission(x)</strong> - can run a file as a program / can traverse a directory
        </p>
        <p>
            <img src="https://www.freecodecamp.org/news/content/images/2022/04/image-146.png" alt="permissions">
            understanding ex: drwxr-xr-x 7 user staff 224 Jun 21 15:26 </br>
                first group - file owner’s permissions </br>
                second group - group permissions </br>
                last group - others
        </p>
        <p>
            <strong>user</strong> - user account, login on system </br>
            <strong>group</strong> - user group with multiple users assigned </br>
            <strong>others</strong> - everyone else, all other users
        </p>
</div>
<?php
	include($path . "assets/php/footer.php");
?>