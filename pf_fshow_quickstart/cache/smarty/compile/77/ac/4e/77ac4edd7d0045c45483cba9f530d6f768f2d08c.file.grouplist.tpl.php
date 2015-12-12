<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 05:10:08
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\pssliderlayer\views\templates\hook\grouplist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227345652e6004d44b3-78203649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77ac4edd7d0045c45483cba9f530d6f768f2d08c' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\pssliderlayer\\views\\templates\\hook\\grouplist.tpl',
      1 => 1447226798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227345652e6004d44b3-78203649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'exported' => 0,
    'export_folder' => 0,
    'link' => 0,
    'groups' => 0,
    'group' => 0,
    'curentGroup' => 0,
    'languages' => 0,
    'msecure_key' => 0,
    'arrayParam' => 0,
    'language' => 0,
    'previewLink' => 0,
    'exportLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652e6009d0703_74346859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652e6009d0703_74346859')) {function content_5652e6009d0703_74346859($_smarty_tpl) {?>
<fieldset>
    <?php if (isset($_smarty_tpl->tpl_vars['exported']->value)&&$_smarty_tpl->tpl_vars['exported']->value) {?>
      <div class="alert alert-success">
        <button data-dismiss="alert" class="close" type="button">×</button>
        <?php echo smartyTranslate(array('s'=>'Successful export, please go to folder','mod'=>'pssliderlayer'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['export_folder']->value;?>

      </div>
    <?php }?>
    <div id="groupLayer" class="panel col-lg-12">
        <h3><?php echo smartyTranslate(array('s'=>'Group List','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</h3>
        <div class="alert alert-info"><a href="http://www.prestabrain.com/guides/prestashop16/pts-slider-layer/" target="_blank"><?php echo smartyTranslate(array('s'=>'Click to see configuration guide','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</a></div>
        <div class="table-responsive clearfix">
            <table class="table">
                <thead>
                    <tr class="nodrag nodrop">
                        <th class="center fixed-width-xs"></th>

                        <th class="">
                            <span class="title_box ">
                                <?php echo smartyTranslate(array('s'=>'Group Name','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                            </span>
                        </th>
                        <th class="center fixed-width-xs"> <span class="title_box "><?php echo smartyTranslate(array('s'=>'Status','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</span></th>

                        <th colspan="2">
                            <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configure=pssliderlayer&addNewGroup=1" class="btn btn-default">
                                <i class="icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Add new Group','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                        <tr class=" odd">
                            <td class="text-center"><strong>#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_pssliderlayer_groups'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</strong></td>
                            <td <?php if ($_smarty_tpl->tpl_vars['group']->value['id_pssliderlayer_groups']!=$_smarty_tpl->tpl_vars['curentGroup']->value) {?>onclick="document.location = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configure=pssliderlayer&editgroup=1&id_group=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_pssliderlayer_groups'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'"<?php }?> class="pointer">
                                <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['group']->value['status'];?>
&nbsp;&nbsp;&nbsp;
                            </td>

                            <td>
                                <div class="btn-group-action">
                                    <div class="btn-group pull-right">
                                        <?php if ($_smarty_tpl->tpl_vars['group']->value['id_pssliderlayer_groups']!=$_smarty_tpl->tpl_vars['curentGroup']->value) {?>
                                            <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configure=pssliderlayer&editgroup=1&id_group=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_pssliderlayer_groups'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Edit Group','mod'=>'pssliderlayer'),$_smarty_tpl);?>
" class="edit btn btn-default">
                                                <i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                                            </a>
                                        <?php } else { ?>
                                            <a href="#" title="<?php echo smartyTranslate(array('s'=>'Editting','mod'=>'pssliderlayer'),$_smarty_tpl);?>
" class="btn " style="color:#BBBBBB">
                                                <?php echo smartyTranslate(array('s'=>'Editting','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                                            </a>
                                        <?php }?>
                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>&nbsp;
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configure=pssliderlayer&deletegroup=1&id_group=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_pssliderlayer_groups'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" onclick="if (confirm('<?php echo smartyTranslate(array('s'=>'Delete Selected Group?','mod'=>'pssliderlayer'),$_smarty_tpl);?>
')) {
                                        return true;
                                    } else {
                                        event.stopPropagation();
                                        event.preventDefault();
                                    }
                                    ;" title="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'pssliderlayer'),$_smarty_tpl);?>
" class="delete">
                                                    <i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                                                </a>
                                                <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
                                                    <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                                                        <?php $_smarty_tpl->tpl_vars['arrayParam'] = new Smarty_variable(array('secure_key'=>$_smarty_tpl->tpl_vars['msecure_key']->value,'id_group'=>$_smarty_tpl->tpl_vars['group']->value['id_pssliderlayer_groups']), null, 0);?>
                                                        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('pssliderlayer','preview',$_smarty_tpl->tpl_vars['arrayParam']->value,null,$_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="group-preview">
                                                            <i class="icon-eye-open"></i> <?php echo smartyTranslate(array('s'=>'Preview For','mod'=>'pssliderlayer'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                        </a>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <a class="group-preview" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['previewLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_group=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_pssliderlayer_groups'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                                        <i class="icon-eye-open"></i> <?php echo smartyTranslate(array('s'=>'Preview Group','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                                                    </a>
                                                <?php }?>
                                                <a class="" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['exportLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_group=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_pssliderlayer_groups'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                                    <i class="icon-archive"></i> <?php echo smartyTranslate(array('s'=>'Export Group and sliders','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                                                </a>
                                                
                                                <a class="" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configure=pssliderlayer&editgroup=1&copylang=1&id_group=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_pssliderlayer_groups'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                                    <i class="icon-edit"></i> <?php echo smartyTranslate(array('s'=>'Copy default language to other','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>				
                            </td>
                            <td>
                                <a class="btn btn-default color_success" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configure=pssliderlayer&showsliders=1&id_group=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_pssliderlayer_groups'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><i class="icon-film"></i> <?php echo smartyTranslate(array('s'=>'Manages Sliders','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</a>
                            </td>
                        </tr> 
                    <?php } ?>
            </table>
            <table class="table">
                <thead>
                    <tr class="nodrag nodrop">
                        <th class="center fixed-width-xs"></th>
                        <th class="">
                            <span class="title_box ">
                                <?php echo smartyTranslate(array('s'=>'Import Group','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=" odd">
                        <td colspan="2" style="margin-top:10px;padding:10px">
                            <form method="post" enctype="multipart/form-data" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configure=pssliderlayer&importGroup=1">
                                <div class="row">
                                        <div class="form-group">
                                                
                                                <input type="file" class="hide" name="import_file" id="import_file">
                                                <div class="dummyfile input-group">
                                                        <span class="input-group-addon"><i class="icon-file"></i></span>
                                                        <input type="text" readonly="" name="filename" class="disabled" id="import_file-name">
                                                        <span class="input-group-btn">
                                                                <button class="btn btn-default" name="submitAddAttachments" type="button" id="import_file-selectbutton">
                                                                        <i class="icon-folder-open"></i> <?php echo smartyTranslate(array('s'=>'Choose a file','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                                                                </button>
                                                        </span>
                                                </div>
                                                <p class="help-block color_danger"><?php echo smartyTranslate(array('s'=>'Please upload *.txt only','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4" for="title_group">
                                                    <?php echo smartyTranslate(array('s'=>'Overide group or not:','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                                            </label>
                                            <div class="input-group col-lg-3">
                                                    <span class="switch prestashop-switch">
                                                        <input type="radio" value="1" id="override_group_on" name="override_group">
                                                        <label for="override_group_on">
                                                                                <i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                                                                </label>
                                                        <input type="radio" checked="checked" value="0" id="override_group_off" name="override_group">
                                                        <label for="override_group_off">
                                                                                <i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                                                                </label>
                                                        <a class="slide-button btn btn-default"></a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
						<div class="col-lg-12">
							<button class="btn btn-default dash_trend_right" name="importGroup" id="import_file_submit_btn" type="submit">
								 <?php echo smartyTranslate(array('s'=>'Import','mod'=>'pssliderlayer'),$_smarty_tpl);?>

							</button>
													</div>
					</div>                                                                                                                            
                                </div>
                            </form>
                        </td>
                    </tr> 
                </tbody>
            </table>
        </div>
    </div>
</fieldset>
<script type="text/javascript">
    $(document).ready(function() {
        //import export fix
        $('#import_file-selectbutton').click(function(e){
                $('#import_file').trigger('click');
        });
        $('#import_file').change(function(e){
                var val = $(this).val();
                var file = val.split(/[\\/]/);
                $('#import_file-name').val(file[file.length-1]);
        });
        $('#import_file_submit_btn').click(function(e){
            if($("#import_file-name").val().indexOf(".txt") != -1){
                if($("override_group_on").is(":checked")) return confirm("<?php echo smartyTranslate(array('s'=>'Are you sure to override group?','mod'=>'pssliderlayer'),$_smarty_tpl);?>
");
                return true;
            }else{
                alert("<?php echo smartyTranslate(array('s'=>'Please upload txt file','mod'=>'pssliderlayer'),$_smarty_tpl);?>
");
                $('#import_file').val("");
                $('#import_file-name').val("");
                return false;
            }
	});		
        
        $(".group-preview").click(function() {
            eleDiv = $(this).parent().parent().parent();
            if ($(eleDiv).hasClass("open"))
                eleDiv.removeClass("open");

            var url = $(this).attr("href") + "&content_only=1";
            $('#dialog').remove();
            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe name="iframename2" src="' + url + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');
            $('#dialog').dialog({
                title: 'Preview Management',
                close: function(event, ui) {

                },
                bgiframe: true,
                width: 1000,
                height: 500,
                resizable: false,
                draggable:false,
                modal: true
            });
            return false;
        });
    });
</script>
<?php }} ?>
