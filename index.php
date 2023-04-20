<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UX Tutorial Home Page</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php
	    include("assets/php/nav.php");
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
            <!-- TODO add background images + links -->
            <div class="section">Getting Started</div>
            <div class="section">Basic Commands</div>
            <div class="section">Directory and File Management</div>
            <div class="section">Permissions</div>
            <div class="section">Piping and Filters</div>
            <div class="section">Text Editors</div>
        </div>
        <div class="questions">
            <div class="secheader">section</div>
            <div class="quest">Questionairre</div>
        </div>
    </div>

    <?php
	    include("assets/php/footer.php");
    ?>
</body>
</html>