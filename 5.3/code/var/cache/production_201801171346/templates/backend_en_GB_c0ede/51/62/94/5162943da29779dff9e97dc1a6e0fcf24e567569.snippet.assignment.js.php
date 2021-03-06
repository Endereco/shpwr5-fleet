<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:55
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/customer/view/customer_stream/assignment.js" */ ?>
<?php /*%%SmartyHeaderCode:16394882215f6baaa32b9c63-14285595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5162943da29779dff9e97dc1a6e0fcf24e567569' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/customer/view/customer_stream/assignment.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16394882215f6baaa32b9c63-14285595',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa32bceb4_49905139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa32bceb4_49905139')) {function content_5f6baaa32bceb4_49905139($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Customer.view.customer_stream.Assignment', {

    extend: 'Shopware.form.field.CustomerGrid',
    xtype: 'widget.customer-stream-assignment',
    isFormField: false,
    supportText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"assigned_customers_help",'namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"assigned_customers_help",'namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Changes to the assigned customers are applied immediately<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"assigned_customers_help",'namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"assigned_customers",'namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"assigned_customers",'namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assigned customers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"assigned_customers",'namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    fieldLabelConfig: 'as_empty_text',
    allowSorting: false,
    animateAddItem: false,

    initComponent: function() {
        var me = this;

        var factory = Ext.create('Shopware.attribute.SelectionFactory');

        me.searchStore = factory.createEntitySearchStore("Shopware\\Models\\Customer\\Customer");

        me.callParent(arguments);

        me.store.load();
    },

    createGrid: function() {
        var me = this;

        me.pagingbar = Ext.create('Ext.toolbar.Paging', {
            store: me.store,
            dock: 'bottom'
        });

        return Ext.create('Ext.grid.Panel', {
            columns: me.createColumns(),
            store: me.store,
            border: false,
            flex: 1,
            dockedItems: [me.pagingbar],
            hideHeaders: true
        });
    },

    initializeStore: function() {
        var me = this;
        var factory = Ext.create('Shopware.attribute.SelectionFactory');

        me.store = factory.createEntitySearchStore("Shopware\\Models\\Customer\\Customer");
        me.store.getProxy().extraParams.streamId = me.record.get('id');
        me.store.pageSize = 20;
        return me.store;
    },

    addItem: function(record) {
        var me = this;
        var success = me.callParent(arguments);

        if (success) {
            me.addCustomerToStream(me.record.get('id'), record.get('id'))
        }
        return success;
    },

    removeItem: function(record) {
        var me = this,
            customerId = record.get('id'),
            streamId = me.record.get('id');

        me.callParent(arguments);
        me.removeCustomerFromStream(streamId, customerId);
    },

    removeCustomerFromStream: function(streamId, customerId) {
        Ext.Ajax.request({
            url: '<?php echo '/shopware5_3/backend/CustomerStream/removeCustomerFromStream';?>',
            params: {
                streamId: streamId,
                customerId: customerId
            }
        });
    },

    addCustomerToStream: function(streamId, customerId) {
        Ext.Ajax.request({
            url: '<?php echo '/shopware5_3/backend/CustomerStream/addCustomerToStream';?>',
            params: {
                streamId: streamId,
                customerId: customerId
            }
        });
    }
});

//<?php }} ?>