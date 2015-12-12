<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:15:36
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\ptsbttestimonials\views\templates\hook\ptsbttestimonials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282515664f9d8f04c73-21360719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8915e0a7134b2e1609646119ac1d6b555716c723' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\ptsbttestimonials\\views\\templates\\hook\\ptsbttestimonials.tpl',
      1 => 1449225579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282515664f9d8f04c73-21360719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ptsbttestimonials_modid' => 0,
    'config_testimonials' => 0,
    'get_testimonials' => 0,
    'active' => 0,
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9d9002067_30267757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9d9002067_30267757')) {function content_5664f9d9002067_30267757($_smarty_tpl) {?>
<div id="ptsbttestimonials<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ptsbttestimonials_modid']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="carousel slide ptsbttestimonials" style="width: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['config_testimonials']->value['test_width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
px; height: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['config_testimonials']->value['test_height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
px;">
	<?php if (count($_smarty_tpl->tpl_vars['get_testimonials']->value)>1) {?>
		<div class="carousel-controls">
            <a class="carousel-control left" href="#ptsbttestimonials<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ptsbttestimonials_modid']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#ptsbttestimonials<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ptsbttestimonials_modid']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-slide="next">&rsaquo;</a>
        </div>
	<?php }?>
	<div class="carousel-inner">
		<?php  $_smarty_tpl->tpl_vars['test'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['test']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['get_testimonials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['test']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['test']->key => $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->_loop = true;
 $_smarty_tpl->tpl_vars['test']->index++;
 $_smarty_tpl->tpl_vars['test']->first = $_smarty_tpl->tpl_vars['test']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['testimonial']['first'] = $_smarty_tpl->tpl_vars['test']->first;
?>
			<div class="<?php if (isset($_smarty_tpl->tpl_vars['active']->value)&&$_smarty_tpl->tpl_vars['active']->value==1) {?> active<?php }?> item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['testimonial']['first']) {?>active<?php }?>">

				<?php if (isset($_smarty_tpl->tpl_vars['test']->value['avatar'])&&$_smarty_tpl->tpl_vars['test']->value['avatar']!='') {?>
					<img width="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['config_testimonials']->value['media_width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" height="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['config_testimonials']->value['media_height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['config_testimonials']->value['img_link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['test']->value['avatar'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['test']->value['note'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['test']->value['name']||$_smarty_tpl->tpl_vars['test']->value['content']) {?>
					<div class="test-info">
						<div class="text"><?php echo $_smarty_tpl->tpl_vars['test']->value['content'];?>
</div>
						<b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['test']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 -- <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['test']->value['address'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b>
					</div>
				<?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['test']->value['media_code'])&&$_smarty_tpl->tpl_vars['test']->value['media_code']!='') {?>
					<div><a  class="fancybox-media" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['test']->value['media_code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Link video','mod'=>'ptsbttestimonials'),$_smarty_tpl);?>
</a></div>
				<?php }?>

			</div>
		<?php } ?>
	</div>

	<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none'
		});
	});
	</script>

</div><?php }} ?>
