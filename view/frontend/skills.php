<?php 
    $skillsTable=[
        [
        "title" => "Front-End",
        "imgSRC" =>"Test", 
        ],

        [
            "title" => "Back-End",
            "imgSRC" => "Test", 
        ],

        [
            "title" => "Administration",
            "imgSRC" => "Test", 
        ],

        [
            "title" => "Divers",
            "imgSRC" => "Test", 
        ],
    ]


?>
<section id="skills">
    <div class=" row d-flex flex-column align-items-center">
        <div class="mb-5">
            <h2 class="category"> Mes Compétences </h2>
            <hr class="line">
        </div>
    </div>
    <aside class="row">
       

            <?php 
            foreach($skillsTable as $skill){ ?>
            <div class="col-md-2 skillsTable">
                <div>
                    <h3> <?= $skill['title']?></h3>
                </div>
                <div class="imgSkills"> <?=$skill['imgSRC']?></div>
            </div>
            <?php
            }
        ?>

     

    </aside>

</section>