<?php
    $title = "Quizzes";
    $path = "../";
    $css = "../assets/css/styles.css";

    include("../assets/php/headnav.php");
?>

    <div class="top">
        <h1 class="title">Quizzes</h1>
    </div>

    <div class="mid">
        <div class="secheader">Topics</div>
        <div class="section-container">
            <!-- TODO add background images + links -->
            <div class="section">Getting Started</div>
            <div class="section"><a href="quiz1.php">Basic Commands</a></div>
            <div class="section"><a href="basics/dirnfile.php">Directory and File Management</div>
            <div class="section">Permissions</div>
            <div class="section">Piping and Filters</div>
            <div class="section">Text Editors</div>
        </div>
    </div>

    <?php
	    include("../assets/php/footer.php");
    ?>
</body>
</html>