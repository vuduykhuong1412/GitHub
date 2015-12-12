<?php /* Smarty version Smarty-3.1.19, created on 2015-12-10 22:31:19
         compiled from "E:\Xampp\htdocs\pf_fshow_quickstart\themes\pf_fshow\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182215664f9d88b9517-62422221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d26c87612cd12a56d1e8dcca8dee5be47930fa' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1449803531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182215664f9d88b9517-62422221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5664f9d88e8ae2_39348204',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5664f9d88e8ae2_39348204')) {function content_5664f9d88e8ae2_39348204($_smarty_tpl) {?>
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
" name="search_query" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
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
