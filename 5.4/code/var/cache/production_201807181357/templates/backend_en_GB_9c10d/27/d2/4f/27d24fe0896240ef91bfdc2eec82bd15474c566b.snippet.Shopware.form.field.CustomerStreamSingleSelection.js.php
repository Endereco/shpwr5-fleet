<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:08
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CustomerStreamSingleSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:17984962735f6baa383c7f63-93166511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27d24fe0896240ef91bfdc2eec82bd15474c566b' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CustomerStreamSingleSelection.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17984962735f6baa383c7f63-93166511',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa383cb1a7_30121925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa383cb1a7_30121925')) {function content_5f6baa383cb1a7_30121925($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

// 

// 

Ext.define('Shopware.form.field.CustomerStreamSingleSelection', {
    extend: 'Shopware.form.field.SingleSelection',
    alias: 'widget.shopware-form-field-customer-stream-single-selection',
    displayNewsletterCount: false,

    getComboConfig: function() {
        var me = this;
        var config = me.callParent(arguments);

        config.tpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '<div class="x-boundlist-item">{name} - {customer_count} <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'customer_count_suffix','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'customer_count_suffix','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customer(s)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'customer_count_suffix','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>',
            '</tpl>'
        );
        config.displayTpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '{name} - {customer_count} <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'customer_count_suffix','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'customer_count_suffix','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customer(s)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'customer_count_suffix','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            '</tpl>'
        );

        if (me.displayNewsletterCount) {
            config.tpl = Ext.create('Ext.XTemplate',
                '<tpl for=".">',
                    '<div class="x-boundlist-item">{name} - {newsletter_count} <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'newsletter_count_suffix','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'newsletter_count_suffix','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Recipient(s)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'newsletter_count_suffix','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>',
                '</tpl>'
            );
            config.displayTpl = Ext.create('Ext.XTemplate',
                '<tpl for=".">',
                    '{name} - {newsletter_count} <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'newsletter_count_suffix','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'newsletter_count_suffix','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Recipient(s)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'newsletter_count_suffix','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                '</tpl>'
            );
        }

        return config;
    },

    /**
     * Adds the stream icon to the combo box field body.
     */
    afterRender: function() {
        var me = this,
            el = me.getEl(),
            inputCell = el.select('.x-form-trigger-input-cell', true).first(),
            iconCell = new Ext.Element(document.createElement('td')),
            icon = new Ext.Element(document.createElement('span'));

        icon.set({
            'cls': 'sprite-customer-streams',
            'style': {
                display: 'inline-block',
                width: '16px',
                height: '16px',
                margin: '0 4px',
                position: 'relative',
                top: '2px'
            }
        });

        iconCell.set({
            'style': { width: '24px' }
        });

        icon.appendTo(iconCell);
        iconCell.insertBefore(inputCell);

        me.callParent(arguments);
    }

});
// 
<?php }} ?>