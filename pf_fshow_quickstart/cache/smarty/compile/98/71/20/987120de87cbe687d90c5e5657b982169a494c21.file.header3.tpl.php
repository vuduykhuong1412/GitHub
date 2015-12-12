<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:29:14
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\sub\headers\header3\header3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270365664fd0a605d64-98664441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '987120de87cbe687d90c5e5657b982169a494c21' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\sub\\headers\\header3\\header3.tpl',
      1 => 1448859710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270365664fd0a605d64-98664441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'HOOK_TOP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664fd0a65c890_72279207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664fd0a65c890_72279207')) {function content_5664fd0a65c890_72279207($_smarty_tpl) {?>
	
	<?php echo PtsthemePanel::smartyplugin(array('module'=>'blocksearch','hook'=>'displayTop'),$_smarty_tpl);?>


	<header id="header" class="header-default header-3">
		<div  id="header-main" class="header">
			<div class="container">
				<div class="row">
					<div class="leftbar col-xs-12 col-sm-6 col-md-6 col-lg-6">
				     	<?php echo PtsthemePanel::smartyplugin(array('module'=>'blockcontact','hook'=>'displayNav'),$_smarty_tpl);?>

				    </div>
        		    <div id="topbar" class="topbar col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>

					</div>	
						
				</div>
			</div>	
		</div>
	    <div  id="pts-mainnav">
	        <div class="container">
	        	<div class="wrap">
		        	<div class="inner">
			        	<div class="row">
							<div id="header_logo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div id="logo-theme" class="<?php if (Configuration::get('PTS_CP_LOGOTYPE')=='logo-theme') {?>logo-theme<?php } else { ?>logo-store<?php }?>">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<img class="logo img-responsive <?php if (Configuration::get('PTS_CP_LOGOTYPE')=='logo-theme') {?>hidden<?php }?>" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
									</a>
								</div>
							</div>
						</div>
						<div class="row">
			        		<div class="main-menu col-xs-12 col-sm-6 col-md-8 col-lg-9">
						        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMainmenu"),$_smarty_tpl);?>

						    </div>

						    <div class="search col-xs-12 col-sm-3 col-md-2 col-lg-3">
								<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value)) {?>
									<div class="header-right">
										<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

									</div>
								<?php }?>	
							</div>
						</div>
					</div>
				</div>
	        </div>
	    </div>
	</header><?php }} ?>
