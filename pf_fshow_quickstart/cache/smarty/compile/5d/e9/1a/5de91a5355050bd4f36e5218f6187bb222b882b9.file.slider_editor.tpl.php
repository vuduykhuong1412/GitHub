<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 05:11:43
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\pssliderlayer\views\templates\hook\slider_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193265652e65f50df86-19177385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5de91a5355050bd4f36e5218f6187bb222b882b9' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\pssliderlayer\\views\\templates\\hook\\slider_editor.tpl',
      1 => 1447226800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193265652e65f50df86-19177385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'previewLink' => 0,
    'id_group' => 0,
    'link' => 0,
    'language' => 0,
    'id_language' => 0,
    'lang' => 0,
    'sliderBack' => 0,
    'sliderGroup' => 0,
    'slideImg' => 0,
    'psBaseModuleUri' => 0,
    'foo' => 0,
    'layerAnimation' => 0,
    'lanimation' => 0,
    'delay' => 0,
    'layers' => 0,
    'layer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652e65f6dc259_29868877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652e65f6dc259_29868877')) {function content_5652e65f6dc259_29868877($_smarty_tpl) {?>
<fieldset>
<div class="form-group">
    <div class="col-lg-9 col-lg-offset-3">
        <a class="btn btn-default dash_trend_right" href="javascript:void(0)" onclick="return $('#module_form').submit();"><i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save Slider','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</a>
        <a id="btn-preview-slider" class="btn btn-default <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>dropdown-toggle <?php } else { ?>slider-preview <?php }?>color_danger" herf="javascript:void(0);" data-link="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['previewLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_group=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id_group']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><i class="icon-eye-open"></i> <?php echo smartyTranslate(array('s'=>'Preview This Slider','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</a>
    </div>
</div>



<div class="col-lg-1">
<div class="slider-toolbar">
    <h4><?php echo smartyTranslate(array('s'=>'Tools Action','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</h4>
    <ul>
        <li>
            <div class="btn-create" href="#" data-action="add-image">
                <i class="icon-picture"></i><br/><?php echo smartyTranslate(array('s'=>'Add Image','mod'=>'pssliderlayer'),$_smarty_tpl);?>

            </div></li>
        <li><div class="btn-create" href="#" data-action="add-video">
                <i class="icon-youtube-play"></i><br/><?php echo smartyTranslate(array('s'=>'Add Video','mod'=>'pssliderlayer'),$_smarty_tpl);?>

            </div></li>
        <li><div class="btn-create" href="#" data-action="add-text">
                <i class="icon-text-width"></i><br/><?php echo smartyTranslate(array('s'=>'Add Text','mod'=>'pssliderlayer'),$_smarty_tpl);?>

            </div></li>
    </ul>
    <div class="btn-delete" data-action="delete-layer"><i class="icon-remove"></i> <?php echo smartyTranslate(array('s'=>'Delete','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</div>
</div>
</div>

<div class="col-lg-11">
<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
<form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configure=pssliderlayer&ptsajax=1&action=submitslider" method="post" enctype="multipart/form-data" class="slider-form" id="slider-form_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
    <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
        <div class="translatable-field lang-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 form-language" data-action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['id_language']->value) {?>style="display:none"<?php }?>>
            <div class="col-lg-12">
                <div class="col-lg-10"></div>
                <div class="col-lg-2">
                <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                    <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
                        <li><a href="javascript:hideOtherLanguage(<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
);" tabindex="-1"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>
                        <?php } ?>
                </ul>
                </div>
            </div>
        <?php }?>
        <div class="col-lg-12">
            <div class="form-group layers-wrapper clearfix" id="slider-toolbar_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                
            <div class="slider-layers bannercontainer">
                <div class="back-ground">
                    <div class="title-back">
                        <?php echo smartyTranslate(array('s'=>'BackGround','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                    </div>
                    <div class="col-md-6">
                        <a href="javascript:void(0)" class="btn btn-default btn-update-slider">
                            <i class="icon-upload"></i> <?php echo smartyTranslate(array('s'=>'Set Background Image','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                        </a>
                        <a href="javascript:void(0)" class="btn btn-default btn-remove-backurl" style="color:red">
                            <i class="icon-remove"></i> <?php echo smartyTranslate(array('s'=>'Remove','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <lable><?php echo smartyTranslate(array('s'=>'Background Color','mod'=>'pssliderlayer'),$_smarty_tpl);?>
:</lable>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <input type="color" data-hex="true" class="slider-backcolor color mColorPickerInput" data-lang="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['sliderBack']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderBack']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-editor-wrap" id="slider-editor-wrap_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="width:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderGroup']->value['width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
px;height:<?php if ($_smarty_tpl->tpl_vars['sliderGroup']->value['fullwidth']=="fullscreen") {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderGroup']->value['height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')+200;?>
<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderGroup']->value['height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>px">
                    <div class="simage">
                        <img src="<?php if (isset($_smarty_tpl->tpl_vars['slideImg']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['psBaseModuleUri']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slideImg']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" alt=""/>
                    </div>
                    <div class="slider-editor" id="slider-editor_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="width:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderGroup']->value['width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
px;height:<?php if ($_smarty_tpl->tpl_vars['sliderGroup']->value['fullwidth']=="fullscreen") {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderGroup']->value['height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')+200;?>
<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderGroup']->value['height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>px">

                    </div>
                </div>
                <div class="layer-video-inpts dialog-video" id="dialog-video_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                    <table class="form">
                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Video Type','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                            <td>
                                <select name="layer_video_type" id="layer_video_type_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                    <option value="youtube">Youtube</option>
                                    <option value="vimeo">Vimeo</option>
                                </select>	
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Video ID','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                            <td><input name="layer_video_id" type="text" id="dialog_video_id_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                <p><?php echo smartyTranslate(array('s'=>'for example youtube','mod'=>'pssliderlayer'),$_smarty_tpl);?>
: <b>VA770wpLX-Q</b> and vimeo: <b>17631561</b> </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label><?php echo smartyTranslate(array('s'=>'Height','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</label>
                                <input name="layer_video_height" type="text" value="200">
                                <label><?php echo smartyTranslate(array('s'=>'Width','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</label>
                                <input name="layer_video_width" type="text" value="300">

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="layer_video_thumb" id="layer_video_thumb_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                <div class="buttons">
                                    <div class="btn layer-find-video"><?php echo smartyTranslate(array('s'=>'Find Video','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</div>
                                    <div class="btn layer-apply-video apply_this_video" id="apply_this_video_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="display:none;"><?php echo smartyTranslate(array('s'=>'Use This Video','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</div>
                                    <div class="btn btn-green" onclick="$('#dialog-video_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
').hide();"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</div>
                                </div>
                            </td>
                        </tr>	
                    </table>
                    <div id="video-preview_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></div>
                </div>
                <div class="slider-foot">
                    <div class="layer-collection-wrapper">
                        <h4><?php echo smartyTranslate(array('s'=>'Layer Collection','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</h4>
                        <div class="layer-collection" id="layer-collection_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></div>	
                    </div>
                </div>
                <div class="layer-form" id="layer-form_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                    <h4><?php echo smartyTranslate(array('s'=>'Edit Layer Data','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</h4>
                    <input type="hidden" class="layer_id" id="layer_id_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="layer_id"/>
                    <input type="hidden" class="layer_content" id="layer_content_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="layer_content"/>
                    <input type="hidden" class="layer_type" id="layer_type_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="layer_type"/>

                    <table class="form" style="width:100%">
                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Class Style','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                            <td>

                                <input type="text" class="layer_class" name="layer_class" id="input-layer-class_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                                <span class="buttons">
                                    <span class="btn btn-typo btn-insert-typo" id="btn-insert-typo_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Insert Typo','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Caption Html','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                            <td>
                                <p><?php echo smartyTranslate(array('s'=>'Allow insert html code','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</p>
                                <textarea style="height:60px" class="input-slider-caption" name="layer_caption" id="input-slider-caption_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-for="caption-layer" ></textarea>
                                
                                <table class="text-attr">
                                    <tr>
                                        <td><?php echo smartyTranslate(array('s'=>'font-size','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                                        <td><?php echo smartyTranslate(array('s'=>'Background Color','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                                        <td><?php echo smartyTranslate(array('s'=>'Text Color','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="layer_font_size" class="layer_font_size">
                                                <option value="" selected="selected"><?php echo smartyTranslate(array('s'=>'Auto','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 100+1 - (9) : 9-(100)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 9, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
px"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
px</option>
                                                <?php }} ?>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input type="color" data-hex="true" name="layer_background_color" class="layer_background_color color mColorPickerInput" value=""/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input type="color" data-hex="true" name="layer_color" class="layer_color color mColorPickerInput" value=""/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><br/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Link','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                            <td>
                                <input type="text" class="layer_link" name="layer_link" id="layer_link_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                <p><?php echo smartyTranslate(array('s'=>'Do not input will get link from slider','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Effect','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                            <td><label><?php echo smartyTranslate(array('s'=>'Animation','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</label>
                                <select class="layer_animation" name="layer_animation">
                                    <?php  $_smarty_tpl->tpl_vars['lanimation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lanimation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layerAnimation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lanimation']->key => $_smarty_tpl->tpl_vars['lanimation']->value) {
$_smarty_tpl->tpl_vars['lanimation']->_loop = true;
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['lanimation']->value['id']=="fade") {?>selected="selected"<?php }?> value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lanimation']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lanimation']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                                    <?php } ?>
                                </select>	
                                <p>	
                                    <label><?php echo smartyTranslate(array('s'=>'Easing','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</label>
                                    <select class="layer_easing" name="layer_easing" id="layer_easing_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                        <option value="easeOutBack">easeOutBack</option>
                                        <option value="easeInQuad">easeInQuad</option>
                                        <option value="easeOutQuad">easeOutQuad</option>
                                        <option value="easeInOutQuad">easeInOutQuad</option>
                                        <option value="easeInCubic">easeInCubic</option>
                                        <option value="easeOutCubic">easeOutCubic</option>
                                        <option value="easeInOutCubic">easeInOutCubic</option>
                                        <option value="easeInQuart">easeInQuart</option>
                                        <option value="easeOutQuart">easeOutQuart</option>
                                        <option value="easeInOutQuart">easeInOutQuart</option>
                                        <option value="easeInQuint">easeInQuint</option>
                                        <option value="easeOutQuint">easeOutQuint</option>
                                        <option value="easeInOutQuint">easeInOutQuint</option>
                                        <option value="easeInSine">easeInSine</option>
                                        <option value="easeOutSine">easeOutSine</option>
                                        <option value="easeInOutSine">easeInOutSine</option>
                                        <option value="easeInExpo">easeInExpo</option>
                                        <option selected="selected" value="easeOutExpo">easeOutExpo</option>
                                        <option value="easeInOutExpo">easeInOutExpo</option>
                                        <option value="easeInCirc">easeInCirc</option>
                                        <option value="easeOutCirc">easeOutCirc</option>
                                        <option value="easeInOutCirc">easeInOutCirc</option>
                                        <option value="easeInElastic">easeInElastic</option>
                                        <option value="easeOutElastic">easeOutElastic</option>
                                        <option value="easeInOutElastic">easeInOutElastic</option>
                                        <option value="easeInBack">easeInBack</option>
                                        <option value="easeOutBack">easeOutBack</option>
                                        <option value="easeInOutBack">easeInOutBack</option>
                                        <option value="easeInBounce">easeInBounce</option>
                                        <option value="easeOutBounce">easeOutBounce</option>
                                        <option value="easeInOutBounce">easeInOutBounce</option>
                                    </select>	
                                </p>	
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo smartyTranslate(array('s'=>'Speed','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                            <td>
                                <input class="layer_speed" name="layer_speed" id="layer_speed_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" type="text">
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <?php echo smartyTranslate(array('s'=>'Position','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                            </td>
                            <td>
                                <label><?php echo smartyTranslate(array('s'=>'Top','mod'=>'pssliderlayer'),$_smarty_tpl);?>
:</label><input size="3" type="text" class="layer_top" name="layer_top" id="layer_top_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                <label><?php echo smartyTranslate(array('s'=>'Left','mod'=>'pssliderlayer'),$_smarty_tpl);?>
:</label><input size="3" type="text" class="layer_left" name="layer_left" id="layer_left_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                    </table>
                    <div class="other-effect">
                        <h5><?php echo smartyTranslate(array('s'=>'Other Animation','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</h5>
                        <table class="form" style="width:100%">
                            <tr>
                                <td><?php echo smartyTranslate(array('s'=>'End Time','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                                <td><input type="text" class="layer_endtime" name="layer_endtime" id="layer_endtime_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"> </td>
                            </tr>
                            <tr>
                                <td><?php echo smartyTranslate(array('s'=>'End Speed','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                                <td><input type="text" class="layer_endspeed" name="layer_endspeed" id="layer_endspeed_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"> </td>
                            </tr>
                            <tr>
                                <td><?php echo smartyTranslate(array('s'=>'End Animation','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                                <td>
                                    <select type="text" class="layer_endanimation" name="layer_endanimation" id="layer_endanimation_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"> 
                                        <option selected="selected" value="auto"><?php echo smartyTranslate(array('s'=>'Choose Automatic','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                        <option value="fadeout"><?php echo smartyTranslate(array('s'=>'Fade Out','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                        <option value="stt"><?php echo smartyTranslate(array('s'=>'Short to Top','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                        <option value="stb"><?php echo smartyTranslate(array('s'=>'Short to Bottom','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                        <option value="stl"><?php echo smartyTranslate(array('s'=>'Short to Left','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                        <option value="str"><?php echo smartyTranslate(array('s'=>'Short to Right','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                        <option value="ltt"><?php echo smartyTranslate(array('s'=>'Long to Top','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                        <option value="ltb"><?php echo smartyTranslate(array('s'=>'Long to Bottom','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                        <option value="ltl"><?php echo smartyTranslate(array('s'=>'Long to Left','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                        <option value="ltr"><?php echo smartyTranslate(array('s'=>'Long to Right','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                        <option value="randomrotateout"><?php echo smartyTranslate(array('s'=>'Random Rotate Out','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                    </select>
                                </td>
                            </tr>	
                            <tr>
                                <td><?php echo smartyTranslate(array('s'=>'End Easing','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</td>
                                <td>
                                    <select class="layer_endeasing" name="layer_endeasing" id="layer_endeasing_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"> 
                                        <option selected="selected" value="nothing"><?php echo smartyTranslate(array('s'=>'No Change','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</option>
                                        <option value="easeOutBack">easeOutBack</option>
                                        <option value="easeInQuad">easeInQuad</option>
                                        <option value="easeOutQuad">easeOutQuad</option>
                                        <option value="easeInOutQuad">easeInOutQuad</option>
                                        <option value="easeInCubic">easeInCubic</option>
                                        <option value="easeOutCubic">easeOutCubic</option>
                                        <option value="easeInOutCubic">easeInOutCubic</option>
                                        <option value="easeInQuart">easeInQuart</option>
                                        <option value="easeOutQuart">easeOutQuart</option>
                                        <option value="easeInOutQuart">easeInOutQuart</option>
                                        <option value="easeInQuint">easeInQuint</option>
                                        <option value="easeOutQuint">easeOutQuint</option>
                                        <option value="easeInOutQuint">easeInOutQuint</option>
                                        <option value="easeInSine">easeInSine</option>
                                        <option value="easeOutSine">easeOutSine</option>
                                        <option value="easeInOutSine">easeInOutSine</option>
                                        <option value="easeInExpo">easeInExpo</option>
                                        <option value="easeOutExpo">easeOutExpo</option>
                                        <option value="easeInOutExpo">easeInOutExpo</option>
                                        <option value="easeInCirc">easeInCirc</option>
                                        <option value="easeOutCirc">easeOutCirc</option>
                                        <option value="easeInOutCirc">easeInOutCirc</option>
                                        <option value="easeInElastic">easeInElastic</option>
                                        <option value="easeOutElastic">easeOutElastic</option>
                                        <option value="easeInOutElastic">easeInOutElastic</option>
                                        <option value="easeInBack">easeInBack</option>
                                        <option value="easeOutBack">easeOutBack</option>
                                        <option value="easeInOutBack">easeInOutBack</option>
                                        <option value="easeInBounce">easeInBounce</option>
                                        <option value="easeOutBounce">easeOutBounce</option>
                                        <option value="easeInOutBounce">easeInOutBounce</option>
                                    </select>
                                </td>
                            </tr>		
                        </table>

                    </div>
                </div>
            </div>
          </div>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
        </div>
    <?php }?>
    
</form>    
<?php } ?>
</div>

<div class="col-lg-12 form-group clearfix">
    <div class="row">
        <div class="col-lg-9 col-lg-offset-3">
            <a class="btn btn-default dash_trend_right" href="javascript:void(0)" onclick="return $('#module_form').submit();"><i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save Slider','mod'=>'pssliderlayer'),$_smarty_tpl);?>
</a>
        </div>
    </div>
</div>



    <script type="text/javascript">
        var title_image = "<?php echo smartyTranslate(array('s'=>'Image Management'),$_smarty_tpl);?>
";
        var txt_input_title = "<?php echo smartyTranslate(array('s'=>'Please input title of slider for all language'),$_smarty_tpl);?>
";
        
        $(".btn-remove-backurl").click(function(){
            var field = 'slider-image_';
            langID = findActiveLang();
            if ($('#' + field + langID).val()) {
                correctLink = "";
                $('#' + field + langID).val(correctLink);
                $("#slider-editor-wrap_"+langID+" .simage").html('');
            }
        });
 
        $(".btn-update-slider").click(function() {
            var field = 'slider-image_';
            $('#dialog').remove();
            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe src="'+ajaxfilelink+'&lang_id='+findActiveLang()+'" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');

            $('#dialog').dialog({
                title: title_image,
                close: function(event, ui) {
                    langID = findActiveLang();
                    if ($('#' + field + langID).val()) {
                        correctLink = $('#' + field + langID).val();
                        $('#' + field + langID).val(correctLink);
                        $("#slider-editor-wrap_"+langID+" .simage").html('<img src="' + psBaseModuleUri + correctLink + '">');
                    }
                },
                bgiframe: false,
                width: 782,
                height: 445,
                resizable: true,
                draggable:false,
                modal: false
            });
        });


    </script>
    <script type="text/javascript">
        $( document ).ready( function(){
            var $ptsEditor = $(document).ptsSliderEditor();
            var delay = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['delay']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';
            
            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                $ptsEditor.countItem[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
] = 0;
            <?php } ?>
            
            $ptsEditor.process(SURLIMAGE, delay);
            
            <?php if ($_smarty_tpl->tpl_vars['layers']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['layer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->key => $_smarty_tpl->tpl_vars['layer']->value) {
$_smarty_tpl->tpl_vars['layer']->_loop = true;
?>
                $ptsEditor.createList( '<?php echo $_smarty_tpl->tpl_vars['layer']->value['content'];?>
' , <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['langID'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 );
            <?php } ?><?php }?>
            
            $(".btn-actionslider").click(function(){
                if($(this).attr("href").indexOf("deleteSlider") != -1){
                    if(!confirm('Delete Selected Slider?')) return false;
                }
                $.ajax( {url:$(this).attr("href"),  dataType:"JSON",type: "GET"}  ).done( function(output){
                        if(output.error){
                            alert(output.text);
                        }else{
                            location.reload();
                        }
                } );
                return false;          
            });
            
            $(".slider-backcolor").change(function() {
                $(this).closest(".slider-layers").find(".simage").first().css("background-color",$(this).val());
            });
            
            $(".slider-backcolor").each(function() {
                if($(this).val())
                $(this).closest(".slider-layers").find(".simage").first().css("background-color",$(this).val());
            });
        });


        $(".slider-preview").click(function() {
            var url = $(this).attr("href")+"&content_only=1";
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
        
        function image_upload(field, thumb) {
            $('#dialog').remove();

            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe src="'+ajaxfilelink+'&field=' + encodeURIComponent(field) + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');

            $('#dialog').dialog({
                    title: title_image,
                    close: function (event, ui) {
                        correctLink = $('#' + field).val();
                        $('#' + field).val(correctLink);
                        $('#' + thumb).attr("src",psBaseModuleUri+correctLink);
                        $('#' + thumb).show();
                    },	
                    bgiframe: false,
                    width: 700,
                    height: 400,
                    resizable: false,
                    draggable:false,
                    modal: false
            });
        };
    </script>
    <script type="text/javascript">
        function findActiveLang(){
            languageID = $("#current_language").val();
            if($('.form-language').length){
                $('.form-language').each(function(){
                    if($(this).is(':visible')){
                        languageID = $(this).attr("data-action");
                        return false;
                    }
                });
            }
            return languageID;
        }
    </script>

</fieldset><?php }} ?>
