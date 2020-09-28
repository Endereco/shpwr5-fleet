<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:19
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/customer/view/customer_stream/condition_field.js" */ ?>
<?php /*%%SmartyHeaderCode:6153058735f6ba9cbd6ae61-25664557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57a20f82d0e7d388ae4ae3add8ebbdc23c979d41' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/customer/view/customer_stream/condition_field.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6153058735f6ba9cbd6ae61-25664557',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9cbd6d226_53826389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9cbd6d226_53826389')) {function content_5f6ba9cbd6d226_53826389($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage CustomerStream
 * @version    $Id$
 * @author shopware AG
 */

// 
// 
Ext.define('Shopware.apps.Customer.view.customer_stream.ConditionField', {
    extend: 'Ext.form.FieldContainer',
    cls: 'customer-stream-condition-field',
    layout: { type: 'vbox', align: 'stretch' },
    mixins: {
        formField: 'Ext.form.field.Base'
    },

    getValue: function() {
        var me = this,
            values = { };

        Ext.each(me.items.items, function(item) {
            if (Ext.isFunction(item.getValue)) {
                values[item.name] = item.getValue();
            }
        });
        return values;
    },

    setValue: function(values) {
        var me = this;

        Ext.each(me.items.items, function(field) {
            if (values.hasOwnProperty(field.name)) {
                field.setValue(values[field.name]);
            }
        });
    },

    getSubmitData: function() {
        var value = { };
        value[this.name] = this.getValue();
        return value;
    }
});
// 
<?php }} ?>