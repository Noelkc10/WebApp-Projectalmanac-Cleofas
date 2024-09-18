<?php
// index.php
$title = "Welcome to My PHP Project";
$showGreeting = true; // Change this to false to hide the greeting
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
    </header>
    <main>
        <?php if ($showGreeting): ?>
            <p>Hello, visitor! Welcome to our website.</p>
        <?php else: ?>
            <p>Welcome back!</p>
        <?php endif; ?>
        
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My PHP Project</p>
    </footer>
</body>
</html>
