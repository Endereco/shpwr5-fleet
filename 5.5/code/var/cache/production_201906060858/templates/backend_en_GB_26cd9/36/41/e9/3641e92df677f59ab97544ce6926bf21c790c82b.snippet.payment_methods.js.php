<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:19
         compiled from "/var/www/html/shopware5_5/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/view/detail/payment_methods.js" */ ?>
<?php /*%%SmartyHeaderCode:20671084575f6ba9cbebdce4-48425728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3641e92df677f59ab97544ce6926bf21c790c82b' => 
    array (
      0 => '/var/www/html/shopware5_5/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/view/detail/payment_methods.js',
      1 => 1559804334,
      2 => 'file',
    ),
    '039598ef59c70e8068fbd679f7b11716fa27bf15' => 
    array (
      0 => '/var/www/html/shopware5_5/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/controller/detail.js',
      1 => 1559804334,
      2 => 'file',
    ),
    '3c166b0f2ecfb88763223c03c67e51a481973b54' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/order/model/batch.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20671084575f6ba9cbebdce4-48425728',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9cbec4aa1_49315392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9cbec4aa1_49315392')) {function content_5f6ba9cbec4aa1_49315392($_smarty_tpl) {?>/**
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