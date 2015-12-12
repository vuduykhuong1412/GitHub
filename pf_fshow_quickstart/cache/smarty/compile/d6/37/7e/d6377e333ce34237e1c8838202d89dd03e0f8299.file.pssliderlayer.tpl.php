<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:15:30
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\pssliderlayer\views\templates\hook\pssliderlayer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1355664f9d2a67755-14782944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6377e333ce34237e1c8838202d89dd03e0f8299' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\pssliderlayer\\views\\templates\\hook\\pssliderlayer.tpl',
      1 => 1447227096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1355664f9d2a67755-14782944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sliderParams' => 0,
    'sliderIDRand' => 0,
    'sliders' => 0,
    'slider' => 0,
    'layer' => 0,
    'count' => 0,
    'sliderImgUrl' => 0,
    'sliderFullwidth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9d2d30936_86909302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9d2d30936_86909302')) {function content_5664f9d2d30936_86909302($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\tools\\smarty\\plugins\\modifier.replace.php';
?>
<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class']=="boxed") {?>
<div class="layerslider-wrapper<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['group_class']) {?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['group_class'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['md_width']) {?> col-md-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['md_width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['sm_width']) {?> col-sm-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['sm_width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['xs_width']) {?> col-xs-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['xs_width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>">
    <?php $_smarty_tpl->tpl_vars["sliderParams.group_class"] = new Smarty_variable('', null, 0);?>
<?php }?>
    <div class="bannercontainer banner-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['group_class']) {?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['group_class'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" style="padding: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['padding'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;margin: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['margin'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['background'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
        <div id="sliderlayer<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="rev_slider <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
banner" style="width:100%;height:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
px; " >
            <ul class="layerslide-container">
                <?php if ($_smarty_tpl->tpl_vars['sliders']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["count"] = new Smarty_variable("61", null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['slider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sliders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->key => $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->_loop = true;
?>

                <li <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['data_link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['data_delay'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['data_target'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 data-masterspeed="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['params']['duration'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"  data-transition="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['params']['transition'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-slotamount="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['params']['slot'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-thumb="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['thumbnail'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['slider']->value['background_color']) {?> style="background-color:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['background_color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['slider']->value['videoURL']) {?>
                    <div class="caption fade fullscreenvideo" data-autoplay="true" data-x="0" data-y="0" data-speed="500" data-start="10" data-easing="easeOutBack">
                        <iframe src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['videoURL'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
?title=0&amp;byline=0&amp;portrait=0;api=1" width="100%" height="100%"></iframe>
                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['slider']->value['main_image']) {?>
                    <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['main_image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt=""/>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['slider']->value['layersparams'])) {?>
                    <?php  $_smarty_tpl->tpl_vars['layer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value['layersparams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->key => $_smarty_tpl->tpl_vars['layer']->value) {
$_smarty_tpl->tpl_vars['layer']->_loop = true;
?>
                    <div class="caption<?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_class']) {?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_class'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_animation']) {?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_animation'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_easing']) {?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_easing'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_endanimation']!="auto"&&!$_smarty_tpl->tpl_vars['layer']->value['layer_endtime']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_endanimation'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>"
                         data-x="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_left'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                         data-y="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_top'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                         data-speed="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_speed'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                         data-start="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['time_start'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                         <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
                         data-easing="easeOutExpo" <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_endtime']) {?>data-end="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_endtime'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-endspeed="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_endspeed'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_endeasing']!="nothing") {?>data-endeasing="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_endeasing'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?><?php }?>
                         <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_link']) {?>onclick="window.open('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
','<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_target'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
');"<?php }?>
                         <?php if ($_smarty_tpl->tpl_vars['layer']->value['css']) {?>style="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['css'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;z-index: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['count']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;"<?php }?>>
                        
                         <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_type']=="image") {?>
                         <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderImgUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_content'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt=""/>
                         <?php } elseif ($_smarty_tpl->tpl_vars['layer']->value['layer_type']=="video") {?>
                            <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_video_type']=="vimeo") {?>
                            <iframe src="http://player.vimeo.com/video/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_video_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
?wmode=transparent&amp;title=0&amp;byline=0&amp;portrait=0;api=1" width="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_video_width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" height="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_video_height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></iframe>
                            <?php } else { ?>
                            <iframe width="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_video_width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" height="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_video_height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" src="http://www.youtube.com/embed/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value['layer_video_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                            <?php }?>
                         <?php } else { ?>
                             
                            <?php echo html_entity_decode(smarty_modifier_replace($_smarty_tpl->tpl_vars['layer']->value['layer_caption'],"_ASM_","&"),@constant('ENT_QUOTES'),"UTF-8");?>

                         <?php }?>

                    </div>
                    <?php } ?>
                    <?php }?>
                </li>           
                <?php } ?>
                <?php }?>
            </ul>
            <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['show_time_line']) {?> 
            <div class="tp-bannertimer tp-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['time_line_position'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></div>
            <?php }?>
        </div>
    </div>
<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class']=="boxed") {?>
</div>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['sliders']->value)>1&&$_smarty_tpl->tpl_vars['sliderParams']->value['navigator_arrows']=='none') {?>
<div id="sliderlayer-navigation<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="navigation-custom">
    <div class="bullet thumb first preview"></div>
    <div class="bullet thumb last next"></div>
</div>
<?php }?>
<script type="text/javascript">
 
     var tpj=jQuery;
     var revapi<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
     if (tpj.fn.cssOriginal!=undefined)
     tpj.fn.css = tpj.fn.cssOriginal;

    revapi<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 = tpj("#sliderlayer<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
").revolution(
     {
         delay:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['delay'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
         startheight:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
         startwidth:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,


         hideThumbs:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['hide_navigator_after'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,

         thumbWidth:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['thumbnail_width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,                     
         thumbHeight:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['thumbnail_height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
         thumbAmount:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['thumbnail_amount'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
         <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['navigator_type']!="both") {?>
         navigationType:"<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['navigator_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",
         <?php } else { ?>
         navsecond:"both",
         <?php }?>
         navigationArrows:"<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['navigator_arrows'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",                
         <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['navigation_style']!="none") {?>
         navigationStyle:"<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['navigation_style'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",          
         <?php }?>

         navOffsetHorizontal:<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['offset_horizontal']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['offset_horizontal'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>0<?php }?>,
         <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['offset_vertical']) {?>
         navOffsetVertical:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['offset_vertical'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,  
        <?php }?>    
         touchenabled:"<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['touch_mobile']) {?>on<?php } else { ?>off<?php }?>",         
         onHoverStop:"<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['stop_on_hover']) {?>on<?php } else { ?>off<?php }?>",                     
         shuffle:"<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['shuffle_mode']) {?>on<?php } else { ?>off<?php }?>",  
         stopAtSlide: <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['auto_play']) {?>-1<?php } else { ?>1<?php }?>,                        
         stopAfterLoops:<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['auto_play']) {?>-1<?php } else { ?>0<?php }?>,                     

         hideCaptionAtLimit:0,              
         hideAllCaptionAtLilmit:0,              
         hideSliderAtLimit:0,           
         fullWidth:"<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderFullwidth']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",
         shadow:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['shadow_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
         startWithSlide:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['slider_start_with_slide'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

     });
     $( document ).ready(function() {
        $('.caption',$('#sliderlayer<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
')).click(function(){
            if($(this).data('link') != undefined && $(this).data('link') != '') location.href = $(this).data('link');
        });

        $('li',$('#sliderlayer<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
')).click(function(){
            if($(this).data('link') != undefined && $(this).data('link') != '') location.href = $(this).data('link');
        });
     });


<?php if (count($_smarty_tpl->tpl_vars['sliders']->value)>1&&$_smarty_tpl->tpl_vars['sliderParams']->value['navigator_arrows']=='none') {?>

    jQuery(document).ready(function($) {
         revapi<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.bind("revolution.slide.onloaded", function (e,data) {
            var index = 0;
            $('#sliderlayer<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 li').each(function(i) {
                if ($(this).hasClass('current-sr-slide-visible')) {
                    index = i;
                }
            });
            
            var pre = getRevoIndex(index, 'preview');
            var nex = getRevoIndex(index, 'next');
            
            setRevoNav(pre, 'preview');
            setRevoNav(nex, 'next');

        });
        

        $('#sliderlayer-navigation<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 .preview').click(function() {
            revapi<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.revprev();
        });

        $('#sliderlayer-navigation<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 .next').click(function() {
            revapi<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.revnext();
        });
        revapi<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.bind("revolution.slide.onchange", function (e,data) {
            var slideIndex = data.slideIndex - 1;
            var pre = getRevoIndex(slideIndex, 'preview');
            var nex = getRevoIndex(slideIndex, 'next');

            setRevoNav(pre, 'preview');
            setRevoNav(nex, 'next');
            // $('.pagination_slider li').removeClass('active');
            // $('.pagination_slider li a[data-rel="' + data.slideIndex+'"]').parent().addClass('active');
        });
    });
    
    function getRevoIndex(index, type) {
        var container = $('#sliderlayer<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
');
        var new_index = 0;
        if (type == 'preview') {
            if (index > 0) {
                var new_index = index - 1;
            } else {
                var new_index = container.find('ul.layerslide-container li').length - 1;
            }
        } else {
            if (index < (container.find('ul.layerslide-container li').length - 1) ) {
                var new_index = index + 1;
            } else {
                var new_index = 0;
            }
        }
        return new_index;
    }
    
    function setRevoNav(index, type) {
        var container = $('#sliderlayer-navigation<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sliderIDRand']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
');
        container.find('.' + type).html('<img src="'+ $('ul.layerslide-container li').eq(index).data('thumb') +'">').data('index', index);
    }

<?php }?>


 
</script><?php }} ?>
