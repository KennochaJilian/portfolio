<section class="row contact" id="contactMe" data-spy>
    <a name="contactMe"></a>
    <div class="col-md-12 mt-5">
        <h2 class="category"> Contactez-moi </h2>
        <hr class="line">
    </div>

    <div class="col-md-12 mt-3">
        <p class="text-center"> Vous désirez plus d'information me concernant, ou vous souhaitez échanger avec moi ?
            Envoyez moi un message et je je vous répondrai avec plaisir ! </p>
    </div>


    <?php if($msgSent){ ?>
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            <div class=" alert alert-success" role="alert">
                Votre message a bien envoyé,je vous recontacterai dans les plus brefs délais !
            </div>
        </div>
    </div>

    <?php } ?>




    <div class="col-md-12 mt-3">
        <form action="?action=newMsg#contactMe" method="post">
            <div class="d-flex justify-content-around mb-3 flex-wrap">
                <div class="formCol">

                    <div class="form-group field">
                        <input required type="text" name="name" class="form-control field" id="inputname"
                            placeholder="Votre nom" value="">
                    </div>


                    <div class="form-group">
                        <input required type="text" name="email" class="form-control field" id="inputemail"
                            placeholder="Votre mail" value="">
                    </div>


                    <div class="form-group">
                        <select class="form-control field" name="optionMsg">
                            <option value="question">Une question?</option>
                            <option value="suggestion">Une suggestion?</option>
                        </select>
                    </div>

                </div>

                <div class="formCol">
                    <div class="form-group field">
                        <textarea id="contact_form_message" name="content" required="required"
                            placeholder="Votre message" rows="5" class="form-control field"></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <div>
                    <button type="submit" class="btnContact btn-xl ">Envoyer</button>
                </div>
            </div>
        </form>
    </div>



    <div class="col-lg-12 mbPerso">
        <div class="d-flex justify-content-center">
            <div class="icone mx-2"> <a href="https://www.linkedin.com/in/aranxa-codina-275959186/"> <i class="  fab fa-linkedin-in"></i> </a> </div>
            <div class="icone mx-2"> <a href="https://github.com/KennochaJilian"> <i class="  fab fa-github"></i> </a> </div>
            <div class="icone mx-2"> <a href="tel:0681179825"> <i class="fas fa-phone"></i> </a> </div>
            <div class="icone mx-2"> <a href="mailto:codinaaranxa@gmail.com"> <i class=" far fa-envelope"></i> </a> </div>
        </div>
    </div>
</section>