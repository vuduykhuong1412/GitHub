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

{if isset($columns)}
	{assign var='nbItemsPerLine' value=12/$columns}
{else}
	{assign var='columns' value=4}
	{assign var='nbItemsPerLine' value=4}
{/if}
{if isset($nbr_desktops)}
	{assign var='nbItemsPerLineDesktop' value=12/$nbr_desktops}
{else}
	{assign var='nbItemsPerLineDesktop' value=4}
{/if}
{if isset($nbr_tablets)}
	{assign var='nbItemsPerLineTablet' value=12/$nbr_tablets}
{else}
	{assign var='nbItemsPerLineTablet' value=2}
{/if}
{if isset($nbr_mobile)}
	{assign var='nbItemsPerLineMobile' value=12/$nbr_mobile}
{else}
	{assign var='nbItemsPerLineMobile' value=1}
{/if}
<ul id="{$tabname|escape:'html':'UTF-8'}" class="list-unstyled product_list products-block row">
	{$mitems = array_chunk($items, $columns)}
	{foreach from=$mitems item=titems name=mitems_name}
		{foreach from=$titems item=item name=items_name}
			<li class="ajax_block_product col-lg-{$nbItemsPerLine|escape:'html':'UTF-8'} col-md-{$nbItemsPerLineDesktop|escape:'html':'UTF-8'} 
			col-sm-{$nbItemsPerLineTablet|escape:'html':'UTF-8'} col-xs-{$nbItemsPerLineMobile|escape:'html':'UTF-8'} ">
				{if isset($is_pagebuilder)}
					{include file="{$list_mode_tpl}" product=$item}
				{else}
					{if isset($product_style) && !empty($product_style)}
						{include file="$tpl_dir./sub/product/{$product_style}.tpl" product=$item class=''}
					{else}
						{include file="$tpl_dir./sub/product/default.tpl" product=$item class=''}
					{/if}
				{/if}
			</li>
		{/foreach}
	{/foreach}
</ul>
 