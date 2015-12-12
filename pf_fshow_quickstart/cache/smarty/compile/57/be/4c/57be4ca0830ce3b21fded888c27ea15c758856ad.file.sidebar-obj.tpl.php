<?php /* Smarty version Smarty-3.1.19, created on 2015-11-26 03:39:19
         compiled from "E:\Project\htdocs\pf_fshow_quickstart\themes\pf_fshow\sub\product\sidebar-obj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107885656c537240261-70681368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57be4ca0830ce3b21fded888c27ea15c758856ad' => 
    array (
      0 => 'E:\\Project\\htdocs\\pf_fshow_quickstart\\themes\\pf_fshow\\sub\\product\\sidebar-obj.tpl',
      1 => 1447227164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107885656c537240261-70681368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5656c53728e514_73121561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5656c53728e514_73121561')) {function content_5656c53728e514_73121561($_smarty_tpl) {?><ul class="list-unstyled products-block list">
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <li class="clearfix">
            <div class="product-block clearfix" itemscope itemtype="http://schema.org/Product">
                <div class="product-container media">
                    <a class="pull-left products-block-image img" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
">   <img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id_image,'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                    </a>
                    <div class="media-body">
                        <div class="product-content">
                            <h4 class="name media-heading">
                                <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->name), ENT_QUOTES, 'UTF-8', true),25,'...');?>
</a>
                            </h4>
                            <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price)||(isset($_smarty_tpl->tpl_vars['product']->value->available_for_order)&&$_smarty_tpl->tpl_vars['product']->value->available_for_order)))) {?>
                                <div class="content_price price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                        <span itemprop="price" class="product-price <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']) {?> new-price<?php }?>">
                                            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->price),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->price_tax_exc),$_smarty_tpl);?>
<?php }?>
                                        </span>
                                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value->specific_prices)&&$_smarty_tpl->tpl_vars['product']->value->specific_prices&&isset($_smarty_tpl->tpl_vars['product']->value->specific_prices['reduction'])&&$_smarty_tpl->tpl_vars['product']->value->specific_prices['reduction']>0) {?>
                                            <span class="old-price product-price">
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value->price_without_reduction),$_smarty_tpl);?>

                                            </span>
                                        <?php }?>
                                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
" />
                                    <?php }?>
                                </div>
                            <?php }?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </li>
    <?php } ?>
</ul><?php }} ?>
