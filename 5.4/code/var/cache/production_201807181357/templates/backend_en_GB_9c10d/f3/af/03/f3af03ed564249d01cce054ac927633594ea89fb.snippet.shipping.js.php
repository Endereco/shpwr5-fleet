<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/customer/model/shipping.js" */ ?>
<?php /*%%SmartyHeaderCode:20595953305f6baa398ce604-99264076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3af03ed564249d01cce054ac927633594ea89fb' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/customer/model/shipping.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20595953305f6baa398ce604-99264076',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa398d0384_53535167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa398d0384_53535167')) {function content_5f6baa398d0384_53535167($_smarty_tpl) {?>/**
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
 * The shipping model represents a single data row of the s_user_shippingaddress table
 * or the Shopware\Models\Customer\Shipping doctrine model which contains the data about
 * the customer shipping address.
 */
// 
Ext.define('Shopware.apps.Customer.model.Shipping', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.apps.Base.model.Address',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        // 
        { name: 'stateId', type: 'int', useNull: true }
    ],

    /**
     * Copy properties from the new address structure to legacy shipping structure
     * @param Shopware.apps.Customer.model.Address
     * @returns Shopware.apps.Customer.model.Shipping
     */
    fromAddress: function (address) {
        this.set('company', address.get('company'));
        this.set('department', address.get('department'));
        this.set('salutation', address.get('salutation'));
        this.set('title', address.get('title'));
        this.set('firstName', address.get('firstname'));
        this.set('lastName', address.get('lastname'));
        this.set('street', address.get('street'));
        this.set('city', address.get('city'));
        this.set('zipCode', address.get('zipcode'));
        this.set('additionalAddressLine1', address.get('additionalAddressLine1'));
        this.set('additionalAddressLine2', address.get('additionalAddressLine2'));
        this.set('countryId', address.get('country_id'));
        this.set('stateId', address.get('state_id'));

        return this;
    }

});
// 
<?php }} ?>