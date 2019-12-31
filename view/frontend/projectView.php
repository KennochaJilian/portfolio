<?php     
$technos = explode(' ', $projectInfo['technos']);
?>
<div class="d-flex justify-content-around flex-wrap projectView ">
    <div class="ajcol">
        <img src="<?= $projectInfo['imgSRC'] ?>">
    </div>
    <div class="ajcol">
        <div class="fiche">
            <h2> <?= $projectInfo['title'] ?> </h2>
            <p class="text-justify"><?= $projectInfo['descriptionMax'] ?> </p>
            <h3> La mission: </h3>
            <p class="text-justify"> <?= $projectInfo['mission']?> </p>
            <h3> Technologies utilisées : </h3>
                <ul> 
                <?php 
                 foreach($technos as $techno){ ?>
                    <li> <?=$techno ?></li>

                 <?php } ?>

                </ul>
           

        </div>

    </div>







</div>