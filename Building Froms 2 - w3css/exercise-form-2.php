<?php

$forms = [["action" => "./exercise-form-w3CSS/exercise-Form.php", "method" => "get"], ["type" => "text", "id" => "Name", "name" => "Name", "label" => "Name"], ["type" => "text", "id" => "Label", "name" => "Label", "label" => "Label"], ["type" => "text", "id" => "id", "name" => "id", "label" => "id"], ["type" => "submit", "id" => "submit", "name" => "input", "label" => "Sent"]];
$optionTypes = ['week', 'checkbox', 'color', 'date', 'datetime-local', 'email', 'file', 'hidden', 'image', 'month', 'number', 'password', 'radio', 'range', 'reset', 'search', 'submit', 'tel', 'text', 'time', 'url']
?>
<html>
<head>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-blue">
    <h2>Add Input in Form 1 Array</h2>
</div>

<form class="w3-container w3-grey" method="<?= $forms[0]["method"] ?>" action="<?= $forms[0]["action"] ?>">
    <?php
    for ($position = 1; $position < count($forms); $position++) {
        ?>

        <p>
        <?php
        if ($forms[$position]["type"] == "submit") {


            ?>
            <input class="w3-button w3-block w3-blue " type="<?= $forms[4]["type"] ?>" id="<?= $forms[4]["id"] ?> "
                   name="<?= $forms[4]["name"] ?>">

            </input>

            <?php
        } else {
            ?>
            <label><?= $forms[$position]["label"] ?></label>
            <input class="w3-input" type="<?= $forms[$position]["type"] ?>" id="<?= $forms[$position]["id"] ?> "
                   name="<?= $forms[$position]["name"] ?>"></p>
            <?php
        }
        if ($position == 1) {
            echo "<label>Type</label>";
            echo "<select class='w3-input'  id='type' name='type'>";
            foreach ($optionTypes as $optionType) {
                echo "<option>" . $optionType . "</option>";
            }
            echo "</select>";
        }
        ?>
        <?php
    }
    ?>

</form>
</body>

</html>




