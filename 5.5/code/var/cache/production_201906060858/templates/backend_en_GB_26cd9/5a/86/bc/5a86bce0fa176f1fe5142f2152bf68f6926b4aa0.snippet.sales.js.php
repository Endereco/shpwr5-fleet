<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:19
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/sales.js" */ ?>
<?php /*%%SmartyHeaderCode:11261404835f6ba9cbc601e7-45063012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a86bce0fa176f1fe5142f2152bf68f6926b4aa0' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/sales.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11261404835f6ba9cbc601e7-45063012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9cbc63187_09748977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9cbc63187_09748977')) {function content_5f6ba9cbc63187_09748977($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.condition_list.field.Sales', {

    extend: 'Ext.form.FieldContainer',
    layout: { type: 'hbox', align: 'stretch' },
    mixins: [ 'Ext.form.field.Base' ],
    height: 30,
    value: undefined,

    initComponent: function() {
        var me = this;
        me.items = me.createItems();
        me.callParent(arguments);
    },

    createItems: function() {
        var me = this;
        return [
            me.createMinSales()
        ];
    },

    createMinSales: function() {
        var me = this;

        me.minSales = Ext.create('Ext.form.field.Number', {
            labelWidth: 150,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'minimum_sales','default'=>'Minimum sales','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'minimum_sales','default'=>'Minimum sales','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Minimum sales<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'minimum_sales','default'=>'Minimum sales','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            allowBlank: false,
            minValue: 1,
            value: null,
            padding: '0 0 0 10',
            flex: 1
        });

        return me.minSales;
    },

    getValue: function() {
        return this.value;
    },

    setValue: function(value) {
        var me = this;

        me.value = value;

        if (!Ext.isObject(value)) {
            me.minSales.setValue(1);
            return;
        }

        if (value.hasOwnProperty('minSales')) {
            me.minSales.setValue(value.minSales);
        }
    },

    getSubmitData: function() {
        var value = {};

        value[this.name] = {
            minSales: this.minSales.getValue()
        };
        return value;
    }
});
//<?php }} ?>