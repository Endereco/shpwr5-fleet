<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:41
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/order/model/payment_instance.js" */ ?>
<?php /*%%SmartyHeaderCode:6664872745f6ba789cbb049-85815059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2a1aa9d7e3d4699586d1ae26d15b129dfea8cba' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/order/model/payment_instance.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6664872745f6ba789cbb049-85815059',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba789cbe256_27318382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba789cbe256_27318382')) {function content_5f6ba789cbe256_27318382($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage Model
 * @version    $Id$
 * @author     shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 */
//
Ext.define('Shopware.apps.Order.model.PaymentInstance', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    idProperty:'id',

    /**
     * One or more BelongsTo associations for this model.
     * @string
     */
    belongsTo: 'Shopware.apps.Order.model.Order',

    fields:[
        //
        { name:'id', type: 'int' },
        { name:'firstname', type: 'string' },
        { name:'lastname', type: 'string' },
        { name:'address', type: 'string' },
        { name:'zipcode', type: 'string' },
        { name:'city', type: 'string' },
        { name:'accountNumber', type: 'string' },
        { name:'accountHolder', type: 'string' },
        { name:'bankName', type: 'string' },
        { name:'bankCode', type: 'string' },
        { name:'bic', type: 'string' },
        { name:'iban', type: 'string' },
        { name:'amount', type: 'string' }
    ]
});
//
<?php }} ?>