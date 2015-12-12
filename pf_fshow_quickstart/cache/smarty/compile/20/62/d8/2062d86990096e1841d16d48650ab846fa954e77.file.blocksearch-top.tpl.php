<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 03:21:26
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5508564ed8066dc275-94415768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2062d86990096e1841d16d48650ab846fa954e77' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1447407534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5508564ed8066dc275-94415768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ed80671aa43_01286640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ed80671aa43_01286640')) {function content_564ed80671aa43_01286640($_smarty_tpl) {?>
<!-- Block search module TOP -->

<div class="block-search">
	<div class="btn-group search-focus">
		<div class="dropdown-toggle btn-theme-normal">
			<span class="text-label title hidden"><?php echo smartyTranslate(array('s'=>'SEARCH','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
		</div>
	</div>
	<div style="" id="search_block_top" class="inner nav-search visible">
		<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
			<div class="input-group">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				<input id="search_query_top" class="search-control search_query form-control ac_input" type="text" placeholder="<?php echo smartyTranslate(array('s'=>'Enter keyword here...','mod'=>'blocksearch'),$_smarty_tpl);?>
" id="search_query_top" name="search_query" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"  />
				<span class="input-group-addon button-close">
					<i class="icon-times"></i>
				</span>
			</div>	
		</form>
	</div>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
