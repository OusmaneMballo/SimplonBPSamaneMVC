<?php
/* Smarty version 3.1.30, created on 2020-07-27 17:01:39
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/Simplon.co/BanquePeupleSamane/BanqueDuPeuple/src/view/compte/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f1eec53b52930_41468851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46136ede7fcd7bc63127851695688226dc569573' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/Simplon.co/BanquePeupleSamane/BanqueDuPeuple/src/view/compte/index.html',
      1 => 1595862054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eec53b52930_41468851 (Smarty_Internal_Template $_smarty_tpl) {
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
            Dashboard
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
        <form method="post" onsubmit="return post()" class="form" action="traittementcompte.php">
            <div class="row">
                <?php echo '<?php
                ';?>include './listTypeCompte.php';
                <?php echo '?>';?>
                <label for="solde">Solde</label>
                <input type="text" class="inputcl" id="solde" name="solde"/>
            </div>
            <div class="row">
                <label for="frai">Frais:<b id="frai"></b></label>
                <?php echo '<?php
                    ';?>echo "<select name='client' id='client' class='selectcmpt'>";
                echo "<option value='0'>-------List des Clients--------</option>";
                echo "<option disabled>--------Client Moral------------</option>";
                include './traittementcompte.php';
                echo "</select>";
                <?php echo '?>';?>

            </div>
            <div class="row">
                <button type="submit" class="valider">Ajouter</button>
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
