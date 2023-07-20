<!DOCTYPE html>
<html lang="en">

<head>
    <title>Garage V. Parrot</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet" type="text/css">
    <!--slider--><link href="https://fonts.googleapis.com/css?family=Lato|Patua+One&display=swap" rel="stylesheet"> 
    <!--slider--><link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css'>
    <link href="modal.css" rel="stylesheet" type="text/css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
    </style>
</head>
<!-------------------------------------------------------------------------------------------------------------->
<body>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <div class="container-fluid">
<!-------------------------------------------------------------------------------------------------------------->
            <?php include 'header.php'; ?>
<!-------------------------------------------------------------------------------------------------------------->
        <div class="login-title"><h2>Accès aux espaces Administrateur et Employés</h2></div>

        <div class="connexion-button"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Connexion</button></div>

        <div id="id01" class="modal">
        
        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img/login/avatar.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
            <label for="uname"><b>Email de connexion</b></label>
            <input type="text" placeholder="ex : v.parrot@mail.com" name="uname" required>

            <label for="psw"><b>Mot de Passe</b></label>
            <input type="password" placeholder="ex : Garage62%" name="psw" required>
                
            <button type="submit">Se connecter</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
            </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
            <span class="psw"><a href="#">Mot de passe</a> oublié ?</span>
            </div>
        </form>
        </div>

        <script>
        // get modal
        var modal = document.getElementById('id01');

        // Le modal se ferme quand l'utilisateur clique en dehors
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
        <script  src="function.js"></script>

<!-------------------------------------------------------------------------------------------------------------->
            <?php include 'footer.php'; ?>

        </div>
    </body>
</html>          