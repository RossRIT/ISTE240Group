<?php
    $title = "PipenFilter";
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
        <h1 class="title">Piping and Filters</h1>
            <p>
            These are sets of commands that taken input from a standard input stream i.e. stdin, perform some operations 
            and write output to the standard output stream i.e. stdout. As well as commands used to process text files.
            </p>
            Here are a few helpful commands: </br>
            <p>
            <strong>grep</strong> </br>
            Globally Search For Regular Expression and Print out </br>
            grep is a pattern or expression searching command and prints out the found matches </br>
            SYNTAX:
            grep[options] “regex” [filename] </br>
            </p>
            options:
                <ul>
                    <li>v shows all the lines that do not match the searched string</li>
                    <li>c displays the count of matching lines</li>
                    <li>n shows matching line and its number</li>
                    <li>i match both uppercase and lowercase letters</li>
                    <li>l shows just the name of the file with the string</li>
                </ul>
            <p>
            <strong>sort</strong> </br>
                a data manipulation command that sorts or merges lines in a file by specified fields. 
                For example, either alphabetically or numerically, default sorting is alphabetical. </br>
                sort[options] filename
            </p>
            <p>
            <strong>cat</strong> </br>
                places standard input into a file </br>
                cat > filename
            </p>
            <p>
            <strong>head</strong> </br>
                displays the top count lines of files or piped data to standard output, displays 10 lines by default </br>
                head [options] [file]
            </p>
            <p>
            <strong>tail</strong> </br>
                displays the last count lines of files or piped data to standard output, displays 10 lines by default </br>
                tail [options] [file] </br>
            
            for both head and tail options:
                <ul>
                    <li>n number of lines</li>
                    <li>c number of bytes</li>
                </ul>
            </p>
    </div>
</div>
<?php
	include($path . "assets/php/footer.php");
?>