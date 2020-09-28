<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:08
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/component/Shopware.component.ValidatePassword.js" */ ?>
<?php /*%%SmartyHeaderCode:10060901475f6baa382dc9f1-69666148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8189b6b65671b104442c8e4add662485b8623709' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/component/Shopware.component.ValidatePassword.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10060901475f6baa382dc9f1-69666148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa382e2e34_59538465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa382e2e34_59538465')) {function content_5f6baa382e2e34_59538465($_smarty_tpl) {?>/**
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
Ext.define('Shopware.component.ValidatePassword', {

    /**
     * Defines that the component is globally available and initialized it itself
     * @boolean
     */
    singleton: true,

    /**
     * Start listening on a global shopware event to reauthorize
     *
     * @constructor
     */
    constructor: function() {
        var me = this;

        Ext.onReady(function() {
            me.registerEventListeners();
        });
    },

    registerEventListeners: function() {
        var me = this;

        Shopware.app.Application.on('Shopware.ValidatePassword', me.onPasswordValidation);
    },

    /**
     * Opens a popup and asks for a password. The user has to enter his password to continue the intended callback,
     * provided as `successCallback` method. If the user closes this popup without entering a password, the
     * `abortCallback` method will be called.
     *
     * @param { function } successCallback
     * @param { function } abortCallback
     * @param { boolean } isRetryAttempt
     */
    onPasswordValidation: function(successCallback, abortCallback, isRetryAttempt) {
        var passwordPrompt = new Ext.window.MessageBox(),
            displayText = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'enterPassword','default'=>'Please enter your password','namespace'=>'backend/base/component/Shopware.component.ValidatePassword')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'enterPassword','default'=>'Please enter your password','namespace'=>'backend/base/component/Shopware.component.ValidatePassword'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please enter your password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'enterPassword','default'=>'Please enter your password','namespace'=>'backend/base/component/Shopware.component.ValidatePassword'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:',
            onFailure = function() {
                Shopware.app.Application.fireEvent('Shopware.ValidatePassword', successCallback, abortCallback, true);
            };

        successCallback = typeof successCallback !== "function" ? Ext.emptyFn : successCallback;
        abortCallback = typeof abortCallback !== "function" ? Ext.emptyFn : abortCallback;

        if (isRetryAttempt === true) {
            displayText = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'passwordInvalid','default'=>'Your password is invalid.','namespace'=>'backend/base/component/Shopware.component.ValidatePassword')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'passwordInvalid','default'=>'Your password is invalid.','namespace'=>'backend/base/component/Shopware.component.ValidatePassword'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your password is invalid.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'passwordInvalid','default'=>'Your password is invalid.','namespace'=>'backend/base/component/Shopware.component.ValidatePassword'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/><br/>' + displayText;
        }

        passwordPrompt.afterRender = Ext.MessageBox.afterRender;
        passwordPrompt.textField.inputType = 'password';

        passwordPrompt.prompt(
            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'title','default'=>'Password Validation','namespace'=>'backend/base/component/Shopware.component.ValidatePassword')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','default'=>'Password Validation','namespace'=>'backend/base/component/Shopware.component.ValidatePassword'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password Validation<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','default'=>'Password Validation','namespace'=>'backend/base/component/Shopware.component.ValidatePassword'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            displayText,
            function (result, value) {
                if (result !== "ok" || !value) {
                    abortCallback();
                    return;
                }

                Ext.Ajax.request({
                    url: '<?php echo '/shopware5_4/backend/Login/validatePassword';?>',
                    params: {
                        password: value
                    },
                    success: function(response) {
                        var responseObject = JSON.parse(response.responseText);
                        if (responseObject.success === true) {
                            successCallback();
                        } else {
                            onFailure();
                        }
                    },
                    failure: function() {
                        onFailure();
                    }
                });
            }
        );
    }

});<?php }} ?>