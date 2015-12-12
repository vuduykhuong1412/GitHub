{if !empty($products)}
	<div class="product-block clearfix" >
		<div class="product-container media" itemscope="" itemtype="http://schema.org/Product">
			<div class="product-image-container image col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<a class="img product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
					<img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'large_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" />
				</a>
						
			</div>
			<div class="media-body products-block col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="product-content">
                    <h4 class="name media-heading" itemprop="name">
                       {if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}
							<a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
								{$product.name|truncate:45:'...'|escape:'html':'UTF-8'}
							</a>
                    </h4>

                    <div class="product-desc description" itemprop="description">
						{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}
					</div>

                    {if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
						<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price price">
							{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
								<span itemprop="price" class="product-price {if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}new-price {/if}">
									{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
								</span>
								{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
									<span class="old-price">
										{displayWtPrice p=$product.price_without_reduction}
									</span>
									
								{/if}
								<meta itemprop="priceCurrency" content="{$priceDisplay}" />								
							{/if}
						</div>
					{/if}

					{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.customizable != 2 && !$PS_CATALOG_MODE}
						<div class="addtocart">
							{if (!isset($product.customization_required) || !$product.customization_required) && ($product.allow_oosp || $product.quantity > 0)}
								{capture}add=1&amp;id_product={$product.id_product|intval}{if isset($static_token)}&amp;token={$static_token}{/if}{/capture}
								<a class="button radius-6x ajax_add_to_cart_button btn"  href="{$link->getPageLink('cart', true, NULL, $smarty.capture.default, false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}" data-minimal_quantity="{if isset($product.product_attribute_minimal_quantity) && $product.product_attribute_minimal_quantity >= 1}{$product.product_attribute_minimal_quantity|intval}{else}{$product.minimal_quantity|intval}{/if}">
									<i class="icon icon-cart-plus hidden"></i><span>{l s='Add to cart'}</span>
								</a>
							{else}
								<a class="button ajax_add_to_cart_button btn disabled"  title="{l s='Add to cart'}" href="#">
									<i class="icon icon-cart-plus"></i><span>{l s='Add to cart'}</span>
								</a>
							{/if}
						</div>
					{/if}
                   <!-- {hook h='displayProductListReviews' product=$product} -->
           
                </div>
            </div>
						
		</div><!-- .product-container> -->
	</div>				
{/if}