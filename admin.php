<!DOCTYPE html>
<html>
<head>
  <title>Tableau de bord d'administrateur</title>
  <!-- Inclure les feuilles de style Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Tableau de bord d'administrateur</h1>
    <hr>

    <!-- Formulaire modal création de compte employé) -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createEmployeeModal">Créer Compte Employé</button>

    <!-- Lien pour supprimer un compte employé -->
    <a href="account-admin.php" class="btn btn-danger ml-3">Supprimer Compte Employé</a>

    <!-- Lien pour gérer les services sur la page d'accueil -->
    <a href="service-admin.php" class="btn btn-info ml-3">Services Page d'Accueil</a>

    <!-- Lien pour modérer les témoignages -->
    <a href="testimony.php" class="btn btn-warning ml-3">Modérer les témoignages</a>

    <!-- Lien pour répondre aux demandes de contact -->
    <a href="used-contact.php" class="btn btn-secondary ml-3">Répondre aux demandes de contact</a>

    <!-- Lien pour modifier les véhicules d'occasion -->
    <a href="used-admin.php" class="btn btn-success ml-3">Modifier les véhicules d'occasion</a>

    <!-- Lien pour modifier les horaires d'ouvertures -->
    <a href="hours.php" class="btn btn-dark ml-3">Modifier les horaires d'ouvertures</a>
    </div>

<!-- Modal pour créer un nouveau compte employé -->
<div class="modal fade" id="createEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="createEmployeeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createEmployeeModalLabel">Créer un nouveau compte employé</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom">
          </div>
          <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" class="form-control" id="prenom">
          </div>
          <div class="form-group">
            <label for="usermail">Adresse mail:</label>
            <input type="text" class="form-control" id="usermail">
          </div>
          <div class="form-group">
            <label for="userpassword">Mot de passe:</label>
            <input type="text" class="form-control" id="userpassword">
          </div>
          <div class="form-group">
            <label for="userpasswordconf">Confirmez le mot de passe : </label>
            <input type="text" class="form-control" id="userpasswordconf">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Créer</button>
      </div>
    </div>
  </div>
</div>

<!-- Inclure les scripts Bootstrap et jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
