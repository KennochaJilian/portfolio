<?php
//print_r($projectTable);
// $projectTable = [ 
//     [
//         "description" => "Réalisation d'un portfolio en Bootstrap",
//         "imgSRC" =>"img/lisch.jpg"
//     ],
//     [
//         "description" => "Bomberman en canvas/JS réalisé en équipe de quatre personnes",
//         "imgSRC" => "img/bomberman.jpg"
//     ],
//     [
//         "description" => "Interface de présentation pour l'inauguration de l'Access Code School de Strasbourg",
//         "imgSRC"=>"img/openning.jpeg"
//     ]
// ]
?>

<section class="row p-auto" id="project" data-spy>
<a name="project"></a>
    <div class=" d-flex flex-column align-items-center col-md-12">
        <div class="mb-5">
            <h2 class="category"> Portfolio </h2>
            <hr class="line">
        </div>
    </div>

    <div id="test" class="mb-5">
        <p class="text-center"> Voici un aperçu des projets auxquels j'ai pu contribuer lors de mon apprentissage </p>
    </div>

    <aside class="col-md-12 mb-5">
        <div class="row">
            <?php 
            foreach($projectTable as $project){ ?>
            <div class="col-xl-5 col-sm-12 col-xs-12 mt-3 mx-auto projectTable" id=<?=$project['id']?>>
                <img src=<?= $project['imgSRC']?>>
                
                <div class="pl-2">
                    <p> <?= $project['descriptionMin']?></p>
                </div>

            </div>
            <?php } ?>
        </div>
    </aside>
    <div class="col-md-12 " id="projectView"></div>


</section>