<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:29
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\psmegamenu\views\templates\hook\megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28511564ed8092e2df8-21413174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c0584a3568a7508980f0c7907e37839339c6485' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\psmegamenu\\views\\templates\\hook\\megamenu.tpl',
      1 => 1447227084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28511564ed8092e2df8-21413174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'psmegamenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed80938bca6_44264307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed80938bca6_44264307')) {function content_564ed80938bca6_44264307($_smarty_tpl) {?>
<nav id="cavas_menu" class="pts-megamenu col-lg-12 clearfix">
    <div class="navbar" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Toggle navigation','mod'=>'psmegamenu'),$_smarty_tpl);?>
</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="pts-top-menu" class="collapse navbar-collapse navbar-ex1-collapse">
            <?php echo $_smarty_tpl->tpl_vars['psmegamenu']->value;?>

        </div>
    </div>  
</nav>
<script type="text/javascript">
    $('#pts-top-menu a.dropdown-toggle').click(function(){
        var redirect_url = $(this).attr('href');
        window.location = redirect_url;
    });
</script><?php }} ?>
