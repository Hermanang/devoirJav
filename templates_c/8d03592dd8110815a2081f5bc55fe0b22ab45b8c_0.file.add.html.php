<?php
/* Smarty version 3.1.30, created on 2018-04-28 15:02:19
  from "C:\xampp\htdocs\CoursPHP\examen\view\admin\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae470db8f7432_18208069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d03592dd8110815a2081f5bc55fe0b22ab45b8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CoursPHP\\examen\\view\\admin\\add.html',
      1 => 1524920437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae470db8f7432_18208069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Admin/index">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Admin/liste">Liste des admin</a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">ADMIN</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Admin/add">
						<div class="form-group">
							<label class="control-label">Nom</label>
							<input class="form-control" type="text" name="nom" id="nom"/>
						</div>
						<div class="form-group">
							<label class="control-label">Prénom</label>
							<input class="form-control" type="text" name="prenom" id="prenom"/>
						</div>
						<div class="form-group">
							<label class="control-label">Login</label>
							<input class="form-control" type="text" name="login" id="login"/>
						</div>
						<div class="form-group">
							<label class="control-label">Password</label>
							<input class="form-control" type="text" name="password" id="password"/>
						</div>

						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
