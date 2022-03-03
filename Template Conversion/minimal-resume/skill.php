<?php

$skills=[
        ["experience"=>"+5 years",
        "technology"=>"Object Oriented Programming",
        "languages"=>"PHP,Go lang"
        ],
    ["experience"=>"+4 years",
        "technology"=>"Designing",
        "languages"=>"Style and tools, Adobe"
        ]
        /*
    ["experience"=>"+4 years",
        "technology"=>"Linux",
        "languages"=>"Security"
    ]
    ["experience"=>"+2 years",
        "technology"=>"Web Programming",
        "languages"=>"Database"
    ]*/
];

?>

    <div class="sections">
        <h2 class="section-title">Skills</h2>
        <?php
        foreach ($skills as $skill) {
        ?>

        <div class="list-card">
            <span class="exp"><?= $skill["experience"] ?></span>
            <div>
                <h3><?= $skill["technology"] ?></h3>
                <span><?= $skill["languages"] ?></span>
            </div>
        </div>


<?php } ?>
    </div>



