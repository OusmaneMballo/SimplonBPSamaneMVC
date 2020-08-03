<?php
/* Smarty version 3.1.30, created on 2020-08-03 17:23:54
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/Simplon.co/BanquePeupleSamane/BanqueDuPeuple/src/view/welcome/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f282c0a615e06_28465944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72dcd861781857033210d000349dea9ca0a8cc21' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/Simplon.co/BanquePeupleSamane/BanqueDuPeuple/src/view/welcome/index.html',
      1 => 1595936401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f282c0a615e06_28465944 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="Gestion des activites bancaires"/>
	<meta name="author" content="mballoSoft"/>
	<title>Add | Client</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/css/main.css"/>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/css/compte.css"/>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/css/client.css"/>
</head>
<body>
<header>
	<nav>
		<h1>Banque Du <span style="color: aliceblue;">Peuple</span></h1>
	</nav>
</header>

<!--=========Debut sideBarre============-->
<aside class="sidebarre">
	<div class="flex">
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/image/profil.jpg" class="profil" alt="Banque du Peuple" srcset=""/>
		<p class="mail">xywzt@gmail.com</p>
		<div class="contener" style="background-color: rgb(85, 163, 231); color: white;">
			<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/welcome/index">Dashboard</a>
		</div>
		<div class="contener">
			<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/compte/index">Compte</a>
		</div>
		<div class="contener">
			<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/client/index">Client</a>
		</div>
		<div class="contener">
			Logout
		</div>
	</div>
</aside>
<!--=========Fin sideBarre============-->

<!--=========Contenu du body==========-->
<article class="content">

</article>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/js/main.js"><?php echo '</script'; ?>
>
</body>
</html>
<!--
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
		&lt;!&ndash; l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  &ndash;&gt;
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		&lt;!&ndash; integration de javascript dans le moteur de rendu de vue Smarty &ndash;&gt;
		
			<?php echo '<script'; ?>
 language=javascript>
			function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			}

			<?php echo '</script'; ?>
>
		
	</head>
	<body onload="load_design()">
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				&lt;!&ndash; l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  &ndash;&gt;
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu test page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu test get id page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu test list page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Upload/index">upload file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
PdfGenerator/generate">Samane Generate pdf file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/generate">Samane Generate excel file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/read">Samane read excel file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Email/sendMail">Samane Mailing </a></li>
			</ul>
		</div>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:160px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<div class="alert alert-success" style="font-size:18px; text-align:justify;">
							Merci, l'équipe samanemvc vous remercie :) : 
							je vous ai préparé un CRUD qui marche. Lisez la documentation.
							<br/>Et surtout noubliez pas de configurer votre base de données : ou? Dans le dossier config
							puis éditez le fichier database.php. Mettez à on l'etat de la base! Bon code!!!!  :)
					</div>
					<div id="design_js">MODELE DEVELOPPE PAR Ngor SECK ! <h1>Version 1.9.3 Doctrine ORM</h1></div>
				</div>
			</div>
		</div>
	</body>
</html>
-->

<?php }
}
