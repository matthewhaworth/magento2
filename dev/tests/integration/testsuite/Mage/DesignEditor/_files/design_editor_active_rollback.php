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
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Mage_DesignEditor
 * @subpackage  integration_tests
 * @copyright   Copyright (c) 2012 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
/** @var $session Mage_DesignEditor_Model_Session */
$session = Mage::getModel('Mage_DesignEditor_Model_Session');
/** @var $auth Mage_Backend_Model_Auth */
$auth = Mage::getModel('Mage_Backend_Model_Auth');
$auth->setAuthStorage($session);
$session->deactivateDesignEditor();
$auth->logout();
$session->unsThemeId();
/** @var $theme Mage_Core_Model_Theme */
$theme = Mage::getModel('Mage_Core_Model_Theme');
$theme->load($session->getThemeId())->delete();
