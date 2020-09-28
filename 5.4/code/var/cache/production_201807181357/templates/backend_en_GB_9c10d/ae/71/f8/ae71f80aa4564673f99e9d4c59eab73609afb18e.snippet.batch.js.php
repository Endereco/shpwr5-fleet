<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/customer/model/batch.js" */ ?>
<?php /*%%SmartyHeaderCode:14131359825f6baa398e2ae8-32307150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae71f80aa4564673f99e9d4c59eab73609afb18e' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/customer/model/batch.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14131359825f6baa398e2ae8-32307150',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa398e5151_36290072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa398e5151_36290072')) {function content_5f6baa398e5151_36290072($_smarty_tpl) {?>/**
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
 * The customer model of the customer module represent a data row of the s_user or the
 * Shopware\Models\Customer\Customer doctrine model, with some additional data for the additional information panel.
 */
// 
Ext.define('Shopware.apps.Customer.model.Batch', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',
    /**
     * Contains the model fields
     * @array
     */
    fields: [
        // 
        { name: 'id', type: 'int' }
    ],

    /**
     * Define the associations of the customer model.
     * One customer has a billing, shipping address and a debit information.
     * @array
     */
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Base.model.OrderStatus', name: 'getOrderStatus', associationKey: 'orderStatus' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.PaymentStatus', name: 'getPaymentStatus', associationKey: 'paymentStatus' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.Payment', name: 'getPayment', associationKey: 'payment' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.Dispatch', name: 'getDispatch', associationKey: 'dispatch' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.Shop', name: 'getShop', associationKey: 'shop' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.Country', name: 'getCountry', associationKey: 'country' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.CustomerGroup', name: 'getCustomerGroup', associationKey: 'customerGroup' }
    ]

});
// 
<?php }} ?>