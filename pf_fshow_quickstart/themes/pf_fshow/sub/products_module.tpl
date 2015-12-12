<div id="{$tabname|escape:'html':'UTF-8'}" class="widget-content boxcarousel owl-carousel-play" data-ride="owlcarousel">
 	{if count($items) > $columns}
	 	<div class="carousel-controls">
		 	<a class="carousel-control carousel-sm left left_carousel" href="#"><span class="icon-prev"></span></a>
			<a class="carousel-control carousel-sm right right_carousel" href="#"><span class="icon-next"></span></a>
		</div>
	{/if}
	<div class="owl-carousel product_list products-block {if isset($list_mode) && $list_mode}{$list_mode|escape:'html':'UTF-8'}{/if}" data-columns="{$columns|escape:'html':'UTF-8'}" data-pagination="false" data-navigation="true"
		{if isset($nbr_desktops)}data-desktop="[1200,{$nbr_desktops|escape:'html':'UTF-8'}]"{/if}
		{if isset($nbr_tablets)}data-desktopsmall="[992,{$nbr_tablets|escape:'html':'UTF-8'}]"{/if}
		{if isset($nbr_mobile)}data-tablet="[768,{$nbr_mobile|escape:'html':'UTF-8'}]"{/if}
		data-mobile="[480,1]">
	{foreach from=$items item=item name=item_name}
		<div class="item ajax_block_product">
			{if isset($is_pagebuilder)}
				{include file="{$list_mode_tpl}" product=$item}
			{else}
				{if isset($product_style) && !empty($product_style)}
					{include file="$tpl_dir./sub/product/{$product_style}.tpl" product=$item class=''}
				{else}
					{include file="$tpl_dir./sub/product/default.tpl" product=$item class=''}
				{/if}
			{/if}
		</div>
	{/foreach}
	</div>
</div>