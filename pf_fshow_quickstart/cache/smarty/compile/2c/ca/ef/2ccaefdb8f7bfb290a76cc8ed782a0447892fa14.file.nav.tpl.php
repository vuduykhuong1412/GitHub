<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:15:38
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262375664f9da30bd21-89630039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ccaefdb8f7bfb290a76cc8ed782a0447892fa14' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\blockcontact\\nav.tpl',
      1 => 1447465789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262375664f9da30bd21-89630039',
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
  'unifunc' => 'content_5664f9da333493_86356997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9da333493_86356997')) {function content_5664f9da333493_86356997($_smarty_tpl) {?>

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
