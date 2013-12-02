<?php
/**
 * Marsgento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@marsgento.com.com so we can send you a copy immediately.
 * 
 * @category    Mrsgto
 * @package     Mrsgto_SyntaxHighlighter
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mrsgto_SyntaxHighlighter_Block_Highlight extends Mage_Core_Block_Template
{


    protected function _prepareLayout()
    {
    	$cssList=array('shCore.css', 'shThemeDefault.css');
    	$cssList=array('shCoreEclipse.css', 'shThemeEclipse.css');
    	 
    	$jsList=array('shCore.js', 'shAutoloader.js');
    	//$jsList[] = 'shBrushJScript.js';
    	
    	foreach($jsList as $js) {
	    	$this->getLayout()
	    	     ->getBlock('head')
	    	     ->addItem('skin_js', 'mrsgto_syntaxhighlighter/scripts/' . $js);
    	}
    	
    	foreach($cssList as $css) {
    		$this->getLayout()
    		->getBlock('head')
    		->addItem('skin_css', 'mrsgto_syntaxhighlighter/styles/' . $css);
    	}
    	
        return parent::_prepareLayout();
    }
    
    public function getJsScriptsBasPath()
    {
    	$designPackage = Mage::getDesign();
    	
    	return $designPackage->getSkinUrl('mrsgto_syntaxhighlighter/scripts/');
    }

}
 
