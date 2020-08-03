<?php
/* Smarty version 3.1.30, created on 2020-08-03 17:36:41
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/Simplon.co/BanquePeupleSamane/BanqueDuPeuple/src/view/compte/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f282f09ad42c3_90911918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46136ede7fcd7bc63127851695688226dc569573' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/Simplon.co/BanquePeupleSamane/BanqueDuPeuple/src/view/compte/index.html',
      1 => 1596468998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f282f09ad42c3_90911918 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Gestion des activites bancaires"/>
    <meta name="author" content="mballoSoft"/>
    <title>Add | Compte</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/css/client.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/css/main.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/css/compte.css"/>
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
    <fieldset>
        <legend>Creation Compte</legend>
        <form action="" class="form">
            <div class="row">
                <select name="typecp" class="selectcmpt" id="typecp" onchange="frais()">
                    <option value="0">--Type Compte--</option>
                    <?php if ($_smarty_tpl->tpl_vars['listFrais']->value != null) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listFrais']->value, 'frais');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['frais']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['frais']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['frais']->value->getLibelle();?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>
                    <!--<option value="1">Epargne</option>
                    <option value="2">Xewel</option>
                    <option value="3">Courant</option>
                    <option value="4">Bloquer</option>-->
                </select>
                <select name="client" id="client" class="slct">
                    <option value="0">--------------Clients--------------</option>
                    <option value="0"><b>------List Clients Morals-------</b></option>
                    <?php if ($_smarty_tpl->tpl_vars['listFrais']->value != null) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listClientM']->value, 'cltMoral');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cltMoral']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['cltMoral']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['cltMoral']->value->getId();?>
-<?php echo $_smarty_tpl->tpl_vars['cltMoral']->value->getNom();?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>
                    <option value="0"><b>------List Clients Physiques------</b></option>
                    <?php if ($_smarty_tpl->tpl_vars['listClientP']->value != null) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listClientP']->value, 'cltPhysique');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cltPhysique']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['cltPhysique']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['cltPhysique']->value->getId();?>
-<?php echo $_smarty_tpl->tpl_vars['cltPhysique']->value->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['cltPhysique']->value->getNom();?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>
                </select>
            </div>
            <div class="row">
                <label for="frai">Frais:<b id="frai"></b></label>
            </div>
            <div class="row">
                <button type="button" class="valider" onclick="post()">Ajouter</button>
                <button type="reset" class="annuler">Annuler</button>
            </div>
        </form>
    </fieldset>
</article>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/js/compte.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/js/main.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
