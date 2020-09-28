<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:55
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/order/model/mail.js" */ ?>
<?php /*%%SmartyHeaderCode:6325909845f6baaa31d5081-66522522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '530417be06547fdf31b46d623576c6b2371586cc' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/order/model/mail.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6325909845f6baaa31d5081-66522522',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa31d8f71_03168655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa31d8f71_03168655')) {function content_5f6baaa31d8f71_03168655($_smarty_tpl) {?>/**
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

/**
 * Shopware Model - Order list backend module.
 *
 * The list model is a helper model to display the head data in a compact grid.
 */
//
Ext.define('Shopware.apps.Order.model.Mail', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        //
        { name: 'orderId', type: 'int' },
        { name: 'content', type: 'string' },
        { name: 'contentHtml', type: 'string' },
        { name: 'subject', type: 'string' },
        { name: 'to', type: 'string' },
        { name: 'fromMail', type: 'string' },
        { name: 'fromName', type: 'string' },
        { name: 'sent', type: 'boolean' },
        { name: 'isHtml', type: 'boolean' }
    ],

    associations: [
        {
            type: 'hasMany',
            model: 'Shopware.apps.Order.model.Receipt',
            name: 'getReceipt',
            associationKey: 'attachment'
        }
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
         * Specific urls to call on CRUD action methods "create", "read", "update" and "destroy".
         * @object
         */
        api: {
            create: '<?php echo '/shopware5_3/backend/Order/sendMail';?>',
            update: '<?php echo '/shopware5_3/backend/Order/sendMail';?>'
        }
    }

});
//
<?php }} ?>