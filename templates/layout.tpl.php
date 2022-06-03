<html>

<head>
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" href="css/reboot.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <a href="<?= BASE_URL; ?>/">Accueil</a>
        <a href="<?= BASE_URL; ?>/index.php?page=contact">Contact</a>
        <a href="<?= BASE_URL; ?>/index.php?page=api">API</a>
        |
        <a href="<?= BASE_URL; ?>/index.php?page=">404</a>
    </nav>
    <?php include "${page}.tpl.php"; ?>
    <hr>
    &copy; 1999-<?php echo date('Y'); ?> &ndash; Le PHP pour tous
</body>

</html>