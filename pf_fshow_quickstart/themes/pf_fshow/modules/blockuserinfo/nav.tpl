
		<div class="btn-group group-userinfo">
			<ul class="list-inline">
				<li id="header_user">
					<!-- Block user information module NAV  -->
					<ul class="list-style list-inline content_top">
						{if $logged}
							<li>	
								<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span class="icon icon-user"></span>&nbsp;&nbsp;<span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
								<a href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" title="{l s='Log me out' mod='blockuserinfo'}" class="logout" rel="nofollow">({l s='Log out' mod='blockuserinfo'})</a>
							</li>
						{else}
							<li>
								<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='Login to your customer account' mod='blockuserinfo'}" rel="nofollow"><span class="icon icon-user"></span>&nbsp;&nbsp;{l s='Login' mod='blockuserinfo'}</a>
							</li>
						{/if}


						<li class="hidden-xs">
						<!--	<a data-toggle="dropdown" class="dropdown-toggle"> 
								<span>{l s='Settings' mod='blockuserinfo'}</span> 
								<span class="icon-angle-down"></span>			
							</a>  -->
							<div class="group-title current"> 
								<span class="icon-cog"></span>
								<span>{l s='Settings' mod='blockuserinfo'}</span> 
								<span class="icon-angle-down"></span>			
							</div> 

							<ul class="toogle_content">
								<!-- <li class="first">
									<a href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|addslashes|escape:'html':'UTF-8'}" title="{l s='My wishlists' mod='blockuserinfo'}"><i class="icon-heart-o"></i>{l s='Wish List' mod='blockuserinfo'}</a>
								</li> -->

								<li class="first">
									<a href="{$link->getPageLink('products-comparison')|escape:'html':'UTF-8'}" title="{l s='Compare' mod='blockuserinfo'}">
									   {l s='Compare' mod='blockuserinfo'}</a>
								</li>
								
							<!--	{if $is_logged}
									<li><a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
										{l s='Sign out' mod='blockuserinfo'}
									</a></li>
								{else}
									<li><a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Login to your customer account' mod='blockuserinfo'}">
										{l s='Sign in' mod='blockuserinfo'}
									</a></li>
								{/if}  -->

								<li>
									<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='My account' mod='blockmyaccount'}">
										{l s='My Account' mod='blockuserinfo'}</a>
								</li>
								<li class="last"><a href="{$link->getPageLink($order_process, true)|escape:'html':'UTF-8'}" title="{l s='Checkout' mod='blockuserinfo'}" class="last">{l s='Checkout' mod='blockuserinfo'}</a></li>
								
							</ul>
						</li>

					</ul>
				</li>			
			</ul>
		</div>	
