<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension
 * to newer versions in the future.
 * 
 * @category    Mrsgto
 * @package     Mrsgto_SyntaxHighlighter
 * @copyright   Copyright (c) 2013 Vincent Pietri http://www.marsgento.com
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mrsgto_SyntaxHighlighter_Helper_Data extends Mage_Core_Helper_Abstract
{
	/**
	 * Prepare variable wysiwyg config
	 *
	 * @param Varien_Object $config
	 * @return array
	 */
	public function getSyntaxHighlighterSettings($config)
	{
		$variableConfig = array();

		$preelementfixPlugin = array(array('name' => 'preelementfix',
				'src' => $this->getPreElemntFixJsPluginSrc()
		));
		
		$usePopupCode = true;
		
		if ($usePopupCode) {
			$syntaxPlugin = array(array('name' => 'syntaxhl',
					'src' => $this->getSyntaxHLJsPluginSrc()
			));
			
		} else {
			$syntaxPlugin = array(array('name' => 'codeformat',
					'src' => $this->getSyntaxHighlighterJsPluginSrc()
			));
		}
		
		
		$configPlugins = $config->getData('plugins');
		$configPlugins = array_merge($configPlugins, $preelementfixPlugin);
		$configPlugins = array_merge($configPlugins, $syntaxPlugin);
		$variableConfig['plugins'] = $configPlugins;
		
// 		$variableConfig['remove_linebreaks'] = 0;
// 		$variableConfig['convert_newlines_to_brs'] = 0;
		
		return $variableConfig;
	}
	
	/**
	 * Return url to wysiwyg plugin
	 *
	 * @return string
	 */
	public function getPreElemntFixJsPluginSrc()
	{
		$url = 'js/preelementfix/editor_plugin.js';
		
		return $this->getAdminJsPluginSrc($url);
		
	}

	public function getSyntaxHighlighterJsPluginSrc()
	{
		$url = 'js/codesyntax/editor_plugin.js';
	
		return $this->getAdminJsPluginSrc($url);
	
	}

	public function getSyntaxHLJsPluginSrc()
	{
		$url = 'js/syntaxhl/editor_plugin.js';
	
		return $this->getAdminJsPluginSrc($url);
	
	}
	public function getAdminJsPluginSrc($url)
	{
//         $design = Mage::getDesign();
//         $theme = $design->getTheme('skin');
        
//         if (empty($url) || !$design->validateFile($url, array('_type' => 'skin', '_theme' => $theme))) {
//             $theme = $design->getDefaultTheme();
//         }
        
//         return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB) . 'skin/' .
//             $design->getArea() . '/' . 
//             $design->getPackageName() . '/' . $theme . '/' .
//             'mrsgto/syntaxhighlighter' . '/' .
//             $url;	
        
        return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB) . 'skin/' .
        		'adminhtml' . '/' .
        		'base' . '/' . 'default' . '/' .
        		'mrsgto/syntaxhighlighter' . '/' .
        		$url;
	}
	
}