<?php 
    $skillsTable=[
        [
        "title" => "Front-End",
        "imgSRC" =>[
            "img/htmllogo.png",
            "img/CSS3.png", 
            "img/JS.png" 
            ]
        ],

        [
            "title" => "Back-End",
            "imgSRC" => [
                "img/php.png",
                "img/MySQL.png" 
                ]
        ],

        [
            "title" => "Administration",
            "imgSRC" => [
                "img/git.png",
                "img/office.jpg", 
                "img/linux.png", 
                ], 
        ],

        [
            "title" => "Divers",
            "imgSRC" => [
                "img/ruby.png",
                "img/scrum.png", 
                "img/visual.png" 
                ] 
        ],
    ]


?>

<section class="row" id="skills">
<a name="skills"></a>
    <div class=" d-flex flex-column align-items-center col-md-12">
        <div class="mb-5">
            <h2 class="category"> Mes Compétences </h2>
            <hr class="line">
        </div>
    </div>
    <aside class="col-md-12">
        <div class="row">  
        <?php 
            foreach($skillsTable as $skill){ ?> 
            <div class="col-xl-2 mx-auto col-sm-6 col-xs-12 skillsTable">
            <div>
                <h3> <?= $skill['title']?></h3>
            </div>
            <div class="divImgSkills">
                <?php
                    foreach($skill['imgSRC'] as $imgSrc){ ?>
                <img class="imgSkill" src=<?=$imgSrc?>>

                <?php } ?>
            </div>
        </div>
        <?php
            }
        ?>


        </div>
    </aside>

</section>