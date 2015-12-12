<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 05:12:15
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\modules\pssliderlayer\views\templates\admin\helpers\uploader\ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286085652e67fc022d3-24048377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c931c499b4db18383225060acd4160f626936ad' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\modules\\pssliderlayer\\views\\templates\\admin\\helpers\\uploader\\ajax.tpl',
      1 => 1447226794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286085652e67fc022d3-24048377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'files' => 0,
    'file' => 0,
    'max_files' => 0,
    'name' => 0,
    'url' => 0,
    'multiple' => 0,
    'post_max_size' => 0,
    'drop_zone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652e67fd1c464_81933917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652e67fd1c464_81933917')) {function content_5652e67fd1c464_81933917($_smarty_tpl) {?>
<div class="form-group" style="display: none;">
	<div class="col-lg-12" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-images-thumbnails">
		<?php if (isset($_smarty_tpl->tpl_vars['files']->value)&&count($_smarty_tpl->tpl_vars['files']->value)>0) {?>
		<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['file']->value['image'])&&$_smarty_tpl->tpl_vars['file']->value['type']=='image') {?>
		<div class="img-thumbnail text-center">
			<p><?php echo $_smarty_tpl->tpl_vars['file']->value['image'];?>
</p>
			<?php if (isset($_smarty_tpl->tpl_vars['file']->value['size'])) {?><p><?php echo smartyTranslate(array('s'=>'File size','mod'=>'pssliderlayer'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['size'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
kb</p><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['file']->value['delete_url'])) {?>
			<p>
				<a class="btn btn-default" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['delete_url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
				<i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete','mod'=>'pssliderlayer'),$_smarty_tpl);?>

				</a>
			</p>
			<?php }?>
		</div>
		<?php }?>
		<?php } ?>
		<?php }?>
	</div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['max_files']->value)&&count($_smarty_tpl->tpl_vars['files']->value)>=$_smarty_tpl->tpl_vars['max_files']->value) {?>
<div class="row">
	<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'You have reached the limit (%s) of files to upload, please remove files to continue uploading','mod'=>'pssliderlayer','sprintf'=>$_smarty_tpl->tpl_vars['max_files']->value),$_smarty_tpl);?>
</div>
</div>
<script type="text/javascript">
	$( document ).ready(function() {
		<?php if (isset($_smarty_tpl->tpl_vars['files']->value)&&$_smarty_tpl->tpl_vars['files']->value) {?>
		$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-images-thumbnails').parent().show();
		<?php }?>
	});
</script>
<?php } else { ?>
<div class="form-group">
	<div class="col-lg-12">
		<input id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" type="file" name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
[]"<?php if (isset($_smarty_tpl->tpl_vars['url']->value)) {?> data-url="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&$_smarty_tpl->tpl_vars['multiple']->value) {?> multiple="multiple"<?php }?> class="hide" />
		<button class="btn btn-default" data-style="expand-right" data-size="s" type="button" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-add-button">
			<i class="icon-plus-sign"></i> <?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&$_smarty_tpl->tpl_vars['multiple']->value) {?><?php echo smartyTranslate(array('s'=>'Add files','mod'=>'pssliderlayer'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add file','mod'=>'pssliderlayer'),$_smarty_tpl);?>
<?php }?>
		</button>
		<button class="ladda-button btn btn-default" data-style="expand-right" type="button" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-upload-button" style="display:none;">
			<i class="icon-cloud-upload text-success"></i> <span class="ladda-label text-success"><?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&$_smarty_tpl->tpl_vars['multiple']->value) {?><?php echo smartyTranslate(array('s'=>'Upload files','mod'=>'pssliderlayer'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Upload file','mod'=>'pssliderlayer'),$_smarty_tpl);?>
<?php }?></span>
		</button>
                <!-- Split button -->
                <div class="btn-group">
                <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                  <?php echo smartyTranslate(array('s'=>'Order Image By','mod'=>'pssliderlayer'),$_smarty_tpl);?>
 <span class="caret"></span>
                </button>
                <ul id="img_order" class="dropdown-menu">
                    <li><a href="#" data-type="name"><span class="text-danger"><?php echo smartyTranslate(array('s'=>'Name','mod'=>'pssliderlayer'),$_smarty_tpl);?>
 <i class="icon-sort-by-alphabet"></i></span></a></li>
                    <li><a href="#" data-type="name_desc"><span><?php echo smartyTranslate(array('s'=>'Name DESC','mod'=>'pssliderlayer'),$_smarty_tpl);?>
 <i class="icon-sort-by-alphabet-alt"></i></span></a></li>
                    <li class="divider"></li>
                    <li><a href="#" data-type="date"><span><?php echo smartyTranslate(array('s'=>'Date Modified','mod'=>'pssliderlayer'),$_smarty_tpl);?>
 <i class="icon-sort-by-attributes"></i></span></a></li>
                    <li><a href="#" data-type="date_desc"><span><?php echo smartyTranslate(array('s'=>'Date Modified DESC','mod'=>'pssliderlayer'),$_smarty_tpl);?>
 <i class="icon-sort-by-attributes-alt"></i></span></a></li>
                  </ul>
                </div>
	</div>
</div>
<div class="row" style="display:none">
	<div class="alert alert-info" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-files-list"></div>
</div>
<div class="row" style="display:none">
	<div class="alert alert-success" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-success"></div>
</div>
<div class="row" style="display:none">
	<div class="alert alert-danger" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-errors"></div>
</div>
<script type="text/javascript">
	function humanizeSize(bytes)
	{
		if (typeof bytes !== 'number') {
			return '';
		}

		if (bytes >= 1000000000) {
			return (bytes / 1000000000).toFixed(2) + ' GB';
		}

		if (bytes >= 1000000) {
			return (bytes / 1000000).toFixed(2) + ' MB';
		}

		return (bytes / 1000).toFixed(2) + ' KB';
	}
        
        function reloadImageList(sortBy){
                if(!sortBy) sortBy = "date_add";
                $.ajax({
                    type: 'GET',
                    url: imgManUrl + '&reloadSliderImage=1&sortBy='+sortBy,
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
        }
        
	$( document ).ready(function() {
		$("#img_order a").click(function(){
                    reloadImageList($(this).attr("data-type"));
                    $("#img_order a span").removeClass("text-danger");
                    $(this).find("span").addClass("text-danger");
                });
                
                <?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&isset($_smarty_tpl->tpl_vars['max_files']->value)) {?>
			var <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_max_files = <?php echo $_smarty_tpl->tpl_vars['max_files']->value-count($_smarty_tpl->tpl_vars['files']->value);?>
;
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['files']->value)&&$_smarty_tpl->tpl_vars['files']->value) {?>
		$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-images-thumbnails').parent().show();
		<?php }?>

		var <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_upload_button = Ladda.create( document.querySelector('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-upload-button' ));
		var <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_total_files = 0;

		$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
').fileupload({
			dataType: 'json',
			autoUpload: false,
			singleFileUploads: true,
			<?php if (isset($_smarty_tpl->tpl_vars['post_max_size']->value)) {?>maxFileSize: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['drop_zone']->value)) {?>dropZone: <?php echo $_smarty_tpl->tpl_vars['drop_zone']->value;?>
,<?php }?>
			start: function (e) {
				<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_upload_button.start();
				$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-upload-button').unbind('click'); //Important as we bind it for every elements in add function
			},
			fail: function (e, data) {
				$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-errors').html(data.errorThrown.message).parent().show();
			},
			done: function (e, data) {
                                if (data.result) {
                                        $("#list-imgs").html(data.result);
                                        $('.label-tooltip').tooltip();
                                        $('.fancybox').fancybox();
                                        $("#file").val("");
                                        $("#file-files-list").html("");
                                        $("#file-upload-button").hide();
					$(data.context).find('button').remove();					
				}
			},
		}).on('fileuploadalways', function (e, data) {
				<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_total_files--;

				if (<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_total_files == 0)
				{
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_upload_button.stop();
					$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-upload-button').unbind('click');
					$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-files-list').parent().hide();
				}
		}).on('fileuploadadd', function(e, data) {
			if (typeof <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_max_files !== 'undefined') {
				if (<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_total_files >= <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_max_files) {
					e.preventDefault();
					alert('<?php echo smartyTranslate(array('s'=>sprintf('You can upload a maximum of %s files',$_smarty_tpl->tpl_vars['max_files']->value),'mod'=>'pssliderlayer'),$_smarty_tpl);?>
');
					return;
				}
			}

			data.context = $('<div/>').addClass('row').appendTo($('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-files-list'));
			var file_name = $('<span/>').append('<strong>'+data.files[0].name+'</strong> ('+humanizeSize(data.files[0].size)+')').appendTo(data.context);

			var button = $('<button/>').addClass('btn btn-default pull-right').prop('type', 'button').html('<i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Remove file','mod'=>'pssliderlayer'),$_smarty_tpl);?>
').appendTo(data.context).on('click', function() {
				<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_total_files--;
				data.files = null;
				
				var total_elements = $(this).parent().siblings('div.row').length;
				$(this).parent().remove();

				if (total_elements == 0) {
					$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-files-list').html('').parent().hide();
				}
			});

			$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-files-list').parent().show();
			$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-upload-button').show().bind('click', function () {
				if (data.files != null)
					data.submit();						
			});

			<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_total_files++;
		}).on('fileuploadprocessalways', function (e, data) {
			var index = data.index,	file = data.files[index];
			
			if (file.error) {
				$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-errors').append('<div class="row"><strong>'+file.name+'</strong> ('+humanizeSize(file.size)+') : '+file.error+'</div>').parent().show();
				$(data.context).find('button').trigger('click');
			}
		});

		$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-add-button').on('click', function() {
			$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-success').html('').parent().hide();
			$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-errors').html('').parent().hide();
			$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-files-list').parent().hide();
			<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_total_files = 0;
			$('#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
').trigger('click');
		});
	});
</script>
<?php }?><?php }} ?>
