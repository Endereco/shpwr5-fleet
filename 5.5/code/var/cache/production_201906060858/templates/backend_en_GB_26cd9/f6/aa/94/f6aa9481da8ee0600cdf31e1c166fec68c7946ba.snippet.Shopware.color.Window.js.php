<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:18
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/base/component/Shopware.color.Window.js" */ ?>
<?php /*%%SmartyHeaderCode:131698385f6ba9ca540c85-07454318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6aa9481da8ee0600cdf31e1c166fec68c7946ba' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/base/component/Shopware.color.Window.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131698385f6ba9ca540c85-07454318',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9ca545ea4_06614157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9ca545ea4_06614157')) {function content_5f6ba9ca545ea4_06614157($_smarty_tpl) {?>
//

//

Ext.define('Shopware.color.Window', {
    extend: 'Enlight.app.SubWindow',

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'color_window_title','default'=>'Color selection','namespace'=>'backend/base/color_components')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'color_window_title','default'=>'Color selection','namespace'=>'backend/base/color_components'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Color selection<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'color_window_title','default'=>'Color selection','namespace'=>'backend/base/color_components'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    width: 377,
    height: 490,

    layout: {
        type: 'vbox',
        align: 'stretch'
    },

    resizable: false,
    maximizable: false,
    minimizable: false,
    closable: false,

    initComponent: function () {
        var me = this;

        me.items = me.createItems();
        me.dockedItems = me.createDockedItems();

        me.callParent(arguments);
    },

    createItems: function () {
        var me = this;

        me.formPanel = Ext.create('Ext.form.Panel', {
            flex: 1,
            items: [
                me.createColorSelection(),
                me.createSelectedColorField()
            ]
        });

        return [
            me.formPanel
        ];
    },

    createColorSelection: function() {
        var me = this;

        me.colorSelection = Ext.create('Shopware.form.field.ColorSelection', {
            parentWindow: me
        });

        me.colorSelection.on('color-changed', function(window, value) {
            me.selectedColorField.setValue(value);
        });

        return me.colorSelection;
    },

    createSelectedColorField: function() {
        var me = this;

        me.selectedColorField = Ext.create('Shopware.form.field.ColorField', {
            pickerButton: false,
            editable: false,
            value: me.value,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'color_field_label','default'=>'Selected color','namespace'=>'backend/base/color_components')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'color_field_label','default'=>'Selected color','namespace'=>'backend/base/color_components'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Selected color<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'color_field_label','default'=>'Selected color','namespace'=>'backend/base/color_components'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            margin: 10
        });

        return me.selectedColorField;
    },

    createDockedItems: function () {
        var me = this;

        return [ me.createToolbar() ];
    },

    createToolbar: function () {
        var me = this;

        me.toolbar = Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            items: me.createToolbarItems()
        });

        return me.toolbar;
    },

    createToolbarItems: function () {
        var me = this;

        return [
            '->',
            me.createCancelButton(),
            me.createApplyButton()
        ];
    },

    createCancelButton: function () {
        var me = this;

        me.cancelButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'color_window_cancel','default'=>'Cancel','namespace'=>'backend/base/color_components')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'color_window_cancel','default'=>'Cancel','namespace'=>'backend/base/color_components'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'color_window_cancel','default'=>'Cancel','namespace'=>'backend/base/color_components'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'small',
            handler: function () {
                me.destroy();
            }
        });

        return me.cancelButton;
    },

    createApplyButton: function () {
        var me = this;

        me.applyButton = Ext.create('Ext.button.Button', {
            text:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'color_window_apply','default'=>'Apply','namespace'=>'backend/base/color_components')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'color_window_apply','default'=>'Apply','namespace'=>'backend/base/color_components'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'color_window_apply','default'=>'Apply','namespace'=>'backend/base/color_components'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'primary small',
            handler: function () {
                me.fireEvent('apply-color', me, me.selectedColorField.getValue());
            }
        });

        return me.applyButton;
    }

});

//<?php }} ?>