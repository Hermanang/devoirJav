<?php
/* Smarty version 3.1.30, created on 2018-04-28 14:51:24
  from "C:\xampp\htdocs\CoursPHP\examen\view\test\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae46e4c3d3291_69693435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a1d956c82b3b628a8432b55126eca549b2939ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CoursPHP\\examen\\view\\test\\edit.html',
      1 => 1524919733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae46e4c3d3291_69693435 (Smarty_Internal_Template $_smarty_tpl) {
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
Test/index">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Liste des admin</a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/update">
						<div class="form-group">
							<label class="control-label">ID</label>
							<input class="form-control" type="text" name="id" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['test']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Nom</label>
							<input class="form-control" type="text" name="nom" id="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['test']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['test']->value['nom'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Prénom</label>
							<input class="form-control" type="text" name="prenom" id="prenom" value="<?php if (isset($_smarty_tpl->tpl_vars['test']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['test']->value['prenom'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Login</label>
							<input class="form-control" type="text" name="login" id="login" value="<?php if (isset($_smarty_tpl->tpl_vars['test']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['test']->value['login'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Password</label>
							<input class="form-control" type="text" name="password" id="password" value="<?php if (isset($_smarty_tpl->tpl_vars['test']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['test']->value['password'];?>
 <?php }?>"/>
						</div>

						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
