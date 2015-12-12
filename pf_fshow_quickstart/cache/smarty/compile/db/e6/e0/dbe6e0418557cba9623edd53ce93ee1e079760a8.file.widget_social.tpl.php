<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:25
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\widget_social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17083564ed805416457-63221593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbe6e0418557cba9623edd53ce93ee1e079760a8' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\widget_social.tpl',
      1 => 1447380596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17083564ed805416457-63221593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addition_cls' => 0,
    'stylecls' => 0,
    'widget_heading' => 0,
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
    'vimeo_url' => 0,
    'instagram_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed805493ab9_42847461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed805493ab9_42847461')) {function content_564ed805493ab9_42847461($_smarty_tpl) {?>

<div class="block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addition_cls']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylecls']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="widget-heading title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</div>
	<?php }?>
	<div class="block_content">
		<ul class="bo-social-icons">
			<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!='') {?>
				<li class="facebook">
					<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
					    <i class="icon icon-facebook"></i>
						<span><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!='') {?>
				<li class="twitter">
					<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<i class="icon icon-twitter"></i>
						<span><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!='') {?>
				<li class="rss">
					<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<i class="icon icon-rss"></i>
						<span><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!='') {?>
				<li class="youtube">
					<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<i class="icon icon-youtube"></i>
						<span><?php echo smartyTranslate(array('s'=>'YouTube','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?>
				<li class="google_plus">
					<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<i class="icon icon-google-plus"></i>
						<span><?php echo smartyTranslate(array('s'=>'Google+','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?>
				<li class="pinterest">
					<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<i class="icon icon-pinterest"></i>
						<span><?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['vimeo_url']->value!='') {?>
				<li class="vimeo">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vimeo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<i class="icon icon-vimeo-square"></i>
						<span><?php echo smartyTranslate(array('s'=>'Vimeo','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['instagram_url']->value!='') {?>
				<li class="instagram">
					<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instagram_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<i class="icon icon-instagram"></i>
						<span><?php echo smartyTranslate(array('s'=>'Instagram','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
		</ul>
	</div>
</div><?php }} ?>
