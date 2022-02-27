<?php


const USERS = array(array('Pierre', 22, '123 rue A', 'aa@ser.com', array('programming' => 5, 'teaching' => 2)), array('Julie', 65, '123 rue B', 'bb@ser.com', array('electronics' => 46)), array('Martin', 45, '123 rue C', 'cc@ser.com', array('programming' => 21, 'teaching' => 1)), array('Melanie', 41, '123 rue D', 'dd@ser.com', array('welding' => 12, 'nutrition' => 6, 'restoration' => 1)),);

// todo: Black color when age is exactly equal to reference age, green when upper and blue when lower
const AGE_REFERENCE = 45;

// todo: Yellow color when the years of experience is equal to or greater than MINIMUM_EXPERIENCE
const MINIMUM_EXPERIENCE = 5;


function getClassForAge(int $age): string
{
    switch ($age) {
        case $age == AGE_REFERENCE:
            return "age-reference ";
            break;
        case $age > AGE_REFERENCE:
            return "age-over";
            break;
        case $age < AGE_REFERENCE:
            return "age-under ";
        default:
            return " ";
    }

}

function getClassForExperience(int $experience): string
{
    switch ($experience) {
        case $experience >= MINIMUM_EXPERIENCE:
            return "experience-valid";
            break;
        case $experience < MINIMUM_EXPERIENCE:
            return "experience-invalid";
            break;
        default:
            return "";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercise - Table</title>

    <style>
        table,
        td,
        th {
            border: 1px solid black;
            margin: auto;
        }

        ul {
            list-style-type: none;
            padding: 5px;
        }

        .age-reference {
            background-color: black;
            color: white;
        }

        .age-over {
            background-color: green;
            color: white;
        }

        .age-under {
            background-color: blue;
            color: white;
        }

        .experience-invalid {
            background-color: white;
            color: black;
        }

        .experience-valid {
            background-color: yellow;
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>

<table>
    <thead>

    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Email</th>
        <th>Jobs</th>


    </tr>
    </thead>
    <?php
    foreach (USERS as $USER) {


        ?>
        <tbody>
        <tr class="<?php echo getClassForAge($USER[1]) ?>">
            <td><?= $USER[0] ?></td>
            <td><?= $USER[1] ?></td>
            <td><?= $USER[2] ?></td>
            <td><?= $USER[3] ?></td>
            <td>

                <?php
                foreach ($USER[4] as $jobDescription => $jobExperience) {
                    ?>
                    <div class="<?= getClassForExperience($jobExperience) ?>">
                        <?= $jobDescription . " : " . $jobExperience . " Years <br/>" ?>

                    </div>



                    <?php
                }
                ?>
            </td>
        </tr>
        </tbody>
        <?php
    }
    ?>

    <tfoot>
    <tr>
        <td>Average</td>
        <td><?php

            $temp = 0;
            foreach (USERS as $USER) {

                $temp += intval($USER[1]);
            }
            echo $temp / count(USERS);
            ?>

        </td>
    </tr>
    </tfoot>

</table>

</body>

</html>
