<?php include 'includes/header.php' ?>

         <div class="col-12" id="page">  <!-- Tout ce qui se trouve dans cette div sera visible sans scroll. -->
             <div id="displayComponent"> <!-- Ici seront liées par une route les différentes pages de notre site. -->
                 <?php include 'introduction.php' ?>
             </div>
                 <div class="navigation bgProfile">
                     <?php include 'navProfile.php' ?>
                 </div>
                 <div class="navigation bgResume">
                     <?php include 'navResume.php' ?>
                 </div>
                 <div class="navigation bgProjets">
                     <?php include 'navProjets.php' ?>
                 </div>
                 <div class="navigation bgContact">
                     <?php include 'navContact.php' ?>
                 </div>
        </div>

<?php include 'includes/footer.php' ?>
