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
                "img/office.png", 
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

<section class="row" id="skills" data-spy>
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
            <div class="col-xl-2 mx-auto col-sm-6 col-xs-12 mb-5">
                <div class="skillsTable p-2">
                    <div>
                        <h3 class="text-center"> <?= $skill['title']?></h3>
                    </div>
                    
                    <div class=" skillsDiv p-3 d-flex justify-content-around flex-wrap">
                        <?php
                    foreach($skill['imgSRC'] as $imgSrc){ ?>
                        <div class="divImgSkills"> <img class="imgSkill img-responsive" src=<?=$imgSrc?>> </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php
            }
        ?>


        </div>
    </aside>

</section>