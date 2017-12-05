<?php
header('Content-Type: text/html; charset=iso-8859-1');
$show_ok_message = false;
 if(isset($_POST["onsubmit"])){
	$dest="arosh019@gmail.com";	
	$sujet= "Site Taxi Courchevel - ".getenv("HTTP_REFERER");
	$headers .= "Content-type: text/html; charset=utf-8\n\n";
	$body.="\n<h2>Site Taxi Courchevel renseignements</h2>
	<hr><b>Nom - Pr&eacute;nom :</b> ".$_POST["cont_nom"]."<br />
	<b>Adresse :</b> ".$_POST["cont_adresse"]."<br />
	<b>T&eacute;l&eacute;phone :</b> ".$_POST["cont_tel"]."<br />
	<b>E-mail :</b> ".$_POST["cont_email"]."<br />
	<b>Message :</b><br />".$_POST["cont_message"]."</p><hr>\n";	
	$body.="";
	if(!mail($dest,$sujet,$body,$headers)){
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
		<title>Contact Taxi Courchevel Transfert</title>
		<meta name="description" content="Contact Taxi courchevel" />
		<meta name="keywords" content="Contact Taxi" />
		<meta name="author" content="Nishan Mazumder">
		<!-- InstanceEndEditable -->
		<link href='http://fonts.googleapis.com/css?family=Quicksand&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<!--Bootstrap min css-->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!--Front awsome css-->
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<!--Main css-->
		<link href="../css/general-latest.css" rel="stylesheet" type="text/css" />
		<link href="../css/general.css" rel="stylesheet" type="text/css" />
		<link href="../css/css.css" rel="stylesheet" type="text/css" />
		<!-- Responsive css-->
		<link href="../css/responsive.css" rel="stylesheet" type="text/css" />
		<!--Jquery latest-->
		<script src="../js/jquery-3.2.1.min.js"></script>

<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript" language="JavaScript">
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
		alert('Veuillez preciser votre nom');
		docForm.cont_nom.focus();		
		return;		
	}
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(docForm.cont_email.value)){
		if (docForm.cont_email.value=="") {
			alert('Veuillez preciser votre adresse e-mail');
			docForm.cont_email.focus();		
			return;		
		}	
	}else{
		 alert("Votre adresse e-mail n'est pas valide");
		docForm.cont_email.focus();	
  		return;
  }	
	if (docForm.cont_message.value=="") {
		alert('Veuillez preciser votre message');
		docForm.cont_message.focus();		
		return;
	}	   	
 docForm.action="contact-us.php";
 docForm.submit();
}
</script>
<!-- InstanceEndEditable -->
<!-- InstanceParam name="id" type="text" value="contact" -->
</head>
<body id="contact">
		
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
		<!-- <img src="images/img1.jpg" class="main_banner" alt="Taxi Courchevel transfert - desserte de Courchevel et Stations de ski de Savoie" id="image-bandeau" />
		 --><!-- // Banner area -->
		
		
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
								<!-- description -->
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<h3>Taxi Mo&ucirc;tiers transfert </h3>
									<h4>438 AVENUE DE SAVOIE <br />
									  73260 AIGUEBLANCHE<br />
									</h4>
									<h3><span class="petit">Contact us </span>: <br />
									Tel : +33(0)6-37-15-46-14</h3>
									<p><a href="mailto:contact@taximoutierstransfert.com">contact@taximoutierstransfert.com </a></p>
									<div class="mentions">
										<p>Vous disposez d&rsquo;un droit d&rsquo;acc&egrave;s, de modification, de rectification et de   suppression des donn&eacute;es vous concernant (loi &laquo; Informatique et Libert&eacute;s &raquo; du 6   janvier 1978). Pour toute demande, adressez-vous &agrave; Taxi Mo&ucirc;tiers Transfert. Les informations recueillies &agrave; travers notre   formulaire ne seront pas transmises &agrave; des soci&eacute;t&eacute;s tiers.</p>
									</div>
									<!-- InstanceEndEditable --> 
								</div>
								
								<!-- contact form -->
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div id="contact-form">
										<? if($show_ok_message==true){ ?>
										<? //afffiche ce que tu veux;?>
										<h3 class="envoye">Your message has been sent!</h3>
										<h5><a href="contact.php" target="_self">Send another message&gt;</a></h5>
										<? } else { ?>
										<h3>To contact us, please complete <br />
									  and submit the online form below :</h3>
									  
										<form enctype="multipart/form-data" name="formulaire" action="javascript:check_newsletter()" method="post" accept-charset="UTF-8">
											<input type="hidden" name="onsubmit" value="1" />
											<table id="contacttableau" border="0" cellpadding="0" cellspacing="0">
												<tbody>
													<tr>
														<td><b><strong>Name</strong><span class="gras-rouge">*</span></b></td>
														<td><input name="cont_nom" id="cont_nom" size="28" maxlength="100" type="text" /></td>
													</tr>
													<tr>
														<td><b>Country</b></td>
														<td><input name="cont_adresse" type="text" id="cont_adresse" value="" size="24" /></td>
													</tr>
													<tr>
														<td><strong>Phone</strong></td>
														<td><input name="cont_tel" id="cont_tel" size="28" maxlength="100" type="text" /></td>
													</tr>
													<tr>
														<td><b>E-mail<span class="gras-rouge">*</span></b></td>
														<td><input name="cont_email" id="cont_email" size="28" maxlength="100" type="text" onchange="checkEmail(this.value)" /></td>
													</tr>
													<tr>
														<td><b>Message<span class="gras-rouge">*</span></b></td>
														<td><textarea name="cont_message" cols="24" rows="3" id="cont_message"></textarea></td>
													</tr>
													<tr>
														<td class="petit"><span class="gras-rouge">*</span> required</td>
														<td class="envoyer"><label>
																<input class="submit_button_contact" type="submit" name="Submit" value="Submit" />
															</label></td>
													</tr>
												</tbody>
											</table>
										</form>
										<? } ?>
									</div>
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
		
		<script src="../js/bootstrap.min.js"></script>
		<!-- Nivo slider -->
		<script type="text/javascript" src="../js/nivo-slider/jquery.nivo.slider.js"></script>
		<!-- Custom js -->
		<script type="text/javascript" src="../js/custom.js"></script>
	
	</body>
</html>