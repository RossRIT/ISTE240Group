<?php
    $title = "Study";
    $path = "../";
    $css = "../assets/css/styles.css";

    include("../assets/php/headnav.php");
?>
<div id="flashcards-wrapper">
    <button id="prev-card" class="arrow-btn">&larr;</button>

    <div id="flashcards-container">
        <div class="container">
            <div class="card">
                <div class="front">
                    <p>Question</p>
                </div>
                <div class="back">
                    <p>Answer</p>
                </div>
            </div>
        </div>
    </div>
    <button id="next-card" class="arrow-btn">&rarr;</button>
</div>
<script src="../assets/js/flashcards.js"></script>
<?php
    include("../assets/php/footer.php");
?>
