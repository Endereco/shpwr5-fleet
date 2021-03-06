<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:55
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/article/controller/esd.js" */ ?>
<?php /*%%SmartyHeaderCode:8875159385f6baaa34d1886-46933055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '769c940638ffc62f6faa484353150ccb69b91c24' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/article/controller/esd.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8875159385f6baaa34d1886-46933055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa34e2269_55098900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa34e2269_55098900')) {function content_5f6baaa34e2269_55098900($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Esd
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Controller - Article backend module
 */
//
//
Ext.define('Shopware.apps.Article.controller.Esd', {
    /**
     * The parent class that this class extends.
     * @string
     */
    extend: 'Ext.app.Controller',

    /**
     * Set component references for easy access
     * @array
     */
    refs: [
        { ref: 'mainWindow', selector: 'article-detail-window' },
        { ref: 'saveButton', selector: 'article-detail-window button[name=save-article-button]' },
        { ref: 'cancelButton', selector: 'article-detail-window button[name=cancel-button]' },
        { ref: 'esdSaveButton', selector: 'article-detail-window button[name=esd-save-button]' },
        { ref: 'esdBackButton', selector: 'article-detail-window button[name=esd-back-button]' },
        { ref: 'esdListing', selector: 'article-detail-window article-esd-list' },
        { ref: 'mediaDropZone', selector: 'article-detail-window article-esd-detail html5fileupload' },
        { ref: 'esdSerialsListing', selector: 'article-detail-window article-esd-serials' },
        { ref: 'esdTab', selector: 'article-detail-window container[name=esd-tab]' }
    ],

    /**
     * Contains all snippets for the component.
     * @object
     */
    snippets: {
        growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        addSerialsTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'add_serials_title','default'=>'Add Serials','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'add_serials_title','default'=>'Add Serials','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add serials<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'add_serials_title','default'=>'Add Serials','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        error: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'error'/'title','default'=>'Error','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'error'/'title','default'=>'Error','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'error'/'title','default'=>'Error','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            noFolder: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'error'/'no_folder','default'=>'The ESD folder could not be found.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'error'/'no_folder','default'=>'The ESD folder could not be found.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The ESD folder could not be found.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'error'/'no_folder','default'=>'The ESD folder could not be found.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        success: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'success'/'title','default'=>'Success','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'title','default'=>'Success','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'title','default'=>'Success','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            esdSaved: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'success'/'esd_saved','default'=>'The ESD has been saved.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'esd_saved','default'=>'The ESD has been saved.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The ESD has been saved.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'esd_saved','default'=>'The ESD has been saved.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            esdCreated: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'success'/'esd_created','default'=>'The ESD has been created.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'esd_created','default'=>'The ESD has been created.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The ESD has been created.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'esd_created','default'=>'The ESD has been created.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            esdRemoved: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'success'/'esd_removed','default'=>'The selected ESDs have been removed','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'esd_removed','default'=>'The selected ESDs have been removed','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The selected ESDs have been removed.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'esd_removed','default'=>'The selected ESDs have been removed','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            serialsAdded: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'success'/'serials_added','default'=>'Serialnumbers have been added','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'serials_added','default'=>'Serialnumbers have been added','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Serial numbers have been added.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'serials_added','default'=>'Serialnumbers have been added','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            unusedSerialsRemoved: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'success'/'unused_serials_removed','default'=>'All unused serialnumbers have been removed','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'unused_serials_removed','default'=>'All unused serialnumbers have been removed','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
All unused serial numbers have been removed.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'unused_serials_removed','default'=>'All unused serialnumbers have been removed','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            serialRemoved: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'success'/'serial_removed','default'=>'The selected serialnumbers have been removed','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'serial_removed','default'=>'The selected serialnumbers have been removed','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The selected serial numbers have been removed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'success'/'serial_removed','default'=>'The selected serialnumbers have been removed','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        messages: {
            esdRemove: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'message'/'remove_esd','default'=>'Are you sure you want to delete the selected ESD(s)?','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'message'/'remove_esd','default'=>'Are you sure you want to delete the selected ESD(s)?','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete the selected ESD(s)?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'message'/'remove_esd','default'=>'Are you sure you want to delete the selected ESD(s)?','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            serialsRemoveUnused: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'message'/'remove_unused_serials','default'=>'Are you sure you want to delete all unused serialnumbers?','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'message'/'remove_unused_serials','default'=>'Are you sure you want to delete all unused serialnumbers?','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete all unused serial numbers?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'message'/'remove_unused_serials','default'=>'Are you sure you want to delete all unused serialnumbers?','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            serialRemove: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'message'/'remove_serial','default'=>'Are you sure you want to delete the selected serialnumber(s)?','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'message'/'remove_serial','default'=>'Are you sure you want to delete the selected serialnumber(s)?','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete the selected serial?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'message'/'remove_serial','default'=>'Are you sure you want to delete the selected serialnumber(s)?','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            addSerials: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'message'/'add_serials','default'=>'Add new Serials (separated by newlines)','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'message'/'add_serials','default'=>'Add new Serials (separated by newlines)','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add new serials (separated by line breaks)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'message'/'add_serials','default'=>'Add new Serials (separated by newlines)','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        buttons: {
            addSerials: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'buttons'/'add_serials','default'=>'Add serials','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'buttons'/'add_serials','default'=>'Add serials','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add serials<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'buttons'/'add_serials','default'=>'Add serials','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cancel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'message'/'cancel','default'=>'Cancel','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'message'/'cancel','default'=>'Cancel','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'esd'/'message'/'cancel','default'=>'Cancel','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     *
     * @params orderId - The main controller can handle a orderId parameter to open the order detail page directly
     * @return void
     */
    init: function () {
        var me = this;

        me.control({
            'article-detail-window tabpanel[name=main-tab-panel]': {
                beforetabchange: me.onMainTabChange
            },

            'article-detail-window article-esd-list': {
                addEsd: me.onAddEsd,
                editEsd: me.onEditEsd,
                deleteEsd: me.onDeleteEsd,
                searchEsd: me.onSearchEsd,
                backToList: me.onBackToList,
                saveEsd: me.onSaveEsd
            },

            'article-detail-window article-esd-detail': {
                activate: me.onActivate,
                deactivate: me.onDeactivate,
                downloadFile: me.onDownloadFile,
                mediaUpload: me.onMediaUpload,
                hasSerialsChanged: me.onHasSerialsChanged,
                fileChanged: me.onFileChanged
            },

            'article-esd-detail html5fileupload': {
                uploadReady: me.onUploadReady
            },

            'article-detail-window article-esd-serials': {
                addSerials: me.onAddSerials,
                deleteUnusedSerials: me.onDeleteUnusedSerials,
                deleteSerials: me.onDeleteSerials,
                searchSerials: me.onSearchSerials,
                openCustomer: me.onOpenCustomer
            }
        });
        me.callParent(arguments);
    },

    /**
     * Event listener function of the main tab panel in the detail window.
     * Fired when the user changes the tab.
     */
    onMainTabChange: function(panel, newTab, oldTab) {
        if (newTab.name !== 'esd-tab' && oldTab.name !== 'esd-tab') {
            return;
        }

        var me = this;
        var esdTab = me.getEsdTab();
        var store = me.getEsdListing().getStore();
        var activeCard = esdTab.getLayout().getActiveItem();
        var isDetail = (activeCard.xtype === 'article-esd-detail');

        if (newTab.name === 'esd-tab') {
            store.load();
        } else {
            if (isDetail) {
                esdTab.getLayout().setActiveItem(0);
                esdTab.remove(activeCard);
            }
        }
    },

    /**
     * Event listener function of the detail panel
     */
    onActivate: function() {
        var me = this;

        me.enableEsdButtons();
    },

    /**
     * Event listener function of the detail panel
     */
    onDeactivate: function() {
        var me = this;

        me.disableEsdButtons();
    },

    /**
     * Event listener function of the detail panel
     */
    onSaveEsd: function() {
        var me = this,
            record = me.detailWindow.esdRecord;

        record.save({
            callback: function() {
                Shopware.Notification.createGrowlMessage(me.snippets.success.title, me.snippets.success.esdSaved, me.snippets.growlMessage);
                me.detailWindow.infoView.update(record.data);
            }
        });
    },

    /**
     * Internal helper function to enable esd related buttons
     */
    enableEsdButtons: function() {
        var me = this,
            saveButton = me.getSaveButton(),
            cancelButton = me.getCancelButton(),
            esdBackButton = me.getEsdBackButton(),
            esdSaveButton = me.getEsdSaveButton();

        saveButton.hide();
        cancelButton.hide();
        esdBackButton.show();
        esdSaveButton.show();
    },

    /**
     * Internal helper function to disable esd related buttons
     */
    disableEsdButtons: function() {
        var me = this,
            cancelButton = me.getCancelButton(),
            esdBackButton = me.getEsdBackButton(),
            esdSaveButton = me.getEsdSaveButton();

        cancelButton.show();
        esdBackButton.hide();
        esdSaveButton.hide();
    },

    /**
     * Event will be fired when the user clicks the add button in the toolbar
     * @param [string] articleDetailId
     */
    onAddEsd: function(articleDetailId) {
        var me = this,
            store = me.getEsdListing().getStore();

        Ext.Ajax.request({
            url: '<?php echo '/shopware5_3/backend/Article/createEsd';?>',
            method: 'POST',
            params: {
                articleDetailId: articleDetailId
            },
            success: function(response, opts) {
                Shopware.Notification.createGrowlMessage(me.snippets.success.title, me.snippets.success.esdCreated, me.snippets.growlMessage);
                store.load();
            }
        });
    },

    /**
     * Event will be fired when the user clicks the back button in the toolbar
     */
    onBackToList: function() {
        var me = this,
            esdTab = me.getEsdTab(),
            saveButton = me.getSaveButton(),
            cardToRemove = esdTab.getLayout().getActiveItem();

        esdTab.getLayout().setActiveItem(0);
        esdTab.remove(cardToRemove);

        me.getEsdListing().getStore().load();

        saveButton.show();
    },

    resetToList: function() {
        var me = this,
            esdTab = me.getEsdTab(),
            saveButton = me.getSaveButton(),
            cardToRemove = esdTab.getLayout().getActiveItem();

        if(cardToRemove.$className === 'Shopware.apps.Article.view.esd.List') {
            return false;
        }
        esdTab.getLayout().setActiveItem(0);
        esdTab.remove(cardToRemove);
        me.getEsdListing().getStore().load();

        saveButton.show();
    },

    /**
     * @param [string] value
     */
    onSearchEsd: function(value) {
        var me = this,
            esdListing = me.getEsdListing(),
            store = esdListing.getStore();

        value = Ext.String.trim(value);
        store.filters.clear();
        store.currentPage = 1;

        if (value.length > 0) {
            store.filter({ property: 'free', value: value });
        } else {
            store.load();
        }
    },

    /**
     * Event listener function of the esd list. Fired when the
     * user clicks on the pencil action column.
     *
     * @param [Ext.data.Model] The selected record
     */
    onEditEsd: function(record) {
        var me = this,
            esdTab = me.getEsdTab(),
            serialStore = Ext.create('Shopware.apps.Article.store.Serial'),
            fileStore = Ext.create('Shopware.apps.Article.store.EsdFile').load(
                function(records, operation, success) {
                    if (success == false && operation.error == 'noFolder') {
                        Shopware.Notification.createGrowlMessage(me.snippets.error.title, me.snippets.error.noFolder, me.snippets.growlMessage);
                    }
                }
            );

        me.fileStore = fileStore;

        serialStore.getProxy().extraParams.esdId = record.get('id');
        serialStore.load();

        me.detailWindow = Ext.create('Shopware.apps.Article.view.esd.Detail', {
            esdRecord: record,
            serialStore: serialStore,
            fileStore: fileStore,
            article: me.article
        });

        esdTab.add(me.detailWindow);
        esdTab.getLayout().setActiveItem(1);
    },

    /**
     * Event listener function which fired when the user selects esd in the listing
     * and clicks the delete button in the toolbar.
     * @param records
     */
    onDeleteEsd: function(records) {
        var me = this,
            esdListing = me.getEsdListing(),
            store = esdListing.getStore();

        if (records.length > 0) {
            // we do not just delete - we are polite and ask the user if he is sure.
            Ext.MessageBox.confirm(me.snippets.growlMessage, me.snippets.messages.esdRemove , function (response) {
                if ( response !== 'yes' ) {
                    return;
                }
                store.remove(records);
                store.sync({
                    callback: function() {
                        Shopware.Notification.createGrowlMessage(me.snippets.success.title, me.snippets.success.esdRemoved, me.snippets.growlMessage);
                        store.currentPage = 1;
                        store.load();
                    }
                });
            });
        }
    },

    /**
     * Creates window
     *
     * @return [Enlight.app.Window]
     */
    getAddSerialsWindow: function() {
        var me = this;

        var win = Ext.create('Enlight.app.Window', {
            title: me.snippets.addSerialsTitle,
            width: 400,
            height: 400,
            layout: 'fit',
            subApplication: me.subApplication,
            subApp: me.subApplication,
            items: [{
                xtype: 'form',
                layout: 'anchor',
                bodyPadding: 10,
                border: false,
                defaults: {
                    anchor: '100%'
                },
                dockedItems: [{
                    xtype: 'toolbar',
                    dock: 'bottom',
                    cls: 'shopware-toolbar',
                    items: [{
                        text: me.snippets.buttons.addSerials,
                        cls: 'primary',
                        formBind: true,
                        handler: function() {
                            var form = this.up('form').getForm();
                            if (form.isValid()) {
                                var serials = form.getValues().serials;
                                me.saveNewSerials(serials);
                                win.close();
                            }
                        }
                    }, {
                        text: me.snippets.buttons.cancel,
                        cls: 'secondary',
                        handler: function() {
                            win.close();
                        }
                    }]
                }],
                items: [{
                    bodyPadding: 10,
                    html: me.snippets.messages.addSerials
                }, {
                    name: 'serials',
                    xtype: 'textarea',
                    height: 250,
                    allowBlank: false
                }]
            }]
        });

        return win;
    },

    /**
     * Event will be fired when the user clicks the add button in the toolbar
     */
    onAddSerials: function() {
        var me = this;

        me.getAddSerialsWindow().show();
    },

    /**
     * @param [string] serials
     */
    saveNewSerials: function(serials) {
        var me = this;

        Ext.Ajax.request({
            url: '<?php echo '/shopware5_3/backend/Article/saveSerials';?>',
            method: 'POST',
            params: {
                esdId: me.detailWindow.esdRecord.get('id'),
                serials: serials
            },
            success: function(response, opts) {
                Shopware.Notification.createGrowlMessage(me.snippets.success.title, me.snippets.success.serialsAdded, me.snippets.growlMessage);
                me.getEsdSerialsListing().getStore().load();
            }
        });
    },

    /**
     * Event will be fired when the user clicks the add button in the toolbar
     */
    onDeleteUnusedSerials: function() {
        var me = this;

        Ext.MessageBox.confirm(me.snippets.growlMessage, me.snippets.messages.serialsRemoveUnused , function (response) {
            if ( response !== 'yes' ) {
                return;
            }
            Ext.Ajax.request({
                url: '<?php echo '/shopware5_3/backend/Article/deleteUnusedSerials';?>',
                method: 'POST',
                params: {
                    esdId: me.detailWindow.esdRecord.get('id')
                },
                success: function(response, opts) {
                    Shopware.Notification.createGrowlMessage(me.snippets.success.title, me.snippets.success.unusedSerialsRemoved, me.snippets.growlMessage);
                    me.getEsdSerialsListing().getStore().load();
                }
            });
        });
    },

    /**
     * Event listener function which fired when the user selects esd in the listing
     * and clicks the delete button in the toolbar.
     * @param records
     */
    onDeleteSerials: function(records) {
        var me = this,
            serialsListing = me.getEsdSerialsListing(),
            store = serialsListing.getStore();

        if (records.length > 0) {
            Ext.MessageBox.confirm(me.snippets.growlMessage, me.snippets.messages.serialRemove , function (response) {
                if ( response !== 'yes' ) {
                    return;
                }
                store.remove(records);
                store.sync({
                    callback: function() {
                        Shopware.Notification.createGrowlMessage(me.snippets.success.title, me.snippets.success.serialRemoved, me.snippets.growlMessage);
                        store.currentPage = 1;
                        store.load();
                    }
                });
            });
        }
    },

    /**
     * Event will be fired when the user clicks the download button in the toolbar
     */
    onDownloadFile: function() {
        var me = this;

        var record = me.detailWindow.esdRecord;
        var url = '<?php echo '/shopware5_3/backend/Article/getEsdDownload';?>' + '/filename/' + record.get('file');
        window.open(url, '_blank');
    },

    /**
     * @param [string] value
     */
    onSearchSerials: function(value) {
        var me = this,
            serialsListing = me.getEsdSerialsListing(),
            store = serialsListing.getStore();

        value = Ext.String.trim(value);
        store.filters.clear();
        store.currentPage = 1;
        if (value.length > 0) {
            store.filter({ property: 'free', value: value });
        } else {
            store.load();
        }
    },

    /**
     * Event listener method which fired when the user clicks the customer button
     * in the order list to show the customer detail page.
     *
     * @param [Ext.data.Model] record - The row record
     */
    onOpenCustomer: function(record) {
        Shopware.app.Application.addSubApplication({
            name: 'Shopware.apps.Customer',
            action: 'detail',
            params: {
                customerId: record.get('customerId')
            }
        });
    },

    /**
     * @param [boolean]
     */
    onHasSerialsChanged: function(checked) {
        var me = this,
            record = me.detailWindow.esdRecord,
            serialsListing = me.getEsdSerialsListing();

        if (checked) {
            record.set('hasSerials', true);
            serialsListing.enable();

        } else {
            record.set('hasSerials', false);
            serialsListing.disable();
        }
    },

    /**
     * @param [string]
     */
    onFileChanged: function(filename) {
        var me = this,
            record = me.detailWindow.esdRecord;

        record.set('file', filename);
    },


    onUploadReady: function() {
        var me = this;

        me.fileStore.load();
    },

    /**
     * Event will be fired when the user want to upload images over the button on the image tab.
     *
     * @event
     * @param [object]
     */
    onMediaUpload: function(field) {
        var dropZone = this.getMediaDropZone();
        this.uploadMedia(field, dropZone);
    },

    /**
     * Internal helper function to upload article images.
     * @param field
     * @param dropZone
     */
    uploadMedia: function(field, dropZone) {
        var fileField = field.getEl().down('input[type=file]').dom;
        dropZone.iterateFiles(fileField.files);
    }

});
//
<?php }} ?>