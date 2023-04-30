<?php
    $title = "Editors";
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
    <h1 class="title">Text Editors</h1>
        <h2>Three Major Groups:</h2>
            <p>
                <h3>text-mode</h3>
                    allows for work in a standard terminal or remote SSH connection because the text and the editing interface are both 
                    shown as text. You'll likely need other software to render the results of your work if you're modifying a web page or 
                    program code. However, a great option for editing configuration files!  </br>
                    Older text editors, like nano and vi/vim: </br>
                    <img src="https://www.raspberrypi-spy.co.uk/wp-content/uploads/2013/11/raspberry_pi_nano_editor.png" 
                        alt="nano interface">
                    <img src="https://meterpreter.org/wp-content/uploads/2020/01/vi-help.png" alt="vi editor">
            </p>
            <p>
                <h3>editors with GUI</h3>
                    still primarily focused on the text editing area, which has a fixed width font for simpler coding. 
                    As a result, menus are easier to access, dialogue windows are more understandable and adaptable, etc. </br>
                    These editors are the most widely used, with editors like VSCode, Atom, Sublime, etc. </br>
                    <img src="https://cdn.jasongaylord.com/images/2020/04/25/vscode.png" alt="vscode">
            </p>
            <p>
                <h3>WYSIWYG editors</h3>
                (What You See Is What You Get) </br>
                    are document editors. Such editors allow you to construct a document for subsequent printing or sharing online, 
                    and you may see the finished text as you enter without using any additional software. These editors are the quickest 
                    and lightest ways to modify a text file because they operate in your text-only Unix session. </br>
                    Some examples include AbiWord and LibreOffice Writer. </br>
                    <img src="http://www.onlineappbox.com/imgbox/online-abiword.gif" alt="abiword">
            </p>
</div>
<?php
	include($path . "assets/php/footer.php");
?>