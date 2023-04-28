<?php
    $title = "Editors";
    $path = "./";
    $css = "assets/css/styles.css";

    include("assets/php/headnav.php");
?>

<h1 class="title">Text Editors</h1>
    Three Major Groups:
        text-mode
            allows for work in a standard terminal or remote SSH connection because the text and the editing interface are both 
            shown as text. You'll likely need other software to render the results of your work if you're modifying a web page or 
            program code. However, a great option for editing configuration files!
            Older text editors, like nano and vi/vim
        editors with GUI
            still primarily focused on the text editing area, which has a fixed width font for simpler coding. 
            As a result, menus are easier to access, dialogue windows are more understandable and adaptable, etc.
            most widely used, like VSCode, Atom, Sublime, etc.
        WYSIWYG editors
        (What You See Is What You Get)
            are document editors. Such editors allow you to construct a document for subsequent printing or sharing online, 
            and you may see the finished text as you enter without using any additional software. These editors are the quickest 
            and lightest ways to modify a text file because they operate in your text-only Unix session.
            some examples include AbiWord and LibreOffice Writer

<?php
	include("assets/php/footer.php");
?>