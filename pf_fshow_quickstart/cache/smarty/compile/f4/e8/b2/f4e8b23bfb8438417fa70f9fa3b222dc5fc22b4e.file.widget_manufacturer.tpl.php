<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 05:30:31
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\widget_manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:327405652eac7631f59-37199901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4e8b23bfb8438417fa70f9fa3b222dc5fc22b4e' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\widget_manufacturer.tpl',
      1 => 1447227090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327405652eac7631f59-37199901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addition_cls' => 0,
    'stylecls' => 0,
    'widget_heading' => 0,
    'manufacturers' => 0,
    'display_mode' => 0,
    'tabname' => 0,
    'columns' => 0,
    'list_mode' => 0,
    'nbr_desktops' => 0,
    'nbr_tablets' => 0,
    'nbr_mobile' => 0,
    'list_mode_tpl' => 0,
    'item' => 0,
    'items_normal_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652eac77a5194_27139360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652eac77a5194_27139360')) {function content_5652eac77a5194_27139360($_smarty_tpl) {?>
<div class="widget-manufacture block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addition_cls']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylecls']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
	</h4>
	<?php }?>
	<div class="widget-inner block_content">
		<?php if (isset($_smarty_tpl->tpl_vars['manufacturers']->value)&&$_smarty_tpl->tpl_vars['manufacturers']->value) {?>
			<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(rand()+count($_smarty_tpl->tpl_vars['manufacturers']->value), null, 0);?>
			<?php if (isset($_smarty_tpl->tpl_vars['display_mode']->value)&&$_smarty_tpl->tpl_vars['display_mode']->value=='carousel') {?>
				<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabname']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="widget-content boxcarousel owl-carousel-play" data-ride="owlcarousel">
				 	<?php if (count($_smarty_tpl->tpl_vars['manufacturers']->value)>$_smarty_tpl->tpl_vars['columns']->value) {?>
					 	<div class="carousel-controls">
						 	<a class="carousel-control carousel-sm left left_carousel" href="#"><span class="icon-prev"></span></a>
							<a class="carousel-control carousel-sm right right_carousel" href="#"><span class="icon-next"></span></a>
						</div>
					<?php }?>
					<div class="owl-carousel <?php if (isset($_smarty_tpl->tpl_vars['list_mode']->value)&&$_smarty_tpl->tpl_vars['list_mode']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_mode']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" data-columns="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-pagination="false" data-navigation="true"
						<?php if (isset($_smarty_tpl->tpl_vars['nbr_desktops']->value)) {?>data-desktop="[1200,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbr_desktops']->value, ENT_QUOTES, 'UTF-8', true);?>
]"<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['nbr_tablets']->value)) {?>data-desktopsmall="[992,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbr_tablets']->value, ENT_QUOTES, 'UTF-8', true);?>
]"<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['nbr_mobile']->value)) {?>data-tablet="[768,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbr_mobile']->value, ENT_QUOTES, 'UTF-8', true);?>
]"<?php }?>
						data-mobile="[480,1]">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<div class="item ajax_block_product">
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['list_mode_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['item']->value), 0);?>

						</div>
					<?php } ?>
					</div>
				</div>
			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['items_normal_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['manufacturers']->value), 0);?>

			<?php }?>
		<?php }?>
	</div>
</div>
	 		
<?php }} ?>
