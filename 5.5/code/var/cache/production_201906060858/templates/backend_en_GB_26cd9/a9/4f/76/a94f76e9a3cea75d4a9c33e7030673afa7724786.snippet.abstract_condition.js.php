<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:19
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/product_stream/view/condition_list/condition/abstract_condition.js" */ ?>
<?php /*%%SmartyHeaderCode:3380861025f6ba9cbbd7395-88272068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a94f76e9a3cea75d4a9c33e7030673afa7724786' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/product_stream/view/condition_list/condition/abstract_condition.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3380861025f6ba9cbbd7395-88272068',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9cbbd8169_86730804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9cbbd8169_86730804')) {function content_5f6ba9cbbd8169_86730804($_smarty_tpl) {?>/**
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