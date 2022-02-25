<?php

const HOME = 'Home';
const PRODUCT = 'Products';
const ABOUT = 'About Us';
const IDEA = 'Gift Ideas';

//The name of the menu item that should be active
    $selected = HOME;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Variable Attributes</title>
    <style>
        #navigation ul {
            width: 150px;
        }

        .menu-item {
            background-color: #e1f4f3;
            color: #0000cc;
        }

        .selected, .menu-item:hover {
            background-color: #fea799;
        }
    </style>
</head>

<body>
<h1>Displaying an active item from the menu</h1>
<nav id="navigation">
    <ul>
        <?php
        echo "<li class= > " . HOME . "</li>";
        echo "<li class='menu-item selected'>" . PRODUCT . " </li>";
        echo "<li class='menu-item'>" . ABOUT . " </li>";
        echo "<li class='menu-item'>" . IDEA . " </li>";
        ?>

    </ul>
</nav>
</body>

</html>