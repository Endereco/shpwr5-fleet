<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:39
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/application/Shopware.listing.InfoPanel.js" */ ?>
<?php /*%%SmartyHeaderCode:13729815295f6ba787f09ed7-67374697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81270888e6965e46aada1bdce87791cdb1ede89e' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/application/Shopware.listing.InfoPanel.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13729815295f6ba787f09ed7-67374697',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba787f10dd5_14472684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba787f10dd5_14472684')) {function content_5f6ba787f10dd5_14472684($_smarty_tpl) {?>
//
//

Ext.define('Shopware.listing.InfoPanel', {
    extend: 'Ext.panel.Panel',

    alias: 'widget.shopware-listing-info-panel',

    /**
     * List of classes to mix into this class.
     * @type { Object }
     */
    mixins: {
        helper: 'Shopware.model.Helper'
    },

    region: 'east',
    width: 200,
    cls: 'detail-view',
    collapsible: true,
    layout: 'fit',

    /**
     * Contains an instance of { @link Ext.view.View }.
     * This component contains the { @link Ext.XTemplate } which
     * defines how the info view data is displayed.
     * @type { Ext.view.View }
     */
    infoView: undefined,

    /**
     * Reference to the { @link Shopware.window.Listing } which contains
     * the info panel extension definition.
     * This reference is set automatically.
     *
     * IMPORTANT: In the default case shopware expects that the
     * listing window has an own property named "gridPanel" which
     * contains the instance of the { @link Shopware.grid.Panel }.
     * This grid panel is used to add an event listener function to the
     * { @link Shopware.grid.Panel } selection-changed event.
     *
     * @type { Shopware.window.Listing }
     */
    listingWindow: undefined,

    /**
     * Instance of the { @link Shopware.grid.Panel }.
     * The grid panel property is set with the { @link #listingWindow:gridPanel }
     * property.
     * This grid panel is used to add an event listener function to the
     * { @link Shopware.grid.Panel } selection-changed event.
     *
     * @type { Shopware.grid.Panel }
     */
    gridPanel: undefined,

    /**
     * Title of the info panel.
     * @type { String }
     */
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info_panel/title','default'=>'Detailed information','namespace'=>'backend/application/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info_panel/title','default'=>'Detailed information','namespace'=>'backend/application/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Detailed information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info_panel/title','default'=>'Detailed information','namespace'=>'backend/application/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Configuration text for the info panel if no record is selected.
     */
    emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info_panel/empty_text','default'=>'No record selected.','namespace'=>'backend/application/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info_panel/empty_text','default'=>'No record selected.','namespace'=>'backend/application/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No entry selected<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info_panel/empty_text','default'=>'No record selected.','namespace'=>'backend/application/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Get the reference to the class from which this object was instantiated.
     * Note that unlike self, this.statics() is scope-independent and it always
     * returns the class from which it was called, regardless of what this points to during run-time
     *
     * @type { Object }
     */
    statics: {

        /**
         * The displayConfig contains the default shopware configuration for
         * this component.
         * To set the shopware configuration, you can use the configure function and set an object as return value
         *
         * @example
         *      Ext.define('Shopware.apps.Product.view.listing.extension.Info', {
         *          extend: 'Shopware.listing.InfoPanel',
         *          configure: function() {
         *              return {
         *                  model: 'Shopware.apps.Product.model.Product,
         *                  ...
         *              }
         *          }
         *      });
         */
        displayConfig: {
            /**
             * @required - Or override createTemplate function.
             *
             * Contains the full Ext JS model name of the listing records which will be displayed within the panel.
             *
             * @type { String }
             */
            model: undefined,

            /**
             * Contains the definition which model fields will be displayed within the info panel.
             * If this object contains no field definition, shopware creates for prototyping a info
             * field for each model field.
             * If the object contains some field definitions, only the configured fields will be displayed.
             *
             * @example
             * You have an model with the following field definition:
             * Ext.define('Shopware.apps.Product.model.Product', {
             *    fields: [
             *        { name: 'name', type: 'string'  },
             *        { name: 'active', type: 'boolean'  },
             *        { name: 'description', type: 'string'  },
             *    ]
             * });
             *
             * If you want to display only the name field, set only the name field into the { @link #fields } property:
             * Ext.define('Shopware.apps.Product.view.list.extension.Info', {
             *    configure: function() {
             *        return {
             *            fields: {
             *                name: undefined
             *            }
             *        }
             *    }
             * });
             *
             * This definition allows you to display only the name model field within the 
             * info panel. The `undefined` value says that shopware creates a default info field
             * for the name field with the following template:
             *      '<p style="padding: 2px"><b>' + field.name +':</b> {' + field.name + '}</p>'
             * 
             * Each info field is created in the { @link #createTemplateForField }.
             * If you want to modify the template of a info field, you can set
             * three different values:
             *  1. A string => The string will be set as template
             *  2. A object => The object can be an Ext.XTemplate
             *  3. A function => The configured function will be called to create the info field.
             */
            fields: { }
        },

        /**
         * Static function to merge the different configuration values
         * which passed in the class constructor.
         * @param { Object } userOpts
         * @param { Object } definition
         * @returns Object
         */
        getDisplayConfig: function (userOpts, definition) {
            var config = { };

            if (userOpts && typeof userOpts.configure == 'function') {
                config = Ext.apply({ }, config, userOpts.configure());
            }
            if (definition && typeof definition.configure === 'function') {
                config = Ext.apply({ }, config, definition.configure());
            }
            config = Ext.apply({ }, config, this.displayConfig);

            return config;
        },

        /**
         * Static function which sets the property value of
         * the passed property and value in the display configuration.
         *
         * @param prop
         * @param val
         * @returns boolean
         */
        setDisplayConfig: function (prop, val) {
            var me = this;

            if (!me.displayConfig.hasOwnProperty(prop)) {
                return false;
            }
            me.displayConfig[prop] = val;
            return true;
        }
    },

    /**
     * Override required!
     * This function is used to override the { @link #displayConfig } object of the statics() object.
     *
     * @returns { Object }
     */
    configure: function() {
        return { };
    },

    /**
     * Class constructor which merges the different configurations.
     * @param opts
     */
    constructor: function (opts) {
        var me = this;

        me._opts = me.statics().getDisplayConfig(opts, this);
        me.callParent(arguments);
    },


    /**
     * Helper function to get config access.
     *
     * @param prop string
     * @returns mixed
     * @constructor
     */
    getConfig: function (prop) {
        var me = this;
        return me._opts[prop];
    },

    /**
     * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first, with each initComponent method up the hierarchy
     * to Ext.Component being called thereafter. This makes it easy to implement and, if needed, override the constructor
     * logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class'
     * initComponent method is also called.
     * All config options passed to the constructor are applied to this before initComponent is called, so you
     * can simply access them with this.someOption.
     */
    initComponent: function() {
        var me = this;

        me.checkRequirements();

        me.gridPanel = me.listingWindow.gridPanel;

        me.items = me.createItems();

        me.addEventListeners();

        me.callParent(arguments);
    },

    /**
     * Helper function which checks all component requirements.
     */
    checkRequirements: function() {
        var me = this;

        if (!(me.listingWindow instanceof Ext.window.Window)) {
            me.throwException(me.$className + ": Component requires a passed listingWindow property which contains the instance of the assigned Shopware.window.Listing");
        }
        if (!(me.listingWindow.gridPanel instanceof Shopware.grid.Panel)) {
            me.throwException(me.$className + ": The listingWindow.gridPanel property contains no Shopware.grid.Panel instance.");
        }
        if (me.alias.length <= 0) {
            me.throwException(me.$className + ": Component requires a configured Ext JS widget alias.");
        }
        if (me.alias.length === 1 && me.alias[0] === 'widget.shopware-listing-info-panel') {
            me.throwException(me.$className + ": Component requires a configured Ext JS widget alias.");
        }
    },

    /**
     * Registers the grid panel event listener to update the info panel
     * if the selection-changed event was fired.
     * This event is fired when the selection of the grid panel changed.
     */
    addEventListeners: function() {
        var me = this;

        me.gridPanel.on(me.gridPanel.eventAlias + '-selection-changed', function(grid, selModel, records) {
            var record = { };
            if (records.length > 0) {
                record = records.shift();
            }
            me.updateInfoView(record);
        });
    },

    /**
     * Creates all items for this component.
     * The return value will be assigned to the { @link items } property of this component.
     * @returns { Array }
     */
    createItems: function() {
        var me = this, items = [];

        items.push(me.createInfoView());

        return items;
    },

    /**
     * Creates the { @link #infoView } component.
     * This component is used to display the model data into a plain data view.
     * The different fields can be configured in the { @link #fields } property.
     * @returns { Ext.view.View }
     */
    createInfoView: function(){
        var me = this;

        me.infoView = Ext.create('Ext.view.View', {
            tpl: me.createTemplate(),
            flex: 1,
            autoScroll: true,
            padding: 5,
            style: 'color: #6c818f;font-size:11px',
            emptyText: '<div style="font-size:13px; text-align: center;">' + me.emptyText + '</div>',
            deferEmptyText: false,
            itemSelector: 'div.item',
            renderData: []
        });

        return me.infoView;
    },

    /**
     * Creates the template for the { @link #infoView } component.
     * The template is used to define how the data will be displayed within
     * the data view component.
     * The view of each field can be configured in the { @link #fields } property.
     *
     * @returns { Ext.XTemplate }
     */
    createTemplate: function() {
        var me = this, fields = [], model, keys, field, config,
            configFields = me.getConfig('fields');

        if (me.getConfig('model')) {
            model = Ext.create(me.getConfig('model'));
            keys = model.fields.keys;
            if (Object.keys(configFields).length > 0) keys = Object.keys(configFields);

            Ext.each(keys, function(key) {
                field = me.getFieldByName(model.fields.items, key);
                config = configFields[key];

                if (Ext.isFunction(config)) {
                    field = config.call(me, me, field);
                    if (field) fields.push(field);
                } else if (Ext.isObject(config) || (Ext.isString(config) && config.length > 0)) {
                    fields.push(config);
                } else {
                    fields.push(me.createTemplateForField(model, field));
                }
            });
        }

        return new Ext.XTemplate(
            '<tpl for=".">',
                '<div class="item" style="">',
                    fields.join(''),
                '</div>',
            '</tpl>'
        );
    },

    /**
     * Small wrapper function which creates the info view for a single model field.
     * @param { Shopware.data.Model } model
     * @param { Ext.data.Field } field
     * @returns { String }
     */
    createTemplateForField: function(model, field) {
        var me = this;

        return '<p style="padding: 2px"><b>' + me.getHumanReadableWord(field.name) +':</b> {' + field.name + '}</p>'
    },

    /**
     * Helper function which updates the { @link #infoView } component
     * with the passed record data.
     * This function is called from the selection-changed event listener function.
     *
     * @param { Shopware.data.Model } record
     * @returns { boolean }
     */
    updateInfoView: function(record) {
        var me = this;

        if (record.data) {
            me.infoView.update(record.data);
        } else {
            me.infoView.update(me.infoView.emptyText);
        }

        return true;
    }
});
//
<?php }} ?>