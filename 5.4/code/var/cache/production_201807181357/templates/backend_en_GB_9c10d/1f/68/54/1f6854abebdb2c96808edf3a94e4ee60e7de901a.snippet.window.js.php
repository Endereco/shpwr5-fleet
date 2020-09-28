<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/product_stream/view/selected_list/window.js" */ ?>
<?php /*%%SmartyHeaderCode:11239216425f6baa399a7091-12983808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f6854abebdb2c96808edf3a94e4ee60e7de901a' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/product_stream/view/selected_list/window.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11239216425f6baa399a7091-12983808',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa399aa086_10442159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa399aa086_10442159')) {function content_5f6baa399aa086_10442159($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.selected_list.Window', {
    extend: 'Enlight.app.Window',
    alias: 'widget.product-stream-selected-list-window',
    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail_window_title','default'=>'Product stream details','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail_window_title','default'=>'Product stream details','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Product stream details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail_window_title','default'=>'Product stream details','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    height: '90%',
    width: '90%',
    layout: 'fit',

    initComponent: function() {
        var me = this;

        me.items = me.createItems();
        me.dockedItems = [me.createToolbar()];

        me.callParent(arguments);
        me.loadRecord(me.record);
    },

    loadRecord: function(record) {
        var me = this;

        me.formPanel.loadRecord(record);
        if (record.get('id')) {
            me.activateProductGrid(record);
            me.attributeForm.loadAttribute(record.get('id'));
        }

        me.attributeForm.on('config-loaded', function() {
            me.tabPanel.setActiveTab(0);
            me.formPanel.translationPlugin.initTranslationFields(me.formPanel);
        });
    },

    activateProductGrid: function(record) {
        var me = this;

        me.productGrid.streamId = record.get('id');
        me.productGrid.store.getProxy().extraParams.streamId = record.get('id');
        me.productGrid.store.load();
        me.productGrid.enable();
    },

    createToolbar: function() {
        var me = this;

        me.saveButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'save','default'=>'Save','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'save','default'=>'Save','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'save','default'=>'Save','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'primary',
            handler: function () {
                me.fireEvent('save-selection-stream', me.record);
                me.activateProductGrid(me.record);
            }
        });

        me.toolbar = Ext.create('Ext.toolbar.Toolbar', {
            items: ['->', me.saveButton],
            dock: 'bottom'
        });
        return me.toolbar;
    },

    createItems: function() {
        var me = this;

        var container = Ext.create('Ext.container.Container', {
            layout: { type: 'vbox', align: 'stretch'},
            flex: 1,
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'configuration_title','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'configuration_title','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Configuration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'configuration_title','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            padding: 10,
            items: [
                this.createSettingPanel(),
                this.createProductGrid()
            ]
        });

        me.tabPanel = Ext.create('Ext.tab.Panel', {
            flex: 1,
            items: [container]
        });

        me.formPanel = Ext.create('Ext.form.Panel', {
            layout: 'fit',
            items: [me.tabPanel],
            flex: 1,
            name: 'product-stream-main-form',
            border: false,
            plugins: [{
                ptype: 'translation',
                translationType: 'productStream'
            }]
        });

        me.attributeForm = Ext.create('Shopware.apps.ProductStream.view.common.Attributes', {
            tabPanel: me.tabPanel,
            translationForm: me.formPanel
        });
        me.tabPanel.add(me.attributeForm);

        return [me.formPanel];
    },

    createProductGrid: function() {
        this.productGrid = Ext.create('Shopware.apps.ProductStream.view.selected_list.Product', {
            disabled: true,
            flex: 1,
            margin: '20 0 0'
        });
        return this.productGrid;
    },

    createSettingPanel: function() {
        this.settingsPanel = Ext.create('Shopware.apps.ProductStream.view.common.Settings');
        return this.settingsPanel;
    },

    createAttributePanel: function() {
        this.attributeForm = Ext.create('Shopware.apps.ProductStream.view.common.Attributes');
        return this.attributeForm;
    }
});
//<?php }} ?>