{*
* Pts Prestashop Theme Framework for Prestashop 1.6.x
*
* @package   psverticalmenu
* @version   1.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if isset($links)}
<div class="widget-links">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<div class="widget_heading title_block">
		{$widget_heading|escape:'htmlall':'UTF-8'}
	</div>
	{/if}
	<div class="widget-inner block_content">	
		<div id="tabs{$id|escape:'htmlall':'UTF-8'}" class="panel-group">
			<ul class="nav-links">
			  {foreach $links as $key => $ac}  
			  <li ><a href="{$ac.link|escape:'html':'UTF-8'}" >{$ac.text|escape:'htmlall':'UTF-8'}</a></li>
			  {/foreach}
			</ul>
	</div></div>
</div>
{/if}


