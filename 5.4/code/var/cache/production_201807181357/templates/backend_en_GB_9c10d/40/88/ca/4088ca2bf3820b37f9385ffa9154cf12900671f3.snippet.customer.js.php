<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/customer/model/customer.js" */ ?>
<?php /*%%SmartyHeaderCode:14297612005f6baa398c26b3-24100262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4088ca2bf3820b37f9385ffa9154cf12900671f3' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/customer/model/customer.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14297612005f6baa398c26b3-24100262',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa398c9294_92436282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa398c9294_92436282')) {function content_5f6baa398c9294_92436282($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Customer.model.Customer', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.apps.Base.model.Customer',
    /**
     * Contains the model fields
     * @array
     */
    fields: [
        // 
        { name: 'newPassword', type: 'string' },
        { name: 'amount', type: 'float' },
        { name: 'orderCount', type: 'int' },
        { name: 'failedLogins', type: 'int' },
        { name: 'canceledOrderAmount', type: 'float' },
        { name: 'shopName', type: 'string' },
        { name: 'language', type: 'string' },
        { name: 'birthday', type: 'date', dateFormat: 'd.m.Y' },
        { name: 'title', type: 'string' },
        { name: 'salutation', type: 'string' },
        { name: 'firstname', type: 'string' },
        { name: 'lastname', type: 'string' },
        { name: 'title', type: 'string' },
        { name: 'number', type: 'string' },
        { name: 'serverTime', type: 'date', defaultValue: null },
        {
            name: 'lockedUntil',
            type: 'date',
            defaultValue: null,
            convert: function (value, record) {
                if (record.get('serverTime') === null || value === null || !Ext.isDefined(record.get('serverTime'))) {
                    return value;
                }

                if (record.get('serverTime').getTime() >= value.getTime()) {
                    return null;
                }

                return value;
            }
        },
        { name: 'customerStreamIds', type: 'string' }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy: {
        /**
         * Set proxy type to ajax
         * @string
         */
        type: 'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api: {
            read: '<?php echo '/shopware5_4/backend/customer/getDetail';?>',
            update: '<?php echo '/shopware5_4/backend/customer/save';?>',
            create: '<?php echo '/shopware5_4/backend/customer/save';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }

    },

    /**
     * Define the associations of the customer model.
     * One customer has a billing, shipping address and a debit information.
     * @array
     */
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Customer.model.Billing', name: 'getBilling', associationKey: 'billing' },
        { type: 'hasMany', model: 'Shopware.apps.Customer.model.Shipping', name: 'getShipping', associationKey: 'shipping' },
        { type: 'hasMany', model: 'Shopware.apps.Customer.model.Debit', name: 'getDebit', associationKey: 'debit' },
        { type: 'hasMany', model: 'Shopware.apps.Customer.model.PaymentData', name: 'getPaymentData', associationKey: 'paymentData' }
    ]

});
// 
<?php }} ?>