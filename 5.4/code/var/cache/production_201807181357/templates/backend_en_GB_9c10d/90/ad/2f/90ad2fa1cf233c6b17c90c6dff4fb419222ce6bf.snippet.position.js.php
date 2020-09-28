<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/order/model/position.js" */ ?>
<?php /*%%SmartyHeaderCode:18101118265f6baa398e9546-93953960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90ad2fa1cf233c6b17c90c6dff4fb419222ce6bf' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/order/model/position.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18101118265f6baa398e9546-93953960',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa398ec775_07416421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa398ec775_07416421')) {function content_5f6baa398ec775_07416421($_smarty_tpl) {?>/**
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
 * The list model represents a single row for the order list grid.
 * The model data are concat by the different order associations.
 */
//
Ext.define('Shopware.apps.Order.model.Position', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * Unique identifier field
     * @string
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name: 'id', type:'int' },
        { name: 'orderId', type:'int' },
        { name: 'mode', type:'int' },
        { name: 'articleId', type:'int' },
        { name: 'articleNumber', type:'string' },
        { name: 'articleName', type:'string' },
        { name: 'quantity', type:'int' },
        { name: 'statusId', type:'int' },
        { name: 'statusDescription', type:'string' },
        { name: 'price', type:'float' },
        { name: 'taxId', type:'int' },
        { name: 'taxRate', type:'float' },
        { name: 'taxDescription', type:'string' },
        { name: 'inStock', type:'int' },
        {
            name: 'total',
            type:'float',
            convert: function(value, record) {
                if (!Ext.isNumeric(record.get('price'))) {
                    return record.get('price');
                }
                return record.get('price') * record.get('quantity');
            }
        }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api:{
            destroy:'<?php echo '/shopware5_4/backend/Order/deletePosition/targetField/positions';?>',
            create:'<?php echo '/shopware5_4/backend/Order/savePosition';?>',
            update:'<?php echo '/shopware5_4/backend/Order/savePosition';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
//
<?php }} ?>