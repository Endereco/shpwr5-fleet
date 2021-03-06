<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:19
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/order/store/order.js" */ ?>
<?php /*%%SmartyHeaderCode:5465829625f6ba9cbdaf066-49523098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5257b6888777a6f1a03d6cecad41a4f2a62a94fa' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/order/store/order.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5465829625f6ba9cbdaf066-49523098',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9cbdafc61_47786571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9cbdafc61_47786571')) {function content_5f6ba9cbdafc61_47786571($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Order list backend module
 *
 * The list store is used from the order list grid.
 */
//
Ext.define('Shopware.apps.Order.store.Order', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',

    /**
     * Auto load the store after the component is initialized
     * @boolean
     */
    autoLoad:false,

    /**
     * Enable remote sort.
     * @boolean
     */
    remoteSort:true,

    /**
     * Enable remote filtering
     * @boolean
     */
    remoteFilter:true,

    /**
     * Amount of data loaded at once
     * @integer
     */
    pageSize:20,

    /**
     * to upload all selected items in one request
     * @boolean
     */
    batch:true,

    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Order.model.Order',

    /**
     * Default sorters
     * @array
     */
    sorters: [
        {
            property: 'orderTime',
            direction: 'DESC'
        }
    ]
});
//

<?php }} ?>