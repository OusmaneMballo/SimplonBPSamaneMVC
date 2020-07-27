<?php
/* Smarty version 3.1.30, created on 2020-07-27 17:01:44
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/Simplon.co/BanquePeupleSamane/BanqueDuPeuple/src/view/client/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f1eec58ec45d9_05647971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70a2c416bd644c27e6fc38e0e06e81c0c347aa6d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/Simplon.co/BanquePeupleSamane/BanqueDuPeuple/src/view/client/index.html',
      1 => 1595862092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eec58ec45d9_05647971 (Smarty_Internal_Template $_smarty_tpl) {
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
        <legend>Creation Client</legend>
        <form class="form" onsubmit="return post()" method="post" action="traittementclient.php">
            <div>
                <select name="typeclient" id="typeclient" class="slct selectclt" onchange="typeClient()">
                    <option value="0">--Choix du Type de Client--</option>
                    <option value="1">1- Client Physique</option>
                    <option value="2">2- Client Moral</option>
                </select>
            </div>
            <div class="formulaire">
                <div>
                    <fieldset id="cm" hidden>
                        <legend>Client Moral</legend>
                        <div class="row">
                            <label for="nomCM">Nom</label>
                            <input type="text" class="inputcl" id="nomCM" name="nomCM"/>
                            <label for="adresseCM">Adresse</label>
                            <input type="text" class="inputcl" id="adresseCM" name="adresseCM"/>
                        </div>
                        <div class="row">
                            <label for="raisonSocialCM">Raison Social</label>
                            <input type="text" class="inputcl" id="raisonSocialCM" name="raisonSocialCM"/>
                            <label for="emailCM">Email</label>
                            <input type="email" class="inputcl" id="emailCM" name="emailCM"/>
                        </div>
                        <div class="row">
                            <label for="identifiantCM">Identifiant</label>
                            <input type="text" class="inputcl" id="identifiantCM" name="identifiantCM"/>
                            <label for="telephoneCM">Telephone</label>
                            <input type="text" class="inputcl" id="telephoneCM" name="telephoneCM"/>
                        </div>
                        <div class="row">
                            <label for="loginCM">Login</label>
                            <input type="text" class="inputcl" id="loginCM" name="loginCM"/>
                            <label for="passwdCM">PassWord</label>
                            <input type="password" class="inputcl" id="passwdCM" name="passwdCM"/>
                        </div>
                    </fieldset>
                </div>
                <div>
                    <fieldset id="cp" hidden>
                        <legend>Client Physique</legend>
                        <div class="row">
                            <label for="nomcp">Nom</label>
                            <input type="text" class="inputcl" id="nomcp" name="nomcp"/>
                            <label for="prenomcp">Prenom</label>
                            <input type="text" class="inputcl" id="prenomcp" name="prenomcp"/>
                        </div>
                        <div class="row">
                            <label for="telephonecp">Telephone</label>
                            <input type="text" class="inputcl" id="telephonecp" name="telephonecp"/>
                            <label for="adressecp">Adresse</label>
                            <input type="text" class="inputcl" id="adressecp" name="adressecp"/>
                        </div>
                        <div class="row">
                            <label for="professioncp">Profession</label>
                            <input type="text" class="inputcl" id="professioncp" name="professioncp"/>
                            <label for="emailcp">Email</label>
                            <input type="email" class="inputcl" id="emailcp" name="emailcp"/>
                        </div>
                        <div class="row">
                            <label for="logincp">Login</label>
                            <input type="text" class="inputcl" id="logincp" name="logincp"/>
                            <label for="passwdcp">PassWord</label>
                            <input type="password" class="inputcl" id="passwdcp" name="passwdcp"/>
                        </div>
                        <div class="row">
                            <label for="cnicp">CNI</label>
                            <input type="text" class="inputcl" id="cnicp" name="cnicp"/>
                            <select name="statutcp" id="statutcp" class="slct2 selectclt" onchange="salaryForm()">
                                <option value="0">--Statut Client--</option>
                                <option value="1">Salarier </option>
                                <option value="2">Non Salarier </option>
                            </select>
                        </div>
                        <div class="row" id="salarier" hidden>
                            <label for="salairecp" id="lbsalairecp">Salaire</label>
                            <input type="text" class="inputcl" id="salairecp" name="salairecp"/>
                            <select name='employeur' id='employeur' class='slct2 selectclt' onchange='employeurForm()'>
                                <option value='0'>--Employer--</option>
                                <option value='1'>Empleur1</option>
                                <option value='2'>Empleur1</option>
                                <option value='3'>Ajouter son employeur</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="valider" id="ajout" disabled>Ajouter</button>
                <button type="reset" class="annuler" id="annuler" disabled>Annuler</button>
            </div>
        </form>
    </fieldset>
    <div id="affiche"></div>
</article>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/js/client.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
