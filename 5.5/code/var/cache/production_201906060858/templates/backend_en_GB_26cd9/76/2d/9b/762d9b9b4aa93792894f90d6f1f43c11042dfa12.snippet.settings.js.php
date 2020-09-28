<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:20
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/benchmark/controller/settings.js" */ ?>
<?php /*%%SmartyHeaderCode:16720807335f6ba9ccc1e5a9-58159403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '762d9b9b4aa93792894f90d6f1f43c11042dfa12' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/benchmark/controller/settings.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16720807335f6ba9ccc1e5a9-58159403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9ccc2ee27_38459217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9ccc2ee27_38459217')) {function content_5f6ba9ccc2ee27_38459217($_smarty_tpl) {?>
//
//
Ext.define('Shopware.apps.Benchmark.controller.Settings', {
    extend: 'Ext.app.Controller',

    refs: [
        { ref: 'settingsPanel', selector: 'form[name=benchmark-settings-panel]' },
        { ref: 'activationContainer', selector: 'container[name=activationContainer]' },
        { ref: 'deActivationContainer', selector: 'container[name=deActivationContainer]' },
        { ref: 'industryField', selector: 'industryfield[name=industry]' },
        { ref: 'shopSelection', selector: 'combo[name=shopSelection]' },
        { ref: 'typeRadios', selector: 'radiogroup[name=typeRadios]' },
        { ref: 'typeFieldSet', selector: 'fieldset[name=typeFieldSet]' },
    ],

    init: function () {
        this.control({
            'benchmark-settings-window': {
                shopConfigLoaded: this.onShopConfigsLoaded,
                configSelected: this.onConfigSelect,
                activateBenchmark: this.activateBenchmark,
                deactivateBenchmark: this.deactivateBenchmark,
                saveType: this.onSaveType
            },
            'industryfield': {
                changeIndustry: this.onChangeIndustry
            },
            'benchmark-settings-industry-window': {
                saveIndustry: this.onSaveIndustry
            }
        });

        this.callParent(arguments);
    },

    /**
     * @param { Shopware.apps.Benchmark.store.ShopConfigs } store
     * @param { Ext.form.field.ComboBox } comboBox
     */
    onShopConfigsLoaded: function (store, comboBox) {
        var firstRecord = store.first();

        comboBox.select(firstRecord);
        comboBox.fireEvent('select', comboBox, [firstRecord]);
    },

    /**
     * @param { Shopware.apps.Benchmark.view.settings.Window } settingsWin
     * @param { Ext.form.field.ComboBox } combo
     * @param { Shopware.apps.Benchmark.model.ShopConfig } record
     */
    onConfigSelect: function (settingsWin, combo, record) {
        this.getSettingsPanel().loadSettingsRecord(record);
    },

    onChangeIndustry: function () {
        this.getView('settings.IndustryWindow').create().show();
    },

    /**
     * @param { Shopware.apps.Benchmark.view.settings.IndustryWindow } win
     * @param { integer } val
     * @param { Function } callback
     */
    onSaveIndustry: function (win, val, callback) {
        var me = this;

        Ext.Ajax.request({
            url: '<?php echo '/shopware5_5/backend/Benchmark/saveIndustry';?>',
            params: {
                industry: val,
                shopId: me.getShopSelection().getValue()
            },
            success: function (response) {
                var responseData = Ext.decode(response.responseText);

                win.destroy();
                me.getIndustryField().setValue(val);
                me.getSettingsPanel().getRecord().set('industry', val);

                if (responseData.success) {
                    Shopware.Notification.createGrowlMessage(
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/industry_window/success/title','default'=>'Save successful','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/industry_window/success/title','default'=>'Save successful','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/industry_window/success/title','default'=>'Save successful','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/industry_window/success/message','default'=>'The chosen industry was saved successfully','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/industry_window/success/message','default'=>'The chosen industry was saved successfully','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The chosen industry was saved successfully<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/industry_window/success/message','default'=>'The chosen industry was saved successfully','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        'BenchmarkIndustryWindow'
                    );

                    callback();

                    return;
                }

                Shopware.Notification.createGrowlMessage(
                    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/industry_window/error/title','default'=>'Error saving the industry','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/industry_window/error/title','default'=>'Error saving the industry','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error saving the industry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/industry_window/error/title','default'=>'Error saving the industry','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    responseData.message ,
                    'BenchmarkIndustryWindow'
                );
            }
        });
    },

    activateBenchmark: function () {
        var me = this,
            record = this.getSettingsPanel().getRecord();

        if (record.get('industry') === 0) {
            this.getView('settings.IndustryWindow').create({
                additionalText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/industry_window/choose_industry','default'=>'Please choose an industry first:','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/choose_industry','default'=>'Please choose an industry first:','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please choose an industry first:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/choose_industry','default'=>'Please choose an industry first:','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                customCallback: function () {
                    me.sendBenchmarkActiveStatus(1, {
                        successTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/activation/success/title','default'=>'Success','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/success/title','default'=>'Success','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Success<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/success/title','default'=>'Success','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        successMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/activation/success/message','default'=>'You\\\'re now participating','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/success/message','default'=>'You\\\'re now participating','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You\'re now participating<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/success/message','default'=>'You\\\'re now participating','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        errorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/activation/error/title','default'=>'Error','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/error/title','default'=>'Error','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/error/title','default'=>'Error','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        confirmationTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/activation/confirmation/title','default'=>'Participate','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/confirmation/title','default'=>'Participate','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Participate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/confirmation/title','default'=>'Participate','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        confirmationMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/activation/confirmation/message','default'=>'Do you really wish to participate?','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/confirmation/message','default'=>'Do you really wish to participate?','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Do you really wish to participate?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/confirmation/message','default'=>'Do you really wish to participate?','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                    })
                }
            }).show();

            return;
        }

        this.sendBenchmarkActiveStatus(1, {
            successTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/activation/success/title','default'=>'Success','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/success/title','default'=>'Success','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Success<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/success/title','default'=>'Success','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            successMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/activation/success/message','default'=>'You\\\'re now participating','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/success/message','default'=>'You\\\'re now participating','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You\'re now participating<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/success/message','default'=>'You\\\'re now participating','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            errorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/activation/error/title','default'=>'Error','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/error/title','default'=>'Error','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/error/title','default'=>'Error','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            confirmationTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/activation/confirmation/title','default'=>'Participate','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/confirmation/title','default'=>'Participate','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Participate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/confirmation/title','default'=>'Participate','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            confirmationMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/activation/confirmation/message','default'=>'Do you really wish to participate?','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/confirmation/message','default'=>'Do you really wish to participate?','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Do you really wish to participate?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/activation/confirmation/message','default'=>'Do you really wish to participate?','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });
    },

    deactivateBenchmark: function () {
        this.sendBenchmarkActiveStatus(0, {
            successTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/deactivation/success/title','default'=>'Success','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/deactivation/success/title','default'=>'Success','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Success<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/deactivation/success/title','default'=>'Success','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            successMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/deactivation/success/message','default'=>'You\\\'re not participating any more','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/deactivation/success/message','default'=>'You\\\'re not participating any more','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You\'re not participating anymore<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/deactivation/success/message','default'=>'You\\\'re not participating any more','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            errorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/deactivation/error/title','default'=>'Error','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/deactivation/error/title','default'=>'Error','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/deactivation/error/title','default'=>'Error','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            confirmationTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/deactivation/confirmation/title','default'=>'Signing off','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/deactivation/confirmation/title','default'=>'Signing off','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Signing off<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/deactivation/confirmation/title','default'=>'Signing off','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            confirmationMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/deactivation/confirmation/message','default'=>'Do you really wish to stop the service?','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/deactivation/confirmation/message','default'=>'Do you really wish to stop the service?','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Do you really wish to stop the service?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/deactivation/confirmation/message','default'=>'Do you really wish to stop the service?','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });
    },

    /**
     * @param { integer } active
     * @param { Object } snippets
     */
    sendBenchmarkActiveStatus: function (active, snippets) {
        var me = this;

        Ext.MessageBox.confirm(snippets.confirmationTitle, snippets.confirmationMessage, function (response) {
            if (response !== 'yes') {
                return false;
            }

            Ext.Ajax.request({
                url: '<?php echo '/shopware5_5/backend/Benchmark/setActive';?>',
                params: {
                    active: active,
                    shopId: me.getShopSelection().getValue()
                },
                success: function (response) {
                    var responseData = Ext.decode(response.responseText);

                    if (responseData.success) {
                        Shopware.Notification.createGrowlMessage(
                            snippets.successTitle,
                            snippets.successMessage,
                            'BenchmarkSettings'
                        );

                        me.getActivationContainer()[active ? 'hide' : 'show']();
                        me.getDeActivationContainer()[active ? 'show' : 'hide']();
                        me.getShopSelection().getStore().load();

                        return;
                    }

                    Shopware.Notification.createGrowlMessage(
                        snippets.errorTitle,
                        responseData.message,
                        'BenchmarkSettings'
                    );
                }
            });
        });
    },

    onSaveType: function () {
        var me = this,
            radios = this.getTypeRadios(),
            values = radios.getValue(),
            selectedValue = values.type,
            typeFieldSet = me.getTypeFieldSet();

        typeFieldSet.setLoading(true);

        Ext.Ajax.request({
            url: '<?php echo '/shopware5_5/backend/Benchmark/saveType';?>',
            params: {
                type: selectedValue,
                shopId: me.getShopSelection().getValue()
            },
            success: function (response) {
                var responseData = Ext.decode(response.responseText);

                typeFieldSet.setLoading(false);

                if (responseData.success) {
                    Shopware.Notification.createGrowlMessage(
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/type/success/title','default'=>'Save successful','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/type/success/title','default'=>'Save successful','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/type/success/title','default'=>'Save successful','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/type/success/message','default'=>'The business plan was successfully saved','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/type/success/message','default'=>'The business plan was successfully saved','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The business plan was successfully saved!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/type/success/message','default'=>'The business plan was successfully saved','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        'BenchmarkSettings'
                    );

                    me.getShopSelection().getStore().load();

                    return;
                }

                Shopware.Notification.createGrowlMessage(
                    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage/type/error/title','default'=>'Error','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/type/error/title','default'=>'Error','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage/type/error/title','default'=>'Error','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    responseData.message,
                    'BenchmarkSettings'
                );
            }
        });
    }
});
//
<?php }} ?>