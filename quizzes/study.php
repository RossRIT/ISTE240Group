<?php
    $title = "Study";
    $path = "../";
    $css = "../assets/css/styles.css";

    include("../assets/php/headnav.php");
?>
<select id="flashcard-set">
    <option value="GettingStarted">Getting Started</option>
    <option value="Beginner">Beginner Commands</option>
    <option value="DirectoryFileMngmt">Directory and File Management</option>
    <option value="Permissions">Permissions</option>
    <option value="pipingfilter">Piping and Filters</option>
    <option value="txtedit">Text Editors</option>
</select>

<div id="flashcards-wrapper">
    <button id="prev-card" class="arrow-btn">&larr;</button>

    <div id="flashcards-container">
        <div class="container">
        </div>
    </div>
    <button id="next-card" class="arrow-btn">&rarr;</button>
</div>

<script src="../assets/js/flashcards.js"></script>

<?php
    include("../assets/php/footer.php");
?>
