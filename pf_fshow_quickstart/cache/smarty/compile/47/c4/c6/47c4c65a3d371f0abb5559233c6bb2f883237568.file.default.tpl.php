<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 00:00:44
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\sub\headers\default\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217905654195fc8cfb3-99047177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47c4c65a3d371f0abb5559233c6bb2f883237568' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\sub\\headers\\default\\default.tpl',
      1 => 1448859634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217905654195fc8cfb3-99047177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5654196002b9d2_79744412',
  'variables' => 
  array (
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'HOOK_TOP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5654196002b9d2_79744412')) {function content_5654196002b9d2_79744412($_smarty_tpl) {?>
	
	<?php echo PtsthemePanel::smartyplugin(array('module'=>'blocksearch','hook'=>'displayTop'),$_smarty_tpl);?>


	<header id="header" class="header-default default">
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
						<!--     <?php if (class_exists('PtsthemePanel')) {?>
						    	<div class="left verticalmenu col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<?php echo PtsthemePanel::smartyplugin(array('module'=>'ptsverticalmenu','hook'=>'displayLeftColumn'),$_smarty_tpl);?>
	
						    	</div>		
							<?php }?> -->
							<div id="header_logo" class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
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
			        		<div class="main-menu col-xs-12 col-sm-6 col-md-8 col-lg-8">
						        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMainmenu"),$_smarty_tpl);?>

						    </div>

						    <div class="search col-xs-12 col-sm-3 col-md-2 col-lg-2">
							    <!--<?php if (class_exists('PtsthemePanel')) {?>
										<?php echo PtsthemePanel::smartyplugin(array('module'=>'ptsblocksearch','hook'=>'displayTop'),$_smarty_tpl);?>
				   
								<?php }?> -->
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
