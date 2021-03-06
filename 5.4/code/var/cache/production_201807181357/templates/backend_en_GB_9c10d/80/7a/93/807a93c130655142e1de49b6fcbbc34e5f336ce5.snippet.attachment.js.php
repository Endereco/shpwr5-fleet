<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/order/controller/attachment.js" */ ?>
<?php /*%%SmartyHeaderCode:17019407465f6baa39a7a9f7-20107515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '807a93c130655142e1de49b6fcbbc34e5f336ce5' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/order/controller/attachment.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17019407465f6baa39a7a9f7-20107515',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa39a7fde2_89343342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa39a7fde2_89343342')) {function content_5f6baa39a7fde2_89343342($_smarty_tpl) {?>/**
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
 * @author shopware AG
 */

//
//
Ext.define('Shopware.apps.Order.controller.Attachment', {

    /**
     * Extend from the standard ExtJS 4 controller
     *
     * @type { String }
     */
    extend: 'Ext.app.Controller',

    /**
     * all references to get the elements by the applicable selector
     *
     * @type { Array }
     */
    refs: [
        { ref: 'attachmentGrid', selector: 'order-mail-attachment' }
    ],

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     */
    init: function() {
        var me = this;

        me.control({
            'order-mail-window order-mail-attachment': {
                'selectionModel-selection-change': me.onSelectionChanged,
                'create-and-add-document': me.createDocument
            },
            'order-mail-window order-mail-form': {
                afterSendMail: me.onAfterSendMail
            }
        });

        me.callParent(arguments);
    },

    /**
     * Sorts the store and sets active to true for all selected records.
     *
     * @param { Ext.data.Store } store
     * @param { Ext.selection.CheckboxModel } selectionModel
     * @param { Ext.data.Model[] } selected
     */
    onSelectionChanged: function(store, selectionModel, selected) {
        var me = this;

        store.each(function(record) {
            record.set('active', me.getAttachmentGrid().isSelected(selected, record.get('id')));
        });

        store.sort();
    },

    /**
     * Resets all records to inactive for a clean state.
     *
     * @param { Ext.data.Store } attachmentStore
     */
    onAfterSendMail: function(attachmentStore) {
        attachmentStore.resetDocuments();
    },

    /**
     * Creates a new document and save them.
     * If add true add the new document to the mail attachment
     *
     * @param { Ext.grid.Panel } attachmentGrid
     * @param { boolean } addAsAttachment
     * @param { number } orderId
     * @param { Ext.data.Model } document
     * @param { Ext.data.Store } listStore
     */
    createDocument: function(attachmentGrid, addAsAttachment, orderId, document, listStore) {
        var me = this,
            store = Ext.create('Shopware.apps.Order.store.Configuration'),
            config = Ext.create('Shopware.apps.Order.model.Configuration'),
            data;

        if (!document) {
            return;
        }

        data = {
            store: store,
            config: config,
            attachmentGrid: attachmentGrid,
            addAsAttachment: addAsAttachment,
            orderId: orderId,
            document: document,
            listStore: listStore
        };

        if (document.get('numbers') === 'doc_3') {
            Ext.Msg.prompt(
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'attachment'/'invoice'/'number','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'attachment'/'invoice'/'number','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Invoice number<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'attachment'/'invoice'/'number','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'attachment'/'invoice'/'number'/'text','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'attachment'/'invoice'/'number'/'text','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please enter the invoice number of the cancellation:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'attachment'/'invoice'/'number'/'text','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                function(clickedButtonName, inputText) {
                    me.afterInsertNewInvoiceNumber(clickedButtonName, inputText, data);
                }
            );

            return;
        }

        me.saveDocument(data);
    },

    /**
     * Sets parameter to the config and calls store.sync to save the new document
     *
     * @param { object } data
     */
    saveDocument: function(data) {
        var me = this;

        data.attachmentGrid.setLoading(true);

        data.config.set('orderId', data.orderId);
        data.config.set('documentType', data.document.get('id'));
        data.store.add(data.config);

        data.store.sync({
            callback: Ext.bind(me.callStoreReload, me, [data.attachmentGrid, data.addAsAttachment, data.listStore])
        });
    },

    /**
     * Checks the input and calls saveDocument
     *
     * @param { string } clickedButtonName
     * @param { string } inputText
     * @param { object } data
     */
    afterInsertNewInvoiceNumber: function(clickedButtonName, inputText, data) {
        var me = this;

        if (clickedButtonName !== 'ok' || !inputText) {
            return;
        }

        data.config.set('invoiceNumber', inputText);

        me.saveDocument(data);
    },

    /**
     * Reloads the attachmentGrid.listStore.
     *
     * @param { Ext.grid.Panel } attachmentGrid
     * @param { boolean|null } addAsAttachment
     * @param { Ext.data.Store } listStore
     */
    callStoreReload: function(attachmentGrid, addAsAttachment, listStore) {
        var me = this;

        listStore.reload({
            callback: Ext.bind(me.applyNewDocument, me, [attachmentGrid, addAsAttachment])
        });
    },

    /**
     * Callback function to apply the new document to the store.
     *
     * @param { Ext.grid.Panel } attachmentGrid
     * @param { boolean|null } addAsAttachment
     */
    applyNewDocument: function(attachmentGrid, addAsAttachment) {
        var orderRecord = attachmentGrid.getRecord(
            attachmentGrid.listStore,
            attachmentGrid.record.get('id')
        );

        if (!orderRecord) {
            attachmentGrid.setLoading(false);
            return;
        }

        orderRecord.getReceipt().each(function(record) {
            attachmentGrid.store.add(record);
        });

        if (addAsAttachment) {
            attachmentGrid.store.getLastDocument().set('active', true);
            attachmentGrid.selectDocument(attachmentGrid.store.getLastDocument());
        }

        attachmentGrid.setLoading(false);
    }
});
//
<?php }} ?>