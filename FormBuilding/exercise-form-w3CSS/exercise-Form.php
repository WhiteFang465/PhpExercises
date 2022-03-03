<?php

//Not the idealist associative array but one required for learning. DO NOT MODIFY
$forms = [
    ["action" => "exercise-Form.php", "method" => "post"],
    ["type" => "text", "id" => "lastName", "name" => "lastName", "label" => "Last Name"],
    ["type" => "text", "id" => "firstName", "name" => "firstName", "label" => "First Name"],
    ["type" => "password", "id" => "pwd", "name" => "pwd", "label" => "Password"],
    ["type" => "checkbox", "id" => "enroll", "name" => "enroll", "label" => "Enroll"],
    ["type" => "checkbox", "id" => "terms", "name" => "terms", "label" => "Accept Terms & Conditions"],
    ["type" => "submit", "id" => "submit", "name" => "input", "label" => "Sent"],
];
?>
<html>
<head>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-blue">
    <h2>My Form</h2>
</div>

<form class="w3-container" method="<?= $forms[0]["method"] ?>" action="<?= $forms[0]["action"] ?>" >
    <?php
for ($position=1; $position< count($forms); $position++)
{
?>
    <p>
        <label><?= $forms[$position]["label"] ?></label>
        <input class="w3-input" type="<?= $forms[$position]["type"]?>" id="<?= $forms[$position]["id"] ?> " name="<?=$forms[$position]["name"] ?>"></p>
<?php
}
?>

</form>
</body>

</html>


