<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:25
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\pspagebuilder\views\templates\hook\builderlayout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27840564ed80505bd91-85375589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec91d4254676df057b5dff0c062a91628340b5e' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\pspagebuilder\\views\\templates\\hook\\builderlayout.tpl',
      1 => 1447226934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27840564ed80505bd91-85375589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'col' => 0,
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed805102434_47362252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed805102434_47362252')) {function content_564ed805102434_47362252($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>

    <?php if ($_smarty_tpl->tpl_vars['row']->value->level==1) {?> 
        <div class="pts-container <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->cls, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax)&&$_smarty_tpl->tpl_vars['row']->value->parallax) {?> pts-parallax<?php }?>" <?php echo $_smarty_tpl->tpl_vars['row']->value->attrs;?>
>        
            <div class="pts-inner container<?php if ($_smarty_tpl->tpl_vars['row']->value->fullwidth==1) {?>-fluid<?php }?>">
    <?php }?>    
    <div class="row row-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->level, ENT_QUOTES, 'UTF-8', true);?>
"><div class="row-inner <?php if (isset($_smarty_tpl->tpl_vars['row']->value->sfxcls)&&$_smarty_tpl->tpl_vars['row']->value->sfxcls) {?>row-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->sfxcls, ENT_QUOTES, 'UTF-8', true);?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['row']->value->level>=2) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->cls, ENT_QUOTES, 'UTF-8', true);?>
<?php }?> clearfix" >
        <?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value->cols; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
            <div class="col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value->lgcol, ENT_QUOTES, 'UTF-8', true);?>
 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value->mdcol, ENT_QUOTES, 'UTF-8', true);?>
 col-sm-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value->smcol, ENT_QUOTES, 'UTF-8', true);?>
 col-xs-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value->xscol, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php if ($_smarty_tpl->tpl_vars['row']->value->level==2) {?> 
               <?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax)&&$_smarty_tpl->tpl_vars['row']->value->parallax) {?>

                 <div class="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax)&&$_smarty_tpl->tpl_vars['row']->value->parallax) {?> pts-parallax<?php }?>" <?php echo $_smarty_tpl->tpl_vars['row']->value->attrs;?>
> 
                <?php }?>
                <?php }?>
                    <div class="col-inner <?php if (isset($_smarty_tpl->tpl_vars['col']->value->sfxcls)&&$_smarty_tpl->tpl_vars['col']->value->sfxcls) {?>col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value->sfxcls, ENT_QUOTES, 'UTF-8', true);?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value->cls, ENT_QUOTES, 'UTF-8', true);?>
" <?php echo $_smarty_tpl->tpl_vars['col']->value->attrs;?>
>
                    <?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['col']->value->widgets; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['widget']->value->content)) {?>
                        <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value->wtype, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php echo $_smarty_tpl->tpl_vars['widget']->value->content;?>

                        </div>
                        <?php }?>
                    <?php } ?>
                    <?php if (isset($_smarty_tpl->tpl_vars['col']->value->rows)&&$_smarty_tpl->tpl_vars['col']->value->rows) {?>
                        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rows'=>$_smarty_tpl->tpl_vars['col']->value->rows), 0);?>

                    <?php }?>
                    </div>

                <?php if ($_smarty_tpl->tpl_vars['row']->value->level==2) {?> 
                    <?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax)&&$_smarty_tpl->tpl_vars['row']->value->parallax) {?>

                     </div>
                    <?php }?>
                <?php }?>
        </div>
        <?php } ?>
    </div></div>
    <?php if ($_smarty_tpl->tpl_vars['row']->value->level==1) {?>
            </div>
        </div>
    <?php }?>
<?php } ?>    <?php }} ?>
