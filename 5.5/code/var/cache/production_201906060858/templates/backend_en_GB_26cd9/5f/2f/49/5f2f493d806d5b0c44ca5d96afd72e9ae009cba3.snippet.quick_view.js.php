<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:19
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/customer/view/main/quick_view.js" */ ?>
<?php /*%%SmartyHeaderCode:1208785385f6ba9cbbd1d65-67701254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f2f493d806d5b0c44ca5d96afd72e9ae009cba3' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/customer/view/main/quick_view.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1208785385f6ba9cbbd1d65-67701254',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9cbbd8238_74067038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9cbbd8238_74067038')) {function content_5f6ba9cbbd8238_74067038($_smarty_tpl) {?>/**
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
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */

// 
// 

Ext.define('Shopware.apps.Customer.view.main.QuickView', {

    extend: 'Ext.container.Container',

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'quick_view_title','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'quick_view_title','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customer overview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'quick_view_title','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    layout: 'border',

    cls: 'customer-quick-view',

    initComponent: function() {
        var me = this;

        me.items = me.createItems();

        me.callParent(arguments);
    },

    createItems: function() {
        var me = this;

        me.store = Ext.create('Shopware.apps.Customer.store.QuickView').load();

        me.grid = Ext.create('Shopware.apps.Customer.view.main.CustomerList', {
            store: me.store,
            region: 'center',
            margin: 10
        });

        me.filter = Ext.create('Shopware.apps.Customer.view.main.CustomerListFilter', {
            region: 'west',
            width: 350,
            margin: '10 0 10 10',
            gridPanel: me.grid
        });

        return [me.filter, me.grid];
    }
});
// 
<?php }} ?>