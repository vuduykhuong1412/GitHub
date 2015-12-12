<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:27
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17791564ed807261d47-02866328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d24e97c29ada53b8e58f36dc1573a9ada0cc0d1' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1447227072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17791564ed807261d47-02866328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed8072ad5d8_42474681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed8072ad5d8_42474681')) {function content_564ed8072ad5d8_42474681($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
