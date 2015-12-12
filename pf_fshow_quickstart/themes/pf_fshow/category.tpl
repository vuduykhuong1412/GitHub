{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{include file="$tpl_dir./errors.tpl"}
{if isset($category)}
    {if $category->id AND $category->active}
 
    <div class="categories space-top-40 clearfix">
        <h1 class="page-heading{if (isset($subcategories) && !$products) || (isset($subcategories) && $products) || !isset($subcategories) && $products} product-listing hidden{/if}">{$category->name|escape:'html':'UTF-8'}{if isset($categoryNameComplement)}&nbsp;{$categoryNameComplement|escape:'html':'UTF-8'}{/if}
            {include file="$tpl_dir./category-count.tpl"}
        </h1>
        {if $scenes || $category->description || $category->id_image}
            <div class="content_scene_cat row">

            <div class="col-xs-12 col-lg-12 col-md-6 col-sm-12 ">
                {if $scenes}
                    <div class="content_scene">
                        <!-- Scenes -->
                        {include file="$tpl_dir./scenes.tpl" scenes=$scenes}
                        {if $category->description}
                            <div class="cat_desc rte">
                                {if Tools::strlen($category->description) > 350}
                                    <div id="category_description_short">{$description_short}</div>
                                    <div id="category_description_full" class="unvisible">{$category->description}</div>
                                    <a href="{$link->getCategoryLink($category->id_category, $category->link_rewrite)|escape:'html':'UTF-8'}" class="lnk_more">{l s='More'}</a>
                                {else}
                                    <div>{$category->description}</div>
                                {/if}
                            </div>
                        {/if}
                    </div>
                {else}
                    <!-- Category image -->
                    <div class="content_scene_cat_bg">
                        <img class="img-responsive" src="{$link->getCatImageLink($category->link_rewrite, $category->id_image, 'category_default')|escape:'html':'UTF-8'}"  itemprop="image" />
                    </div>                   
                {/if}
            </div>
            <div class="col-xs-12 col-lg-12 col-md-6 col-sm-12">

                {if $category->description}
                   <div class="cat_desc bg-white">
                       {if strlen($category->description) > 350}
                        <div id="category_description_short" class="rte">{$description_short}</div>
                        <div id="category_description_full" class="unvisible rte">{$category->description}</div>                         
                       {else}
                           <div class="rte">{$category->description}</div>
                       {/if}
                   </div>
               {/if}

                {if isset($subcategories)}
                    {if (isset($display_subcategories) && $display_subcategories eq 1) || !isset($display_subcategories) }
                    <!-- Subcategories -->
                        <div id="subcategories" class="bg-white clearfix">
                            <label>{l s='Subcategories :'}</label>
                            <ul>
                                {foreach from=$subcategories item=subcategory}
                                    <li>
                                        <div class="subcategory-image">
                                            <a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}" title="{$subcategory.name|escape:'html':'UTF-8'}" class="img">
                                            {if $subcategory.id_image}
                                                <img class="replace-2x" src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image, 'category_default')|escape:'html':'UTF-8'}" alt="{$subcategory.name|escape:'html':'UTF-8'}" />
                                            {else}
                                                <img class="replace-2x" src="{$img_cat_dir}{$lang_iso}-default-category_default.jpg" alt="{$subcategory.name|escape:'html':'UTF-8'}" />
                                            {/if}
                                        </a>
                                        </div>
                                        <h5><a class="subcategory-name" href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}">{$subcategory.name|truncate:25:'...'|escape:'html':'UTF-8'|truncate:350}</a></h5>
                                    </li>
                                {/foreach}
                            </ul>
                        </div>
                    {/if}
                {/if}
            </div>

            </div>
        {/if}

    </div>
    {if $products}
        <div class="content_sortPagiBar product-filter clearfix">
            <div class="row">
                <div class="hidden-xs hidden-sm hidden-md hidden-lg">{include file="./nbr-product-page.tpl"}</div><!-- error pagination -->
                <div class="sortPagiBar col-lg-7 col-md-7 col-sm-7 ">
                    {include file="./product-sort.tpl"}
                    {include file="./product-compare.tpl"}
                </div>
                <div class="top-pagination-content col-lg-5 col-md-5 col-sm-5 ">
                   <div class="product-count">
                        {if ($n*$p) < $nb_products }
                            {assign var='productShowing' value=$n*$p}
                        {else}
                            {assign var='productShowing' value=($n*$p-$nb_products-$n*$p)*-1}
                        {/if}
                        {if $p==1}
                            {assign var='productShowingStart' value=1}
                        {else}
                            {assign var='productShowingStart' value=$n*$p-$n+1}
                        {/if}
                        {if $nb_products > 1}
                            {l s='Showing %1$d - %2$d of %3$d items' sprintf=[$productShowingStart, $productShowing, $nb_products]}
                        {else}
                            {l s='Showing %1$d - %2$d of 1 item' sprintf=[$productShowingStart, $productShowing]}
                        {/if}
                    </div>
                </div>
            </div>
        </div>
        {include file="./product-list.tpl" products=$products}
        <div class="bottom-pagination-content content_sortPagiBar clearfix">
             {include file="./pagination.tpl" paginationId='bottom'}
        </div>
    {/if}
    {elseif $category->id}
        <p class="alert alert-warning">{l s='This category is currently unavailable.'}</p>
    {/if}
{/if}