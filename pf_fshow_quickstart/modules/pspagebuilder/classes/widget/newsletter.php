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

class PsWidgetNewsletter extends PsWidgetPageBuilder {

	public $name = 'map';

	public static function getWidgetInfo()
	{
		return array('label' => 'Newsletter Form',
			'explain' => 'Create Newsletter Form Working With Newsletter Block Of Prestashop.', 'group' => 'prestashop');
	}

	public function renderForm($data)
	{
		$helper = $this->getFormHelper();

		$key = time();
		$this->fields_form[1]['form'] = array(
			'legend' => array(
				'title' => $this->l('Widget Form.'),
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Css Class'),
					'name' => 'class',
					'default' => 'pts-newsletter',
				),
				array(
					'type' => 'text',
					'label' => $this->l('Image File'),
					'name' => 'imagefile',
					'class' => 'imageupload',
					'default' => '',
					'id' => 'imagefile'.$key,
					'desc' => 'Put image folder in the image folder ROOT_SHOP_DIR/img/'
				),
				array(
					'type' => 'textarea',
					'label' => $this->l('Information'),
					'name' => 'information',
					'cols' => 20,
					'rows' => 10,
					'value' => true,
					'lang' => true,
					'default' => 'Sign up to our newsletter and get exclusive 
						deals you wont find anywhere else straight to your inbox!',
					'autoload_rte' => true,
				)
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
		return $helper->generateForm($this->fields_form).$string;
	}

	public function renderContent($setting)
	{
		$t = array(
			'class' => 'pts-newsletter',
			'imagefile' => ''
		);
		$setting = array_merge($t, $setting);

		$language_id = $this->lang_id;
		$setting['information'] = isset($setting['information_'.$language_id])
						? html_entity_decode($setting['information_'.$language_id], ENT_QUOTES, 'UTF-8') : '';

		$setting['background'] = _PAGEBUILDER_IMAGE_URL_.$setting['imagefile'];
		$output = array('type' => 'newsletter', 'data' => $setting);
		return $output;
	}

}
