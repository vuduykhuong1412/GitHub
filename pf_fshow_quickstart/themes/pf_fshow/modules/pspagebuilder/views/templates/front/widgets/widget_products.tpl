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
		{if isset($sub_title) && $sub_title}
			<span class="sub-title">{$sub_title|escape:'html':'UTF-8'}</span>
		{/if}
		<span class="blog_title">{$widget_heading|escape:'html':'UTF-8'}</span>
		
		{if isset($description) && $description}
			{$description}{* HTML, cannot escape *}
		{/if}
	</h4>
	{/if}

		{if isset($banner_imagefile) && $banner_imagefile && $bannerurl}
			<div class="col-lg-3 col-md-3  col-xs-12 no-padding col-left effect-v10 hidden-sm">
				<img src="{$bannerurl|escape:'html':'UTF-8'}" alt="{if isset($widget_heading)&&!empty($widget_heading)}{$widget_heading|escape:'html':'UTF-8'}{else}banner{/if}">
			</div>
		{/if}


		{if isset($products) AND $products}
		    <div class="widget-inner block_content col-right {if isset($banner_imagefile) && $banner_imagefile && $bannerurl} col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding {else} col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding {/if}">
		 		{$tabname=rand()+count($products)}

				{if isset($display_mode) && $display_mode == 'carousel'}
					{include file="{$items_owl_carousel_tpl}" items=$products class="product_list products-block"}
				{else}
					{include file="{$items_normal_tpl}" items=$products class="product_list products-block"}
				{/if}
			</div>
		{/if}
</div>
{/if}