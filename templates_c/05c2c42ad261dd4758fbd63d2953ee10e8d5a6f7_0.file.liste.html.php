<?php
/* Smarty version 3.1.30, created on 2018-04-28 15:03:09
  from "C:\xampp\htdocs\CoursPHP\examen\view\admin\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae4710de9e6f7_91470077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05c2c42ad261dd4758fbd63d2953ee10e8d5a6f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CoursPHP\\examen\\view\\admin\\liste.html',
      1 => 1524920560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae4710de9e6f7_91470077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page liste</title>
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
					<div class="alert alert-success" style="font-size:18px; text-align:justify;">
						
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['tests']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['tests']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Identifiant</th>
									<th>Login</th>
									<th>Paswword</th>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['test']->value['login'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['test']->value['password'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['test']->value['nom'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['test']->value['prenom'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Admin/delete/<?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Admin/edit/<?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>
">Editer</a></td>
									</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</table>
						<?php } else { ?>
							Liste vide
						<?php }?>
					<?php }?>
				</div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Admin/add">Ajout d'un test</a>
			</div>
		</div>
		
	</body>
</html>
<?php }
}
