<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:20:02
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\sub\item_testimonial_grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12975664fae2d69371-19827934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d2bc2154c4d98360fe2f666922a186b01a9a74f' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\sub\\item_testimonial_grid.tpl',
      1 => 1447227088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12975664fae2d69371-19827934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'testimonial_position' => 0,
    'item' => 0,
    'testimonial_img_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664fae2e26bb9_76119594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664fae2e26bb9_76119594')) {function content_5664fae2e26bb9_76119594($_smarty_tpl) {?>
<div class="testimonials-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['testimonial_position']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <div class="testimonials-body">
        <div class="testimonials-quote"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
        <div class="testimonials-profile">
            <div class="testimonials-avatar">
                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['avatar'])&&$_smarty_tpl->tpl_vars['item']->value['avatar']!='') {?>
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['testimonial_img_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['avatar'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
" />
				<?php }?>
            </div> 
            <h4 class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
            <div class="job"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>                    
    </div>
</div><?php }} ?>
