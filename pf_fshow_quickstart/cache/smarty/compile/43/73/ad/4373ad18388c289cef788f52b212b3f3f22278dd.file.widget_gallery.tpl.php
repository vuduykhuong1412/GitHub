<?php /* Smarty version Smarty-3.1.19, created on 2015-11-25 22:46:37
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\widget_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23239565533e5986229-51120836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4373ad18388c289cef788f52b212b3f3f22278dd' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\widget_gallery.tpl',
      1 => 1448509187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23239565533e5986229-51120836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565533e61489c0_22144414',
  'variables' => 
  array (
    'images' => 0,
    'addition_cls' => 0,
    'stylecls' => 0,
    'widget_heading' => 0,
    'columns' => 0,
    'type' => 0,
    'id' => 0,
    'image' => 0,
    'scolumn' => 0,
    'ispopup' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565533e61489c0_22144414')) {function content_565533e61489c0_22144414($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['images']->value)) {?>
<div class="widget-images block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addition_cls']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylecls']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block space-20">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars['scolumn'] = new Smarty_variable(12/$_smarty_tpl->tpl_vars['columns']->value, null, 0);?>
	<div class="widget-inner gallery-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8', true);?>
 block_content clearfix">
			<?php if ($_smarty_tpl->tpl_vars['type']->value=='slider-bt') {?>
			<div class="carousel slide pts-carousel" id="carousel-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-slide-to="1"></li>
				    <li data-target="#carousel-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-slide-to="2"></li>
				  </ol>
					<div class="carousel-inner">
				<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
				
	 				<div class="item"><div>
	 					<?php if ($_smarty_tpl->tpl_vars['image']->value['link']) {?>
	 					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Image Gallery','mod'=>'pspagebuilder'),$_smarty_tpl);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['thumbnailurl'], ENT_QUOTES, 'UTF-8', true);?>
"/></a>
	 					<?php } else { ?>
	 					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['thumbnailurl'], ENT_QUOTES, 'UTF-8', true);?>
"/>
	 					<?php }?>
	 				</div></div>
	 	
				 <?php } ?>
				 </div>	
			      <a class="left carousel-control" href="#carousel-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>

			</div>
			<?php } else { ?>
			<div class="images-list row clearfix">	
		 		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
			 		<div class="image-item col-xs-12 col-sm-4 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scolumn']->value, ENT_QUOTES, 'UTF-8', true);?>
 col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scolumn']->value, ENT_QUOTES, 'UTF-8', true);?>
"><div>
			 			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['thumbnailurl'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""/>
			 			
			 			<?php if ($_smarty_tpl->tpl_vars['ispopup']->value) {?>
					 	<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['imageurl'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="pts-popup fancybox" title="<?php echo smartyTranslate(array('s'=>'Large Image','mod'=>'pspagebuilder'),$_smarty_tpl);?>
"><span class="icon icon-expand"></span></a>
					 	<?php }?>
					 	
					 	<?php if ($_smarty_tpl->tpl_vars['image']->value['link']) {?>
					 	<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="pts-btnlink" title="<?php echo smartyTranslate(array('s'=>'Large Image','mod'=>'pspagebuilder'),$_smarty_tpl);?>
"><span class="icon icon-share"></span></a>
					 	<?php }?>
			 		</div></div>
				 <?php } ?>
			</div>	
		 <?php }?>	
	</div>
</div>
<?php }?> <?php }} ?>
