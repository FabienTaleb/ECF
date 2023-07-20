<!DOCTYPE html>
<html>


    <?php include 'header.php'; ?>

<!-------------------------------------------------------------------------------------------------------------->
    <!--<section class="row"> -->

    <div class="container">
  <div class="used-title"><h1>Nos occasions</h1></div>
  <div class="used-subtitle"><h2>Affinez votre recherche grâce au filtre</h2></div>
  <div class="filter">  
    <div class="filter-row">
      <label for="kmMin">Kilométrage minimum : </label>
      <input type="number" id="kmMin" name="kmMin" min="0" />
      <label for="kmMax">Kilométrage maximum : </label>
      <input type="number" id="kmMax" name="kmMax" min="0" />
    </div>

    <div class="filter-row">
      <label for="prixMin">Prix minimum : </label>
      <input type="number" id="prixMin" name="prixMin" min="0" />

      <label for="prixMax">Prix maximum : </label>
      <input type="number" id="prixMax" name="prixMax" min="0" />
    </div>

    <div class="filter-row">
      <label for="anneeMin">Année minimum : </label>
      <input type="number" id="anneeMin" name="anneeMin" min="1900" max="9999" />

      <label for="anneeMax">Année maximum : </label>
      <input type="number" id="anneeMax" name="anneeMax" min="1900" max="9999" />
    </div>
    <div class="filter-row">
      <button class="filter-button" onclick="filtrerVehicules()">Filtrer</button>
    </div>
  </div>
    
    <div class="card-group mb-5">
            <div class="card">
                <div class="card-header">Classe A 180 d 7G-DCT Sensation</div>              
                <div class="card-body">
                    <h3 class="card-title">Mercedes-Benz A 180</h5>
                      <img  class="card-img-top" src="img/occasions/01_01.jpg" alt="Card image cap">
                    <p class="card-text">2016 89840km Diesel Automatique 101g CO2</p>
                    <p class="card-text"><small class="text-muted">Livraison gratuite</small></p>
                </div>
                <div class="card-footer">18980 €</div>
                <div class="card-footer"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#contactModal">Nous contacter</button></div>
            </div>
            <div class="card">
                <div class="card-header">Zoe R110</div>
                <div class="card-body">
                    <h3 class="card-title">Renault ZOE</h5>
                      <img  class="card-img-top" src="img/occasions/02_01.jpg" alt="Card image cap">
                      <p class="card-text">2020 27888km Electrique Automatique</p>
                      <p class="card-text"><small class="text-muted">Livraison à domicile</small></p>
                </div>
                <div class="card-footer">14990 €</div>
                <div class="card-footer"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#contactModal">Nous contacter</button></div>
            </div>
            <div class="card">
              <div class="card-header">BUSINESS T-Roc 1.0 TSI 115 Start/Stop BVM6</div>
              <div class="card-body">
                  <h3 class="card-title">Volkwagen T-Roc</h5>
                    <img  class="card-img-top" src="img/occasions/03_01.jpg" alt="Card image cap">
                    <p class="card-text">2019 29640km Essence Manuelle 110g CO2</p>
                    <p class="card-text"><small class="text-muted">Garantie 12 mois</small></p>
              </div>
              <div class="card-footer">20900 €</div>
              <div class="card-footer"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#contactModal">Nous contacter</button></div>
            </div>
        </div>
            
      <div class="card-deck">
          <div class="card">
              <div class="card-header">1.2 PureTech 130ch Active Business S&S EAT8</div>
              <div class="card-body">
                  <h3 class="card-title">Peugeot 3008</h5>
                    <img  class="card-img-top" src="img/occasions/04_01.jpg" alt="Card image cap">

                  <p class="card-text">2019 117992 Essence Automatique 109g CO2</p>
                  <p class="card-text"><small class="text-muted">Livraison gratuite</small></p>
              </div>
              <div class="card-footer">18490 €</div>
              <div class="card-footer"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#contactModal">Nous contacter</button></div>
          </div>
          <div class="card">
              <div class="card-header">xDrive30dA 265ch M Sport</div>
              <div class="card-body">
                  <h3 class="card-title">BMW X3</h5>
                    <img  class="card-img-top" src="img/occasions/05_01.jpg" alt="Card image cap">

                  <p class="card-text">2018 140851km Diesel Semi-Automatique 154g CO2</p>
                  <p class="card-text"><small class="text-muted">Livraison à domicile</small></p>
              </div>
              <div class="card-footer">35900 €</div>
              <div class="card-footer"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#contactModal">Nous contacter</button></div>
          </div>
          <div class="card">
            <div class="card-header">MY21 Picanto 1.2 DPi 84ch BVMA5</div>
            <div class="card-body">
                <h3 class="card-title">Kia Picanto</h5>
                  <img  class="card-img-top" src="img/occasions/06_01.jpg" alt="Card image cap">
                <p class="card-text">2021   15176km   Essence    Automatique    127g    CO2</p>
                <p class="card-text"><small class="text-muted">Livraison à domicile</small></p>
            </div>
            <div class="card-footer">15999 €</div>
            <div class="card-footer"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#contactModal">Nous contacter</button></div>
        </div>
      </div>
    </div>

    <!-- Formulaire modal pour véhicule -->
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- Here, you can use JavaScript to dynamically set the vehicle name -->
          <h5 class="modal-title" id="contactModalLabel">Véhicule : référence</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Contact form with the required fields -->
          <form>
            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
              <label for="prenom">Prénom</label>
              <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
              <label for="email">Adresse mail</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="phone">Numéro de téléphone</label>
              <input type="email" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
              <label for="texte">Texte</label>
              <textarea class="form-control" id="texte" name="texte" required></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-primary">Envoyer</button>
        </div>
      </div>
    </div>
  </div>  

<!--cards-->    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<!--cards-->    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!--cards-->    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
<script  src="function.js"></script>

<!-------------------------------------------------------------------------------------------------------------->
<?php include 'footer.php'; ?>
    </div>
  </body>
</html>
