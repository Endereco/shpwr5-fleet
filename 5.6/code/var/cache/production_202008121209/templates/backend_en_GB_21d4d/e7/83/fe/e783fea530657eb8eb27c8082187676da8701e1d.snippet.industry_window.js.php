<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:42
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/view/settings/industry_window.js" */ ?>
<?php /*%%SmartyHeaderCode:7230991325f6ba78abb5952-68273069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e783fea530657eb8eb27c8082187676da8701e1d' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/view/settings/industry_window.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7230991325f6ba78abb5952-68273069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78abb8f01_25599436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78abb8f01_25599436')) {function content_5f6ba78abb8f01_25599436($_smarty_tpl) {?>
//
//
Ext.define('Shopware.apps.Benchmark.view.settings.IndustryWindow', {
    extend: 'Enlight.app.Window',
    alias: 'widget.benchmark-settings-industry-window',

    height: 140,
    width: 320,

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/industry_window/title','default'=>'Change industry','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/title','default'=>'Change industry','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change industry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/title','default'=>'Change industry','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Used by settings.js controller to display an additional text above the industry combo
     */
    additionalText: '',

    /**
     * Used by settings.js controller to call a custom callback after industry is saved
     */
    customCallback: Ext.emptyFn,

    initComponent: function () {
        var items = [];

        if (this.additionalText) {
            items.push(Ext.create('Ext.form.field.Display', {
                fieldStyle: 'color: #61677f; font-weight: bold; margin-bottom: 5px;',
                value: this.additionalText
            }));
        }

        items.push(this.createIndustryCombo());

        this.items = Ext.create('Ext.panel.Panel', {
            layout: 'anchor',
            bodyPadding: 10,
            border: 0,
            items: items
        });

        this.dockedItems = this.createBottomBar();

        this.callParent(arguments);
    },

    /**
     * @returns { Ext.form.field.ComboBox }
     */
    createIndustryCombo: function () {
        var me = this,
            industryStore = Ext.create('Shopware.apps.Benchmark.store.Industry');

        me.industryCombo = Ext.create('Ext.form.field.ComboBox', {
            store: industryStore,
            queryMode: 'local',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/industry_window/label','default'=>'Choose industry','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/label','default'=>'Choose industry','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Choose industry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/label','default'=>'Choose industry','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/industry_window/empty','default'=>'Please choose your industry','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/empty','default'=>'Please choose your industry','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please choose your industry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/empty','default'=>'Please choose your industry','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            anchor: '100%',
            displayField: 'name',
            valueField: 'id',
            editable: false,
            listeners: {
                change: function (el, value) {
                    if (value === null || value === '') {
                        me.saveButton.disable();
                        return;
                    }

                    me.saveButton.enable();
                }
            }
        });

        if (this.additionalText) {
            industryStore.removeAt(0);
        }

        return me.industryCombo;
    },

    /**
     * @returns { Ext.toolbar.Toolbar }
     */
    createBottomBar: function () {
        var me = this;

        me.saveButton = Ext.create('Ext.button.Button', {
            xtype: 'button',
            disabled: true,
            cls: 'primary',
            action: 'save',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/industry_window/save','default'=>'Save industry','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/save','default'=>'Save industry','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save industry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/save','default'=>'Save industry','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function () {
                me.fireEvent('saveIndustry', me, me.industryCombo.getValue(), me.customCallback);
            }
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            items: [{
                xtype: 'tbfill'
            }, me.saveButton]
        });
    }
});
//
<?php }} ?>