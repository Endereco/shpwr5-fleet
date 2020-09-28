<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:20
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/benchmark/view/settings/industry_field.js" */ ?>
<?php /*%%SmartyHeaderCode:16524471155f6ba9ccbfe9c8-41139922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ef9eac583d557ccc72a5940dfd61c134a2c0b1a' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/benchmark/view/settings/industry_field.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16524471155f6ba9ccbfe9c8-41139922',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9ccc01620_60863714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9ccc01620_60863714')) {function content_5f6ba9ccc01620_60863714($_smarty_tpl) {?>
//
//
Ext.define('Shopware.apps.Benchmark.view.settings.IndustryField', {
    extend: 'Ext.form.FieldContainer',
    alias: 'widget.industryfield',

    mixins: {
        field: 'Ext.form.field.Field'
    },

    /**
     * @type Ext.data.Store
     */
    store: null,

    initComponent: function () {
        var me = this;

        if (!me.store || !me.store instanceof Ext.data.Store) {
            throw new Error('The industry field requires a store');
        }

        me.tpl = me.createFieldTemplate();
        me.data = {};
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'manage'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        me.listeners = {
            click: function() {
                me.fireEvent('changeIndustry');
            },
            element: 'el',
            delegate: 'span#other-action'
        };
        /*<?php }?>*/

        me.callParent(arguments);
    },

    /**
     * @param { integer } value
     */
    setValue: function (value) {
        var foundIndex = this.store.findExact('id', value);
        if (foundIndex === -1) {
            this.update({ value: value });
            return;
        }

        this.update({ value: this.store.getAt(foundIndex).get('name') });
    },

    /**
     * @returns { Ext.XTemplate }
     */
    createFieldTemplate: function () {
        return new Ext.XTemplate(
            '<div>',
                '<div class="value"><b>{ value }</b></div>',
                '<div>',
                    /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'manage'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
                    '<span id="other-action" style="text-decoration: underline; font-style: italic; cursor: pointer; display: block; margin-top: 8px; font-size: 10px;">',
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/industry_window/wrong','default'=>'Wrong industry?','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/wrong','default'=>'Wrong industry?','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wrong industry?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/wrong','default'=>'Wrong industry?','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    '</span>',
                    /*<?php }?>*/
                '</div>',
            '</div>'
        );
    }
});
//
<?php }} ?>