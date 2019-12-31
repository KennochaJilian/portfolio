

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
            <div class="imgProjectHover"> 
              <div>  <p class=" display-1"> + </p> </div>
            </div> 

            <a class="simple-ajax-popup-align-top" href='index.php?action=projectView&id=<?=$project['id']?>'> <img src=<?= $project['imgSRC']?>> </a>
                
                <div class="pl-2">
                    <p class="text-center"> <?= $project['descriptionMin']?></p>
                </div>

            
            </div> 
            <?php } ?>
        </div>
    </aside>
    <div class="col-md-12 " id="projectView"></div>


</section>