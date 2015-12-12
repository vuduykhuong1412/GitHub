<?php
/**
 * Pts Prestashop Theme Framework for Prestashop 1.6.x
 *
 * @package   pspagebuilder
 * @version   5.0
 * @author    http://www.prestabrain.com
 * @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
 *               <info@prestabrain.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */

class PsWidgetProductcategory extends PsWidgetPageBuilder {

	public $name = 'productcategory';
	public $group = 'product';

	public static function getWidgetInfo()
	{
		return array('label' => ('Products By Category ID'), 'explain' => 'Created Product List From Category ID', 'group' => 'prestashop');
	}

	public function renderForm($data)
	{
		$helper = $this->getFormHelper();
		$lists = array(
			array('value' => 'grid', 'text' => $this->l('Grid')),
			array('value' => 'list1', 'text' => $this->l('List 1')),
			array('value' => 'list2', 'text' => $this->l('List 2')),
		);
		$modes = array(
			array('value' => 'normal', 'text' => $this->l('Normal')),
			array('value' => 'carousel', 'text' => $this->l('Carousel'))
		);
		$this->fields_form[1]['form'] = array(
			'legend' => array(
				'title' => $this->l('Widget Form.'),
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Category ID'),
					'name' => 'category_id',
					'default' => 5,
				),
				array(
					'type' => 'text',
					'label' => $this->l('Limit'),
					'name' => 'limit',
					'default' => 8,
				),
				array(
					'type' => 'text',
					'label' => $this->l('Banner'),
					'name' => 'banner_imagefile',
					'class' => 'imageupload',
					'default' => '',
					'id' => 'banner_imagefile'.$key,
					'desc' => 'Put image folder in the image folder ROOT_SHOP_DIR/img/'
				),
				array(
					'type' => 'select',
					'label' => $this->l('Display Mode'),
					'name' => 'display_mode',
					'options' => array('query' => $modes,
						'id' => 'value',
						'name' => 'text'),
					'default' => 'carousel',
				),
				array(
					'type' => 'text',
					'label' => $this->l('Number Columns On Large Desktops.'),
					'name' => 'columns',
					'desc' => $this->l('The maximum column items  in tab.'),
					'default' => '4'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Number Columns On Small Desktops'),
					'name' => 'nbr_desktops',
					'default' => '4'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Number Columns On Tablets'),
					'name' => 'nbr_tablets',
					'default' => '2'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Number Columns On Mobile'),
					'name' => 'nbr_mobile',
					'default' => '1'
				),
				array(
					'type' => 'select',
					'label' => $this->l('List Mode'),
					'name' => 'list_mode',
					'options' => array('query' => $lists,
						'id' => 'value',
						'name' => 'text'),
					'default' => 'grid',
				),
			),
			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'button'
			)
		);

		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

		$helper->tpl_vars = array(
			'fields_value' => $this->getConfigFieldsValues($data),
			'languages' => Context::getContext()->controller->getLanguages(),
			'id_language' => $default_lang
		);

		$string = '
				 <script type="text/javascript">
					$(".imageupload").WPO_Gallery({gallery:false});
				</script>
	 
		';

//		return $helper->generateForm($this->fields_form);
		return '<div id="imageslist'.$key.'">'.$helper->generateForm($this->fields_form).$string.'</div>';
	}

	public function renderContent($setting)
	{
		$t = array(
			'category_id' => '',
			'limit' => '12',
			'image_width' => '200',
			'image_height' => '200',
			'image' => '',
			'banner_imagefile' => '',
			'imageurl' => '',

			'columns' => 4,
			'list_mode' => 'grid',
			'display_mode' => 'carousel',
			'nbr_desktops' => 4,
			'nbr_tablets' => 2,
			'nbr_mobile' => 1,
		);
		$setting = array_merge($t, $setting);
		$nb = (int)$setting['limit'];
        
        if ($setting['banner_imagefile'])
		$setting['bannerurl'] = _PAGEBUILDER_IMAGE_URL_.$setting['banner_imagefile'];

		$category = new Category($setting['category_id'], $this->lang_id);
		$products = $category->getProducts((int)$this->lang_id, 1, ($nb ? $nb : 8));

		$setting['list_mode_tpl'] = $this->getProductListStyleFile($setting['list_mode'], $setting['product_style']);

		$setting['products'] = $products;
		$output = array('type' => 'products', 'data' => $setting);

		return $output;
	}

}
