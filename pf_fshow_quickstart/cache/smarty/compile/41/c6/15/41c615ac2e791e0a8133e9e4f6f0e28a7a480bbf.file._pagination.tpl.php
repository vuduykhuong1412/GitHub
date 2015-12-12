<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 21:45:41
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\modules\leoblog\views\templates\front\default\_pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17342566b8a55e632c0-47087210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41c615ac2e791e0a8133e9e4f6f0e28a7a480bbf' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\modules\\leoblog\\views\\templates\\front\\default\\_pagination.tpl',
      1 => 1447226852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17342566b8a55e632c0-47087210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'no_follow' => 0,
    'p' => 0,
    'paginationId' => 0,
    'start' => 0,
    'stop' => 0,
    'no_follow_text' => 0,
    'requestPage' => 0,
    'p_previous' => 0,
    'link' => 0,
    'pages_nb' => 0,
    'p_next' => 0,
    'n' => 0,
    'nb_items' => 0,
    'blogShowingStart' => 0,
    'blogShowing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566b8a5602e362_94134162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566b8a5602e362_94134162')) {function content_566b8a5602e362_94134162($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['no_follow']->value)&&$_smarty_tpl->tpl_vars['no_follow']->value) {?>
	<?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('rel="nofollow"', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['p']->value)&&$_smarty_tpl->tpl_vars['p']->value) {?>
	 

	<!-- Pagination -->
	<div id="pagination<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationId']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="pagination clearfix">
     
	<?php if ($_smarty_tpl->tpl_vars['start']->value!=$_smarty_tpl->tpl_vars['stop']->value) {?>
		<ul class="pagination">
		<?php if ($_smarty_tpl->tpl_vars['p']->value!=1) {?>
			<?php $_smarty_tpl->tpl_vars['p_previous'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value-1, null, 0);?>
			<li id="pagination_previous<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationId']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="pagination_previous">
				<a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_follow_text']->value, ENT_QUOTES, 'UTF-8', true);?>
 href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_previous']->value), ENT_QUOTES, 'UTF-8', true);?>
">
					<i class="icon-chevron-left"></i> <b><?php echo smartyTranslate(array('s'=>'Previous','mod'=>'leoblog'),$_smarty_tpl);?>
</b></a>
			</li>
		<?php } else { ?>
			<li id="pagination_previous<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationId']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="disabled pagination_previous"><span><i class="icon-chevron-left"></i> <b><?php echo smartyTranslate(array('s'=>'Previous','mod'=>'leoblog'),$_smarty_tpl);?>
</b></span></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['start']->value==3) {?>
			<li><a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_follow_text']->value, ENT_QUOTES, 'UTF-8', true);?>
  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1), ENT_QUOTES, 'UTF-8', true);?>
"><span>1</span></a></li>
			<li><a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_follow_text']->value, ENT_QUOTES, 'UTF-8', true);?>
  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,2), ENT_QUOTES, 'UTF-8', true);?>
"><span>2</span></a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['start']->value==2) {?>
			<li><a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_follow_text']->value, ENT_QUOTES, 'UTF-8', true);?>
  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1), ENT_QUOTES, 'UTF-8', true);?>
"><span>1</span></a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['start']->value>3) {?>
			<li><a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_follow_text']->value, ENT_QUOTES, 'UTF-8', true);?>
  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1), ENT_QUOTES, 'UTF-8', true);?>
"><span>1</span></a></li>
			<li class="truncate"><span><span>...</span></span></li>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['name'] = 'pagination';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = (int) $_smarty_tpl->tpl_vars['start']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['stop']->value+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total']);
?>
			<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']) {?>
				<li class="active current"><span><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></span></li>
			<?php } else { ?>
				<li><a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_follow_text']->value, ENT_QUOTES, 'UTF-8', true);?>
 href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index'], ENT_QUOTES, 'UTF-8', true);?>
</span></a></li>
			<?php }?>
		<?php endfor; endif; ?>
		<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value>$_smarty_tpl->tpl_vars['stop']->value+2) {?>
			<li class="truncate"><span><span>...</span></span></li>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo intval($_smarty_tpl->tpl_vars['pages_nb']->value);?>
</span></a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value==$_smarty_tpl->tpl_vars['stop']->value+1) {?>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo intval($_smarty_tpl->tpl_vars['pages_nb']->value);?>
</span></a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value==$_smarty_tpl->tpl_vars['stop']->value+2) {?>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value-1), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo $_smarty_tpl->tpl_vars['pages_nb']->value-intval(1);?>
</span></a></li>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo intval($_smarty_tpl->tpl_vars['pages_nb']->value);?>
</span></a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value>1&&$_smarty_tpl->tpl_vars['p']->value!=$_smarty_tpl->tpl_vars['pages_nb']->value) {?>
			<?php $_smarty_tpl->tpl_vars['p_next'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value+1, null, 0);?>
			<li id="pagination_next<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationId']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="pagination_next"><a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_follow_text']->value, ENT_QUOTES, 'UTF-8', true);?>
 href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_next']->value), ENT_QUOTES, 'UTF-8', true);?>
"><b><?php echo smartyTranslate(array('s'=>'Next','mod'=>'leoblog'),$_smarty_tpl);?>
</b> <i class="icon-chevron-right"></i></a></li>
		<?php } else { ?>
			<li id="pagination_next<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationId']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="disabled pagination_next"><span><b><?php echo smartyTranslate(array('s'=>'Next','mod'=>'leoblog'),$_smarty_tpl);?>
</b> <i class="icon-chevron-right"></i></span></li>
		<?php }?>
		</ul>
	<?php }?>
	</div>
    
    <div class="product-count">
    	<?php if (($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)<$_smarty_tpl->tpl_vars['nb_items']->value) {?>
    		<?php $_smarty_tpl->tpl_vars['blogShowing'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value, null, 0);?>
        <?php } else { ?>
        	<?php $_smarty_tpl->tpl_vars['blogShowing'] = new Smarty_variable(($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['nb_items']->value-$_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)*-1, null, 0);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['p']->value==1) {?>
        	<?php $_smarty_tpl->tpl_vars['blogShowingStart'] = new Smarty_variable(1, null, 0);?>
        <?php } else { ?>
        	<?php $_smarty_tpl->tpl_vars['blogShowingStart'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['nb_items']->value>1) {?>
        	<?php echo smartyTranslate(array('s'=>'Showing %1$d - %2$d of %3$d items','mod'=>'leoblog','sprintf'=>array($_smarty_tpl->tpl_vars['blogShowingStart']->value,$_smarty_tpl->tpl_vars['blogShowing']->value,$_smarty_tpl->tpl_vars['nb_items']->value)),$_smarty_tpl);?>

		<?php } else { ?>
        	<?php echo smartyTranslate(array('s'=>'Showing %1$d - %2$d of 1 item','mod'=>'leoblog','sprintf'=>array($_smarty_tpl->tpl_vars['blogShowingStart']->value,$_smarty_tpl->tpl_vars['blogShowing']->value)),$_smarty_tpl);?>

       	<?php }?>
    </div>

	<!-- /Pagination -->
<?php }?>
<?php }} ?>
