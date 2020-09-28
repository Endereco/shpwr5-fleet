<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/component/Shopware.window.ExpiredPluginWarning.js" */ ?>
<?php /*%%SmartyHeaderCode:18981300575f6ba788143f32-06291426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f9a98fc3f060b5eee3fff49707778e639fa798d' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/component/Shopware.window.ExpiredPluginWarning.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18981300575f6ba788143f32-06291426',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78814ab81_38911006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78814ab81_38911006')) {function content_5f6ba78814ab81_38911006($_smarty_tpl) {?>/**
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
 * @version    $Id$
 * @author shopware AG
 */
//

Ext.define('Shopware.window.ExpiredPluginWarning', {
    extend: 'Enlight.app.Window',
    autoScroll: true,
    layout: 'fit',
    height: 430,
    width: 870,
    autoShow: true,
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/title','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/title','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin Warning<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/title','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    footerButton: false,

    initComponent: function() {
        var me = this;

        me.items = [
            {
                xtype: 'form',
                items: [me.createContentPage()],
                dockedItems: [{
                    xtype: 'toolbar',
                    dock: 'bottom',
                    ui: 'shopware-ui',
                    cls: 'shopware-toolbar',
                    items: me.getWindowButtons()
                }]
            },
        ];

        me.callParent(arguments);
    },

    createContentPage: function () {
        return {
            xtype: 'container',
            html: '<style>.plugin-window { color: #475C6A; } .plugin-window h2 { color: #495B67; font-weight: bold; font-size: 24px; margin-bottom: 12px } .plugin-window p { margin-bottom: 10px; line-height: 140%;} .plugin-window img { width: calc(100% - 100px); padding: 50px; margin: 40px 0 0 -30px; position: absolute; top: 50%; left: 50%; transform: translateX(-50%); } .plugin-window .bar { width: 50%; float: left; position: relative; } .plugin-window .bar:last-child { margin-left: 50%; } .plugin-window strong { font-weight: bold; } .plugin-window ul li { list-style: inherit; margin: 3px 0}</style><div class="plugin-window"><div class="bar"><img src="' + this.getImage() + '"></div><div class="bar"><div style="margin: 30px 0 0 -40px;">' + this.getText() + '</div></div></div>'
        }
    },

    getImage: function() {
        return '/shopware5_6/themes/Backend/ExtJs/backend/_resources/images/plugin_manager/warning.svg';
    },

    getText: function() {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/content','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/content','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<h2>Warning!</h2><p>The right to use at least one of your plugins has expired. Reasons can be:<ul><li>Expiry of plugin test phase (30 days), the plugin not deleted from Plugin Manager</li><li>Plugin rental ended, the plugin not deleted from Plugin Manager</li><li>Plugin subscription not renewed, still installed an update of the plugin</li><li>Change of the domain in the backend without domain transfer in the Shopware account</li><li>Plugin registered on another domain in your Shopware account</li></ul></p><p>Purchase/rent plugins over your <a href="https://account.shopware.com/shops/shops" target="_blank">Shopware Account</a> to fix existing license violations and to avoid legal consequences.</p><p>If you no longer use the plugin, delete it completely from the Plugin Manager. Shopware reserves the right to charge for installed plugins.</p><p><strong>Find more support in our <a href="https://docs.shopware.com/en/shopware-5-en/tutorials-and-faq/plugin-licenses-questions-and-answers" target="_blank">FAQ</a></strong></p><p>Your Shopware team</p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/content','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    },

    getWindowButtons: function() {
        var me = this;

        return [
            '->',
            {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/cancel','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/cancel','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Close<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/cancel','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                scope: me,
                cls: 'secondary',
                handler: function () {
                    me.destroy();
                }
            },
            {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/goToPluginManager','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/goToPluginManager','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Open plugin overview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/goToPluginManager','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                scope: me,
                cls: 'primary',
                handler: function () {
                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.PluginManager',
                        action: 'ExpiredPlugins'
                    });

                    me.destroy();
                }
            }
        ];
    }
});
<?php }} ?>