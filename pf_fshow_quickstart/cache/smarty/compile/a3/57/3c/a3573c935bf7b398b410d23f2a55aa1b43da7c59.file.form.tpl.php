<?php /* Smarty version Smarty-3.1.19, created on 2015-11-22 21:14:54
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\ptsthemepanel\views\templates\admin\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251675652769ea92229-15820089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3573c935bf7b398b410d23f2a55aa1b43da7c59' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\ptsthemepanel\\views\\templates\\admin\\form.tpl',
      1 => 1447226786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251675652769ea92229-15820089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tools_editor' => 0,
    'configform' => 0,
    'samples' => 0,
    'sample' => 0,
    'moduleEditURL' => 0,
    'btnnavs' => 0,
    'btnnav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652769eb2a873_27507182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652769eb2a873_27507182')) {function content_5652769eb2a873_27507182($_smarty_tpl) {?>
<div class="col-sm-9">

<p class="clearfix">
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tools_editor']->value, ENT_QUOTES, 'UTF-8', true);?>
"   class="btn-danger btn pull-right" target="_blank" style="margin-left:10px;"><i class="icon-external-link-sign"></i> <?php echo smartyTranslate(array('s'=>'Live Theme Configurator','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</a> 
</p>

<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#modulesetting" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'General Setting','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</a></li>
  <li><a href="#sitetools" id="sitetools-button" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Tools','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="modulesetting"> 
    <?php echo $_smarty_tpl->tpl_vars['configform']->value;?>

  </div>
 
  <div class="tab-pane" id="sitetools">
   

    <form method="post" action="" id="installmodfrm" enctype="multipart/form-data">
    <div class="panel">
                <div class="panel-heading">
                  <?php echo smartyTranslate(array('s'=>'Data Sample Modules','mod'=>'ptsthemepanel'),$_smarty_tpl);?>

                </div>
                  <div class="panel panel-content">
                         <div class="alert alert-danger">
                          <div>+ <?php echo smartyTranslate(array('s'=>'This Tool allow install datamples to make look and feel like as demo on existed store.','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</div>
                          <div>+ <?php echo smartyTranslate(array('s'=>'Click to Import Sample Configuration to install DataSample Of Configuration Of Modules Make For Actived Theme.','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</div>
                          <div>+ <?php echo smartyTranslate(array('s'=>'If Modules are ready with your old configurations, please click to backup button that will restores yours when clicking Restore button','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</div>
                          <div>+ <b><?php echo smartyTranslate(array('s'=>'Install Sample Queries feature is only used for module(s) which have not even installed or tables and records of module(s) is empty','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</b>. Recommend you should make configuration of module(s) in manually way in the guide</div>
                        </div>
                          <br>
                        <div class="clearfix" id="btn-tools">
                          
                          <div class="pull-left">
                            <button type="submit" name="importConfiguration" class="btn btn-info btn-md btn-action"><?php echo smartyTranslate(array('s'=>'Import Sample Configuration','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</button>
                          

                            <button type="submit" name="importQueries" class="btn btn-md btn-warning btn-action"><?php echo smartyTranslate(array('s'=>'Import Sample Queries','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</button>
                            <button type="submit" name="restoreAll" class="btn btn-md btn-danger btn-action"><?php echo smartyTranslate(array('s'=>'Restore','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</button>

                            |   <button type="submit" name="assignHooksModulesInXml" class="btn btn-primary btn-md btn-action"><?php echo smartyTranslate(array('s'=>'Re-Assign Modules - Hooks','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</button> 
                          </div>

                          <div class="pull-right">
                             <button onclick="$('.pts-checkbox').attr('checked','checked')" type="submit" name="backupAll" class="btn btn-danger btn-md">
                              <?php echo smartyTranslate(array('s'=>'Backup','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
 <em><?php echo smartyTranslate(array('s'=>'All Module Using To Restore Old','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</em>
                             </button>
                          </div>
                            
                        </div>
                        <hr>

                        <div class="table-responsive">
                          <table class="table">
                            <tr class="success">
                              <th></th>
                              <th><?php echo smartyTranslate(array('s'=>'Module','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</th>
                              <th><?php echo smartyTranslate(array('s'=>'Has Configuration','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</th>
                              <th><?php echo smartyTranslate(array('s'=>'Has Queries','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</th>
                              <th><?php echo smartyTranslate(array('s'=>'Back Up','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</th>
                              <th><?php echo smartyTranslate(array('s'=>'Action','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['sample'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sample']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['samples']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sample']->key => $_smarty_tpl->tpl_vars['sample']->value) {
$_smarty_tpl->tpl_vars['sample']->_loop = true;
?>
                            <?php if (isset($_smarty_tpl->tpl_vars['sample']->value['label'])&&$_smarty_tpl->tpl_vars['sample']->value['hassample']) {?>
                            <tr>
                              <td>
                                <input type="checkbox" class="pts-checkbox" name="modules[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sample']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sample']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
" />
                              </td>
                              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sample']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                              <td>
                                <span class="label label-info"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</span>
                              </td>
                              <td> 
                                <?php if ($_smarty_tpl->tpl_vars['sample']->value['queries']) {?>
                                <span class="label label-warning"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</span>
                                <?php } else { ?>
                                 <span class="label label-danger"><?php echo smartyTranslate(array('s'=>'No','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</span>
                                <?php }?>
                              </td>
                              <td>
                                <?php if ($_smarty_tpl->tpl_vars['sample']->value['backup']) {?>
                                 <span class="label label-info"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</span>
                                <?php } else { ?>
                                 <span class="label label-danger"><?php echo smartyTranslate(array('s'=>'No','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</span>
                                <?php }?>

                              </td>
                              <td>
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['moduleEditURL']->value, ENT_QUOTES, 'UTF-8', true);?>
&module_name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sample']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
&configure=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sample']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-sm   btn-default liveeditmod"><?php echo smartyTranslate(array('s'=>'Live Configure','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</a>
                              </td>
                            </tr>
                            <?php }?>
                            <?php } ?>
                          </table>
                        </div>  

                        <div class="row">
                            <div class="btn-group bulk-actions open">
                                 <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                      <?php echo smartyTranslate(array('s'=>'Bulk actions','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
 <span class="caret"></span>
                                </button>

                                <ul class="dropdown-menu">
                                  <li>
                                    <a onclick="$('#installmodfrm .pts-checkbox').prop('checked',true);return false;" href="#">
                                      <i class="icon-check-sign"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Select all','mod'=>'ptsthemepanel'),$_smarty_tpl);?>

                                    </a>
                                  </li>
                                  <li>
                                    <a onclick="$('#installmodfrm .pts-checkbox').prop('checked',false);return false;" href="#">
                                      <i class="icon-check-empty"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Unselect all','mod'=>'ptsthemepanel'),$_smarty_tpl);?>

                                    </a>
                                  </li>
                                </ul>

                            </div>
                        </div>
                  </div> 
                  
      </div>  

   <div class="panel">
        <div class="panel-heading">
          <?php echo smartyTranslate(array('s'=>'Theme Tools','mod'=>'ptsthemepanel'),$_smarty_tpl);?>

        </div>
        <div class="panel panel-content">
            <div class="alert alert-info">
                <?php echo smartyTranslate(array('s'=>'If you would like to hook or unhook modules to make look and feeld of theme as the demo. Please click to below button','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
 <br>
                <p> <button type="submit" name="assignHooksAllModulesInXml" class="btn btn-danger btn-md btn-action"><?php echo smartyTranslate(array('s'=>'Re-Assign All Modules - Hooks','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</button> </p>
            </div>
        </div>  
    </div>  


       </form>      
  </div>
</div>
<script type="text/javascript">
 var hideSomeElement = function(){
  $('body',$('.fancybox-iframe').contents()).find("#header").hide();
      $('body',$('.fancybox-iframe').contents()).find("#footer").hide();
      $('body',$('.fancybox-iframe').contents()).find(".page-head, #nav-sidebar ").hide();
      $('body',$('.fancybox-iframe').contents()).find("#content.bootstrap").css( 'padding',0).css('margin',0);


 };

$(".pts-fancybox").fancybox({
  'type':'iframe',
  'width':960,
  'height':500});


$(".liveeditmod, .pts-fancybox").fancybox({
  'type':'iframe',
  'width':960,
  'height':500,
  afterLoad:function(   ){
    if( $('body',$('.fancybox-iframe').contents()).find("#main").length  ){  
        hideSomeElement();
         $('.fancybox-iframe').load( hideSomeElement );

    }else { 
      $('body',$('.fancybox-iframe').contents()).find("#psException").html('<div class="alert error"><?php echo smartyTranslate(array('s'=>'No Configuration Avairiable','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</div>');
    }
  }
});
</script>
<script>
  $(function () {
 //   $('#myTab a:first').tab('show')
  })

  $("#btn-tools  button.btn-action").click( function() {  
      if( $('.pts-checkbox:checked').length > 0 ){
      }else {
        alert( '<?php echo smartyTranslate(array('s'=>'Please select module(s) to do this action.','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
');
        return false;
      }
      return true;
  } );
</script>
</div>


<div class="col-sm-3">
  <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix">
      <ul class="nav bs-docs-sidenav nav-pills nav-stacked  img-rounded">
         <?php  $_smarty_tpl->tpl_vars['btnnav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btnnav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['btnnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['btnnavs']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['btnnav']->key => $_smarty_tpl->tpl_vars['btnnav']->value) {
$_smarty_tpl->tpl_vars['btnnav']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['btnnavs']['iteration']++;
?>
          <li><a  href="#fieldset_<?php echo htmlspecialchars(($_smarty_tpl->getVariable('smarty')->value['foreach']['btnnavs']['iteration']-1), ENT_QUOTES, 'UTF-8', true);?>
"><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btnnav']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btnnav']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
         <?php } ?> 
       </ul> <div class="arrow_box"></div>
  </div>
 
</div>  <?php }} ?>
