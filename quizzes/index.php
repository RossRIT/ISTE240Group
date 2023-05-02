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
            <div class="section"><a href="quiz1.php">Getting Started</a></div>
            <div class="section"><a href="quiz2.php">Basic Commands</a></div>
            <div class="section"><a href="quiz3.php">Directory and File Management</a></div>
            <div class="section"><a href="quiz4.php">Permissions</a></div>
            <div class="section"><a href="quiz5.php">Piping and Filters</a></div>
            <div class="section"><a href="quiz6.php">Text Editors</a></div>
        </div>
    </div>

    <?php
	    include("../assets/php/footer.php");
    ?>
</body>
</html>