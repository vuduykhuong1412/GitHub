<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 05:12:15
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\pssliderlayer\views\templates\admin\ps_slider_layer\imagemanager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176575652e67fee1599-46428379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e66ce4c3e8af912c87363a1e6c055df105c78c38' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\pssliderlayer\\views\\templates\\admin\\ps_slider_layer\\imagemanager.tpl',
      1 => 1447226796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176575652e67fee1599-46428379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reloadSliderImage' => 0,
    'countImages' => 0,
    'max_image_size' => 0,
    'image_uploader' => 0,
    'images' => 0,
    'image' => 0,
    'link' => 0,
    'imgUploadDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652e67ff39fb0_26040683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652e67ff39fb0_26040683')) {function content_5652e67ff39fb0_26040683($_smarty_tpl) {?>
<?php if (!(isset($_smarty_tpl->tpl_vars['reloadSliderImage']->value)&&$_smarty_tpl->tpl_vars['reloadSliderImage']->value==1)) {?>
<div class="panel product-tab">
<h3 class="tab" >
    <?php echo smartyTranslate(array('s'=>'Images Manager','mod'=>'pssliderlayer'),$_smarty_tpl);?>

    <span class="badge" id="countImage"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['countImages']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
    <label class="control-label col-lg-3 file_upload_label">
            <?php echo smartyTranslate(array('s'=>'Format:','mod'=>'pssliderlayer'),$_smarty_tpl);?>
 JPG, GIF, PNG. <?php echo smartyTranslate(array('s'=>'Filesize:','mod'=>'pssliderlayer'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars(sprintf("%.2f",$_smarty_tpl->tpl_vars['max_image_size']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'MB max.','mod'=>'pssliderlayer'),$_smarty_tpl);?>

    </label>
</h3>

<div class="row">
    <div class="form-group">
        <div class="col-lg-12">
            <?php echo $_smarty_tpl->tpl_vars['image_uploader']->value;?>

        </div>
    </div>
</div>
    
<div class="row">
    <div class="form-group">
        <ul id="list-imgs">
<?php }?>
        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
            <li><div class="row img-row">
                    <a class="label-tooltip img-link" onclick="selectImage('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
')" data-toggle="tooltip" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="height:70px;overflow: hidden">
                        <img class="select-img" data-name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="" width="70" alt="" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                    </a>
                 </div>
                <div class="row">
                    <a class="fancybox" data-toggle="tooltip" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Click to view','mod'=>'pssliderlayer'),$_smarty_tpl);?>
">
                        <i class="icon-eye-open"></i>
                        <?php echo smartyTranslate(array('s'=>'View','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                    </a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPsSliderLayer');?>
&imgName=<?php echo rawurlencode($_smarty_tpl->tpl_vars['image']->value['name']);?>
" class="text-danger delete-image" title="<?php echo smartyTranslate(array('s'=>'Delete Selected Image?','mod'=>'pssliderlayer'),$_smarty_tpl);?>
" onclick="if (confirm('<?php echo smartyTranslate(array('s'=>'Delete Selected Image?','mod'=>'pssliderlayer'),$_smarty_tpl);?>
')) {
                            return deleteImage($(this));
                        } else {
                            return false;
                        }
                        ;">
                        <i class="icon-remove"></i>
                        <?php echo smartyTranslate(array('s'=>'Delete','mod'=>'pssliderlayer'),$_smarty_tpl);?>

                    </a>
                </div></li>
        <?php } ?>
<?php if (!(isset($_smarty_tpl->tpl_vars['reloadSliderImage']->value)&&$_smarty_tpl->tpl_vars['reloadSliderImage']->value==1)) {?>
        </ul>
    </div>
    <div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'If you can not update Image. Please set permission 755 for folder','mod'=>'pssliderlayer'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['imgUploadDir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
</div>
<script type="text/javascript">
var upbutton = "<?php echo smartyTranslate(array('s'=>'Upload an image','mod'=>'pssliderlayer'),$_smarty_tpl);?>
";

    $(document).ready(function(){
        $('.fancybox').fancybox();
        
    });
    $(".img-link").click(function(){
       return false;
    });
    function selectImage(url){
        if(url != ''){
            urlTarget = getUrlVars();
            
            if(urlTarget["field"]){
              element = decodeURI(urlTarget["field"].replace(/&/g, "\",\"").replace(/=/g,"\":\""));
              parent.$("#"+element, window.parent.document).val(url);
            }else{
              parent.$("#slider-image_"+urlTarget["lang_id"], window.parent.document).val(url);
            }
            parent.$("#dialog", window.parent.document).dialog('close');
        }
        return false;
    }
    
    function deleteImage(element){
        $.ajax({
            type: 'GET',
            url: element.attr("href") + '&reloadSliderImage=1&sortBy=name',
            data: '',
            dataType: 'json',
            cache: false, // @todo see a way to use cache and to add a timestamps parameter to refresh cache each 10 minutes for example
            success: function(data)
            {
                 $("#list-imgs").html(data);
                 $('.label-tooltip').tooltip();
                 $('.fancybox').fancybox();
            }
        });
        
        return false;
    }
    
    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

</script>
<?php }?><?php }} ?>
