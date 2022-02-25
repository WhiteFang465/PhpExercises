<?php

const SITE_NAME = 'Pepiniere Dominique';
const TITLE_SEP = '-';
const URL_SEP = '/';
const BASE_URL = 'http://www.pepdom.ca';
const HOME_NAME = 'Home';
const PRODUCTS_NAME = 'Products';
const ABOUT_NAME = 'About';
const HOME_URL = BASE_URL;

define('PRODUCTS_URL', BASE_URL . URL_SEP . strtolower(PRODUCTS_NAME));
define('ABOUT_URL', BASE_URL . URL_SEP . strtolower(ABOUT_NAME));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo SITE_NAME . TITLE_SEP . HOME_NAME ?> </title>
</head>

<body>
<header>
    <h1> <?php echo HOME_NAME ?> </h1>
    <nav>
        <ul>
            <li>
                <a href=<?php echo PRODUCTS_URL ?>><?php echo HOME_NAME ?></a>
            </li>
            <li>
                <a href=<?php echo PRODUCTS_URL ?>><?php echo PRODUCTS_NAME ?></a>
            </li>
            <li>
                <a href=<?php echo ABOUT_URL ?>><?php echo ABOUT_NAME ?></a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <p>Page Contents ...</p>
</main>
</body>

</html>