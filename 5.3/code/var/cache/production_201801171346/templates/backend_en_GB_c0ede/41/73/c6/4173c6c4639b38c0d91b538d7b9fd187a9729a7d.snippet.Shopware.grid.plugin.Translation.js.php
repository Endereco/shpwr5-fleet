<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:53
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/component/Shopware.grid.plugin.Translation.js" */ ?>
<?php /*%%SmartyHeaderCode:1967852165f6baaa1ac60c9-47618961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4173c6c4639b38c0d91b538d7b9fd187a9729a7d' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/component/Shopware.grid.plugin.Translation.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1967852165f6baaa1ac60c9-47618961',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa1acb1f7_60466396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa1acb1f7_60466396')) {function content_5f6baaa1acb1f7_60466396($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Grid Translation
 *
 * This components provides an easy way to translate single grid rows.
 * In the grid initialisation the plugin reads out the header configuration
 * and creates a dynamic form panel. Each grid header with a translationEditor
 * object will be displayed in the form panel as translatable field.
 *
 * Alternate class names for this class are:
 * - Shopware.plugin.GridTranslation
 * - Shopware.GridTranslation
 *
 * @example Ext.create('Shopware.grid.plugin.Translation');
 */
//
//
Ext.define('Shopware.grid.plugin.Translation', {
    /** @lends Ext.AbstractPlugin# */

    /**
     * Extends the abstact plugin component
     * @string
     */
    extend: 'Ext.AbstractPlugin',

    /**
     * Defines alternate names for this class
     * @array
     */
    alternateClassName: [ 'Shopware.plugin.GridTranslation', 'Shopware.GridTranslation' ],

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets
     * @string
     */
    alias: [ 'plugin.gridtranslation' ],

    /**
     * List of classes that have to be loaded before instantiating this class.
     * @array
     */
    requires: [ 'Ext.grid.column.Column' ],

    /**
     * List of classes to mix into this class
     * @object
     */
    mixins: {
        /**
         * Base class that provides a common interface for publishing events. Subclasses are expected to to have a property "events" with all the events defined, and, optionally, a property "listeners" with configured listeners defined.
         */
        observable: 'Ext.util.Observable'
    },

    /**
     * Property which holds the grid
     * @default null
     * @object
     */
    grid: null,

    /**
     * Property which holds the translatable form elements to pass them to the
     * "Shopware.apps.Translation" sub application.
     * @array
     */
    translatableFields: [],

    /**
     * Indicates the type of the translation.
     *
     * @default article
     * @string
     */
    translationType: 'article',

    /**
     * Callback method which will be called when the translation window is closed.
     * @function
     */
    translationCallback: Ext.emptyFn,

    /**
     * Indicates the record id
     * @default null
     * @integer
     */
    translationKey: null,

    /**
     * getClass-callback for the generated actioncolumn items
     * @function
     */
    actionColumnItemGetClassCallback: Ext.emptyFn,

    snippets: {
        tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'translate_tooltip','default'=>'Translate','namespace'=>'backend/base/grid_translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'translate_tooltip','default'=>'Translate','namespace'=>'backend/base/grid_translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Translate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'translate_tooltip','default'=>'Translate','namespace'=>'backend/base/grid_translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Class constructor.
     */
    constructor: function() {
        var me = this;
        me.callParent(arguments);
        me.mixins.observable.constructor.call(me);
    },

    /**
     * The init method is invoked after initComponent method has been run for the client Component.
     *
     * @public
     * @param [object] client - Ext.Component which calls the plugin
     * @return void
     */
    init: function(grid) {
        var me = this;
        me.grid = grid;
        me.grid.on('reconfigure', me.onGridReconfigure, me);
        me.onGridReconfigure();
        me.callParent(arguments);
    },

    /**
     * Event listener function of grid panel which contains the translation plugin.
     * Fired when the grid reconfigured. The reconfigure event will be fired when a store
     * or columns configured for the grid panel.
     * @return { Boolean }
     */
    onGridReconfigure: function() {
        var me = this;

        //check if the grid was passed in the init function
        if (!me.grid) {
            return false;
        }

        //first we have to create the translatable field configuration
        me.translatableFields = me.getTranslatableFields();

        //if no fields configuration created, no translation editor was passed for any column.
        //so we don't have to display the globe item in the action column.
        if (me.translatableFields.length === 0) {
            return false;
        }

        if (me.hasGridTranslationColumn()) {
            return true;
        }

        //first get the header configuration of the grid panel
        var columns = me.grid.headerCt;

        //now we create a helper property which will be initials with the value null.
        var actionColumn = null;

        //we have to check if an action column already exist.
        columns.items.each(function(column) {
            //if the column xtype is action column, we found an existing action column
            if (column.getXType() === 'actioncolumn') {
                //we set this action column in the helper property.
                actionColumn = column;
                return true;
            }
        });
        //here we create the new action column. We pass the actionColumn property to the function to merge the items.
        var newActionColumn = me.createTranslationActionColumn(actionColumn);

        //if an action column already exist, we have to remove this before we add the new one
        if (actionColumn) {
            me.grid.headerCt.remove(actionColumn);
        }

        //now we insert the new action column
        me.grid.headerCt.insert(newActionColumn);
        return true;
    },

    /**
     * Internal helper function to check if the translation action item already added in the
     * grid panel.
     * @return { Boolean }
     */
    hasGridTranslationColumn: function() {
        var me = this, translationItemExist = false;

        if (!me.grid) {
            return translationItemExist;
        }
        var columns = me.grid.headerCt;
        columns.items.each(function(column) {
            //if the column xtype is action column, we found an existing action column
            if (column.getXType() === 'actioncolumn') {
                if (me.hasActionColumnTranslationItem(column)) {
                    translationItemExist = true;
                    return false;
                }
            }
        });
        return translationItemExist;
    },

    /**
     * Helper function to check if the translation action item already added in the passed
     * action column.
     * @param column
     * @return { Boolean }
     */
    hasActionColumnTranslationItem: function(column) {
        var me = this,
            translationItemExist = false;

        if (!column) {
            return translationItemExist;
        }
        Ext.each(column.items, function(actionItem) {
            if (actionItem.name === 'grid-translation-plugin')  {
                translationItemExist = true;
                return false;
            }
        });
        return translationItemExist;
    },


    /**
     * Creates a new action column for the grid panel.
     * The passed actionColumn parameter can contains an already existing action column.
     *
     * @return { Ext.grid.column.Action }
     */
    createTranslationActionColumn: function(actionColumn) {
        var me = this, items = [], width = 0;

        //if an action column already exist we have to merge the action column items of the old one with
        //the action column items of the translation action column

        if (actionColumn) {
            items = actionColumn.items;
            width = actionColumn.width;
        }

        items.push(me.createTranslationActionColumnItem());

        return Ext.create('Ext.grid.column.Action', {
            width: width + 30,
            items: items
        });
    },

    /**
     * Creates the action column item.
     * If the grid already has an action column, we don't need to create a own action column,
     * so we need only the item.
     * @return { Object }
     */
    createTranslationActionColumnItem: function() {
        var me = this;

        return {
            iconCls: 'sprite-globe-green',
            tooltip: me.snippets.tooltip,
            name: 'grid-translation-plugin',
            handler: function (view, rowIndex, colIndex, item, opts, record) {
                me.actionColumnClick(record);
            },
            getClass: me.actionColumnItemGetClassCallback
        };
    },

    /**
     * Creates the translatable field configuration.
     * Iterates the grid column configuration and check for each column
     * if a translationEditor was passed. If a column has a translationEditor
     * configuration, it will be push in the internal property.
     * @return { Boolean }
     */
    getTranslatableFields: function() {
        var me = this, field;

        if (!me.grid) {
            return false;
        }

        //first get the header configuration of the grid panel
        var columns = me.grid.headerCt;
        var translatableFields = [];

        //we have to check all columns for the field configuration
        columns.items.each(function(column) {
            if (column.initialConfig.translationEditor) {
                translatableFields.push(column.initialConfig.translationEditor);
            }
        });

        return translatableFields;
    },

    /**
     * Event listener function of the globe action column item. Fired when
     * the user clicks on this item to translate the grid record.
     * @param record
     */
    actionColumnClick: function(record) {
        var me = this;

        me.translatableFields = me.getTranslatableFields();

        //check if a record passed and a
        if (!record || me.translatableFields.length === 0) {
            return false;
        }

        // Check if sub applications are supported
        if(typeof(Shopware.app.Application.addSubApplication) !== 'function') {
            Ext.Error.raise('Your ExtJS application does not support sub applications');
        }

        //we iterate the translatableFields to set the record values as empty text
        Ext.each(me.translatableFields, function(field) {
            if (record.get(field.name)) {
                field.emptyText = record.get(field.name);
            }
        });

        me.translationKey = record.getId();

        Shopware.app.Application.addSubApplication({
            name: 'Shopware.apps.Translation',
            eventScope: me,
            translationCallback: me.translationCallback,
            translatableFields: me.translatableFields,
            translationType: me.translationType,
            translationMerge: me.translationMerge,
            translationKey: me.translationKey
        });
        return true;
    },


    /**
     * @method
     * The destroy method is invoked by the owning Component at the time the Component is being destroyed.
     *
     * The supplied implementation is empty. Subclasses should perform plugin cleanup in their own implementation of
     * this method.
     */
    destroy: function() {
        this.clearListeners();
        delete this.grid
        this.callParent(arguments);
    }

});

//
<?php }} ?>