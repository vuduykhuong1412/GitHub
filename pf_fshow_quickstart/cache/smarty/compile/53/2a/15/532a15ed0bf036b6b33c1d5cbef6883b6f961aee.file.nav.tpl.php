<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 04:24:16
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301915652db4044b022-75577585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532a15ed0bf036b6b33c1d5cbef6883b6f961aee' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\blockcontact\\nav.tpl',
      1 => 1447465789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301915652db4044b022-75577585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'is_logged' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652db404b04a2_61345235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652db404b04a2_61345235')) {function content_5652db404b04a2_61345235($_smarty_tpl) {?>

<ul id="contact_block" class="list-inline">
	<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
		<li class="shop-phone <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>is_logged<?php }?>">
			<div class="pull-left contact-icon"><i class="icon icon-clock-o"></i></div>
			<div class="contact-content">
				<h5 class="contact-title"><?php echo smartyTranslate(array('s'=>'','mod'=>'blockcontact'),$_smarty_tpl);?>
</h5>
				<div class="contact-detail">
					<span><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</span>
				</div>
			</div>
		</li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['email']->value!='') {?>
		<li class="shop-mail <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>is_logged<?php }?>">
			<div class="pull-left contact-icon"><i class="icon icon-envelope"></i></div>
			<div class="contact-content">
				<h5 class="contact-title"><?php echo smartyTranslate(array('s'=>'','mod'=>'blockcontact'),$_smarty_tpl);?>
</h5>
				<div class="contact-detail">
					<a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl);?>
">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>

					</a>
				</div>
			</div>
		</li>
	<?php }?>

</ul><?php }} ?>
