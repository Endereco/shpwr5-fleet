<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:19
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/article/view/category/tree.js" */ ?>
<?php /*%%SmartyHeaderCode:13130662195f6ba9cbcc2930-20299369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ef8cfec4e41cf9fb6c16abaa5d8d0520ced428' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/article/view/category/tree.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13130662195f6ba9cbcc2930-20299369',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9cbcc5c86_78377278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9cbcc5c86_78377278')) {function content_5f6ba9cbcc5c86_78377278($_smarty_tpl) {?>/**
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
 * @subpackage Tree
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Article detail page - Category
 * The tree component contains a tree panel element which list all defined categories of the shop.
 * The tree nodes have an action column, if the category is a leaf category (no child categories)
 */
//
//
Ext.define('Shopware.apps.Article.view.category.Tree', {
    /**
     * Define that the billing field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend:'Ext.tree.Panel',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-category-tree',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'category-tree',
    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'tree'/'title','default'=>'Category','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'tree'/'title','default'=>'Category','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'tree'/'title','default'=>'Category','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'tree'/'tooltip','default'=>'Add category','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'tree'/'tooltip','default'=>'Add category','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Link category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'tree'/'tooltip','default'=>'Add category','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Enables multiple selection of the tree nodes
     * @boolean
     */
    multiSelect: true,

    /**
     * Hides the root node.
     * @boolean
     */
    rootVisible: false,
    /**
     * Sets the width of the tree panel
     * @integer
     */
    width: 250,

    /**
     * Displays the split button.
     * @boolean
     */
    split: true,

    padding: '10 0 10 10',

    /**
     * Configuration for the tree view.
     * @object
     */
    viewConfig: {
        plugins: {
            ptype: 'treeviewdragdrop',
            ddGroup: 'Category',
            dragText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'tree'/'drag_text','default'=>'[0] selected node [1]','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'tree'/'drag_text','default'=>'[0] selected node [1]','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] selected node [1]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'tree'/'drag_text','default'=>'[0] selected node [1]','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            enableDrop: true,
            copy: true
        }
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
        me.title = me.snippets.title;
        me.columns = me.getColumns();
        me.registerEvents();
        me.callParent(arguments);
    },

    /**
     * Registers additional component events.
     */
    registerEvents: function() {
        this.addEvents(
            /**
             * Event will be fired when the user want to add a category and used
             * the tree action column. Event will be handled in the category controller.
             *
             * @event
             * @param [array] record - The node record
             */
            'addCategory'
        );
    },

    /**
     * Creates the columns for the tree panel.
     * @return array
     */
    getColumns: function() {
       var me = this;

        return [
            {
                xtype: 'treecolumn',
                text: '&nbsp;',
                flex: 2,
                sortable: true,
                dataIndex: 'name'
            },{
                xtype: 'actioncolumn',
                width: 30,
                items: [{
                    iconCls: 'sprite-plus-circle-frame',
                    tooltip: me.snippets.tooltip,
                    /**
                     * Handler for the action column
                     * @param view
                     * @param rowIndex
                     * @param colIndex
                     * @param item
                     */
                    handler: function (view, rowIndex, colIndex, item, opts,  record) {
                        var records = [ record ];
                        me.fireEvent('addCategory', records);
                    },
                    /**
                     * If the item has no leaf flag, hide the add button
                     * @param value
                     * @param metadata
                     * @param record
                     * @return string
                     */
                    getClass: function(value, metadata, record) {
                        if (!record.isLeaf())  {
                            return 'x-hidden';
                        }
                    }
                }]
            }
        ];
    }

});
//
<?php }} ?>