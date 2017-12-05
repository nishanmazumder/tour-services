<?php
$show_ok_message = false;

if(isset($_POST["onsubmit"])){

	$dest="contact@taxicourcheveltransfert.fr";
	$sujet= "Taxi Courchevel ".getenv("HTTP_REFERER");
	
	$body.="\nTaxi Courchevel devis \n\n";
	
	$body.="\nCivilité : ".$_POST["cont_civilite"]."\n";
	$body.="Nom : ".$_POST["cont_nom"]."\n";
	$body.="Prénom : ".$_POST["cont_prenom"]."\n";
	$body.="Téléphone : ".$_POST["cont_tel"]."\n";
	$body.="E-mail : ".$_POST["cont_email"]."\n\n";

	$body.="\nDétails ALLER\n\n";
	
	$body.="Au depart de : ".$_POST["cont_aller_depart"]."\n";
	$body.="A destination de : ".$_POST["cont_aller_destination"]."\n";
  $body.="Date : ".$_POST["cont_aller_date"]."\n";
  $body.="Heure vol-train : ".$_POST["cont_aller_heure"]." : ".$_POST["cont_aller_minute"]."\n";
	$body.="Nbre passagers : ".$_POST["cont_aller_passagers"]."\n";
	$body.="Nbre sièges bebe : ".$_POST["cont_aller_sieges_bebe"]."\n";
	$body.="Nbre rehausseurs : ".$_POST["cont_aller_rehausseur"]."\n";
    $body.="Nbre bagages volumineux : ".$_POST["cont_aller_bagage_volum"]."\n";
	$body.="Nbre skis : ".$_POST["cont_aller_ski"]."\n\n";
	
	$body.="Message : ".$_POST["cont_message"]."\n\n";
	
	$body.="";
	
	if(!mail($dest,$sujet,$body)){
	 	print "erreur envoi email <br>";
	}
	$show_ok_message = true;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>Booking Taxi for courchevel</title>
	<meta name="description" content="book, reserv a Taxi for Courchevel" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Nishan Mazumder">
	<!-- InstanceEndEditable -->
	<link href='http://fonts.googleapis.com/css?family=Quicksand&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!--Bootstrap min css-->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link href="../css/general-latest.css" rel="stylesheet" type="text/css" />
	<link href="../css/general.css" rel="stylesheet" type="text/css" />
	<link href="../css/css.css" rel="stylesheet" type="text/css" />	
	<!--Front awsome css-->
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<!-- Responsive css-->
	<link href="../css/responsive.css" rel="stylesheet" type="text/css" />
	<!--Jquery latest-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	
	<link rel="stylesheet" href="../js/css/ui-lightness/jquery-ui-1.8.16.custom.css">
	<script src="../js/jquery-ui-1.8.16.custom.min.js"></script>

<script>
$(function() {
	$( "#cont_aller_date, #cont_retour_date" ).datepicker({
	dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
	dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
	monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
	dateFormat: 'dd-mm-yy',
	showTime: true
	});
});
</script>

<script language="JavaScript">
function checkEmail(valeur)
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valeur))
 {
  return true;
 }
 if (valeur!="")
 {
  alert("Attention : l'adresse e-mail ne semble pas valide !")
  return false;
 }
}
function check_newsletter()
{
	var docForm = document.formulaire;

	if (docForm.cont_nom.value=="") {
		alert('Veuillez préciser votre nom');
		docForm.cont_nom.focus();		
		return;		
	}
	if (docForm.cont_tel.value=="") {
		alert('Veuillez préciser votre numéro de téléphone');
		docForm.cont_tel.focus();		
		return;
	}	
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(docForm.cont_email.value)){
		if (docForm.cont_email.value=="") {
			alert('Veuillez préciser votre adresse e-mail');
			docForm.cont_email.focus();		
			return;		
		}	
	}else{
	 	alert("Votre adresse e-mail n'est pas valide");
		docForm.cont_email.focus();	
		return;
	}  
	// Aller
	if (docForm.cont_aller_destination.value=="") {
		alert('Veuillez préciser votre destination');
		docForm.cont_aller_destination.focus();		
		return;		
	}
	if (docForm.cont_aller_date.value=="") {
		alert('Veuillez préciser votre date');
		docForm.cont_aller_date.focus();		
		return;		
	}
	if (docForm.cont_aller_heure.value=="") {
		alert('Veuillez préciser votre heure');
		docForm.cont_aller-heure.focus();		
		return;		
	}	
	if (docForm.cont_aller_minute.value=="") {
		alert('Veuillez préciser votre heure (minute)');
		docForm.cont_aller_minute.focus();		
		return;		
	}	
	if (docForm.cont_aller_passagers.value=="") {
		alert('Veuillez préciser le nombre de passagers');
		docForm.aller-passagers.focus();		
		return;		
	}

 docForm.action="booking.php";
 docForm.submit();
}
</script>
<!-- InstanceEndEditable -->
<!-- InstanceParam name="id" type="text" value="devis" -->
</head>
<body id="devis">
		
		<!-- Main navigation -->
		<div id="bandeau">
			<div class="container">
				<div class="row no-gutters">
				  <nav class="navbar navbar-expand-lg">
					  <a class="navbar-brand" href="#"><img src="../images/logo.png" width="250" height="80"  alt="" id="logo" /></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars fa-2x responsive_bar" aria-hidden="true"></i>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
						  <li class="nav-item active">
							<a href="index.html" target="_self" class="btn1 nav-link"><span>Home</span></a>
						  </li>
						  <li class="nav-item">
							<a href="services.html" target="_self" class="btn2 nav-link"><span>Our transports</span></a>
						  </li>
						  <li class="nav-item">
							<a href="booking.php" target="_self" class="btn3 nav-link"><span>Book online</span></a>
						  </li>
						  <li class="nav-item">
							<a href="prices.php" target="_self" class="btn4 nav-link"><span>Cost &amp; rates</span></a>
						  </li>
						  <li class="nav-item">
							<a href="contact-us.php" target="_self" class="btn5 nav-link"><span>Contact</span></a>
						  </li>
						</ul>
					  </div>
					</nav>
				</div>
			</div>
		</div>
		<!-- // Main navigation -->
		
		
		<!-- Languages navigation -->
		<div id="menu-langues">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<ul class="language_bar">
						  <li><a href="../index.html" target="_self" class="btn1"><span>Français</span></a></li>
						  <li><a href="index.html" target="_self" class="btn2"><span>English</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- // Languages navigation -->
		
		
		<!-- Banner area -->
		<div class="main_banner_img">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner_img_sec" id="image-bandeau">
							<img class="banner_heli img-responsive" src="../images/header-img2.png" alt="" />
							<img class="banner_car img-responsive" src="../images/header-img4.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- // Banner area -->
		
		
		<!-- Main content area -->
		<div id="main_content">
			  <div id="container-int" class="clearfix">
				<div id="contenu" class="clearfix">
					<div class="int"> <!-- InstanceBeginEditable name="EditRegionContenu" -->
						<div class="container">
							<div class="row">
						
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<? if($show_ok_message==true){ ?>
									<h2>Your message has been sent!</h2>
									<p><a href="devis.php" target="_self">Send another message &gt;</a></p>
									<? } else { ?>
									<h1>Booking</h1>
									<div class="clr"></div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<h3>To pre-book your taxi please complete <br />
			        and submit the online form below.&nbsp;</h3>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<h2 class="telephone_space">PHONE SECRETARY <br />
											Tel : +33(0)6-37-15-46-14</h2>
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<form action="javascript:check_newsletter()" method="post" enctype="multipart/form-data" name="formulaire" id="formulaire">
										<input type="hidden" name="onsubmit" value="1" />
										<table class="contacttableau" border="0" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td class="aligndroite"><strong>Title :</strong></td>
													<td class="radio"><input name="cont_civilite" value="Mlle" type="radio" />
														<strong>Mlle</strong>
														<input name="cont_civilite" value="Mme" type="radio" />
														<strong>Mrs</strong>
														<input name="cont_civilite" value="M." type="radio" />
														<strong>Mr</strong></td>
												</tr>
												<tr>
													<td class="aligndroite"><strong><span class="gras-rouge">*</span>Surname : </strong></td>
													<td><input name="cont_nom" id="cont_nom" size="30" maxlength="100" type="text" /></td>
												</tr>							
												<tr>
													<td class="aligndroite"><strong>First name :</strong></td>
													<td><input name="cont_prenom" id="cont_prenom" size="30" maxlength="100" type="text" /></td>
												</tr>
												<tr>
													<td class="aligndroite"><strong><span class="gras-rouge">*</span>Telephone :</strong></td>
													<td><input name="cont_tel" id="cont_tel" size="30" maxlength="100" type="text" /></td>
												</tr>
												<tr>
													<td class="aligndroite"><strong><span class="gras-rouge">*</span>E-mail :</strong></td>
													<td><input name="cont_email" id="cont_email" size="30" maxlength="100" type="text" onchange="checkEmail(this.value)" /></td>
												</tr>
												<tr>
													<td colspan="2">&nbsp;</td>
												</tr>
												<tr>
													<td class="aligndroite"><strong><span class="gras-rouge">*</span>From the place :</strong></td>
													<td><input name="cont_aller_depart" id="cont_aller_depart" size="30" maxlength="200" type="text" /></td>
												</tr>
												<tr>
													<td class="aligndroite"><strong><span class="gras-rouge">*</span>To the place :</strong></td>
													<td><input name="cont_aller_destination" id="cont_aller_destination" size="30" maxlength="200" type="text" /></td>
												</tr>
												<tr>
													<td class="aligndroite"><span class="gras-rouge">*</span><strong>Date :</strong></td>
													<td><input name="cont_aller_date" id="cont_aller_date" size="20" maxlength="100" type="text" /></td>
												</tr>
												<tr>
													<td class="aligndroite"><strong><span class="gras-rouge">*</span>Departure time :</strong></td>
													<td><select name="cont_aller_heure" id="cont_aller_heure">
															<option value="" selected="selected">Choose</option>
															<option>&nbsp;&nbsp;01&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;02&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;03&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;04&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;05&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;06&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;07&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;08&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;09&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;10&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;11&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;12&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;13&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;14&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;15&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;16&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;17&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;18&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;19&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;20&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;21&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;22&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;23&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;00&nbsp;&nbsp;</option>
														</select>
														<strong>h :</strong>
														<select name="cont_aller_minute" id="cont_aller_minute">
															<option value="" selected="selected">Choose</option>
															<option>&nbsp;&nbsp;00&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;05&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;10&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;15&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;20&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;25&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;30&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;35&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;40&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;45&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;50&nbsp;&nbsp;</option>
															<option>&nbsp;&nbsp;55&nbsp;&nbsp;</option>
														</select>
														<strong>min</strong></td>
												</tr>
												<tr>
													<td class="aligndroite"><strong><span class="gras-rouge">*</span>N° of passengers :</strong></td>
													<td><strong>
														<input name="cont_aller_passagers" type="text" id="cont_aller_passagers" size="4" />
														</strong></td>
												</tr>
												<tr>
													<td class="aligndroite"><strong>Baby car seat :</strong></td>
													<td><input name="cont_aller_sieges_bebe" type="text" id="cont_aller_sieges_bebe" size="4" /></td>
												</tr>
												<tr>
													<td class="aligndroite"><strong>Child booster seat :</strong></td>
													<td><strong>
														<input name="cont_aller_rehausseur" type="text" id="cont_aller_rehausseur" size="4" />
														</strong></td>
												</tr>
												<tr>
												  <td class="aligndroite"><b>bulky baggage :</b></td>
												  <td><strong>
													<input name="cont_aller_bagage_volum" type="text" id="cont_aller_bagage_volum" size="4" />
												  </strong></td>
											  </tr>
												<tr>
													<td class="aligndroite"><strong>Pairs of  skis or surfs :</strong></td>
													<td><input name="cont_aller_ski" type="text" id="cont_aller_ski" size="4" /></td>
												</tr>						
												<tr>
													<td class="aligndroite"><strong>Message :</strong></td>
													<td><textarea name="cont_message" cols="30" rows="3" id="cont_message"></textarea>
														<br />
														<span class="petit">Exemple : adresse exacte</span></td>
												</tr>
												<tr>
													<td colspan="2">&nbsp;</td>
												</tr>
												<tr>
													<td colspan="2" class="envoyer"><input name="Submit" type="submit" class="gras-rouge" value="Submit" /> </td>
												</tr>
											</tbody>
										</table>
									</form>
									<? } ?>
									
									<div id="mentions2">
										<p>*<span class="petit"> Champs obligatoires</span></p>
										<p><span class="petit">Vous disposez d&rsquo;un droit d&rsquo;acc&egrave;s, de modification, de rectification et de   suppression des donn&eacute;es vous concernant (loi &laquo; Informatique et Libert&eacute;s &raquo; du 6   janvier 1978). Pour toute demande, adressez-vous &agrave; Taxi Courchevel Transfert. Les informations recueillies &agrave; travers notre   formulaire ne seront pas transmises &agrave; des soci&eacute;t&eacute;s tiers.</span></p>
									</div>
									<!-- InstanceEndEditable --> 
								
								</div>
							
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- // Main content area -->
		
		
		<!-- Footer -->
		<div id="footer">
			<div class="int">
				<div class="container">
					<div class="row no-gutters">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<p>&copy;Taxi Courchevel Transfert<br />
							  Tel : +33 6-62-30-43-41<br />
							  Autoristation de stationnement  n&deg;19<br />
							  de la commune de Courchevel 73. 
							</p>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<ul class="margin_left_small">
							  <li><a href="index.html" target="_self" class="accueil">Accueil</a></li>
							  <li><a href="prestations.html" target="_self" class="entreprise">Prestations</a></li>
							  <li><a href="devis.php" target="_self" class="acces">Devis  r&eacute;servations</a></li>
							  <li><a href="tarifs.php" target="_self" class="acces">Tarifs</a></li>
							  <li><a href="contact.php" target="_self" class="contact">Contact</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<ul class="margin_left">
							  <li><a href="mentions-legales.html" target="_self" class="">Mentions l&eacute;gales</a></li>
							  <li><a href="http://www.creation-sitesinternet.com/" target="_self" class="">Création du site internet</a>
							  <li><a href="liens-web.html" target="_blank">Liens web</a></li>
							  <li><a href="en/index.html">English</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<ul class="sepera_tor margin_left_small">
							  <li>Desserte Courchevel et Haute Tarentaise :</li>
							  <li>Taxi - Courchevel - Geneve - Lyon</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- // Footer -->
		
		
		<!-- Javascript file -->
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../s/jquery.easing.1.3.js"></script>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script><!--Bootstrap Js-->
		<script src="../js/bootstrap.min.js"></script>
		<!-- Nivo slider -->
		<script type="text/javascript" src="../js/nivo-slider/jquery.nivo.slider.js"></script>
		<!-- Custom js -->
		<script type="text/javascript" src="../js/custom.js"></script>
	
	</body>
</html>