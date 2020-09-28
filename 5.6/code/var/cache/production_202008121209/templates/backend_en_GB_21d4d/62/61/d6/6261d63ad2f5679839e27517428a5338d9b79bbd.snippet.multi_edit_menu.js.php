<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:41
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/article_list/view/main/multi_edit_menu.js" */ ?>
<?php /*%%SmartyHeaderCode:9416432185f6ba789ce5104-97150018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6261d63ad2f5679839e27517428a5338d9b79bbd' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/article_list/view/main/multi_edit_menu.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9416432185f6ba789ce5104-97150018',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba789ceaba1_66373347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba789ceaba1_66373347')) {function content_5f6ba789ceaba1_66373347($_smarty_tpl) {?>/**
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
 */

//
//
Ext.define('Shopware.apps.ArticleList.view.main.MultiEditMenu', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.multi-edit-menu',

    layout: {
        type: 'vbox',
        pack: 'start',
        align: 'stretch'
    },

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'bulkChange','default'=>'Bulk change','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'bulkChange','default'=>'Bulk change','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Multi-Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'bulkChange','default'=>'Bulk change','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    initComponent: function () {
        var me = this;

        me.items = me.getItems();


        me.addEvents(
                /**
                 * Fired when the user clicks the "batch process" button
                 */
                'openBatchProcessWindow'
        );

        me.callParent(arguments);
    },

    /**
     * Returns the batch edit as well as the revert button
     *
     * @returns Array
     */
    getItems: function () {
        var me = this,
                items = [];


        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'doMultiEdit'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        items.push(
                Ext.create('Ext.button.Button', {
                    text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'multiEdit','default'=>'Mehrfachänderung','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'multiEdit','default'=>'Mehrfachänderung','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Multi-Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'multiEdit','default'=>'Mehrfachänderung','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    action: 'batchEdit',
                    padding: '10px',
                    margin: '5px',
                    name: 'batchEdit',
                    iconCls: 'sprite-multi-edit',
                    handler: function () {
                        me.fireEvent('openBatchProcessWindow');
                    }
                })
        );
        /*<?php }?>*/

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'doBackup'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
        items.push({
            xtype: 'button',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'restoreBackup','default'=>'Revert changes','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'restoreBackup','default'=>'Revert changes','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Revert changes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'restoreBackup','default'=>'Revert changes','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'backup',
            action: 'backup',
            padding: '10px',
            margin: '5px',
            iconCls: 'sprite-arrow-circle-225-left'
        });
        /*<?php }?>*/


        return items;
    }

});
//
<?php }} ?>