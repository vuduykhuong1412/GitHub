<?php /* Smarty version Smarty-3.1.19, created on 2015-12-06 22:18:09
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\modules\ptsthemepanel\views\templates\hook\themeeditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265085664fa71b3ea46-28579365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5b69c85fa68313a3a78a0adc23b964cdf8d1e7b' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\modules\\ptsthemepanel\\views\\templates\\hook\\themeeditor.tpl',
      1 => 1447226786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265085664fa71b3ea46-28579365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionURL' => 0,
    'profiles' => 0,
    'profile' => 0,
    'selectedprofile' => 0,
    'isliveeditor' => 0,
    'xmlselectors' => 0,
    'for' => 0,
    'items' => 0,
    'group' => 0,
    'item' => 0,
    'patterns' => 0,
    'backgroundImageURL' => 0,
    'pattern' => 0,
    'fonts' => 0,
    'font' => 0,
    'i' => 0,
    'customizeFolderURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664fa71da6160_43919538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664fa71da6160_43919538')) {function content_5664fa71da6160_43919538($_smarty_tpl) {?>
<div id="pts-paneltool" class="hidden-xs hidden-sm pts-paneltool">


	<div class=" pts-panelbutton">
		<i class="icon icon-magic"></i>
	</div>

<div class="paneltool editortool pts-panelcontent">
<form  enctype="multipart/form-data" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['actionURL']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="formliveedittheme" method="post">



<div id="ptscustomize" class="pts-customize panelcontent editortool clearfix">
	 
	<p>
		<b><?php echo smartyTranslate(array('s'=>'Custom Theme Profiles Management','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</b>
	</p>
	<div class="buttons-action row">

		<div class="col-sm-6">
			<select id="saved-files" name="saved_file">
				<option value=""><?php echo smartyTranslate(array('s'=>'Create New Profile','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</option>
				<?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['profile']->value==$_smarty_tpl->tpl_vars['selectedprofile']->value) {?> selected="selected" <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
				<?php } ?>
			</select> 
		</div>
		<?php if ($_smarty_tpl->tpl_vars['isliveeditor']->value) {?>
		<div class=" col-sm-6">
			<input type="text" name="newfile" size="18">
		</div>
		<?php }?>
	</div>

		<?php if ($_smarty_tpl->tpl_vars['isliveeditor']->value) {?>
		<div class="buttons-group clearfix"> 

			<input type="hidden" id="action-mode" name="action-mode"/>	
 			<div class="pull-left">
	 			<button type="submit" onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Are you sure to delete?','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
')" name="submitPtsLiveConfiguratorDelete" title="<?php echo smartyTranslate(array('s'=>'Delete This Profile','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
" class="btn btn-primary btn-danger btn-sm" value="1">
					<span class="icon icon-trash"></span>
				</button>
				
			</div>
			<div class="pull-right">
				<button type="submit" name="submitPtsLiveConfigurator" class="btn btn-warning btn-sm" value="1">
					<?php echo smartyTranslate(array('s'=>'Save Profile','mod'=>'ptsthemepanel'),$_smarty_tpl);?>

				</button>
				<button type="submit" name="submitPtsLiveConfiguratorActiveProfile" class="btn btn-primary btn-sm" value="1">
					<?php echo smartyTranslate(array('s'=>'Active','mod'=>'ptsthemepanel'),$_smarty_tpl);?>

				</button>		 
			</div>
		
		</div>	
		<?php }?>

	<div class="wrapper  clearfix"><div id="customize-form">
	<div class="groups">
	 
		<div class="clearfix" id="customize-body">
				<ul class="nav nav-tabs pts-tabs">
				  <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['for'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xmlselectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['for']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
		       	  <li><a href="#tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['for']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['for']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li> 
	       	      <?php } ?>  
		        </ul>
		        <div class="tab-content" > 
		        	 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['for'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xmlselectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['for']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
		            <div class="tab-pane" id="tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['for']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		            	<?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
		            	<div class="pts-panelcollapse"  id="custom-accordion<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['for']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		            	<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
		            	    <div class="panel panel-default panel-group ">
                               <div class="panel-heading">
	                              <div class="panel-title"><a data-toggle="collapse" data-parent="#custom-accordion<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['for']->value, ENT_QUOTES, 'UTF-8', true);?>
" href="#collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8', true);?>
">
	                               		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['header'], ENT_QUOTES, 'UTF-8', true);?>
	 
	                              </a></div>
	                            </div>

	                            <div id="collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8', true);?>
" class="panel-collapse collapse">
	                                <div class="panel-body">
	                              	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['selector']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
									
									  <?php if (isset($_smarty_tpl->tpl_vars['item']->value['type'])&&$_smarty_tpl->tpl_vars['item']->value['type']=="image") {?>	
									  <div class="form-group background-images"> 
											<label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</label>
											<a class="clear-bg" href="#"><span class="icon icon-eraser"></span></a>
											<input value="" type="hidden" name="customize[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8', true);?>
][]" data-match="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8', true);?>
" class="input-setting" data-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['selector'], ENT_QUOTES, 'UTF-8', true);?>
" data-attrs="background-image">

											<div class="clearfix"></div>
											 <p><em style="font-size:10px">Those Images in folder YOURTHEME/img/patterns/</em></p>
											<div class="bi-wrapper clearfix">
											<?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['patterns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->_loop = true;
?>
											<div style="background:url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['backgroundImageURL']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pattern']->value, ENT_QUOTES, 'UTF-8', true);?>
') no-repeat center center;" class="pull-left" data-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['backgroundImageURL']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pattern']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-val="../../img/patterns/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pattern']->value, ENT_QUOTES, 'UTF-8', true);?>
">

											</div>
											<?php } ?>
	                                    </div>
	                                  </div>
	                                  <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="fontfamily") {?>
	                                   <div class="form-group">
	                                   	<label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	                                  	<select name="customize[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8', true);?>
][]" data-match="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8', true);?>
" class="input-setting" data-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['selector'], ENT_QUOTES, 'UTF-8', true);?>
" data-attrs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['attrs'], ENT_QUOTES, 'UTF-8', true);?>
">
											<option value="inherit">Inherit</option>
											<?php  $_smarty_tpl->tpl_vars['font'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['font']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fonts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['font']->key => $_smarty_tpl->tpl_vars['font']->value) {
$_smarty_tpl->tpl_vars['font']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['font']->key;
?>
											<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php } ?>
										</select>	<a href="#" class="clear-bg"><span class="icon icon-eraser"></span></a>
	                                  </div>
	                             

	                                  <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="fontsize") {?>
	                                   <div class="form-group">
	                                   	<label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	                                  	<select name="customize[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8', true);?>
][]" data-match="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8', true);?>
" class="input-setting" data-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['selector'], ENT_QUOTES, 'UTF-8', true);?>
" data-attrs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['attrs'], ENT_QUOTES, 'UTF-8', true);?>
">
											<option value="">Inherit</option>
											<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 16+1 - (9) : 9-(16)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 9, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
											<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php }} ?>
										</select>	<a href="#" class="clear-bg"><span class="icon icon-eraser"></span></a>
	                                  </div>
	                                  <?php } else { ?>
	                                  <div class="form-group">
										<label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</label>
										<input value="" size="10" name="customize[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8', true);?>
][]" data-match="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8', true);?>
" type="text" class="input-setting" data-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['selector'], ENT_QUOTES, 'UTF-8', true);?>
" data-attrs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['attrs'], ENT_QUOTES, 'UTF-8', true);?>
"><a href="#" class="clear-bg"><span class="icon icon-eraser"></span></a>
									</div>
	                                  <?php }?>


									<?php } ?>
	                              </div>
	                            </div>
		                    </div>          	
		            	<?php } ?>
		           		 </div>
		            	<?php }?>
		            </div>
	           		<?php } ?>
		        </div>    	
		    </div>    


	</div>

</div></div></div>
</form>

</div>

</div>
 

 <script type="text/javascript">
$(document).ready( function(){
	 $('#pts-paneltool').PtsPanelTools({ url:'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customizeFolderURL']->value, ENT_QUOTES, 'UTF-8', true);?>
', 'profile': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedprofile']->value, ENT_QUOTES, 'UTF-8', true);?>
' } );
});
</script><?php }} ?>
