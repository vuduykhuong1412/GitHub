{*
* Pts Prestashop Theme Framework for Prestashop 1.6.x
*
* @package   pspagebuilder
* @version   5.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if isset($products) && !empty($products)}
<div class="widget widget-products {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="title_block space-60">
		<span class="sub-title">{$sub_title|escape:'html':'UTF-8'}</span>
		<span class="blog_title">{$widget_heading|escape:'html':'UTF-8'}</span>
	</h4>
	{/if}
	{$scolumn=3}
	<div class="widget-inner block_content">
		{if isset($products) AND $products}
	 		{foreach from=$products item=product name=product_name}
	 			{if $smarty.foreach.product_name.first}
	 				<div class="products-style">
	 						{include file="$tpl_dir./sub/product/style-list.tpl" product=$product class=''}
	 				</div>
	 				<div class="row list-unstyled product_list products-block">
	 			{/if}
	 					<div class="col-xs-12 col-sm-6 col-md-{$scolumn|escape:'html':'UTF-8'} col-lg-{$scolumn|escape:'html':'UTF-8'}">
	 						{include file="$tpl_dir./sub/product/default.tpl" product=$product class=''}
	 					</div>
	 			{if $smarty.foreach.product_name.last}
	 				</div>
	 			{/if}
	 		{/foreach}
		{/if}
	</div>
</div>
{/if}