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

/**
 * SyntaxHighlighter observer
 *
 * @category    Mrsgto
 * @package     Mrsgto_SyntaxHighlighter
 * @author      Marsgento Dev Team <dev@marsgento.com>
 */
class Mrsgto_SyntaxHighlighter_Model_Observer
{
    /**
     * Add variable wysiwyg plugin config
     *
     * @param Varien_Event_Observer $observer
     * @return Mage_Core_Model_Variable_Observer
     */
    public function prepareSyntaxHighlighterPluginConfig(Varien_Event_Observer $observer)
    {
    	
        $config = $observer->getEvent()->getConfig();

        $variableConfig = Mage::helper('mrsgto_syntaxhighlighter')->getSyntaxHighlighterSettings($config);
        
        $config->addData($variableConfig);
        
        return $this;
    }
}
