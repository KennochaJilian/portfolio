<?php 
    $skillsTable=[
        [
        "title" => "Front-End",
        "imgSRC" =>[
            [
                "alt" => "HTML",
                "src" => "img/htmllogo.png" 
            ],
            [
                "alt" =>"CSS3",
                "src" => "img/CSS3.png"
            ],
            [
                "alt" => "JavaScript", 
                "src" => "img/JS.png"
            ] 
            ]
        ],

        [
            "title" => "Back-End",
            "imgSRC" => [
                [
                    "alt" => "PHP", 
                    "src" => "img/php.png"
                ],
                [
                    "alt" => "MySQL",
                    "src" => "img/MySQL.png"
                ]
                ]
        ],

        [
            "title" => "Administration",
            "imgSRC" => [
                [
                    "alt" => "Git",
                    "src" => "img/git.png"
                ],
                [
                    "alt" => "Suite_Office",
                    "src" => "img/office.png"
                ],
                [
                    "alt" => "Linux",
                    "src" => "img/linux.png"
                ],  
                ], 
        ],

        [
            "title" => "Divers",
            "imgSRC" => [
                [
                    "alt" => "Ruby",
                    "src" => "img/ruby.png"
                ],
                [
                    "alt" => "Scrum",
                    "src" => "img/scrum.png"
                ],
                [
                    "alt" => "Visual_Studio",
                    "src" => "img/visual.png"
                ],
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
            <div class="col-xl-2 mx-auto col-sm-6 col-xs-12 mb-5 ">
                <div class="skillsTable p-2 reveal-1">
                    <div>
                        <h3 class="text-center text-skill"> <?= $skill['title']?></h3>
                    </div>
                    
                    <div class=" reveal-2 skillsDiv p-3 d-flex justify-content-around flex-wrap">
                        <?php
                    foreach($skill['imgSRC'] as $imgSrc){ ?>
                        <div class="divImgSkills"> <img class="imgSkill img-responsive" data-toggle="tooltip" data-placement="bottom" title=<?=$imgSrc['alt']?> src=<?=$imgSrc['src']?> alt=<?=$imgSrc['alt']?>> </div>

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