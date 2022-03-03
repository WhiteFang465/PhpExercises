<?php
$interests=[
        [
                "hobbies"=>"Scripting Language",
            "description"=>"PHP, JS, Bash, Python",

        ],
    [
            "hobbies"=>"Hacking",
        "description"=>"Linux, Crawlers, Bots, Network"
    ]
]
?>

<div class="sections">
    <h2 class="section-title">Interests</h2>
    <?php
    foreach ($interests as $interest){
    ?>
    <div class="list-card">
        <div>
            <h3> <?= $interest["hobbies"]?> </h3>
            <span><?= $interest["description"] ?></span>
        </div>
    </div>

    <?php
    }
    ?>
    </div>
