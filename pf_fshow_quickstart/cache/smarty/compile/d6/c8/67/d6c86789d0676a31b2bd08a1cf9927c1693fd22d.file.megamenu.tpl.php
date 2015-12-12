<?php /* Smarty version Smarty-3.1.19, created on 2015-12-09 20:59:13
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\psmegamenu\views\templates\hook\megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162385664f9db64b045-68523789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6c86789d0676a31b2bd08a1cf9927c1693fd22d' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\psmegamenu\\views\\templates\\hook\\megamenu.tpl',
      1 => 1449712582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162385664f9db64b045-68523789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9db663be6_45265548',
  'variables' => 
  array (
    'psmegamenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9db663be6_45265548')) {function content_5664f9db663be6_45265548($_smarty_tpl) {?>
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
   if($(window).width() >= 992){
       $('#pts-top-menu a.dropdown-toggle').click(function(){
           var redirect_url = $(this).attr('href');
           window.location = redirect_url;
       });
   }
</script><?php }} ?>
