<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:08
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/store/page_not_found_destination_options.js" */ ?>
<?php /*%%SmartyHeaderCode:4154776055f6baa3823c088-77569532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c5685d8682275c19d94403ec1395a40b1cec07c' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/store/page_not_found_destination_options.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4154776055f6baa3823c088-77569532',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa3823d7c5_77871906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa3823d7c5_77871906')) {function content_5f6baa3823d7c5_77871906($_smarty_tpl) {?>/**
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
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Page Not Found Destination Options
 */
//
Ext.define('Shopware.apps.Base.store.PageNotFoundDestinationOptions', {
    extend:'Ext.data.Store',

    alternateClassName: 'Shopware.store.PageNotFoundDestinationOptions',
    model:'Shopware.apps.Base.model.PageNotFoundDestinationOptions',
    storeId: 'base.PageNotFoundDestinationOptions',

    /**
     * Enable remote filtering
     */
    remoteFilter: true,

    proxy:{
        type:'ajax',
        url:'<?php echo '/shopware5_4/backend/base/getPageNotFoundDestinationOptions';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
}).create();
//

<?php }} ?>