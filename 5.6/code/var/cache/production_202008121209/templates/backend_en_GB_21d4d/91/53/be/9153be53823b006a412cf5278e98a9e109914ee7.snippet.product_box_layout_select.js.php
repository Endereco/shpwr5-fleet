<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/component/element/product_box_layout_select.js" */ ?>
<?php /*%%SmartyHeaderCode:18290668915f6ba7881908f6-88572119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9153be53823b006a412cf5278e98a9e109914ee7' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/component/element/product_box_layout_select.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18290668915f6ba7881908f6-88572119',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba7881925a1_84737594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba7881925a1_84737594')) {function content_5f6ba7881925a1_84737594($_smarty_tpl) {?>/*
 * Shopware
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

Ext.define('Shopware.apps.Base.view.element.ProductBoxLayoutSelect', {
    extend: 'Ext.form.field.ComboBox',

    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings_default_settings_box_layout_label','default'=>'Product layout','namespace'=>'backend/base/product_box_layout')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings_default_settings_box_layout_label','default'=>'Product layout','namespace'=>'backend/base/product_box_layout'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Product layout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings_default_settings_box_layout_label','default'=>'Product layout','namespace'=>'backend/base/product_box_layout'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    helpText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings_default_settings_box_layout_help','default'=>'Product layout allows you to control how your products are presented on the category page. Choose between three different layouts to fine-tune your product display. You can select a layout for each category or automatically adopt the settings from the parent category.','namespace'=>'backend/base/product_box_layout')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings_default_settings_box_layout_help','default'=>'Product layout allows you to control how your products are presented on the category page. Choose between three different layouts to fine-tune your product display. You can select a layout for each category or automatically adopt the settings from the parent category.','namespace'=>'backend/base/product_box_layout'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Product layout allows you to control how your products are presented on the category page. Choose between three different layouts to fine-tune your product display. You can select a layout for each category or automatically adopt the settings from the parent category.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings_default_settings_box_layout_help','default'=>'Product layout allows you to control how your products are presented on the category page. Choose between three different layouts to fine-tune your product display. You can select a layout for each category or automatically adopt the settings from the parent category.','namespace'=>'backend/base/product_box_layout'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    labelWidth: 180,

    queryMode: 'local',

    valueField: 'key',

    displayField: 'label',

    alias: 'widget.base-element-product-box-layout-select',

    editable: false,

    storeConfig: {},

    listConfig: {
        getInnerTpl: function () {
            return '' +
            '<div class="layout-select-item">' +
                '<img src="{image}" width="70" height="50" class="layout-picto" />' +
                    '<div class="layout-info">' +
                        '<h1>{label}</h1>' +
                        '<div>{description}</div>' +
                    '</div>' +
                    '<div class="x-clear" />' +
            '</div>' +
            '';
        }
    },

    initComponent: function() {
        this.queryMode = 'local';

        this.createStore();
        this.callParent(arguments);
    },

    createStore: function() {
        this.store = Ext.create('Shopware.apps.Base.store.ProductBoxLayout', this.storeConfig);
    }
});
<?php }} ?>