<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/order/view/detail/document.js" */ ?>
<?php /*%%SmartyHeaderCode:8440135535f6baa39932de4-44475807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e19c41dcfc9ef052c7ea2e37ef2814f55030ef1d' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/order/view/detail/document.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8440135535f6baa39932de4-44475807',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa39934f63_12786252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa39934f63_12786252')) {function content_5f6baa39934f63_12786252($_smarty_tpl) {?>/**
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
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order detail page
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.view.detail.Document', {

    /**
     * Define that the additional information is an Ext.panel.Panel extension
     * @string
     */
    extend: 'Ext.container.Container',

    /**
     * Defines the component layout.
     */
    layout: 'auto',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.order-document-panel',

    /**
     * An optional extra CSS class that will be added to this component's Element.
     */
    cls: Ext.baseCSSPrefix + 'document-panel',

    /**
     * A shortcut for setting a padding style on the body element. The value can either be a number to be applied to all sides, or a normal css string describing padding.
     */
    padding: 10,

    /**
     * True to use overflow:'auto' on the components layout element and show scroll bars automatically when necessary, false to clip any overflowing content.
     */
    autoScroll: true,

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'window_title','default'=>'Documents','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'window_title','default'=>'Documents','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Documents<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'window_title','default'=>'Documents','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        gridTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'grid_title','default'=>'Generated documents','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'grid_title','default'=>'Generated documents','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Generated documents<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'grid_title','default'=>'Generated documents','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
     *
     * @return void
     */
    initComponent:function () {
        var me = this;

        me.items = [
            me.createDocumentGrid(),
            me.createDocumentForm()
        ];
        me.title = me.snippets.title;
        me.callParent(arguments);
    },

    /**
     * Creates the document grid which displays all generated documents.
     * @return Shopware.apps.Order.view.list.Document
     */
    createDocumentGrid: function() {
        var me = this;

        return Ext.create('Shopware.apps.Order.view.list.Document', {
            store: me.record['getReceiptStore'],
            minHeight: 150,
            minWidth: 250,
            region: 'center',
            title: me.snippets.gridTitle,
            style: 'margin-bottom: 10px;'
        });
    },

    /**
     * Creates the form panel for the document generation configuration.
     * @return Ext.form.Panel
     */
    createDocumentForm: function() {
        var me = this;

        me.documentForm = Ext.create('Shopware.apps.Order.view.detail.Configuration', {
            region: 'bottom',
            record: me.record,
            documentTypesStore: me.documentTypesStore
        });

        return me.documentForm;
    }

});
//
<?php }} ?>