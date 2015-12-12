<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:15:35
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pspagebuilder\views\templates\front\widgets\widget_newsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204785664f9d74fbd53-21579291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77fcfde2c9a9b9781fd053beae1182d4367caef0' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pspagebuilder\\views\\templates\\front\\widgets\\widget_newsletter.tpl',
      1 => 1449195817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204785664f9d74fbd53-21579291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addition_cls' => 0,
    'stylecls' => 0,
    'widget_heading' => 0,
    'information' => 0,
    'link' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9d758d9d9_33023761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9d758d9d9_33023761')) {function content_5664f9d758d9d9_33023761($_smarty_tpl) {?>

<!-- Block Newsletter module-->
<div id="newsletter_block_footer" class="block pts-newsletter <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addition_cls']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (isset($_smarty_tpl->tpl_vars['stylecls']->value)&&$_smarty_tpl->tpl_vars['stylecls']->value) {?>block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylecls']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">

    <div class="newsletter-v3">
        <div class="widget-newsletter block ">
            <?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
            <div class="widget-heading title_block">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <?php }?>
            <div class="widget-inner block_content">
                <?php if ($_smarty_tpl->tpl_vars['information']->value) {?>
                    <div class="text-muted"><?php echo $_smarty_tpl->tpl_vars['information']->value;?>
</div>
                <?php }?>

                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
                    <div class="input-group">
                        <input   class="form-control radius-6x" id="newsletter-input-footer" type="text" name="email"  placeholder="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'pspagebuilder'),$_smarty_tpl);?>
<?php }?>" />
                        <input type="hidden" name="action" value="0" />
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-success" name="submitNewsletter" ><?php echo smartyTranslate(array('s'=>'Sign Up','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</button>       
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 


<script type="text/javascript">
    var placeholder = "<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'pspagebuilder','js'=>1),$_smarty_tpl);?>
";
    
        $(document).ready(function() {
            $('#newsletter-input-footer').on({
                focus: function() {
                    if ($(this).val() == placeholder) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder);
                    }
                }
            });

            $("#newsletter_block_footer form").submit(function() {  
                if ($('#newsletter-input-footer').val() == placeholder) {
                    $("#newsletter_block_footer .alert").removeClass("hide");
                    return false;
                }else {
                     $("#newsletter_block_footer .alert").addClass("hide");
                     return true;
                }
            });
        });

    
</script><?php }} ?>
