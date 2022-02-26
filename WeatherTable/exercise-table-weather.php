<?php

define('IMG_PATH', './images/');

define('FILENAME_K', 'filename');
define('ALT_K', 'alt');
define('TEMPS_K', 'temps');

$forecasts = array('2021-04-11' => array(FILENAME_K => 'clearance.gif', ALT_K => 'clearance image', TEMPS_K => '-17ºC',), '2021-04-12' => array(FILENAME_K => 'sun_cloud.gif', ALT_K => 'sun and cloud image', TEMPS_K => '-11ºC',), '2021-04-13' => array(FILENAME_K => 'snow.gif', ALT_K => 'snow image', TEMPS_K => '-12ºC',), '2021-04-14' => array(FILENAME_K => 'sun.gif', ALT_K => 'sun image', TEMPS_K => '-15ºC',), '2021-04-15' => array(FILENAME_K => 'snow.gif', ALT_K => 'snow image', TEMPS_K => '-11ºC',), '2021-04-16' => array(FILENAME_K => 'sun.gif', ALT_K => 'sun image', TEMPS_K => '-15ºC',),);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Weather Table</title>
    <style>
        span {
            font-weight: bold;
        }
    </style>
</head>

<body>
<div>
    <header>
        <h1>Weather Table</h1>
    </header>
    <main>
        <table>
            <thead></thead>
            <tbody>
            <tr>
                <td>


                    <?php
                    foreach ($forecasts as $date => $forecast) {
                        //var_dump($forecast[FILENAME_K]);
                        ?>


                        <div>
                            <span><?= $date ?></span>
                            <img src="<?= IMG_PATH . $forecast[FILENAME_K] ?>" alt="<?= $forecast[ALT_K] ?>">
                            <span><?= $forecast[TEMPS_K] ?></span>
                        </div>
                        <br>


                        <?php

                    } ?>
                </td>
            </tr>

            </tbody>


        </table>
    </main>
</div>

</body>

</html>