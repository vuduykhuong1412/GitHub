<?php /* Smarty version Smarty-3.1.19, created on 2015-11-25 23:20:44
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\sub\headers\header4\header4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156385653e31c45b0e1-45399271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88251bb9d773074c31aab07dcf58f794a8e12557' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\sub\\headers\\header4\\header4.tpl',
      1 => 1448511480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156385653e31c45b0e1-45399271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5653e31c8bfd00_51127968',
  'variables' => 
  array (
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'HOOK_TOP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5653e31c8bfd00_51127968')) {function content_5653e31c8bfd00_51127968($_smarty_tpl) {?>
	
	<?php echo PtsthemePanel::smartyplugin(array('module'=>'blocksearch','hook'=>'displayTop'),$_smarty_tpl);?>


	<header id="header" class="header-default header-4">
		<div  id="header-main" class="header">
			<div class="container">
				<div class="row">
        		    <div id="topbar" class="topbar col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>

					</div>	
						
				</div>
			</div>	
		</div>
	    <div class="bg-darker">
	        <div class="container">
	        	<div class="wrap">
		        	<div class="inner">
			        <!--	<div class="row"> -->
							<div id="header_logo">
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

							<div class="search">
								<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value)) {?>
									<div class="header-right">
										<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

									</div>
								<?php }?>	
							</div>
					<!--	</div> -->
					</div>
				</div>
	        </div>
	    </div>
	    <div id="pts-mainnav" >
	    	<div class="container">
				<div class="row">
	        		<div class="main-menu col-xs-12 col-sm-12 col-md-12 col-lg-12">
				        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMainmenu"),$_smarty_tpl);?>

				    </div>
				</div>
			</div>
	    </div>

	</header><?php }} ?>
