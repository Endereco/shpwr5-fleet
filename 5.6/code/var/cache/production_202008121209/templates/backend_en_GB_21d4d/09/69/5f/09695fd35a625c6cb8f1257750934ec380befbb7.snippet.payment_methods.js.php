<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:42
         compiled from "/var/www/html/shopware5_6/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/view/detail/payment_methods.js" */ ?>
<?php /*%%SmartyHeaderCode:6984052345f6ba78a09ffc9-97431230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09695fd35a625c6cb8f1257750934ec380befbb7' => 
    array (
      0 => '/var/www/html/shopware5_6/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/view/detail/payment_methods.js',
      1 => 1597226944,
      2 => 'file',
    ),
    'a097fda2a25e747dbce340ce3f51c91748e3aa8c' => 
    array (
      0 => '/var/www/html/shopware5_6/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/controller/detail.js',
      1 => 1597226944,
      2 => 'file',
    ),
    '26fe8cafc0aac689ad9c6bd28355bc6b78af184b' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/order/model/batch.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6984052345f6ba78a09ffc9-97431230',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78a0a5cf0_12109885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78a0a5cf0_12109885')) {function content_5f6ba78a0a5cf0_12109885($_smarty_tpl) {?>/**
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
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.Order.model.Batch', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.apps.Order.model.Order',

    /**
     * Add properties for the batch processing status
     * @array
     */
    fields: [
        //
        { name : 'success', type: 'bool', default: null },
        { name : 'errorMessage', type: 'string', useNull: true, default: null }
    ],
});
//
<?php }} ?>