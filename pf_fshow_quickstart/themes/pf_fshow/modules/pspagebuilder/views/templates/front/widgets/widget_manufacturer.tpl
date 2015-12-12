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
<div class="widget-manufacture block {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="title_block">
		<span>{$widget_heading|escape:'html':'UTF-8'}</span>
	</h4>
	{/if}
	<div class="widget-inner block_content">
		{if isset($manufacturers) AND $manufacturers}
			{$tabname=rand()+count($manufacturers)}
			{if isset($display_mode) && $display_mode == 'carousel'}
				<div id="{$tabname|escape:'html':'UTF-8'}" class="widget-content boxcarousel owl-carousel-play" data-ride="owlcarousel">
				 	{if count($manufacturers) > $columns}
					 	<div class="carousel-controls">
						 	<a class="carousel-control carousel-sm left left_carousel" href="#"><span class="icon-prev"></span></a>
							<a class="carousel-control carousel-sm right right_carousel" href="#"><span class="icon-next"></span></a>
						</div>
					{/if}
					<div class="owl-carousel {if isset($list_mode) && $list_mode}{$list_mode|escape:'html':'UTF-8'}{/if}" data-columns="{$columns|escape:'html':'UTF-8'}" data-pagination="false" data-navigation="true"
						{if isset($nbr_desktops)}data-desktop="[1200,{$nbr_desktops|escape:'html':'UTF-8'}]"{/if}
						{if isset($nbr_tablets)}data-desktopsmall="[992,{$nbr_tablets|escape:'html':'UTF-8'}]"{/if}
						{if isset($nbr_mobile)}data-tablet="[768,{$nbr_mobile|escape:'html':'UTF-8'}]"{/if}
						data-mobile="[480,1]">
					{foreach from=$manufacturers item=item name=item_name}
						<div class="item ajax_block_product">
							{include file="{$list_mode_tpl}" product=$item}
						</div>
					{/foreach}
					</div>
				</div>
			{else}
				{include file="{$items_normal_tpl}" items=$manufacturers}
			{/if}
		{/if}
	</div>
</div>
	 		
