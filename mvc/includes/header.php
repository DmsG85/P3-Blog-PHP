
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
		<meta name="description" content="<?php echo $description;?>">
		<meta name="author" content="<?php echo $this->author;?>">
		<!-- <link rel="icon" href="<?php echo $this->favicon;?>"> -->
    <!-- CSS -->
    <link href="<?php echo $this->rewritebase;?>public/css/style.css"rel="stylesheet">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="public/img/GD_logo.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo $this->rewritebase;?>public/templates/startbootstrap-grayscale-gh-pages/css/styles.css" rel="stylesheet" />
    <link href="<?php echo $this->rewritebase;?>public/templates/startbootstrap-sb-admin-gh-pages/css/styles.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/992670e0b1.js" crossorigin="anonymous"></script>
    <title>Gaëlle Dumas - Blog</title>
</head>
<body id="page-top">
    <header>
        <?php require_once 'includes/nav.php' ?>
    </header>


