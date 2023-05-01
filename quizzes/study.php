<?php
    $title = "Study";
    $path = "../";
    $css = "../assets/css/styles.css";

    include("../assets/php/headnav.php");
?>
<select id="flashcard-set">
    <option value="set1">Set 1</option>
    <option value="set2">Set 2</option>
    <option value="set3">Set 3</option>
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
