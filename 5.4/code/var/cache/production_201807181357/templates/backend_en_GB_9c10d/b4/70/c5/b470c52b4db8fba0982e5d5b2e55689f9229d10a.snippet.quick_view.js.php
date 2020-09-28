<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/customer/model/quick_view.js" */ ?>
<?php /*%%SmartyHeaderCode:5201473475f6baa398ec352-47792521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b470c52b4db8fba0982e5d5b2e55689f9229d10a' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/customer/model/quick_view.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5201473475f6baa398ec352-47792521',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa398efeb4_21071086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa398efeb4_21071086')) {function content_5f6baa398efeb4_21071086($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

// 

/**
 * Shopware Model - Customer list backend module.
 *
 * The order model represents a single data row of the s_order or the Shopware\Models\Order\Order
 * doctrine mode which contains the head data about a shop order.
 */
// 
Ext.define('Shopware.apps.Customer.model.QuickView', {

    extend: 'Shopware.data.Model',

    fields: [
        // 
        { name: 'id', type: 'int' },
        { name: 'number', type: 'string' },
        { name: 'customerGroup', type: 'string' },
        { name: 'shop', type: 'string' },
        { name: 'attribute' },
        { name: 'active', type: 'bool' },
        { name: 'email', type: 'string' },
        { name: 'firstLogin', type: 'date' },
        { name: 'lastLogin', type: 'date' },
        { name: 'accountMode', type: 'int' },
        { name: 'newsletter', type: 'bool' },
        { name: 'lockedUntil', type: 'date' },
        { name: 'salutation', type: 'string' },
        { name: 'title', type: 'string' },
        { name: 'firstname', type: 'string' },
        { name: 'lastname', type: 'string' },
        { name: 'zipcode', type: 'string' },
        { name: 'city', type: 'string' },
        { name: 'company', type: 'string' },
        { name: 'birthday', type: 'date', useNull: true }
    ],

    configure: function() {
        return {
            controller: 'CustomerQuickView'
        };
    }
});
// 
<?php }} ?>