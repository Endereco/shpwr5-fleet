<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:55
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/product_stream/view/condition_list/condition/abstract_condition.js" */ ?>
<?php /*%%SmartyHeaderCode:11260201365f6baaa31b2b21-90955469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3366cdfd87f2af1ac9f049c5d47099753a076f4b' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/product_stream/view/condition_list/condition/abstract_condition.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11260201365f6baaa31b2b21-90955469',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa31b3904_09946728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa31b3904_09946728')) {function content_5f6baaa31b3904_09946728($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    ProductStream
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.condition_list.condition.AbstractCondition', {
    alternateClassName: 'ProductStream.filter.AbstractCondition',

    getLabel: function() {
        throw 'Unimplemented method.';
    },

    isSingleton: function() {
        throw 'Unimplemented method.';
    },

    create: function(callback, container, conditions) {
        throw 'Unimplemented method.';
    },

    load: function(key, value, container) {
        throw 'Unimplemented method.';
    }
});
//<?php }} ?>