<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 04:16:50
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\pspagebuilder\views\templates\admin\pspagebuilder_footer\editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46875652d982be3217-07902594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f9522bf940eb1741f6f19bdcd5917aca1b878ef' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\pspagebuilder\\views\\templates\\admin\\pspagebuilder_footer\\editor.tpl',
      1 => 1447226918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46875652d982be3217-07902594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'export_msg' => 0,
    'profile_link' => 0,
    'savelayout' => 0,
    'profile' => 0,
    'id_pagebuilderprofile' => 0,
    'profiles' => 0,
    'item' => 0,
    'moduleInShop' => 0,
    'time' => 0,
    'sfxclss' => 0,
    'clxrow' => 0,
    'rand' => 0,
    'clxcol' => 0,
    'layoutjson' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652d982eae428_07017722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652d982eae428_07017722')) {function content_5652d982eae428_07017722($_smarty_tpl) {?>
<script type="text/javascript">
    if (current_id_tab === undefined) {
      var current_id_tab = '';
    }
</script>
<div class="bootstrap">
<?php if (isset($_smarty_tpl->tpl_vars['export_msg']->value)&&$_smarty_tpl->tpl_vars['export_msg']->value) {?>
  <div class="alert alert-success">
    <button data-dismiss="alert" class="close" type="button">×</button>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['export_msg']->value, ENT_QUOTES, 'UTF-8', true);?>

  </div>
<?php }?>
<div class="pagebuilder-editor"> 
        
        <div id="othertoolpanel" style="display:none" class="container"><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" enctype="multipart/form-data" id="submitpspagebuilderImport">
          <div class="panel panel-default">
            <div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Profiles Tools','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</div>
            <div class="panel-body">

                <div class="alert alert-info">
                  <?php echo smartyTranslate(array('s'=>'Import a profile layout, please select a file and put its profile name','mod'=>'pspagebuilder'),$_smarty_tpl);?>

                </div>

            
                  <div class="form-group clearfix">
                    <label for="condition" class="control-label col-lg-3">   
                        <?php echo smartyTranslate(array('s'=>'Profile Name','mod'=>'pspagebuilder'),$_smarty_tpl);?>

                    </label>
                    <div class="col-lg-3">
                      <input type="text" name="import_name" />
                    </div>
                  </div>
                  <div class="form-group"> 
                    <label for="condition" class="control-label col-lg-3">   
                        <?php echo smartyTranslate(array('s'=>'Select A File:','mod'=>'pspagebuilder'),$_smarty_tpl);?>
 
                    </label>
                    <div class="col-lg-3">
                          <input type="file" name="import_file"/>
                    </div>
                  </div>  
               
            </div>
            <div class="panel-footer">
                <button class="btn btn-default pull-left" name="submitpspagebuilderImport" type="submit"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Import','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</button>
            </div>

          </div> </form>  
        </div>


        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['savelayout']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post"   id="frmsavealll">
        
   
        <div id="screenview" class="container"><div class="row">

             
               <div class="col-lg-3"> <div class="screenview-title"><?php echo smartyTranslate(array('s'=>'Design In:','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</div>
                 <div class="btn-group button-alignments">
                    <button  class="btn btn-default active ptstooltip" data-option="large-screen" type="button" data-toggle="tooltip" data-placement="top" title="Large Devices, Wide Screens"><span class="icon icon-desktop"></span></button>
                    <button  class="btn btn-default ptstooltip" data-option="medium-screen" type="button" data-toggle="tooltip" data-placement="top" title="Medium Devices, Desktops"><span class="icon icon-laptop"></span></button>
                    <button   class="btn btn-default ptstooltip"  data-option="tablet-screen" type="button" data-toggle="tooltip" data-placement="top" title="Small Devices, Tablets"> <span class="icon icon-tablet"></span></button>
                    <button  class="btn btn-default ptstooltip"  data-option="mobile-screen"  type="button" data-toggle="tooltip" data-placement="top" title="Extra Small Devices, Phones"><span class="icon icon-mobile"></span> </button>
                  </div> 
                </div>
                <div class="col-lg-2">
                  <div><?php echo smartyTranslate(array('s'=>'Enable Grid','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</div>
                  <div>
                    <div class="btn-group button-enablegrid">
                      <button  class="btn btn-default " onclick="$('#layout-builder').addClass('grid-editor');"  type="button"><span class="icon icon-check-square"></span></button>
                      <button  class="btn btn-default " onclick="$('#layout-builder').removeClass('grid-editor');"  type="button"><span class="icon icon-check-square-o"></span></button>
                    </div> 
                  </div>
                </div>

                  <div class="col-lg-6 pull-right">
                  
                   <div class="input-group pull-left">
                      <div><?php echo smartyTranslate(array('s'=>'Profile Name:','mod'=>'pspagebuilder'),$_smarty_tpl);?>
 
                         <a title="<?php echo smartyTranslate(array('s'=>'Click This To Set Active','mod'=>'pspagebuilder'),$_smarty_tpl);?>
" class="setdefault pull-right <?php if ($_smarty_tpl->tpl_vars['profile']->value->isDefault()) {?>active<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_link']->value, ENT_QUOTES, 'UTF-8', true);?>
&id_pagebuilderprofile=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value->id, ENT_QUOTES, 'UTF-8', true);?>
&setdefault=1&ajax=true" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"> <span class="icon-star"></span></a>
                      </div>
                      <input type="text" name="name" class="form-control" size="25" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">

                  </div>

                    <div class="pull-right">
                       <input type="hidden" name="savelayoutbuilder" value="1">
                       <input type="hidden" name="id_pagebuilderprofile" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_pagebuilderprofile']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <div><?php echo smartyTranslate(array('s'=>'Switch To A Profile:','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                         <span class="icon-rocket"></span> <?php echo smartyTranslate(array('s'=>'Layout Profiles:','mod'=>'pspagebuilder'),$_smarty_tpl);?>
   <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" id="listprofiles" role="menu">
                          <li class="clearfix">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Create New A Profile','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</a>
                          </li>

                         <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                          <li class="clearfix <?php if ($_smarty_tpl->tpl_vars['id_pagebuilderprofile']->value==$_smarty_tpl->tpl_vars['item']->value['id']) {?>active<?php }?>">  
                            <a s='Click This To Set Active' <?php if ($_smarty_tpl->tpl_vars['id_pagebuilderprofile']->value==$_smarty_tpl->tpl_vars['item']->value['id']) {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_link']->value, ENT_QUOTES, 'UTF-8', true);?>
&id_pagebuilderprofile=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                             <a <?php echo smartyTranslate(array('s'=>'Click This To Set Active','mod'=>'pspagebuilder'),$_smarty_tpl);?>
 class="setdefault pull-right <?php if ($_smarty_tpl->tpl_vars['item']->value['isdefault']) {?>active<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_link']->value, ENT_QUOTES, 'UTF-8', true);?>
&id_pagebuilderprofile=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
&setdefault=1&ajax=true" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"> <span class="icon-star"></span></a>
                            <a  title="<?php echo smartyTranslate(array('s'=>'Delete This','mod'=>'pspagebuilder'),$_smarty_tpl);?>
" class="delete pull-right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_link']->value, ENT_QUOTES, 'UTF-8', true);?>
&id_pagebuilderprofile=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"> <span class="icon-trash"></span></a>
                          </li>
                         <?php } ?>
                        </ul>
                      </div>

                      <div class="pull-right">
                        <div> <button onclick="$('#othertoolpanel').toggle();" type="button" id="othertool" class="btn btn-default">
                          <span class="icon-wrench"></span> <?php echo smartyTranslate(array('s'=>'Tools','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</button>
                        </div>
                      </div>

                    </div>  
                  </div>

           </div></div>

      
        <hr>
        <?php if (!$_smarty_tpl->tpl_vars['moduleInShop']->value&&$_smarty_tpl->tpl_vars['profile']->value->id) {?>
            <div class="alert alert-warning">
                <button data-dismiss="alert" class="close" type="button"></button>
                <?php echo smartyTranslate(array('s'=>'This profile has not saved with this shop yet. If you want use this profile for this shop, you need click to "Save Layout Profile" button.','mod'=>'pspagebuilder'),$_smarty_tpl);?>

            </div>
          <?php }?>
          <div class="layout-builder-wrapper">
              
              <div id="layout-builder">

              </div>
          </div>    
      
        </form>
       </div>

  
             <div  id="row-builder" class="popover right">
                <div class="arrow"></div>
                <div class="popover-title"><?php echo smartyTranslate(array('s'=>'Row Setting','mod'=>'pspagebuilder'),$_smarty_tpl);?>
<span class="wpo-close"></span></div>
                  <div class="popover-content clearfix">
                     <form action="" name="frmrow">
                        <div class="row-form">
                           <div class="inpt-setting">
                            <label> <?php echo smartyTranslate(array('s'=>'Class','mod'=>'pspagebuilder'),$_smarty_tpl);?>
: </label>
                            <input type="text" name="cls" />
                            </div>  
                            <div class="inpt-setting fly-buttons">
                            <label> <?php echo smartyTranslate(array('s'=>'Background Color','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:   </label>
                            <input type="text" name="bgcolor" class="input-color"  data-hex="true"/>
                              </div>  
                            <div class="inpt-setting fly-buttons">
                            <label> <?php echo smartyTranslate(array('s'=>'Image','mod'=>'pspagebuilder'),$_smarty_tpl);?>
: </label>
                            <?php $_smarty_tpl->tpl_vars['time'] = new Smarty_variable(time(), null, 0);?>
                              <input type="text" name="bgimage" id="uploadimage<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="imageuploaded"/>
                              
                            </div>  
                            <div class="inpt-setting">
                            <label><?php echo smartyTranslate(array('s'=>'Fullwidth','mod'=>'pspagebuilder'),$_smarty_tpl);?>
: </label>
                             <select name="fullwidth">
                                <option value="1"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                             </select>
                            </div>

                            <div class="inpt-setting">
                            <label><?php echo smartyTranslate(array('s'=>'Parallax Style','mod'=>'pspagebuilder'),$_smarty_tpl);?>
: </label>
                             <select name="parallax">
                                <option value="1"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                                <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</option>
                             </select>
                            </div>

                            <div class="inpt-setting">
                                <label>
                                    <?php echo smartyTranslate(array('s'=>'Row Style','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:
                                     <select name="sfxcls">
                                         <?php  $_smarty_tpl->tpl_vars['clxrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clxrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sfxclss']->value['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clxrow']->key => $_smarty_tpl->tpl_vars['clxrow']->value) {
$_smarty_tpl->tpl_vars['clxrow']->_loop = true;
?>
                                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clxrow']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clxrow']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                     </select>
                                 </label>
                             </div> 
                              <div class="inpt-setting">
                              <button type="submit" class="btn btn-sm btn-primary"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</button>     
                            </div>  
                        </div>
                       
                      </form>
                    </div>
                 </div>     
    

  
          <div id="col-builder"  class="popover right">
            <div class="arrow"></div>
            <div class="popover-title"><?php echo smartyTranslate(array('s'=>'Column Setting','mod'=>'pspagebuilder'),$_smarty_tpl);?>
 <span class="wpo-close"></span></div>
                   <div class="popover-content clearfix">
                   <form action="" name="frmcol">
                        <div class="row-form row">
                           <div class="inpt-setting">
                              <label>
                                <?php echo smartyTranslate(array('s'=>'Addition Class','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:
                                 <input type="text" name="cls" />
                              </label>
                            </div>  
                           <div class="inpt-setting">
                              <label>
                              <?php echo smartyTranslate(array('s'=>' Background Color','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:
                               <input type="text" name="bgcolor" class="input-color"  data-hex="true" />
                               </label>
                            </div>   
                            <div class="inpt-setting fly-buttons">
                            <label> <?php echo smartyTranslate(array('s'=>'Image','mod'=>'pspagebuilder'),$_smarty_tpl);?>
: </label>
                            <?php $_smarty_tpl->tpl_vars['time'] = new Smarty_variable(time(), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['rand'] = new Smarty_variable(rand(), null, 0);?>
                              <input type="text" name="bgimage" id="uploadimage<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rand']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="imageuploaded"/>
                              
                            </div> 
                            <div class="inpt-setting">
                               <label>
                                <?php echo smartyTranslate(array('s'=>'Column Style','mod'=>'pspagebuilder'),$_smarty_tpl);?>
:
                                 <select name="sfxcls">
                                    <?php  $_smarty_tpl->tpl_vars['clxcol'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clxcol']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sfxclss']->value['col']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clxcol']->key => $_smarty_tpl->tpl_vars['clxcol']->value) {
$_smarty_tpl->tpl_vars['clxcol']->_loop = true;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clxcol']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clxcol']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php } ?>
                                 </select>
                                 </label>
                             </div> 
                             <div class="inpt-setting">
                             <button type="submit" class="btn btn-primary">  <?php echo smartyTranslate(array('s'=>'Save','mod'=>'pspagebuilder'),$_smarty_tpl);?>
</button>  
                             </div>  
                        </div>
                      
                    </form>
              </div>
        </div>
    
       <script type="text/javascript">
           $(".imageuploaded").WPO_Gallery({ gallery:false,preview:false,widgetaction:false});
        </script>

       <script type="text/javascript">
           $(".ptstooltip").tooltip();
    
      $(document).ready(function() {
          var config = { 
              
              urlwidgets: listwidgets,
              urlwidget: widgetform,
              urlwidgetdata: widgetdata,
               controller:'AdminPspagebuilderFooter' 
          };
          
          $("#layout-builder").WPO_Layout(config, '<?php echo $_smarty_tpl->tpl_vars['layoutjson']->value;?>
');
      });


      $("#listprofiles a.delete").click(function() {
          var $a = $(this);
          if (confirm('<?php echo smartyTranslate(array('s'=>'Are you sure to delete this?','mod'=>'pspagebuilder'),$_smarty_tpl);?>
')) {
              $.ajax({
                url:  $a.attr('href'),
                data:{
                  rand:Math.random(),
                  controller : 'AdminPspagebuilderFooter',
                  action : 'deleteProfile',
                  ajax : true,
                  id_tab : current_id_tab
                },
                type:'post',
                dataType:'json'
              }).done(function(output) {
                 if (output.id == $('[name=id_pagebuilderprofile]').val()) {
                    location.href = PS_PAGEbuilder_URL;
                 }else {
                    $a.parent().remove();
                 } 
              });

              return false;
          }
           return false;
      });
     </script>    </div><?php }} ?>
