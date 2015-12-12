<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:18:09
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\modules\ptsthemepanel\views\templates\hook\live_configurator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12155664fa7192bf03-21741043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '422b4c48df02091bc7f20939311b580c248f544c' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\modules\\ptsthemepanel\\views\\templates\\hook\\live_configurator.tpl',
      1 => 1447226786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12155664fa7192bf03-21741043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'headers' => 0,
    'foder' => 0,
    'header' => 0,
    'themes' => 0,
    'theme' => 0,
    'isliveeditor' => 0,
    'themeskin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664fa719c0d90_43528534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664fa719c0d90_43528534')) {function content_5664fa719c0d90_43528534($_smarty_tpl) {?>
 <div id="pts-panelthemechanger" class="hidden-xs hidden-sm pts-paneltool themechanger">


		<div class=" pts-panelbutton">
			<i class="icon icon-gear"></i>
		</div>
		<div class="paneltool editortool pts-panelcontent"><div class="pts-customize panelcontent">
			<form action="#" method="post" id="panethemesettingfrm">
					<div class="form-group">
						<div class="pts-paneltitle"><b><?php echo smartyTranslate(array('s'=>'RTL Mode','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</b>
							<select name="rtl_mode" id="pts-themelangrtl">
								<option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</option>
								<option value="1"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</option>
								
							</select>
						</div>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['headers']->value)&&$_smarty_tpl->tpl_vars['headers']->value) {?>
			 			<div class="pts-paneltitle"><b><?php echo smartyTranslate(array('s'=>'Headers','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</b></div>
			 			<div class="form-group">
				 			<select name="headers">
				 				<?php  $_smarty_tpl->tpl_vars['foder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foder']->key => $_smarty_tpl->tpl_vars['foder']->value) {
$_smarty_tpl->tpl_vars['foder']->_loop = true;
?>
				 					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foder']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['header']->value==$_smarty_tpl->tpl_vars['foder']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foder']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
				 				<?php } ?>
				 			</select>
						</div>
			 		<?php }?>
			 		<div class="pts-paneltitle"><b><?php echo smartyTranslate(array('s'=>'Theme Skins','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</b></div>
					<div class="form-group">
						<?php if (isset($_smarty_tpl->tpl_vars['themes']->value)) {?>
							<div id="pts-themecollection" class="themecollection clearfix">
								<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
									<div class="theme-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['skin'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 btn-switchskin" data-theme="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['skin'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
										<div class="theme-preview" ></div>
										<?php if ($_smarty_tpl->tpl_vars['theme']->value['rehook']&&$_smarty_tpl->tpl_vars['isliveeditor']->value) {?>	
										<div class="clearfix">
											<label for=""><?php echo smartyTranslate(array('s'=>'Re-Hook, Config','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</label> 
											 <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
: <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['skin'], ENT_QUOTES, 'UTF-8', true);?>
_rehook" value="1">
											 <?php echo smartyTranslate(array('s'=>'No','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
: <input checked="checked" type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['skin'], ENT_QUOTES, 'UTF-8', true);?>
_rehook" value="0"> 
										</div>
										<?php }?>
									</div>	
								<?php } ?>
							</div>
						<?php }?>
						<input type="hidden" name="themeskin" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['themeskin']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
			 		</div>
			 		
			 		<?php if ($_smarty_tpl->tpl_vars['isliveeditor']->value) {?>
					<div class="btn-tools">
						
						<button type="button" class="btn btn-primary" id="btn-resettheme" name="resetLiveConfigurator"><?php echo smartyTranslate(array('s'=>'Reset','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</button>
						<button type="submit" class="btn btn-warning" name="submitLiveThemeChanger"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</button>
					</div>
					<?php } else { ?>
						<button type="submit" class="btn btn-primary" id="btn-resettheme" name="resetDemoTheme"><?php echo smartyTranslate(array('s'=>'Reset','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</button>
						<button type="submit" class="btn btn-warning" name="applyCustomSkinChanger"><?php echo smartyTranslate(array('s'=>'Apple Change Now','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</button>
					<?php }?>
	 
			</form>
		</div></div>
</div><?php }} ?>
