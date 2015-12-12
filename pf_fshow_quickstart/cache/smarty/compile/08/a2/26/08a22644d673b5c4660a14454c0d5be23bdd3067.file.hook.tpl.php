<?php /* Smarty version Smarty-3.1.19, created on 2015-12-10 00:03:23
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\ptsmaplocator\views\templates\hook\hook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266295669016c7770f8-75661498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a22644d673b5c4660a14454c0d5be23bdd3067' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\ptsmaplocator\\views\\templates\\hook\\hook.tpl',
      1 => 1449723798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266295669016c7770f8-75661498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5669016c7d1356_20702564',
  'variables' => 
  array (
    'pts_description' => 0,
    'mod_id' => 0,
    'pts_stores' => 0,
    'i' => 0,
    'location' => 0,
    'pts_height' => 0,
    'img_store_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669016c7d1356_20702564')) {function content_5669016c7d1356_20702564($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\tools\\smarty\\plugins\\function.math.php';
?><div class="ptsmaplocator">
    <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Map Locator','mod'=>'ptsmaplocator'),$_smarty_tpl);?>
</h3>
    <div class="box-content">
        <?php if (!empty($_smarty_tpl->tpl_vars['pts_description']->value)) {?>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['pts_description']->value;?>
</div>
        <?php }?>
        <div class="maplocator">
            <div id="directory-main-bar-<?php echo $_smarty_tpl->tpl_vars['mod_id']->value;?>
" class="gmap"></div>
        </div>
        
        <div class="box-shop">
            <?php if (isset($_smarty_tpl->tpl_vars['pts_stores']->value)) {?>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pts_stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['location']->key;
?>
                    <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['i']->value,'y'=>1,'assign'=>'i'),$_smarty_tpl);?>

                    <div class="item-location" id="location-<?php echo $_smarty_tpl->tpl_vars['location']->value["id_store"];?>
" data-id="shop<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" data-lat="<?php echo $_smarty_tpl->tpl_vars['location']->value["latitude"];?>
" data-lon="<?php echo $_smarty_tpl->tpl_vars['location']->value["longitude"];?>
">
                        <div class="shop-title">
                            <i class="icon-map-marker"></i><?php echo $_smarty_tpl->tpl_vars['location']->value['name'];?>

                        </div>
                        <div class="shop-address"><?php echo $_smarty_tpl->tpl_vars['location']->value['address1'];?>
</div>
                    </div>
                <?php } ?>
            <?php }?>
        </div>
    </div>
</div>

<script type="text/javascript">

var mapDiv, map, infobox;
jQuery(document).ready(function($){
	mapDiv = $("#directory-main-bar-<?php echo $_smarty_tpl->tpl_vars['mod_id']->value;?>
");
	mapDiv.height(<?php echo $_smarty_tpl->tpl_vars['pts_height']->value;?>
).gmap3({
		map: {
			options: {
				"draggable": true
				,"mapTypeControl": true
				,"mapTypeId": google.maps.MapTypeId.ROADMAP
				,"scrollwheel": true //Alow scroll zoom in, zoom out
				,"panControl": true
				,"rotateControl": false
				,"scaleControl": true
				,"streetViewControl": true
				,"zoomControl": true
			}
		}
		,marker: {
			values: [
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pts_stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
                            {
                                <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['i']->value,'y'=>1,'assign'=>'i'),$_smarty_tpl);?>

                                    
                                    latLng: [<?php echo $_smarty_tpl->tpl_vars['location']->value['latitude'];?>
, <?php echo $_smarty_tpl->tpl_vars['location']->value['longitude'];?>
],
                                    options: { 
                                            icon: "<?php echo $_smarty_tpl->tpl_vars['location']->value['icon'];?>
",
                                            //shadow: "icon-shadow.png",
                                    
                                    },
                                            
                                    data: '<div class="marker-holder">\n\
                                    <div class="marker-content with-image"><?php if ($_smarty_tpl->tpl_vars['location']->value['has_picture']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['img_store_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['location']->value['id_store'];?>
.jpg" alt=""><?php }?> \n\
                                        <div class="map-item-info">\n\
                                            <div class="title">'+"<?php echo $_smarty_tpl->tpl_vars['location']->value['name'];?>
"+'</div>\n\
                                            <div class="address">'+"<?php echo $_smarty_tpl->tpl_vars['location']->value['address1'];?>
"+'</div>\n\
                                            <div class="description">'+'<?php echo $_smarty_tpl->tpl_vars['location']->value['working_hours'];?>
'+'</div>\n\
                                            </div><div class="arrow"></div>\n\
                                            <div class="close"></div>\n\
                                        </div>\n\
                                    </div>\n\
                                </div>', 'id':'shop<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
'
                            },
                            <?php } ?>
                            
			],
			options:{
				draggable: false, //Alow move icon location
			},
			cluster:{
				radius: 20,
				// This style will be used for clusters with more than 0 markers
				0: {
					content: "<div class='cluster cluster-1'>CLUSTER_COUNT</div>",
					width: 90,
					height: 80
				},
				// This style will be used for clusters with more than 20 markers
				20: {
					content: "<div class='cluster cluster-2'>CLUSTER_COUNT</div>",
					width: 90,
					height: 80
				},
				// This style will be used for clusters with more than 50 markers
				50: {
					content: "<div class='cluster cluster-3'>CLUSTER_COUNT</div>",
					width: 90,
					height: 80
				},
				events: {
					click: function(cluster) {
						map.panTo(cluster.main.getPosition());
						map.setZoom(map.getZoom() + 2);
					}
				}
			},
			events: {
				click: function(marker, event, context){
					map.panTo(marker.getPosition());

					infobox.setContent(context.data);
					infobox.open(map,marker);

					// if map is small
					var iWidth = 260;
					var iHeight = 300;
					if((mapDiv.width() / 2) < iWidth ){
						var offsetX = iWidth - (mapDiv.width() / 2);
						map.panBy(offsetX,0);
					}
					if((mapDiv.height() / 2) < iHeight ){
						var offsetY = -(iHeight - (mapDiv.height() / 2));
						map.panBy(0,offsetY);
					}

				}
			}
		}
	},"autofit");

	map = mapDiv.gmap3("get");
	infobox = new InfoBox({
		pixelOffset: new google.maps.Size(-50, -65),
		closeBoxURL: '',
		enableEventPropagation: true
	});
	mapDiv.delegate('.infoBox .close','click',function () {
		infobox.close();
	});
        
	$(".box-shop .item-location").click(function(){
		var id = $(this).attr('data-id');
		var marker = $("#directory-main-bar-<?php echo $_smarty_tpl->tpl_vars['mod_id']->value;?>
").gmap3({ get: { id: id } });
		google.maps.event.trigger(marker, 'click');
		map.setCenter(marker.getPosition());
		map.setZoom(15);
	});
});

</script>
<?php }} ?>
