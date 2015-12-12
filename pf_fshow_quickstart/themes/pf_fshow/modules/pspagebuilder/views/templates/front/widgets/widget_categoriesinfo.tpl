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
{if $categories_info}
<!-- Block categories module -->
<div class="block block-highlighted no-margin">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<div class="widget-heading title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</div>
	{/if}
	{$itemsperpage=4}
	{$scolumn=3}
	<div class="block_content boxcarousel">
		{$mcategories=array_chunk($categories_info, $itemsperpage)}
		{foreach from=$mcategories item=category name=mcategory_name}
			<ul class="category_list row item {if $smarty.foreach.mcategory_name.first}active{/if}">
				{foreach from=$category item=cat name=category_name}
					<li class="ajax_block_product col-xs-12 col-sm-3 col-md-{$scolumn|escape:'html':'UTF-8'} col-lg-{$scolumn|escape:'html':'UTF-8'}">
	
		                <div class="categories-right">
			                {if $show_cat_title}
			                	<h3><a href="{$link->getCategoryLink({$cat.id_category|escape:'htmlall':'UTF-8'})|escape:'htmlall':'UTF-8'}" title="{$cat.name|escape:'htmlall':'UTF-8'}">{$cat.name|escape:'html':'UTF-8'}</a></h3>
			                {/if}

			                {if $show_nb_product}
			                	<span>{$cat.nb_products|escape:'htmlall':'UTF-8'} {l s='Products' mod='pspagebuilder'}</span>
			                {/if}
			            </div>

			            {if $show_image && ($cat.id_image || (isset($cat.icon) && $cat.icon) || (isset($cat.icon_class) && $cat.icon_class))}
							<div class="categories-left">
								<a href="{$link->getCategoryLink({$cat.id_category|escape:'htmlall':'UTF-8'})|escape:'htmlall':'UTF-8'}" title="{$cat.name|escape:'htmlall':'UTF-8'}">
									{if isset($cat.icon) && $cat.icon}
										<img src="{$cat.icon|escape:'html':'UTF-8'}" alt="{$cat.name|escape:'html':'UTF-8'}" />
									{elseif isset($cat.icon_class) && $cat.icon_class}
										<icon class="{$cat.icon_class}"></icon>
									{elseif $cat.id_image}
		               		     		<img src="{$link->getCatImageLink($cat.link_rewrite, $cat.id_image, 'medium_default')|escape:'html':'UTF-8'}" alt="{$cat.name|escape:'html':'UTF-8'}" />
									{/if}
	               		     	</a>
		               		</div>
		                {/if}

		                {if $show_description}
		                    <span>{$cat.description|strip_tags:'UTF-8'|truncate:{$limit_description|escape:'htmlall':'UTF-8'}|escape:'htmlall':'UTF-8'}</span>
		                {/if}
		                {if $show_sub_category && $cat.subcategories}
		                    <ul>
		                    {foreach from=$cat.subcategories item=subcategory name=subcategory_name}
		                        <li><a href="{$link->getCategoryLink({$subcategory.id_category|escape:'htmlall':'UTF-8'})|escape:'htmlall':'UTF-8'}" title="{$subcategory.name|escape:'htmlall':'UTF-8'}">{$subcategory.name|escape:'htmlall':'UTF-8'}</a></li>
		                    {/foreach}
		                    </ul>
		                {/if}
		                {if $show_products && $cat.products}
		                    <div class="widget-inner block_content">
						 		{$tabname=rand()+count($cat.products)}
								{if isset($display_mode) && $display_mode == 'carousel'}
									{include file="{$items_owl_carousel_tpl}" items=$cat.products}
								{else}
									{include file="{$items_normal_tpl}" items=$cat.products}
								{/if}
							</div>
		                {/if}
					</li>
				{/foreach}
			</ul>
		{/foreach}
	</div>
</div>
<!-- /Block categories module -->
{/if}
