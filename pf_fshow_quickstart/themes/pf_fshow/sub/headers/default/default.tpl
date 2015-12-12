{**************************************
	     HEADER DEFAULT
***************************************}
	
	{plugin module='blocksearch' hook='displayTop'}

	<header id="header" class="header-default default">
		<div  id="header-main" class="header">
			<div class="container">
				<div class="row">
					<div class="leftbar col-xs-12 col-sm-6 col-md-6 col-lg-6">
				     	{plugin module='blockcontact' hook='displayNav'}
				    </div>
        		    <div id="topbar" class="topbar col-xs-12 col-sm-6 col-md-6 col-lg-6">
						{hook h="displayNav"}
					</div>	
						
				</div>
			</div>	
		</div>
	    <div  id="pts-mainnav">
	        <div class="container">
	        	<div class="wrap">
		        	<div class="inner">
			        	<div class="row">
						<!--     {if class_exists('PtsthemePanel')}
						    	<div class="left verticalmenu col-xs-12 col-sm-12 col-md-3 col-lg-3">
									{plugin module='ptsverticalmenu' hook='displayLeftColumn'}	
						    	</div>		
							{/if} -->
							<div id="header_logo" class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
								<div id="logo-theme" class="{if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}logo-theme{else}logo-store{/if}">
									<a href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}">
										<img class="logo img-responsive {if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}hidden{/if}" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"/>
									</a>
								</div>
							</div>
			        		<div class="main-menu col-xs-12 col-sm-6 col-md-8 col-lg-8">
						        {hook h="displayMainmenu"}
						    </div>

						    <div class="search col-xs-12 col-sm-3 col-md-2 col-lg-2">
							    <!--{if class_exists('PtsthemePanel')}
										{plugin module='ptsblocksearch' hook='displayTop'}				   
								{/if} -->
								{if isset($HOOK_TOP)}
									<div class="header-right">
										{$HOOK_TOP}
									</div>
								{/if}	
							</div>
						</div>
					</div>
				</div>
	        </div>
	    </div>
	</header>