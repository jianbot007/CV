<?php
$name = "Kazi Mahfuzur Rahman";
$email = "kazi.mahfuzur@example.com";
$about = "A seventh-semester BSc student in Computer Science and Engineering at AIUB with a focus on mobile application development using Flutter. I am skilled in C++, Dart, and problem-solving, with experience in competitive programming and building small to medium-sized applications.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?>'s Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1><?php echo $name; ?></h1>
            <p>Freelancer | Aspiring Software Engineer | Flutter Developer</p>
            <p>Email: <span id="email"><?php echo $email; ?></span></p>
        </header>

        <section class="section">
            <h2>About Me</h2>
            <p><?php echo $about; ?></p>
        </section>

        <!-- Repeat the same structure for Education, Skills, Experience, Projects, and Contact -->
        
    </div>
</body>
</html>
