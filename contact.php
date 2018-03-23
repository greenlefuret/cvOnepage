<?php include 'includes/header.php' ?>

    <body>

        <div class="col-12 text-center">
            <h3 class="titre">Co<span class="jaune">n</span>tact</h3>
        </div>

        <div class="col-12 text-center">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre nom">
              </div>
              <div class="form-group">
                <input type="mail" class="form-control" id="exampleFormControlInput1" placeholder="Votre mail">
              </div>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Votre message"></textarea>
              </div>
              <button type="submit" class="btn btn-warning col-12">Envoyer</button>
            </form>
        </div>

        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.801190244554!2d1.259194915024938!3d45.83526237910715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f934b9624e093d%3A0xa07f18a321d56fbc!2sAformac!5e0!3m2!1sfr!2sfr!4v1521644422016" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-12 text-center">
            <h4 class="sousTitre">Détails</h4>
        </div>

        <div class="col-12 text-center">
            <i class="fas fa-map-marker-alt"></i>
            <p>3 Cours Gay Lussac, 87000 Limoges</p>
            <div class="spacer"></div>
            <i class="fas fa-phone"></i>
            <p>00.00.00.00.00</p>
            <div class="spacer"></div>
            <i class="fas fa-envelope"></i>
            <p>mail@gmail.com</p>
        </div>
<?php include 'includes/bas.php' ?>
<?php include 'includes/footer.php' ?>
