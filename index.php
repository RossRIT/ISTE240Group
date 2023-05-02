<?php
    $title = "Home";
    $path = "./";
    $css = "assets/css/styles.css";

    include("assets/php/headnav.php");
?>

    <div class="top">
        <h1 class="title">JALAR UX Tutorial Webpage</h1>
        <div class="overview">
            Unix is a powerful and popular operating system used by millions of people around the world, including programmers, 
            system administrators, and tech enthusiasts. However, despite its widespread use, Unix can be intimidating for beginners. 
            Our goal is to create a user-friendly website that makes learning Unix accessible and engaging.
            Our website will provide users with step-by-step tutorials, practical exercises, and interactive resources to help them understand 
            Unix concepts and commands. We aim to create a community of learners and provide a space where users can ask questions, share their experiences, 
            and collaborate with others.
            We believe that learning Unix should be fun and interactive so our team has focused on creating an intuitive user interface that is easy to navigate, 
            visually appealing, and engaging. We are also including gamification to make our website more interactive and give our users feedback on what they 
            should focus on.
        </div>
    </div>

    <div class="mid">
        <div class="secheader">Topics We'll Cover</div>
        <div class="section-container">
            <div class="section">Getting Started
                <a href="./start.php">-></a>
            </div>
            <div class="section">Basic Commands
                <a href="./basics/commands.php">-></a>
            </div>
            <div class="section">Directory and File Management
                <a href="./basics/dirnfile.php">-></a>
            </div>
            <div class="section">Permissions
                <a href="./basics/permissions.php">-></a>
            </div>
            <div class="section">Piping and Filters
                <a href="./texts/pipenfilter.php">-></a>
            </div>
            <div class="section">Text Editors
                <a href="./texts/editors.php">-></a>
            </div>
        </div>
        <div class="questions">
            <div class="secheader">Quizzes</div>
            <div class="quest"><a href="./quizzes/">Questionairre</a></div>
        </div>
    </div>

    <?php
	    include("assets/php/footer.php");
    ?>