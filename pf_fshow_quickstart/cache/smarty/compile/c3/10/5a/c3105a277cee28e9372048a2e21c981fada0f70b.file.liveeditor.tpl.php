<?php /* Smarty version Smarty-3.1.19, created on 2015-11-25 05:23:54
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\psmegamenu\views\templates\hook\liveeditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2027256558c3aa930f7-16501168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3105a277cee28e9372048a2e21c981fada0f70b' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\psmegamenu\\views\\templates\\hook\\liveeditor.tpl',
      1 => 1447226824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2027256558c3aa930f7-16501168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'liveedit_action' => 0,
    'i' => 0,
    'widgets' => 0,
    'w' => 0,
    'model' => 0,
    'info' => 0,
    'more' => 0,
    'action_backlink' => 0,
    'live_site_url' => 0,
    'ptsid_shop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56558c3abd5df0_70975422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56558c3abd5df0_70975422')) {function content_56558c3abd5df0_70975422($_smarty_tpl) {?>

<style type="text/css">
    #page-content{
        min-height: 1200px;
        width: 100%;
        padding-bottom: 100px
    }
</style>

<div id="page-content">
    <div id="menu-form"  style="display: none; left: 340px; top: 15px; max-width:600px" class="popover top out form-setting">
        <div class="arrow"></div>
        <div style="display: block;" class="popover-title"><?php echo smartyTranslate(array('s'=>'Sub Menu Setting','mod'=>'psmegamenu'),$_smarty_tpl);?>
<span class="badge pull-right"><span class="icon icon-times-circle"></span></span></div>
        <div class="popover-content"> 
            <form  method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['liveedit_action']->value, ENT_QUOTES, 'UTF-8', true);?>
"  enctype="multipart/form-data" >
                <div class="col-lg-12"> 
                    <table class="table table-hover">
                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Create Submenu','mod'=>'psmegamenu'),$_smarty_tpl);?>
</td>
                            <td>
                                <select name="menu_submenu" class="menu_submenu">
                                    <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'psmegamenu'),$_smarty_tpl);?>
</option>
                                    <option value="1"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'psmegamenu'),$_smarty_tpl);?>
</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Submenu Width','mod'=>'psmegamenu'),$_smarty_tpl);?>
</td>
                            <td>
                                <input type="text" name="menu_subwidth" class="menu_subwidth"> 
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Alignment','mod'=>'psmegamenu'),$_smarty_tpl);?>
</td>
                            <td>
                                <div class="btn-group button-alignments">
                                    <button type="button" class="btn btn-default" data-option='aligned-left'><span class="icon icon-align-left"></span></button>
                                    <button type="button" class="btn btn-default" data-option="aligned-center"><span class="icon icon-align-center"></span></button>
                                    <button type="button" class="btn btn-default" data-option="aligned-right"><span class="icon icon-align-right"></span></button>
                                    <button type="button" class="btn btn-default" data-option="aligned-fullwidth"><span class="icon icon-align-justify"></span></button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <button type="button" class="add-row btn btn-success btn-sm"><?php echo smartyTranslate(array('s'=>'Add Row','mod'=>'psmegamenu'),$_smarty_tpl);?>
</button>
                                <button type="button" class="remove-row btn btn-default  btn-sm"><?php echo smartyTranslate(array('s'=>'Remove Row','mod'=>'psmegamenu'),$_smarty_tpl);?>
</button>
                                | <button type="button" class="add-col btn btn-success  btn-sm"><?php echo smartyTranslate(array('s'=>'Add Column','mod'=>'psmegamenu'),$_smarty_tpl);?>
</button>
                            </td>
                        </tr>
                    </table>
                    <input type="hidden" name="menu_id">
                </div>
            </form>
        </div>
    </div>
    <div id="column-form" style="display: none; left: 340px; top: 45px;" class="popover top   form-setting">
        <div class="arrow"></div>
        <div style="display: block;" class="popover-title"><?php echo smartyTranslate(array('s'=>'Column Setting','mod'=>'psmegamenu'),$_smarty_tpl);?>
<span class="badge pull-right"><span class="icon icon-times-circle"></span></span></div>
        <div class="popover-content"> 
            <form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['liveedit_action']->value, ENT_QUOTES, 'UTF-8', true);?>
"  enctype="multipart/form-data" >
                <table class="table table-hover">
                    <tr>
                        <td><?php echo smartyTranslate(array('s'=>'Addition Class','mod'=>'psmegamenu'),$_smarty_tpl);?>
</td>
                        <td>
                            <input type="text" name="colclass"> 
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo smartyTranslate(array('s'=>'Column Width','mod'=>'psmegamenu'),$_smarty_tpl);?>
</td>
                        <td>
                            <select class="colwidth" name="colwidth">
                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php }} ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="button" class="remove-col btn btn-default  btn-sm"><?php echo smartyTranslate(array('s'=>'Remove Column','mod'=>'psmegamenu'),$_smarty_tpl);?>
</button>
                        </td>
                    </tr>   
                </table>
            </form>
        </div>
    </div>


    <div  id="submenu-form" style="display: none; left: 340px; top: 45px;" class="popover top  form-setting">
        <div class="arrow"></div>
        <div style="display: block;" class="popover-title"><?php echo smartyTranslate(array('s'=>'Setting Sub Submenu','mod'=>'psmegamenu'),$_smarty_tpl);?>
<span class="badge pull-right"><span class="icon icon-times-circle"></span></span></div>
        <div class="popover-content"> 
            <form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['liveedit_action']->value, ENT_QUOTES, 'UTF-8', true);?>
" enctype="multipart/form-data">
                <input type="hidden" name="submenu_id">
                <table class="table table-hover">
                    <tr>
                        <td><?php echo smartyTranslate(array('s'=>'Group Submenu','mod'=>'psmegamenu'),$_smarty_tpl);?>
</td>
                        <td>
                            <select name="submenu_group">
                                <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'psmegamenu'),$_smarty_tpl);?>
</option>
                                <option value="1"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'psmegamenu'),$_smarty_tpl);?>
</option>
                            </select>
                        </td>
                    </tr>     
                </table>
            </form>
        </div>
    </div>
    <div id="widget-form" style="display: none; left: 340px;  min-width:400px" class="popover bottom   form-setting">
        <div class="arrow"></div>
        <div style="display: block;" class="popover-title"><?php echo smartyTranslate(array('s'=>'Widget Setting','mod'=>'psmegamenu'),$_smarty_tpl);?>
<span class="badge pull-right"><span class="icon icon-times-circle"></span></span></div>
        <div class="popover-content"> 
            <?php if (!empty($_smarty_tpl->tpl_vars['widgets']->value)) {?>
                <div class="input-group">
                    <select name="inject_widget"> 
                        <option value=""></option>
                        <?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['more'] = new Smarty_variable('', null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['info'] = new Smarty_variable($_smarty_tpl->tpl_vars['model']->value->getWidgetInfo($_smarty_tpl->tpl_vars['w']->value['type']), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['info']->value) {?>
                                <?php $_smarty_tpl->tpl_vars['more'] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value['label'], null, 0);?>
                            <?php }?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['w']->value['key_widget'], ENT_QUOTES, 'UTF-8', true);?>
">( <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['more']->value, ENT_QUOTES, 'UTF-8', true);?>
 )  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['w']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php } ?>
                    </select>
                    <span class="input-group-btn">   <button type="button" id="btn-inject-widget" class="btn btn-primary btn-sm"><?php echo smartyTranslate(array('s'=>'Insert','mod'=>'psmegamenu'),$_smarty_tpl);?>
</button></span>
                </div>
            <?php }?>
        </div>
    </div>


    <div id="content-s">
        <div class="container">
            <div class="page-header">
                <h1><?php echo smartyTranslate(array('s'=>'Live Megamenu Editor','mod'=>'psmegamenu'),$_smarty_tpl);?>
</h1>
            </div>


            <div class="bs-example">
                <div class="alert alert-danger fade in">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <strong><?php echo smartyTranslate(array('s'=>'By using this tool, allow to create sub menu having multiple rows and  multiple columns. You can inject widgets inside columns or group sub menus in same level of parent.Note: Some configurations as group, columns width setting will be overrided','mod'=>'psmegamenu'),$_smarty_tpl);?>
</strong>  
                </div>
            </div>
        </div>
        <div id="pav-megamenu-liveedit">

            <div id="toolbar" class="container">
                <div id="menu-toolbars">
                    <div>
                        <div class="pull-right">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action_backlink']->value, ENT_QUOTES, 'UTF-8', true);?>
&widgets=1" class="pts-modal-action btn  btn-modeal btn-success btn-action"><?php echo smartyTranslate(array('s'=>'Create A Widget','mod'=>'psmegamenu'),$_smarty_tpl);?>
</a>
                            - 
                            <a   href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_site_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-modal btn-primary btn-sm btn-action" ><?php echo smartyTranslate(array('s'=>'Preview On Live Site','mod'=>'psmegamenu'),$_smarty_tpl);?>
</a> | 
                            <a id="unset-data-menu" href='#' class="btn btn-danger btn-action"><?php echo smartyTranslate(array('s'=>'Reset Configuration','mod'=>'psmegamenu'),$_smarty_tpl);?>
</a>
                            <button id="save-data-menu" class="btn btn-warning"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'psmegamenu'),$_smarty_tpl);?>
</button>
                        </div>
                        <a id="save-data-back" class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action_backlink']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Back','mod'=>'psmegamenu'),$_smarty_tpl);?>
</a>
                    </div>

                </div>
            </div>


            <div class="container">
                <div class="megamenu-wrap">
                    <div class="progress" id="pavo-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 00%;">
                                    <span class="sr-only">60% Complete</span>
                            </div>
                    </div>
                    <div id="megamenu-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Preview On Live Site','mod'=>'psmegamenu'),$_smarty_tpl);?>
</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'psmegamenu'),$_smarty_tpl);?>
</button>
            </div>
        </div> 
    </div> 
</div> 


<script type="text/javascript">
    var ptsid_shop = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ptsid_shop']->value, ENT_QUOTES, 'UTF-8', true);?>
;
    $(".btn-modal").click(function () {
        $('#myModal .modal-dialog ').css('width', 980);
        $('#myModal .modal-dialog ').css('height', 480);
        var a = $('<span class="glyphicon glyphicon-refresh"></span><iframe src="' + $(this).attr('href') + '" style="width:100%;height:100%; display:none"/>');
        $('#myModal .modal-body').html(a);

        $('#myModal').modal( );
        $('#myModal').attr('rel', $(this).attr('rel'));
        $(a).load(function () {
            $('#myModal .modal-body .glyphicon-refresh').hide();
            $('#myModal .modal-body iframe').show();
        });
        return false;
    });

    $("#megamenu-content").PavMegamenuEditor({
        'modal': '#myModal', 'action': _action, 'action_menu': _action_menu, 'action_widget': _action_widget, 'action_editwidget': _action_editwidget
    });

</script><?php }} ?>
