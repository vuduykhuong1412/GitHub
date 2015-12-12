<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:15:37
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59535664f9d9e71050-61319879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89419ff2a523402c69e275c3f198667232c10317' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\index.tpl',
      1 => 1447227016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59535664f9d9e71050-61319879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PTS_PAGEBUILDER_ACTIVED' => 0,
    'PTS_PAGEBUILDER_FULL' => 0,
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9d9eb8c14_70084087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9d9eb8c14_70084087')) {function content_5664f9d9eb8c14_70084087($_smarty_tpl) {?>
<?php if (Configuration::get('PTS_CP_ENABLE_PBUILDER')&&isset($_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value)&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_FULL']->value) {?>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
	    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
		<div class="block producttabs">
			<div class="tab-nav">
				<ul id="home-page-tabs" class="nav nav-theme sclearfix">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

				</ul>
			</div>
		</div>		
		<?php }?>
		<div class="tab-content">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>

		</div>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
		<div class="clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

		</div>
	<?php }?>
<?php }?><?php }} ?>
