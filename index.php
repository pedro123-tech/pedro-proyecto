<?php
// Fallback del tema Pedro Portfolio.
// WordPress usará front-page.php para la página de inicio.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedro Portfolio</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <main>
        <h1>Pedro Portfolio</h1>
        <p>Este es el index.php del tema. La home usa la plantilla "Landing Personal".</p>
    </main>
    <?php wp_footer(); ?>
</body>
</html>
