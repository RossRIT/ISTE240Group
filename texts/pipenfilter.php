<?php
    $title = "PipenFilter";
    $path = "../";
    $css = $path . "assets/css/styles.css";

    include($path . "assets/php/headnav.php");
?>

<h1 class="title">Piping and Filters</h1>

    These are sets of commands that taken input from a standard input stream i.e. stdin, perform some operations 
    and write output to the standard output stream i.e. stdout. As well as commands used to process text files.
    Here are a few helpful commands:
    grep
    Globally Search For Regular Expression and Print out
    grep is a pattern or expression searching command and prints out the found matches
    SYNTAX:
    grep[options] “regex” [filename]
    options:
        -v shows all the lines that do not match the searched string
        -c displays the count of matching lines
        -n shows matching line and its number
        -i match both uppercase and lowercase letters
        -l shows just the name of the file with the string
    sort
        a data manipulation command that sorts or merges lines in a file by specified fields. 
        For example, either alphabetically or numerically, default sorting is alphabetical.
        sort[options] filename
    head
        displays the top count lines of files or piped data to standard output, displays 10 lines by default
        head [options] [file]
    tail
        displays the last count lines of files or piped data to standard output, displays 10 lines by default
    tail [options] [file]
        for both head and tail options:
        -n number of lines
        -c number of bytes

<?php
	include($path . "assets/php/footer.php");
?>