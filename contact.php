<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Playfair+Display+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    
    <title>Bilel Hamimed | Développeur Web Junior</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="style_accueil.css" rel="stylesheet">
</head>

<body>
    <!-------------------------------------------PRELOADER---------------------------------------->
<!---<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>-->

<!--------------------------------------------------MENU NAV--------------------------------->
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="#"><img src="images/logo_bh.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="accueil.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="parcours.php">Parcours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

<!-- Contact Section -->

<section id="contact">
     <div class="container">
          <div class="row">
               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="section-title">
                         <h1>CONTACT</h1>
                    </div>
                    <form action="formulaire.php" method="post">
                         <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" name='nom' placeholder="Nom" id='nom'>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" name='mail' placeholder="Email" id='mail'>
                         </div>
                         <div class="col-md-12 col-sm-12"> 
                              <textarea class="form-control" rows="5"  name='message' placeholder="Message" id='message'></textarea>
                         </div>
                         <div class="col-md-3 col-sm-4">
                              <input type="submit" class="form-control" value="Envoyer Message" id='bouton_envoi'>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</section>
<footer style="background-color:black">
        <div id="reseaux" class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="social-icon">
                            <li><a href="https://github.com/Krez90" class="fa fa-github-alt"></a></li>
                            <li><a href="https://www.linkedin.com/in/bilel-hamimed/" class="fa fa-linkedin"></a></li>
                            <li><a href="cv_bilel_hamimed.pdf" class="fa fa-download"></a></li>
                        </ul>
                </div>
            </div>
            <div class="text_footer">
                <div class="row">
                    <div class="col-md-12">
                        <img src="images/logo.png" alt="logo_bh"><br>
                        <p>2018 Bilel Hamimed. Inc All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
</footer>

<script>
        // CREATION DES VARIABLE
        var validation = document.getElementById('bouton_envoi');
        var nom = document.getElementById('nom');
        var missNom = document.getElementById('missNom');
        var nom_v = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
        
        validation.addEventListener('click', n_valid);

        function n_valid(e) {
            // SI LE CHAMP EST VIDE
            if (nom.validity.valueMissing) {
                e.preventDefault();
                missNom.textContent = 'Prénom manquant';
                missNom.style.color = 'red';
                missNom.style.fontStyle = 'italic';
            }
            // SI LE FORMAT EST INCORRECT
            else if (nom_v.test(nom.value) == false) {
                e.preventDefault();
                missNom.textContent = 'Le format est incorrect';
                missNom.style.color = 'orange';
            }
            else {
                missNom.textContent = '';
            }
        }

        var validation = document.getElementById('bouton_envoi');
        var mail = document.getElementById('mail');
        var missMail = document.getElementById('missMail');
        var mail_v =  /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

        validation.addEventListener('click', m_valid);

        function m_valid(e) {
            if (mail.validity.valueMissing) {
                e.preventDefault();
                missMail.textContent = 'Email manquant';
                missMail.style.color = 'red';
                missMail.style.fontStyle = 'italic';
            }
            // SI LE FORMAT EST INCORRECT
            else if (mail_v.test(mail.value) == false) {
                e.preventDefault();
                missMail.textContent = 'Le format est incorrect';
                missMail.style.color = 'orange';
            }
            else {
                missMail.textContent = '';
                }
        }

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>