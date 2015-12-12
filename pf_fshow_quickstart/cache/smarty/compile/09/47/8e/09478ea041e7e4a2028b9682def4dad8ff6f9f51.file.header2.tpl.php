<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:20:03
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\sub\headers\header2\header2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53865664fae3c83172-80838317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09478ea041e7e4a2028b9682def4dad8ff6f9f51' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\sub\\headers\\header2\\header2.tpl',
      1 => 1449040038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53865664fae3c83172-80838317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_TOP' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664fae3cd3885_91937988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664fae3cd3885_91937988')) {function content_5664fae3cd3885_91937988($_smarty_tpl) {?>
	
	<?php echo PtsthemePanel::smartyplugin(array('module'=>'blocksearch','hook'=>'displayTop'),$_smarty_tpl);?>


	<header id="header" class="header-default header-2">
		<div  id="header-main" class="header">
			<div class="container">
				<div class="row">
					<div id="topbar" class="topbar col-xs-6 col-sm-6 col-md-6 col-lg-6">
				     	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>

				    </div>
        		    <div class="rightbar col-xs-6 col-sm-6 col-md-6 col-lg-6">	
						<div class="header-right">
							<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value)) {?>
								<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

							<?php }?>
						</div>
					</div>	
						
				</div>
			</div>	
		</div>

	    <div id="pts-mainnav">
	        <div class="container">
	        	<div class="wrap">
		        	<div class="inner">
			        	<div class="row">
	
							<div id="header_logo" class="col-xs-2 col-sm-3 col-md-2 col-lg-2">
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
			        		<div class="main-menu col-xs-8 col-sm-6 col-md-8 col-lg-8">
						        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMainmenu"),$_smarty_tpl);?>

						    </div>

						    <div class="search col-xs-2 col-sm-3 col-md-2 col-lg-2">
	
								<?php echo PtsthemePanel::smartyplugin(array('module'=>'blocksearch','hook'=>'displayTop'),$_smarty_tpl);?>
		
							</div>
						</div>
					</div>
				</div>
	        </div>
	    </div>
	</header><?php }} ?>
