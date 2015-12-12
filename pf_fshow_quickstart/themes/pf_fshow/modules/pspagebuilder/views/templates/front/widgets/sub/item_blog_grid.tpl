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
<div class="blog_container bg-white clearfix">
	{if $item.image && $show_image}
	<div class="blog-image">
		<a href="{$item.link|escape:'html':'UTF-8'}" title="{$item.title|escape:'html':'UTF-8'}" class="link">
			<img src="{$item.preview_url|escape:'html':'UTF-8'}" alt="" title="{$item.title|escape:'html':'UTF-8'}" class="img-responsive"/>
		</a>
	</div>
	{/if}
	<div class="blog-meta">
		{if $show_title_blog}
			<h5>
				<a href="{$item.link|escape:'html':'UTF-8'}" title="{$item.title|escape:'html':'UTF-8'}">{$item.title|escape:'html':'UTF-8'}</a>
			</h5>
		{/if}
		{if $show_category}
			<span class="blog-cat"> <span class="icon-list">{l s='In' mod='pspagebuilder'}</span> 
				<a href="{$item.category_link|escape:'html':'UTF-8'}" title="{$item.category_title|escape:'html':'UTF-8'}">{$item.category_title|escape:'html':'UTF-8'}</a>
			</span>
		{/if}
		{if $show_dateadd}
			<span class="blog-created">
				<span class="day">{strtotime($item.date_add)|escape:'html':'UTF-8'|date_format:"%e"}</span>
				<span class="month">{strtotime($item.date_add)|escape:'html':'UTF-8'|date_format:"%B"}</span>
			</span>
		{/if}
		<span class="">/</span>
		{if $show_comment}<span class="blog-ctncomment">
			<span class=""> {l s='Comment' mod='pspagebuilder'}:</span> {$item.comment_count|escape:'html':'UTF-8'}</span>
		{/if}
		{if $show_description}
			<div class="blog-shortinfo">
				{$item.description|strip_tags|truncate:80|escape:'html':'UTF-8'}
			</div>
		{/if}
		{if $show_readmore}
			<div class="readmore">
					<a href="{$item.link|escape:'html':'UTF-8'}" title="{$item.title|escape:'html':'UTF-8'}" class="button text-white radius-6x btn-default">
					<span>{l s='Read more' mod='pspagebuilder'}</span></a>
			</div>
		{/if}
	</div>
</div>