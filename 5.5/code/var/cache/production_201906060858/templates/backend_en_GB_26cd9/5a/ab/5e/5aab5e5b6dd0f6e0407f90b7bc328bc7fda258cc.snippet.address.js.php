<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:19
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/customer/model/address.js" */ ?>
<?php /*%%SmartyHeaderCode:5105534745f6ba9cbbc13f3-38007129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aab5e5b6dd0f6e0407f90b7bc328bc7fda258cc' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/customer/model/address.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5105534745f6ba9cbbc13f3-38007129',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9cbbc5781_65041713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9cbbc5781_65041713')) {function content_5f6ba9cbbc5781_65041713($_smarty_tpl) {?>/**
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
 * The address model contains all fields for a single address.
 */
// 
Ext.define('Shopware.apps.Customer.model.Address', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'Address',
            detail: 'Shopware.apps.Customer.view.address.detail.Address'
        };
    },

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        // 
        { name: 'defaultAddress', type: 'string', useNull: true }, // fake field
        { name: 'setDefaultBillingAddress', type: 'boolean', useNull: true }, // fake field
        { name: 'setDefaultShippingAddress', type: 'boolean', useNull: true }, // fake field
        { name: 'user_id', type: 'string', useNull: true }, // fake field
        { name: 'company', type: 'string', useNull: true },
        { name: 'department', type: 'string', useNull: true },
        { name: 'vatId', type: 'string', useNull: true },
        { name: 'salutation', type: 'string' },
        { name: 'salutationSnippet', type: 'string', useNull: true },
        { name: 'title', type: 'string' },
        { name: 'firstname', type: 'string' },
        { name: 'lastname', type: 'string' },
        { name: 'street', type: 'string' },
        { name: 'zipcode', type: 'string' },
        { name: 'city', type: 'string' },
        { name: 'additionalAddressLine1', type: 'string', useNull: true },
        { name: 'additionalAddressLine2', type: 'string', useNull: true },
        { name: 'countryId', type: 'int' },
        { name: 'stateId', type: 'int', useNull: true },
        { name: 'phone', type: 'string', useNull: true }
    ],

    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Base.model.Customer', name: 'getCustomer', associationKey: 'customer' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.Country', name: 'getCountry', associationKey: 'country', relation: 'ManyToOne', field: 'countryId' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.CountryState', name: 'getState', associationKey: 'state', relation: 'ManyToOne', field: 'stateId' }
    ]

});
// 
<?php }} ?>