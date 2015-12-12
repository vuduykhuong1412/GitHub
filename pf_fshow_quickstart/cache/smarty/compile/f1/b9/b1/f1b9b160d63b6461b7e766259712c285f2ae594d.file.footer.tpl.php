<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:15:39
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138395664f9db6bb148-58905842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1b9b160d63b6461b7e766259712c285f2ae594d' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\footer.tpl',
      1 => 1449199625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138395664f9db6bb148-58905842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'PTS_PAGEBUILDER_ACTIVED' => 0,
    'PTS_PAGEBUILDER_FULL' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'page_name' => 0,
    'PTS_FOOTERBUILDER_CONTENT' => 0,
    'HOOK_FOOTER' => 0,
    'COPYRIGHT' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9db74d4c5_89558420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9db74d4c5_89558420')) {function content_5664f9db74d4c5_89558420($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
  			<?php if (Configuration::get('PTS_CP_ENABLE_PBUILDER')&&isset($_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value)&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_FULL']->value) {?>

  				</div ><!-- .columns-container -->
			<?php } else { ?>


							</div>
						</div><!-- #center_column -->
								<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
									<div id="right_column" class="col-xs-12 col-sm-12 col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column sidebar"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
								<?php }?>
				
							</div><!-- #columns -->
						</div>
					</div>
				</div>
					<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
					<div id="content-bottom">
						<div class="container">
							<div class="row">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayContentBottom'),$_smarty_tpl);?>

							</div>
						</div>
					</div>
					<?php }?>
				</div ><!-- .columns-container -->
				<!-- Bottom-->
				<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
					<div id="bottom">
						<div class="container">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBottom'),$_smarty_tpl);?>

						</div>
					</div>
				<?php }?>
			<?php }?>
		
			<?php if (isset($_smarty_tpl->tpl_vars['PTS_FOOTERBUILDER_CONTENT']->value)&&!empty($_smarty_tpl->tpl_vars['PTS_FOOTERBUILDER_CONTENT']->value)) {?>	
				<footer id="footer" class="pts-parallax">
					<?php echo $_smarty_tpl->tpl_vars['PTS_FOOTERBUILDER_CONTENT']->value;?>

						<div id="pts-footercenter">
							<div class="container">
								<div class="inner">
									<div class="row">
										<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

									</div>
								</div>
							</div>
						</div>
				</footer>
			<?php } elseif (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
			<!-- Footer -->
				<footer id="footer">			
					<div id="pts-footer-top" class="footer-top">
						<div class="container">
							<div class="inner">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFootertop'),$_smarty_tpl);?>

							</div>
						</div>
					</div>
					
					<div id="pts-footercenter" class="footer-center">
						<div class="container">
							<div class="inner">
								<div class="row">
									<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

								</div>
							</div>
						</div>
					</div>
					<div id="pts-footer-bottom" class="footer-bottom">
						<div class="container">
							<div class="inner">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterbottom'),$_smarty_tpl);?>

							</div>
						</div>
					</div>
				</footer>
				<div id="powered">
					<div class="container">
						<div class="inner">
							<div class="clearfix">
								<div id="pts-copyright" class="pts-copyright pull-left">
									<?php if (isset($_smarty_tpl->tpl_vars['COPYRIGHT']->value)&&$_smarty_tpl->tpl_vars['COPYRIGHT']->value) {?>
									<div class="copyright"><?php echo $_smarty_tpl->tpl_vars['COPYRIGHT']->value;?>
</div>
									<?php } else { ?>
									<span>Copyright By Your Store © <?php echo date('Y');?>
.</span>
									<?php }?>
									 <span class="powered"><?php echo smartyTranslate(array('s'=>'Developed by'),$_smarty_tpl);?>
 <a href="http://www.prestashop.com" title="prestashop"><?php echo smartyTranslate(array('s'=>'Prestashop'),$_smarty_tpl);?>
</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
				
		</div>
		<!-- gototop -->
		<a id="to_top" href="javascript:;" style="display: inline;"><span>&nbsp;</span></a>
		<!-- #page -->
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="fancybox-compare-add" style="display:none;">
	   <div id="fancybox-html">
	    <div class="msg"><?php echo smartyTranslate(array('s'=>'Add product to compare successful'),$_smarty_tpl);?>
</div>
	    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'compare product'),$_smarty_tpl);?>
">
	      <strong><?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
 </strong>
	    </a>
	   </div>
	  </div>

	  <div id="fancybox-compare-remove" style="display:none;">
	   <div id="fancybox-html1">
	    <div class="msg"><?php echo smartyTranslate(array('s'=>'Remove product successful'),$_smarty_tpl);?>
</div>
	    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'compare product'),$_smarty_tpl);?>
">
	     <strong><?php echo smartyTranslate(array('s'=>'Click here to compare'),$_smarty_tpl);?>
</strong>
	    </a>
	   </div>
	  </div>
	</body>
</html><?php }} ?>
